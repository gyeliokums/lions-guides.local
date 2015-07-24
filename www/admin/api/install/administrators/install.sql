##__START_INSTALL
create table if not exists `##__DB_PREFIX_##__TABLE_NAME` (
	`id` int(10) unsigned not null auto_increment,
	`email` varchar(64) not null,
	`password` varchar(64) not null,
	`full_name` varchar(128) not null,
	`role` varchar(16) not null default 'moderator',
	`last_login` timestamp on update current_timestamp,
	primary key (`id`),
	unique key (`email`)
) engine=InnoDB charset=UTF8;
##__END_INSTALL
##__START_INSERT
insert into `##__DB_PREFIX_##__TABLE_NAME` (`email`, `password`, `full_name`, `role`) values ('geo@brandcraft.ru', '57e83775877f1ab7d6fe73347e30775129d73c0d', 'George A. Yeliokums', 'administrator');
insert into `##__DB_PREFIX_##__TABLE_NAME` (`email`, `password`, `full_name`, `role`) values ('ntz07@mail.ru', '18aef96c10bc6e74e3618dfb2ad71ad2632ead2e', 'Александр Никульшин ', 'administrator');
##__END_INSERT