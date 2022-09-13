create database adbm
go

use adbm
go

create table courses(

course_id int identity(1,1) primary key, /* Auto Increment */
course_name varchar(50)not null,
duration_month int not null,
course_fee decimal(20,2) not null)
go

create table students(

student_id int identity(1,1) primary key, /* Auto Increment */
student_name varchar(50)not null,
student_address text not null,
city varchar(50)not null,
age int not null,
course_id int foreign key references courses(course_id) )
go


create table subjects(

subject_id int identity(1,1) primary key, /* Auto Increment */
subject_name varchar(50)not null,
no_of_credits  int not null,
course_id int foreign key references courses(course_id) )
go


create table employee(

emp_id int identity(1,1) primary key, /* Auto Increment */
emp_name varchar(50)not null,
emp_city varchar(50)not null,
manager_id int)
go

insert into employee(emp_name,emp_city) values ('sam','colombo');
insert into employee(emp_name,emp_city,manager_id) values ('butler','galle',1);
insert into employee(emp_name,emp_city,manager_id) values ('sunil','kurunagala',1);

select * from employee;


insert into courses(course_name,duration_month,course_fee) values ('DSE',6,40000);
insert into courses(course_name,duration_month,course_fee) values ('DCSD',6,40000);
insert into courses(course_name,duration_month,course_fee) values ('HNDSE',12,2000000);

select * from courses go

insert into subjects(subject_name,no_of_credits,course_id) values ('ADBMS',10,3);
insert into subjects(subject_name,no_of_credits,course_id) values ('DBMS',10,1);
insert into subjects(subject_name,no_of_credits,course_id) values ('c++',10,2);

select * from subjects go

insert into students(student_name,student_address,city,age,course_id) values ('Madhushan','Anuradhapura','Anuradhapura',22,1);
insert into students(student_name,student_address,city,age,course_id) values ('Pubudu','Pilimathalawa','Kandy',21,1);
insert into students(student_name,student_address,city,age,course_id) values ('Nadeesha','Anuradhapura','Anuradhapura',22,2);
insert into students(student_name,student_address,city,age,course_id) values ('lazy','Mathale','Kandy',21,3);
insert into students(student_name,student_address,city,age) values ('chamara','Mathale','Kandy',21);

select * from students go

/* 

1) select details of all course which have a duration less gthan 8 months
2) select course name with course fees greater than 10000
3) select all from details of students who are from kandy
4) select student names of the student who are following course HNDSE
5) select all from subjects available frol DCSD
6) select students who are following course with course fee greater than 100000
7) select course name wich are followed by students from kandy ,mathale,kurunagala
8)select all the details of course which do not have registered students
9)select all the details of courses which do not have any subjectsn regestered 
10) select total number of credits available fro dcsd 
11) select total number of credits available for the course which is followed by george
12) Add new column to subject table as no_of_hours with its type as int
13) update data type of the column no_of_hours in subject table as varchar (25)
14) remove no_of_hourse from subject table
15) view all the table avaible in the database
16) view all the table start with s
17) list down all the columns avaible in student table 

joins questions

18) write a cross join to produce cartessin product of subject and courses table
19) select name of the manager available in employee table
20) select all the details of students and their courses name using joins
21) select all the details of courses with students following them display course details even there are no students registered with the courses 
22) select all the details of course details even there are no subjects registered for the course  use right outer join
*/

select * from courses where duration_month < 8 ;

select course_name from courses where course_fee > 100000;

select * from students where city like 'Kandy';

select student_name from students where course_id = (select course_id from courses where course_name = 'DSE') ;

select * from subjects where course_id = (select course_id from courses where course_name = 'DSE');

select * from students where course_id in (select course_id from courses where course_fee > 10000);

select course_name from courses where course_id in (select course_id from students where city in ('Anuradhapura','Kandy'));

select * from courses where course_id not in (select distinct course_id from students);

select * from courses where course_id not in (select distinct course_id from subjects);

select sum(no_of_credits) as total_credit from subjects where course_id in (select course_id from courses where course_name = 'DCSD');

select sum(no_of_credits) as total_credit from subjects where course_id in (select course_id from students where student_name = 'Pubudu' );

alter table subjects add no_of_hourse int ;

alter table subjects alter column no_of_hourse varchar(25);

alter table subjects drop column no_of_hourse;

exec sp_tables;

exec sp_tables 's%';

exec sp_columns students;



select subjects.*,courses.* from subjects,courses;/* 18 */
select subjects.subject_name,courses.course_name from subjects,courses; /* 18 */
select sub.subject_name,cou.course_name from subjects sub ,courses cou ; /* 18 */


select distinct emp1.emp_name from employee emp1,employee emp2 where emp1.emp_id = emp2.manager_id; /* 19 */

select students.*,courses.course_name from students,courses where students.course_id = courses.course_id ; /* 20 */

select students.*,courses.course_name from students inner join courses on courses.course_id = students.course_id; /* 20 */ 

select courses.*,students.student_name from courses left outer join students on courses.course_id = students.course_id; /* 21 */ 

select courses.*,subjects.subject_name from subjects right outer join courses on subjects.course_id = courses.course_id;







