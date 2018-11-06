
CREATE DATABASE cv_classification
USE cv_classification

select * from users

create table if not exists users
(		
	email varchar(255) not null primary key,
    name varchar(255) not null,
	role int default 1, #admin role =0 , user role =1, default =1
	created_at datetime null,
	updated_at datetime null
);
