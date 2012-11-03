CREATE TABLE `#__cloudinary_images` (
  `cloudinary_image_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `public_id` varchar(255) NOT NULL DEFAULT '',
  `table` varchar(50) DEFAULT NULL,
  `row` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  PRIMARY KEY (`cloudinary_image_id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

INSERT INTO `jos_components` (`id`, `name`, `link`, `menuid`, `parent`, `admin_menu_link`, `admin_menu_alt`, `option`, `ordering`, `admin_menu_img`, `iscore`, `params`, `enabled`)
VALUES
	(33, 'Cloudinary', 'option=com_cloudinary', 0, 0, 'option=com_cloudinary&view=images', 'Cloudinary', 'com_cloudinary', 0, '', 0, 'cloud_name=\napi_key=\napi_secret=', 1);