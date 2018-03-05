TRUNCATE TABLE `oc_country`;

INSERT INTO `oc_country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES ('44', '中国', 'CN', 'CHN', '', '0', '1');

TRUNCATE TABLE `oc_geo_zone`;

INSERT INTO `oc_geo_zone` (`geo_zone_id`, `name`, `description`, `date_added`, `date_modified`) VALUES ('3', '西部地区', '西部地区', '2009-01-06 23:26:25', '2016-11-22 12:09:27');
INSERT INTO `oc_geo_zone` (`geo_zone_id`, `name`, `description`, `date_added`, `date_modified`) VALUES ('4', '全国', '全国', '2009-06-23 01:14:53', '2016-11-22 12:07:38');

TRUNCATE TABLE `oc_order_status`;

INSERT INTO `oc_order_status` (`order_status_id`, `language_id`, `name`) VALUES ('2', '1', 'Processing');
INSERT INTO `oc_order_status` (`order_status_id`, `language_id`, `name`) VALUES ('3', '1', 'Shipped');
INSERT INTO `oc_order_status` (`order_status_id`, `language_id`, `name`) VALUES ('7', '1', 'Canceled');
INSERT INTO `oc_order_status` (`order_status_id`, `language_id`, `name`) VALUES ('5', '1', 'Complete');
INSERT INTO `oc_order_status` (`order_status_id`, `language_id`, `name`) VALUES ('8', '1', 'Denied');
INSERT INTO `oc_order_status` (`order_status_id`, `language_id`, `name`) VALUES ('9', '1', 'Canceled Reversal');
INSERT INTO `oc_order_status` (`order_status_id`, `language_id`, `name`) VALUES ('10', '1', 'Failed');
INSERT INTO `oc_order_status` (`order_status_id`, `language_id`, `name`) VALUES ('11', '1', 'Refunded');
INSERT INTO `oc_order_status` (`order_status_id`, `language_id`, `name`) VALUES ('12', '1', 'Reversed');
INSERT INTO `oc_order_status` (`order_status_id`, `language_id`, `name`) VALUES ('13', '1', 'Chargeback');
INSERT INTO `oc_order_status` (`order_status_id`, `language_id`, `name`) VALUES ('1', '1', 'Pending');
INSERT INTO `oc_order_status` (`order_status_id`, `language_id`, `name`) VALUES ('16', '1', 'Voided');
INSERT INTO `oc_order_status` (`order_status_id`, `language_id`, `name`) VALUES ('15', '1', 'Processed');
INSERT INTO `oc_order_status` (`order_status_id`, `language_id`, `name`) VALUES ('14', '1', 'Expired');
INSERT INTO `oc_order_status` (`order_status_id`, `language_id`, `name`) VALUES ('2', '2', '处理中');
INSERT INTO `oc_order_status` (`order_status_id`, `language_id`, `name`) VALUES ('3', '2', '已发货');
INSERT INTO `oc_order_status` (`order_status_id`, `language_id`, `name`) VALUES ('7', '2', '已取消');
INSERT INTO `oc_order_status` (`order_status_id`, `language_id`, `name`) VALUES ('5', '2', '已完成');
INSERT INTO `oc_order_status` (`order_status_id`, `language_id`, `name`) VALUES ('8', '2', '已拒绝');
INSERT INTO `oc_order_status` (`order_status_id`, `language_id`, `name`) VALUES ('9', '2', '取消撤回');
INSERT INTO `oc_order_status` (`order_status_id`, `language_id`, `name`) VALUES ('10', '2', '失败');
INSERT INTO `oc_order_status` (`order_status_id`, `language_id`, `name`) VALUES ('11', '2', '已退款');
INSERT INTO `oc_order_status` (`order_status_id`, `language_id`, `name`) VALUES ('12', '2', '已撤消');
INSERT INTO `oc_order_status` (`order_status_id`, `language_id`, `name`) VALUES ('13', '2', '已支付');
INSERT INTO `oc_order_status` (`order_status_id`, `language_id`, `name`) VALUES ('1', '2', '待处理');
INSERT INTO `oc_order_status` (`order_status_id`, `language_id`, `name`) VALUES ('16', '2', '已失效');
INSERT INTO `oc_order_status` (`order_status_id`, `language_id`, `name`) VALUES ('15', '2', '已处理');
INSERT INTO `oc_order_status` (`order_status_id`, `language_id`, `name`) VALUES ('14', '2', '已过期');

TRUNCATE TABLE `oc_zone`;

INSERT INTO `oc_zone` (`zone_id`, `country_id`, `name`, `code`, `status`) VALUES ('684', '44', '安徽省', 'AN', '1');
INSERT INTO `oc_zone` (`zone_id`, `country_id`, `name`, `code`, `status`) VALUES ('685', '44', '北京市', 'BE', '1');
INSERT INTO `oc_zone` (`zone_id`, `country_id`, `name`, `code`, `status`) VALUES ('686', '44', '重庆市', 'CH', '1');
INSERT INTO `oc_zone` (`zone_id`, `country_id`, `name`, `code`, `status`) VALUES ('687', '44', '福建省', 'FU', '1');
INSERT INTO `oc_zone` (`zone_id`, `country_id`, `name`, `code`, `status`) VALUES ('688', '44', '甘肃省', 'GA', '1');
INSERT INTO `oc_zone` (`zone_id`, `country_id`, `name`, `code`, `status`) VALUES ('689', '44', '广东省', 'GU', '1');
INSERT INTO `oc_zone` (`zone_id`, `country_id`, `name`, `code`, `status`) VALUES ('690', '44', '广西壮族自治区', 'GX', '1');
INSERT INTO `oc_zone` (`zone_id`, `country_id`, `name`, `code`, `status`) VALUES ('691', '44', '贵州省', 'GZ', '1');
INSERT INTO `oc_zone` (`zone_id`, `country_id`, `name`, `code`, `status`) VALUES ('692', '44', '海南省', 'HA', '1');
INSERT INTO `oc_zone` (`zone_id`, `country_id`, `name`, `code`, `status`) VALUES ('693', '44', '河北省', 'HB', '1');
INSERT INTO `oc_zone` (`zone_id`, `country_id`, `name`, `code`, `status`) VALUES ('694', '44', '黑龙江省', 'HL', '1');
INSERT INTO `oc_zone` (`zone_id`, `country_id`, `name`, `code`, `status`) VALUES ('695', '44', '河南省', 'HE', '1');
INSERT INTO `oc_zone` (`zone_id`, `country_id`, `name`, `code`, `status`) VALUES ('696', '44', '香港特别行政区', 'HK', '1');
INSERT INTO `oc_zone` (`zone_id`, `country_id`, `name`, `code`, `status`) VALUES ('697', '44', '湖北省', 'HU', '1');
INSERT INTO `oc_zone` (`zone_id`, `country_id`, `name`, `code`, `status`) VALUES ('698', '44', '湖南省', 'HN', '1');
INSERT INTO `oc_zone` (`zone_id`, `country_id`, `name`, `code`, `status`) VALUES ('699', '44', '内蒙古自治区', 'IM', '1');
INSERT INTO `oc_zone` (`zone_id`, `country_id`, `name`, `code`, `status`) VALUES ('700', '44', '江苏省', 'JI', '1');
INSERT INTO `oc_zone` (`zone_id`, `country_id`, `name`, `code`, `status`) VALUES ('701', '44', '江西省', 'JX', '1');
INSERT INTO `oc_zone` (`zone_id`, `country_id`, `name`, `code`, `status`) VALUES ('702', '44', '吉林省', 'JL', '1');
INSERT INTO `oc_zone` (`zone_id`, `country_id`, `name`, `code`, `status`) VALUES ('703', '44', '辽宁省', 'LI', '1');
INSERT INTO `oc_zone` (`zone_id`, `country_id`, `name`, `code`, `status`) VALUES ('704', '44', '澳门特别行政区', 'MA', '1');
INSERT INTO `oc_zone` (`zone_id`, `country_id`, `name`, `code`, `status`) VALUES ('705', '44', '宁夏回族自治区', 'NI', '1');
INSERT INTO `oc_zone` (`zone_id`, `country_id`, `name`, `code`, `status`) VALUES ('706', '44', '山西省', 'SH', '1');
INSERT INTO `oc_zone` (`zone_id`, `country_id`, `name`, `code`, `status`) VALUES ('707', '44', '山东省', 'SA', '1');
INSERT INTO `oc_zone` (`zone_id`, `country_id`, `name`, `code`, `status`) VALUES ('708', '44', '上海市', 'SG', '1');
INSERT INTO `oc_zone` (`zone_id`, `country_id`, `name`, `code`, `status`) VALUES ('709', '44', '陕西省', 'SX', '1');
INSERT INTO `oc_zone` (`zone_id`, `country_id`, `name`, `code`, `status`) VALUES ('710', '44', '四川省', 'SI', '1');
INSERT INTO `oc_zone` (`zone_id`, `country_id`, `name`, `code`, `status`) VALUES ('711', '44', '天津市', 'TI', '1');
INSERT INTO `oc_zone` (`zone_id`, `country_id`, `name`, `code`, `status`) VALUES ('712', '44', '新疆维吾尔自治区', 'XI', '1');
INSERT INTO `oc_zone` (`zone_id`, `country_id`, `name`, `code`, `status`) VALUES ('713', '44', '云南省', 'YU', '1');
INSERT INTO `oc_zone` (`zone_id`, `country_id`, `name`, `code`, `status`) VALUES ('714', '44', '浙江省', 'ZH', '1');
INSERT INTO `oc_zone` (`zone_id`, `country_id`, `name`, `code`, `status`) VALUES ('4237', '44', '台湾省', 'TW', '1');
INSERT INTO `oc_zone` (`zone_id`, `country_id`, `name`, `code`, `status`) VALUES ('4236', '44', '西藏自治区', 'XZ', '1');
INSERT INTO `oc_zone` (`zone_id`, `country_id`, `name`, `code`, `status`) VALUES ('4232', '44', '青海省', 'QH', '1');

TRUNCATE TABLE `oc_zone_to_geo_zone`;

INSERT INTO `oc_zone_to_geo_zone` (`zone_to_geo_zone_id`, `country_id`, `zone_id`, `geo_zone_id`, `date_added`, `date_modified`) VALUES ('110', '44', '0', '4', '2016-11-22 12:07:38', '0000-00-00 00:00:00');
INSERT INTO `oc_zone_to_geo_zone` (`zone_to_geo_zone_id`, `country_id`, `zone_id`, `geo_zone_id`, `date_added`, `date_modified`) VALUES ('217', '44', '688', '3', '2016-11-22 12:09:27', '0000-00-00 00:00:00');
INSERT INTO `oc_zone_to_geo_zone` (`zone_to_geo_zone_id`, `country_id`, `zone_id`, `geo_zone_id`, `date_added`, `date_modified`) VALUES ('216', '44', '705', '3', '2016-11-22 12:09:27', '0000-00-00 00:00:00');
INSERT INTO `oc_zone_to_geo_zone` (`zone_to_geo_zone_id`, `country_id`, `zone_id`, `geo_zone_id`, `date_added`, `date_modified`) VALUES ('215', '44', '710', '3', '2016-11-22 12:09:27', '0000-00-00 00:00:00');
INSERT INTO `oc_zone_to_geo_zone` (`zone_to_geo_zone_id`, `country_id`, `zone_id`, `geo_zone_id`, `date_added`, `date_modified`) VALUES ('214', '44', '712', '3', '2016-11-22 12:09:27', '0000-00-00 00:00:00');
INSERT INTO `oc_zone_to_geo_zone` (`zone_to_geo_zone_id`, `country_id`, `zone_id`, `geo_zone_id`, `date_added`, `date_modified`) VALUES ('213', '44', '4236', '3', '2016-11-22 12:09:27', '0000-00-00 00:00:00');
INSERT INTO `oc_zone_to_geo_zone` (`zone_to_geo_zone_id`, `country_id`, `zone_id`, `geo_zone_id`, `date_added`, `date_modified`) VALUES ('212', '44', '686', '3', '2016-11-22 12:09:27', '0000-00-00 00:00:00');
INSERT INTO `oc_zone_to_geo_zone` (`zone_to_geo_zone_id`, `country_id`, `zone_id`, `geo_zone_id`, `date_added`, `date_modified`) VALUES ('211', '44', '709', '3', '2016-11-22 12:09:27', '0000-00-00 00:00:00');
INSERT INTO `oc_zone_to_geo_zone` (`zone_to_geo_zone_id`, `country_id`, `zone_id`, `geo_zone_id`, `date_added`, `date_modified`) VALUES ('210', '44', '4232', '3', '2016-11-22 12:09:27', '0000-00-00 00:00:00');

