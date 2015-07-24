##__START_INSTALL
create table if not exists `##__DB_PREFIX_##__TABLE_NAME` (
	`id` int(10) unsigned not null auto_increment,
	`parent_id` int(10) unsigned not null,
	`company_name` varchar(255),
	`contact_fio` varchar(255),
	`contact_phone` varchar(128),
	`contact_email` varchar(255),
	`expiration_date` timestamp,
	`alt_text` varchar(25),
	`href` varchar(255),
	`image` varchar(255),
	`show_count` int(10),
	`click_count` int(10),
	primary key (`id`),
	key (`parent_id`)
) engine=InnoDB charset=UTF8;
##__END_INSTALL
##__START_FOREIGN
alter table `##__DB_PREFIX_##__TABLE_NAME`
		add constraint `##__DB_PREFIX_##__TABLE_NAME_ibfk1` foreign key (`parent_id`) references `##__DB_PREFIX_country` (`id`) on delete cascade on update no action;
##__END_FOREIGN

