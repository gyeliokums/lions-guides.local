##__START_INSTALL
create table if not exists `##__DB_PREFIX_##__TABLE_NAME` (
	`id` int(10) unsigned not null auto_increment,
	`inner_name` varchar(128) not null,
	`name` varchar(128) not null,
	primary key (`id`),
	unique key (`inner_name`)
) engine=InnoDB charset=UTF8;
##__END_INSTALL