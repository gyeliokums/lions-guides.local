-- alter table `##__DB_PREFIX_stateunion` add constraint unique key (`name`);
-- alter table `##__DB_PREFIX_country` add constraint unique key (`name`);
-- alter table `##__DB_PREFIX_city` add constraint unique key (`name`);
-- alter table `##__DB_PREFIX_lion` add constraint unique key (`name`);
-- alter table `##__DB_PREFIX_article` add constraint unique key (`name`);
##__MAIN_START
create table if not exists `##__DB_PREFIX_guide` (
	`id` int(10) unsigned not null auto_increment,
	`parent_id` int(10) unsigned not null,
	`inner_name` varchar(64) not null,
	`title` varchar(128),
	`keywords` varchar(255),
	`meta_description` text,
	`name` varchar(128) not null,
	`description` text,
	primary key (`id`),
	unique key (`inner_name`),
	foreign key (`parent_id`) references `##__DB_PREFIX_country` (`id`)
		on update no action on delete cascade
) engine=InnoDB charset=UTF8;
##__MAIN_END
##__MAIN_START
create table if not exists `##__DB_PREFIX_kitchen` (
	`id` int(10) unsigned not null auto_increment,
	`parent_id` int(10) unsigned not null,
	`inner_name` varchar(64) not null,
	`title` varchar(128),
	`keywords` varchar(255),
	`meta_description` text,
	`name` varchar(128) not null,
	`description` text,
	primary key (`id`),
	unique key (`inner_name`),
	foreign key (`parent_id`) references `##__DB_PREFIX_country` (`id`)
		on update no action on delete cascade
) engine=InnoDB charset=UTF8;
##__MAIN_END
##__MAIN_START
create table if not exists `##__DB_PREFIX_news` (
	`id` int(10) unsigned not null auto_increment,
	`parent_id` int(10) unsigned not null,
	`inner_name` varchar(64) not null,
	`title` varchar(128),
	`keywords` varchar(255),
	`meta_description` text,
	`name` varchar(128) not null,
	`description` text,
	primary key (`id`),
	unique key (`inner_name`),
	foreign key (`parent_id`) references `##__DB_PREFIX_country` (`id`)
		on update no action on delete cascade
) engine=InnoDB charset=UTF8;
##__MAIN_END
##__MAIN_START
alter table `##__DB_PREFIX_lion` add column `short_description` varchar(255);
##__MAIN_END