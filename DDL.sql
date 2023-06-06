create table department (
	 dept_name		varchar(20),
	 building		varchar(15),
	 budget		        numeric(12,2) check (budget > 0),
	 primary key (dept_name)
	);

create table books (
book_id   varchar(8),
name      varchar(100),
author    varchar(50),
version   varchar(10),
dept_name        varchar(20),
primary key (book_id),
foreign key (dept_name) references department (dept_name)
);

create table roles(
	role_id      varchar(8),
	name         varchar(50),
	primary key (role_id)
);

create table users(
	user_id      varchar(8),
	name         varchar(50),
	password     varchar(1000),
	role_id      varchar(4),
	username     varchar(50),
	primary key (user_id),
	foreign key (role_id ) references roles (role_id)
);

create table instructor (
	 instructor_id		varchar(8),
	 dept_name		varchar(20),
	 user_id      varchar(8),
	name     varchar(20),
	 salary			numeric(8,2) check (salary > 29000),
	 primary key (instructor_id),
	 foreign key (user_id) references users (user_id),
	 foreign key (dept_name) references department (dept_name)
		on delete set null
);

create table course (
	 course_id		varchar(8),
	 title			varchar(50),
	 dept_name		varchar(20),
	 credits		numeric(2,0) check (credits > 0),
 	 course_type           numeric(1) check (course_type in (1, 2)),
	 book_id        varchar(5),
	 instructor_id		varchar(5),
	 primary key (course_id),
	 foreign key (book_id) references books (book_id)
	 on delete set null,
	 foreign key (instructor_id) references instructor  (instructor_id)
	 on delete set null,
	 foreign key (dept_name) references department (dept_name)
		on delete set null
);


create table lecture (
	lecture_id varchar(8),
	name varchar(100),
	location varchar(50),
	course_id		varchar(8),
	date Date,
	 primary key (lecture_id),
	 foreign key (course_id) references
	 course (course_id)
		on delete cascade
	);

create table student(
	 std_id			    varchar(8),
	 first_name			varchar(20) not null,
	 second_name		varchar(20) not null,
	 third_name			varchar(20) not null,
	 last_name			varchar(20) not null,
	 dept_name			varchar(20),
	 tot_cred			numeric(3,0) check (tot_cred >= 0),
	 location           varchar(50),
	 primary key (std_id),
	 foreign key (dept_name) references department (dept_name)
		on delete set null
	);

create table std_course (
	 std_id				varchar(8),
	 course_id		varchar(8),
	 primary key (std_id, course_id),
	 foreign key (std_id) references student (std_id)
		on delete cascade,
	 foreign key (course_id) references course (course_id)
		on delete cascade
);

create table attendance (
	 std_id		     varchar(8),
	 lecture_id		 varchar(8),
	 isAttend		 boolean,
	 date	         Date,
	 primary key (std_id, lecture_id),
	 foreign key (std_id) references student (std_id)
		on delete cascade,
	 foreign key (lecture_id) references lecture (lecture_id)
		on delete cascade
);


create table std_phone (
  	  std_id  varchar(8),
	  phone_num  varchar(14),
	  primary key (std_id,phone_num),
	  foreign key (std_id) references student (std_id)
);

create table user_phone (
	  user_id  varchar(8),
	  phone_num  varchar(14),
	  primary key (user_id,phone_num),
	  foreign key (user_id) references users (user_id)
)
