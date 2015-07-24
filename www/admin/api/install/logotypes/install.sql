##__START_INSTALL
create table if not exists `##__DB_PREFIX_##__TABLE_NAME` (
	`model` varchar(64) not null,
	`id` int(10) unsigned not null,
	`image` varchar(255) not null,
	unique key (`model`, `id`)
) engine=InnoDB charset=UTF8;
##__END_INSTALL