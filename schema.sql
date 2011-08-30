create database avail;
create user 'avail_user'@'localhost' identified by 'avail_pass';
grant all on avail.* to avail_user;
use avail;
create table avail (
    id int primary key auto_increment,
    timeslot varchar(16),
    avail enum('avail', 'unavail')
);
--
insert into avail (timeslot, avail) values ('sun-12-00', 'unavail');
insert into avail (timeslot, avail) values ('mon-12-00', 'unavail');
insert into avail (timeslot, avail) values ('tue-12-00', 'unavail');
insert into avail (timeslot, avail) values ('wed-12-00', 'unavail');
insert into avail (timeslot, avail) values ('thu-12-00', 'unavail');
insert into avail (timeslot, avail) values ('fri-12-00', 'unavail');
insert into avail (timeslot, avail) values ('sat-12-00', 'unavail');
--
insert into avail (timeslot, avail) values ('sun-12-30', 'unavail');
insert into avail (timeslot, avail) values ('mon-12-30', 'unavail');
insert into avail (timeslot, avail) values ('tue-12-30', 'unavail');
insert into avail (timeslot, avail) values ('wed-12-30', 'unavail');
insert into avail (timeslot, avail) values ('thu-12-30', 'unavail');
insert into avail (timeslot, avail) values ('fri-12-30', 'unavail');
insert into avail (timeslot, avail) values ('sat-12-30', 'unavail');
--
insert into avail (timeslot, avail) values ('sun-1-00', 'unavail');
insert into avail (timeslot, avail) values ('mon-1-00', 'unavail');
insert into avail (timeslot, avail) values ('tue-1-00', 'unavail');
insert into avail (timeslot, avail) values ('wed-1-00', 'unavail');
insert into avail (timeslot, avail) values ('thu-1-00', 'unavail');
insert into avail (timeslot, avail) values ('fri-1-00', 'unavail');
insert into avail (timeslot, avail) values ('sat-1-00', 'unavail');
--
insert into avail (timeslot, avail) values ('sun-1-30', 'unavail');
insert into avail (timeslot, avail) values ('mon-1-30', 'unavail');
insert into avail (timeslot, avail) values ('tue-1-30', 'unavail');
insert into avail (timeslot, avail) values ('wed-1-30', 'unavail');
insert into avail (timeslot, avail) values ('thu-1-30', 'unavail');
insert into avail (timeslot, avail) values ('fri-1-30', 'unavail');
insert into avail (timeslot, avail) values ('sat-1-30', 'unavail');
--
insert into avail (timeslot, avail) values ('sun-2-00', 'unavail');
insert into avail (timeslot, avail) values ('mon-2-00', 'unavail');
insert into avail (timeslot, avail) values ('tue-2-00', 'unavail');
insert into avail (timeslot, avail) values ('wed-2-00', 'unavail');
insert into avail (timeslot, avail) values ('thu-2-00', 'unavail');
insert into avail (timeslot, avail) values ('fri-2-00', 'unavail');
insert into avail (timeslot, avail) values ('sat-2-00', 'unavail');
--
insert into avail (timeslot, avail) values ('sun-2-30', 'unavail');
insert into avail (timeslot, avail) values ('mon-2-30', 'unavail');
insert into avail (timeslot, avail) values ('tue-2-30', 'unavail');
insert into avail (timeslot, avail) values ('wed-2-30', 'unavail');
insert into avail (timeslot, avail) values ('thu-2-30', 'unavail');
insert into avail (timeslot, avail) values ('fri-2-30', 'unavail');
insert into avail (timeslot, avail) values ('sat-2-30', 'unavail');
--
insert into avail (timeslot, avail) values ('sun-3-00', 'unavail');
insert into avail (timeslot, avail) values ('mon-3-00', 'unavail');
insert into avail (timeslot, avail) values ('tue-3-00', 'unavail');
insert into avail (timeslot, avail) values ('wed-3-00', 'unavail');
insert into avail (timeslot, avail) values ('thu-3-00', 'unavail');
insert into avail (timeslot, avail) values ('fri-3-00', 'unavail');
insert into avail (timeslot, avail) values ('sat-3-00', 'unavail');
--
insert into avail (timeslot, avail) values ('sun-3-30', 'unavail');
insert into avail (timeslot, avail) values ('mon-3-30', 'unavail');
insert into avail (timeslot, avail) values ('tue-3-30', 'unavail');
insert into avail (timeslot, avail) values ('wed-3-30', 'unavail');
insert into avail (timeslot, avail) values ('thu-3-30', 'unavail');
insert into avail (timeslot, avail) values ('fri-3-30', 'unavail');
insert into avail (timeslot, avail) values ('sat-3-30', 'unavail');
--
insert into avail (timeslot, avail) values ('sun-4-00', 'unavail');
insert into avail (timeslot, avail) values ('mon-4-00', 'unavail');
insert into avail (timeslot, avail) values ('tue-4-00', 'unavail');
insert into avail (timeslot, avail) values ('wed-4-00', 'unavail');
insert into avail (timeslot, avail) values ('thu-4-00', 'unavail');
insert into avail (timeslot, avail) values ('fri-4-00', 'unavail');
insert into avail (timeslot, avail) values ('sat-4-00', 'unavail');
--
insert into avail (timeslot, avail) values ('sun-4-30', 'unavail');
insert into avail (timeslot, avail) values ('mon-4-30', 'unavail');
insert into avail (timeslot, avail) values ('tue-4-30', 'unavail');
insert into avail (timeslot, avail) values ('wed-4-30', 'unavail');
insert into avail (timeslot, avail) values ('thu-4-30', 'unavail');
insert into avail (timeslot, avail) values ('fri-4-30', 'unavail');
insert into avail (timeslot, avail) values ('sat-4-30', 'unavail');
--
insert into avail (timeslot, avail) values ('sun-5-00', 'unavail');
insert into avail (timeslot, avail) values ('mon-5-00', 'unavail');
insert into avail (timeslot, avail) values ('tue-5-00', 'unavail');
insert into avail (timeslot, avail) values ('wed-5-00', 'unavail');
insert into avail (timeslot, avail) values ('thu-5-00', 'unavail');
insert into avail (timeslot, avail) values ('fri-5-00', 'unavail');
insert into avail (timeslot, avail) values ('sat-5-00', 'unavail');
--
insert into avail (timeslot, avail) values ('sun-5-30', 'unavail');
insert into avail (timeslot, avail) values ('mon-5-30', 'unavail');
insert into avail (timeslot, avail) values ('tue-5-30', 'unavail');
insert into avail (timeslot, avail) values ('wed-5-30', 'unavail');
insert into avail (timeslot, avail) values ('thu-5-30', 'unavail');
insert into avail (timeslot, avail) values ('fri-5-30', 'unavail');
insert into avail (timeslot, avail) values ('sat-5-30', 'unavail');
--
insert into avail (timeslot, avail) values ('sun-6-00', 'unavail');
insert into avail (timeslot, avail) values ('mon-6-00', 'unavail');
insert into avail (timeslot, avail) values ('tue-6-00', 'unavail');
insert into avail (timeslot, avail) values ('wed-6-00', 'unavail');
insert into avail (timeslot, avail) values ('thu-6-00', 'unavail');
insert into avail (timeslot, avail) values ('fri-6-00', 'unavail');
insert into avail (timeslot, avail) values ('sat-6-00', 'unavail');
--
insert into avail (timeslot, avail) values ('sun-6-30', 'unavail');
insert into avail (timeslot, avail) values ('mon-6-30', 'unavail');
insert into avail (timeslot, avail) values ('tue-6-30', 'unavail');
insert into avail (timeslot, avail) values ('wed-6-30', 'unavail');
insert into avail (timeslot, avail) values ('thu-6-30', 'unavail');
insert into avail (timeslot, avail) values ('fri-6-30', 'unavail');
insert into avail (timeslot, avail) values ('sat-6-30', 'unavail');
--
insert into avail (timeslot, avail) values ('sun-7-00', 'unavail');
insert into avail (timeslot, avail) values ('mon-7-00', 'unavail');
insert into avail (timeslot, avail) values ('tue-7-00', 'unavail');
insert into avail (timeslot, avail) values ('wed-7-00', 'unavail');
insert into avail (timeslot, avail) values ('thu-7-00', 'unavail');
insert into avail (timeslot, avail) values ('fri-7-00', 'unavail');
insert into avail (timeslot, avail) values ('sat-7-00', 'unavail');
--
insert into avail (timeslot, avail) values ('sun-7-30', 'unavail');
insert into avail (timeslot, avail) values ('mon-7-30', 'unavail');
insert into avail (timeslot, avail) values ('tue-7-30', 'unavail');
insert into avail (timeslot, avail) values ('wed-7-30', 'unavail');
insert into avail (timeslot, avail) values ('thu-7-30', 'unavail');
insert into avail (timeslot, avail) values ('fri-7-30', 'unavail');
insert into avail (timeslot, avail) values ('sat-7-30', 'unavail');
