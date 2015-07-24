##__START_FOREIGN
create table if not exists `##__DB_PREFIX_##__TABLE_NAME` (
	`id` int(10) unsigned not null auto_increment,
	`parent_id` int(10) unsigned not null,
	`inner_name` varchar(64) not null,
	`title` varchar(128),
	`keywords` varchar(255),
	`meta_description` text,
	`name` varchar(128) not null,
	`short_description` varchar(255),
	`description` text,
	primary key (`id`),
	unique key (`inner_name`),
	key (`parent_id`)
) engine=InnoDB charset=UTF8;
##__END_INSTALL
##__START_FOREIGN
alter table `##__DB_PREFIX_##__TABLE_NAME`
		add constraint `##__DB_PREFIX_##__TABLE_NAME_ibfk1` foreign key (`parent_id`) references `##__DB_PREFIX_city` (`id`) on delete cascade on update no action;
##__END_FOREIGN