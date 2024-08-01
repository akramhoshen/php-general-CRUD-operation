use test;

drop table if exists users;
create table users(
 id int(10) primary key auto_increment,
 username varchar(20) unique,
 password varchar(50),
 created_at datetime
);


insert into users(username,password,created_at)values('jaman','111111','2023-11-20 17:06:00');
insert into users(username,password,created_at)values('kamal','222222','2023-11-20 17:07:00');
insert into users(username,password,created_at)values('shohel','343334','2023-11-20 17:13:00');

update users set password='34234je' where id=1;

delete from users where id=3;