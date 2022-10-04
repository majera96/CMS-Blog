#C:\xampp\mysql\bin\mysql -uroot --default_character_set=utf8 < C:\Users\Korisnik\Documents\GitHub\CMS-Blog\cleanblog.sql
drop database if exists cleanblog;
create database cleanblog default charset utf8mb4;
use cleanblog;

create table operator(
    id int not null primary key auto_increment,
    email varchar(50) not null,
    pass varchar(100) not null,
    task varchar(20) not null
);