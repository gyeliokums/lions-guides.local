##__DROP_START
-- drop database if exists `tourism`;
drop table if exists `##__DB_PREFIX_administrators`;
drop table if exists `##__DB_PREFIX_cityphotogallery`;
drop table if exists `##__DB_PREFIX_logotypes`;
drop table if exists `##__DB_PREFIX_article`;
drop table if exists `##__DB_PREFIX_modelslinks`;
drop table if exists `##__DB_PREFIX_lion`;
drop table if exists `##__DB_PREFIX_city`;
drop table if exists `##__DB_PREFIX_country`;
drop table if exists `##__DB_PREFIX_stateunion`;
drop table if exists `##__DB_PREFIX_lionimagepreview`;
drop table if exists `##__DB_PREFIX_guide`;
drop table if exists `##__DB_PREFIX_kitchen`;
drop table if exists `##__DB_PREFIX_news`;
##__DROP_END
##__MAIN_START
-- create database if not exists `tourism`;
create table if not exists `##__DB_PREFIX_stateunion` (
	`id` int(10) unsigned not null auto_increment,
	`inner_name` varchar(128) not null,
	`name` varchar(128) not null,
	primary key (`id`),
	unique key (`inner_name`)
) engine=InnoDB charset=UTF8;
-- end of stateunion
##__MAIN_END
##__MAIN_START
create table if not exists `##__DB_PREFIX_country` (
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
	foreign key (`parent_id`) references `##__DB_PREFIX_stateunion` (`id`)
		on update no action on delete cascade
) engine=InnoDB charset=UTF8;
-- end of country
##__MAIN_END
##__MAIN_START
create table if not exists `##__DB_PREFIX_city` (
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
-- end of city
##__MAIN_END
##__MAIN_START
create table if not exists `##__DB_PREFIX_lion` (
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
	foreign key (`parent_id`) references `##__DB_PREFIX_city` (`id`)
		on update no action on delete cascade
) engine=InnoDB charset=UTF8;
-- end of lion
##__MAIN_END
##__MAIN_START
create table if not exists `##__DB_PREFIX_logotypes` (
	`model` varchar(64) not null,
	`id` int(10) unsigned not null,
	`image` varchar(255) not null,
	unique key (`model`, `id`)
) engine=InnoDB charset=UTF8;
-- end of logotypes
##__MAIN_END
##__MAIN_START
create table if not exists `##__DB_PREFIX_article` (
  `id` int(10) unsigned not null auto_increment,
  `parent_id` int(10) unsigned not null,
  `inner_name` varchar(64) not null,
  `title` varchar(128),
  `keywords` varchar(255),
  `meta_description` text,
  `name` varchar(128) not null,
	`short_description` varchar(60),
  `description` text,
  primary key (`id`),
  unique key (`inner_name`),
  foreign key (`parent_id`) references `##__DB_PREFIX_country` (`id`)
    on update no action on delete cascade
) engine=InnoDB charset=UTF8;
##__MAIN_END
##__MAIN_START
-- end of article
create table if not exists `##__DB_PREFIX_cityphotogallery` (
	`id` int(10) unsigned not null auto_increment,
	`parent_id` int(10) unsigned not null,
	`name` varchar(64) not null,
	`position` int(10) unsigned not null,
	primary key (`id`),
	foreign key (`parent_id`) references `##__DB_PREFIX_city` (`id`)
		on update no action on delete cascade
) engine=InnoDB charset=UTF8;
##__MAIN_END
##__MAIN_START
-- end of cityphotogallery
create table if not exists `##__DB_PREFIX_administrators` (
	`id` int(10) unsigned not null auto_increment,
	`email` varchar(64) not null,
	`password` varchar(64) not null,
	`full_name` varchar(128) not null,
	`role` varchar(16) not null default 'moderator',
	`last_login` timestamp on update current_timestamp,
	primary key (`id`),
	unique key (`email`)
) engine=InnoDB charset=UTF8;
##__MAIN_END
##__MAIN_START
create table if not exists `##__DB_PREFIX_modelslinks` (
	`inner_name` varchar(64) not null,
	`model` varchar(64) not null,
	`link_id` int(10) unsigned not null,
	unique key (`inner_name`),
	unique key (`model`, `link_id`)
) engine=InnoDB charset=UTF8;
-- end of model_links
##__MAIN_END
##__MAIN_START
create table if not exists `##__DB_PREFIX_guide` (
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
	`short_description` varchar(255),
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
	`create_time` timestamp default now(),
	`short_description` varchar(60),
	`description` text,
	primary key (`id`),
	unique key (`inner_name`),
	foreign key (`parent_id`) references `##__DB_PREFIX_country` (`id`)
		on update no action on delete cascade
) engine=InnoDB charset=UTF8;
##__MAIN_END
##__MAIN_START
create table `##__DB_PREFIX_lionimagepreview` (
	`id` int(10) unsigned not null auto_increment,
	`parent_id` int(10) unsigned not null,
	`image_name` varchar(64) not null,
	primary key (`id`),
	foreign key (`parent_id`) references `##__DB_PREFIX_lion` (`id`)
		on update no action on delete cascade
) engine=InnoDB charset=UTF8;
##__MAIN_END
##__MAIN_START
create table if not exists `##__DB_PREFIX__souvenir` (
	`id` int(10) unsigned not null auto_increment,
	`parent_id` int(10) unsigned not null,
	`inner_name` varchar(64) not null,
	`title` varchar(128),
	`keywords` varchar(255),
	`meta_description` text,
	`name` varchar(128) not null,
	`short_description` varchar(60),
	`description` text,
	primary key (`id`),
	unique key (`inner_name`),
	foreign key (`parent_id`) references `##__DB_PREFIX_country` (`id`)
		on update no action on delete cascade
) engine=InnoDB charset=UTF8;
##__MAIN_END
##__MAIN_START
create table if not exists `##__DB_PREFIX_shopping` (
	`id` int(10) unsigned not null auto_increment,
	`parent_id` int(10) unsigned not null,
	`inner_name` varchar(64) not null,
	`title` varchar(128),
	`keywords` varchar(255),
	`meta_description` text,
	`name` varchar(128) not null,
	`short_description` varchar(60),
	`description` text,
	primary key (`id`),
	unique key (`inner_name`),
	foreign key (`parent_id`) references `##__DB_PREFIX_country` (`id`)
		on update no action on delete cascade
) engine=InnoDB charset=UTF8;
##__MAIN_END
##__MAIN_START
create table if not exists `##__DB_PREFIX_banner` (
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
	foreign key (`parent_id`) references `##__DB_PREFIX_country` (`id`)
) engine=InnoDB charset=UTF8;
##__MAIN_END
##__MAIN_START
insert into `##__DB_PREFIX_stateunion` (`inner_name`, `name`) values ('Russia', 'Россия');
insert into `##__DB_PREFIX_stateunion` (`inner_name`, `name`) values ('Europe', 'Европа');
insert into `##__DB_PREFIX_stateunion` (`inner_name`, `name`) values ('Africa', 'Африка');
insert into `##__DB_PREFIX_stateunion` (`inner_name`, `name`) values ('Asia', 'Азия');
insert into `##__DB_PREFIX_stateunion` (`inner_name`, `name`) values ('America', 'Америка');
insert into `##__DB_PREFIX_modelslinks` (`inner_name`, `model`, `link_id`) values ('Russia', 'stateunion', 1);
insert into `##__DB_PREFIX_modelslinks` (`inner_name`, `model`, `link_id`) values ('Europe', 'stateunion', 2);
insert into `##__DB_PREFIX_modelslinks` (`inner_name`, `model`, `link_id`) values ('Africa', 'stateunion', 3);
insert into `##__DB_PREFIX_modelslinks` (`inner_name`, `model`, `link_id`) values ('Asia', 'stateunion', 4);
insert into `##__DB_PREFIX_modelslinks` (`inner_name`, `model`, `link_id`) values ('America', 'stateunion', 5);
insert into `##__DB_PREFIX_administrators` (`email`, `password`, `full_name`, `role`) values ('geo@brandcraft.ru', '57e83775877f1ab7d6fe73347e30775129d73c0d', 'George A. Yeliokums', 'administrator');
insert into `##__DB_PREFIX_administrators` (`email`, `password`, `full_name`, `role`) values ('ntz07@mail.ru', '18aef96c10bc6e74e3618dfb2ad71ad2632ead2e', 'Александр Никульшин ', 'administrator');
##__MAIN_END
