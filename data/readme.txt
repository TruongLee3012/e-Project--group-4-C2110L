create table if not exists users (
	id int primary key auto_increment,
	fullname varchar(50),
	email varchar(150),
    password varchar(30),
	password varchar(32),
    address varchar(200),
    create_at datetime,
    update_at datetime
)

create table if not exists doctor{
    id int primary key auto_increment,
    fullname varchar(50) references users.fullname,
    address varchar(200) references users.address,
    specialized varchar(50),
    comment varchar(200),
    image varchar(200),
    create_at datetime,
    update_at datetime
}

create table if not exists service{
    id int primary key auto_increment,
    name varchar(150),
    image varchar(200),
    content varchar(200),
    price int,
    update_at datetime,
    create_at datetime
}

create table if not exists service_orders{
    id int primary key auto_increment,
    user_name varchar(150),
    user_id int references users.id,
    fullname varchar(50),
    birth datetime,
    email varchar(250),
    address varchar(200),
    service varchar(200),
    content varchar(400)
    create_at datetime,
    update_at datetime
}

create table if not exists blog{
    id int primary key auto_increment,
    name varchar(150),
    image varchar(200),
    content varchar(400),
    user_name varchar(150) references users.name,
    user_id int references users.id,
    view int,
    create_at datetime,
    update_at datetime
}

