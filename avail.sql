create database avail;
create user 'avail_user'@'localhost' identified by 'avail_pass';
grant all on avail.* to avail_user;
use avail;
create table avail (
    id int primary key auto_increment,
    timeslot varchar(16),
    avail enum('avail', 'unavail')
);
insert into avail (timeslot, avail) values ('sun-12-00', 'unavail');
insert into avail (timeslot, avail) values ('mon-12-00', 'unavail');
insert into avail (timeslot, avail) values ('tue-12-00', 'unavail');
insert into avail (timeslot, avail) values ('wed-12-00', 'unavail');
insert into avail (timeslot, avail) values ('thu-12-00', 'unavail');
insert into avail (timeslot, avail) values ('fri-12-00', 'unavail');
insert into avail (timeslot, avail) values ('sat-12-00', 'unavail');