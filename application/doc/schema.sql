-- drop database if exists cms; create database cms; use cms;

create table users(
  id integer not null primary key auto_increment,
  username varchar(255),
  password varchar(255)
);

alter table users add email varchar(255);

create table posts(
  id integer not null primary key auto_increment,
  title varchar(255),
  content mediumtext,
  created_at datetime
);
alter table posts add updated_at datetime;

create table pages(
  id integer not null primary key auto_increment,
  title varchar(255),
  content mediumtext,
  created_at datetime
);

create table sites(
  id integer not null primary key auto_increment,
  title varchar(255),
  description varchar(255)
);

alter table users add site_id integer;

create table comments(
  id integer not null primary key auto_increment,
  post_id varchar(255),
  comments mediumtext,
  created_at datetime,
  created_by integer
);

create table menus(
  id integer not null primary key auto_increment,
  name varchar(255)
);

alter table menus add url varchar(255);

create table uploads(
  id integer not null primary key auto_increment,
  url varchar(255),
  title varchar(255),
  alt_text varchar(255),
  description varchar(255)
);

create table post_views(
  id integer not null primary key auto_increment,
  post_id integer,
  ip_address varchar(255),
  created_at datetime
);

alter table menus add sort_order integer;

create table sub_menus(
  id integer not null primary key auto_increment,
  menu_id integer,
  name varchar(255),
  url varchar(255),
  sort_order integer
);

create table folders(
  id integer not null primary key auto_increment,
  name varchar(255),
  created_at datetime
);

alter table uploads add folder_id integer;
alter table posts add teaser mediumtext;
alter table posts add is_featured integer;

ALTER TABLE pages CHANGE content content mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
ALTER DATABASE u563318964_ccnshs CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci;


