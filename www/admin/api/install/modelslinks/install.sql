##__STATR_INSTALL
create table if not exists `##__DB_PREFIX_##__TABLE_NAME` (
	`inner_name` varchar(64) not null,
	`model` varchar(64) not null,
	`link_id` int(10) unsigned not null,
	unique key (`inner_name`),
	unique key (`model`, `link_id`)
) engine=InnoDB charset=UTF8;
##__END_INSTALL