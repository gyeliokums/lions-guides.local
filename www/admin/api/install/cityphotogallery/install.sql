##__START_INSTALL
create table if not exists `##__DB_PREFIX_##__TABLE_NAME` (
	`id` int(10) unsigned not null auto_increment,
	`parent_id` int(10) unsigned not null,
	`name` varchar(64) not null,
	`position` int(10) unsigned not null,
	primary key (`id`),
	foreign key (`parent_id`) references `##__DB_PREFIX_city` (`id`)
		on update no action on delete cascade
) engine=InnoDB charset=UTF8;
##__END_INSTALL
##__START_FOREIGN
alter table `##__DB_PREFIX_##__TABLE_NAME`
		add constraint `##__DB_PREFIX_##__TABLE_NAME_ibfk1` foreign key (`parent_id`) references `##__DB_PREFIX_city` (`id`) on delete cascade on update no action;
##__END_FOREIGN