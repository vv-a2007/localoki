<?php
/***************************************************************************
 *                                                                          *
 *   (c) 2004 Vladimir V. Kalynyak, Alexey V. Vinokurov, Ilya M. Shalnev    *
 *                                                                          *
 * This  is  commercial  software,  only  users  who have purchased a valid *
 * license  and  accept  to the terms of the  License Agreement can install *
 * and use this program.                                                    *
 *                                                                          *
 ****************************************************************************
 * PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   AGREEMENT  IN  THE *
 * "copyright.txt" FILE PROVIDED WITH THIS DISTRIBUTION PACKAGE.            *
 ****************************************************************************/

if (!defined('BOOTSTRAP')) { die('Access denied'); }

use Tygh\Storage;
use Tygh\Tools\Archivers\ArchiverException;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if ($mode == 'download_config') {
        fn_set_progress('set_scale', 10);
        fn_set_progress('title', __('mobile_app.preparing_config'));
        fn_set_progress('echo', __('mobile_app.preparing_config'));
        fn_set_progress('parts', 7);
        $settings = fn_mobile_app_get_mobile_app_settings();
        $images = fn_mobile_app_get_mobile_app_images();

        $options = 0;

        // Wrapped inside an if statement won't make any harm
        // phpcs:disable
        if (defined('JSON_PRETTY_PRINT')) {
            $options = JSON_PRETTY_PRINT;
        }

        if (defined('JSON_UNESCAPED_SLASHES')) {
            $options |= JSON_UNESCAPED_SLASHES;
        }
        // phpcs:enable

        // prepare settings, for save config first structure
        $new_schema = $settings['app_appearance']['colors'];
        foreach ($new_schema as $type => $variables) {
            foreach ($variables as $name => $values) {
                $settings['app_appearance']['colors'][$type][$name] = $values['value'];
            }
        }

        $config = json_encode(array('settings' => $settings, 'images' => $images), $options);
        $working_dir = fn_mobile_app_get_working_dir();

        $params = array(
            'contents'  => $config,
            'overwrite' => true,
        );

        /** @var \Tygh\Backend\Storage\File $storage */
        $storage = Storage::instance('custom_files');
        $storage->deleteDir($working_dir);
        $data = $storage->put(implode(DIRECTORY_SEPARATOR, array($working_dir, 'config.json')), $params);

        $images = fn_mobile_app_get_mobile_app_images();
        $schema = fn_get_schema('mobile_app', 'app_settings');

        foreach ($schema['images'] as $key => $image_types_schema) {

            if (!empty($image_types_schema['image_params']['skip_resize'])) {
                continue;
            }

            $name = $image_types_schema['image_params']['name'];
            $pair_data = fn_get_image_pairs(0, $image_types_schema['type'], 'M');

            if (empty($pair_data)) {
                // TODO: set error notification
                break;
            }

            if (isset($schema['image_sizes']['android'][$name])) {
                fn_set_progress('echo', __('mobile_app.preparing_android_images'));
                $image_sizes_schema = $schema['image_sizes']['android'][$name];

                fn_mobile_app_resize_android_images($image_types_schema, $image_sizes_schema, $pair_data);
            }

            if (isset($schema['image_sizes']['ios'][$name])) {
                $image_sizes_schema = $schema['image_sizes']['ios'][$name];

                if ($name === 'icon') {
                    fn_set_progress('echo', __('mobile_app.preparing_ios_icons'));
                    fn_mobile_app_resize_ios_icons($image_types_schema, $image_sizes_schema, $pair_data);
                } else {
                    fn_set_progress('echo', __('mobile_app.preparing_ios_images'));
                    fn_mobile_app_resize_ios_images($image_types_schema, $image_sizes_schema, $pair_data);
                }
            }
        }

        $archive_path = fn_mobile_app_get_archive_full_path();

        $working_dir = fn_mobile_app_get_working_dir();
        $files_to_archive = $storage->getAbsolutePath($working_dir);

        /** @var \Tygh\Tools\Archiver $archiver */
        $archiver = Tygh::$app['archiver'];

        try {
            fn_set_progress('echo', __('mobile_app.preparing_archive'));
            fn_rm($archive_path);
            $result = $archiver->compress($archive_path, array($files_to_archive));
        } catch (ArchiverException $e) {
            fn_set_notification('E', __('error'), $e->getMessage());
        }

        if (defined('AJAX_REQUEST') && !empty($result)) {
            Tygh::$app['ajax']->assign('force_redirection', fn_url('mobile_app.get_file'));
            exit;
        }

        return array(CONTROLLER_STATUS_REDIRECT, 'addons.update&addon=mobile_app');
    }

    return array(CONTROLLER_STATUS_OK);
}

if ($mode == 'get_file') {
    $archive_path = fn_mobile_app_get_archive_full_path();

    if (file_exists($archive_path)) {
        fn_get_file($archive_path, '', true);
    }
}
