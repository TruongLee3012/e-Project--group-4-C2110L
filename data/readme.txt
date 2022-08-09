create table if not exists users (
	id int primary key auto_increment,
	fullname varchar(50),
	email varchar(150),
    address varchar(200),
    phone int,
    password varchar(30),
    create_at datetime,
    update_at datetime
)

create table if not exists doctor(
    id int primary key auto_increment,
    user_id int references users(id),
    position varchar(50),
    fullname varchar(50),
    infomation varchar(200),
    qualification varchar(200),
    phone varchar(15),
    email varchar(50),
    image varchar(200),
    create_at datetime,
    update_at datetime
)

create table if not exists fee(
    id int primary key auto_increment,
    fullname varchar(150),
    number int,
    price int,
    total int,
    update_at datetime,
    create_at datetime
)

create table if not exists service_orders(
    id int primary key auto_increment,
    user_name varchar(150),
    user_id int references users(id),
    service_id int references service(id),
    fullname varchar(50),
    
    email varchar(250),
    phone int,
    service varchar(200),
    content varchar(400),
    create_at datetime,
    update_at datetime
)

create table if not exists blog(
    id int primary key auto_increment,
    name varchar(150),
    image varchar(200),
    content varchar(400),
    view int,
    create_at datetime,
    update_at datetime
)

create table if not exists customers (
    id int primary key auto_increment,
    fullname varchar(50),
    birthday datetime,
    phone int,
    email varchar(150),
    address varchar(200),
    service varchar(50),
    symptom varchar(400),
    create_at datetime,
    update_at datetime
)