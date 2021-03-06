-- demo data --
UPDATE ?:banners SET position=0 WHERE banner_id=6;
UPDATE ?:banners SET position=10 WHERE banner_id=8;
UPDATE ?:banners SET position=20 WHERE banner_id=9;
UPDATE ?:banners SET position=30 WHERE banner_id=16;
UPDATE ?:banners SET position=40 WHERE banner_id=18;

UPDATE ?:banner_descriptions SET banner='Welcome to Multi-Vendor demo marketplace', url='pages.view&page_id=24', description='' WHERE banner_id=6;
UPDATE ?:banner_descriptions SET banner='Acme Corporation: Join our loyalty program to get special prices', url='pages.view&page_id=25', description='' WHERE banner_id=8;
UPDATE ?:banner_descriptions SET banner='Stark Industries: buy two for the price of one', url='pages.view&page_id=26', description='' WHERE banner_id=9;
UPDATE ?:banner_descriptions SET banner='Become our vendor with no transaction fee', url='pages.view&page_id=27', description='' WHERE banner_id=16;
UPDATE ?:banner_descriptions SET banner='No transaction fee', url='companies.apply_for_vendor&plan_id=2', description='' WHERE banner_id=18;

UPDATE ?:images_links SET image_id=8270 WHERE object_type='promo' AND object_id IN (SELECT banner_image_id FROM ?:banner_images WHERE banner_id=6);
UPDATE ?:images_links SET image_id=8277 WHERE object_type='promo' AND object_id IN (SELECT banner_image_id FROM ?:banner_images WHERE banner_id=8);
UPDATE ?:images_links SET image_id=8278 WHERE object_type='promo' AND object_id IN (SELECT banner_image_id FROM ?:banner_images WHERE banner_id=9);
UPDATE ?:images_links SET image_id=8279 WHERE object_type='promo' AND object_id IN (SELECT banner_image_id FROM ?:banner_images WHERE banner_id=16);
UPDATE ?:images_links SET image_id=8290 WHERE object_type='promo' AND object_id IN (SELECT banner_image_id FROM ?:banner_images WHERE banner_id=18);