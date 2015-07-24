##__START_INSTALL
create table if not exists `##__DB_PREFIX_##__TABLE_NAME` (
	`id` int(10) unsigned not null auto_increment,
	`parent_id` int(10) unsigned not null,
	`inner_name` varchar(128) not null,
	`title` varchar(128),
	`keywords` varchar(255),
	`meta_description` text,
	`name` varchar(128) not null,
	`image` varchar(128),
	`lions` text,
	`guides` text,
	`description` text,
	primary key (`id`),
	unique key(`inner_name`),
	key (`parent_id`)
) engine=InnoDB charset=UTF8;
##__END_INSTALL
##__START_FOREIGN
alter table `##__DB_PREFIX_##__TABLE_NAME`
		add constraint `##__DB_PREFIX_##__TABLE_NAME_ibfk1` foreign key (`parent_id`) references `##__DB_PREFIX_stateunion` (`id`) on delete cascade on update no action;
##__END_FOREIGN