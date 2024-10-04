create database concessionaria;

use concessionaria;

create table users(

    id integer auto_increment primary key,
    name varchar(32),
    email varchar (128),
    phone varchar (16),
    password varchar (256)
);