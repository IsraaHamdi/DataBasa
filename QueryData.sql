-- INSERT Query TO Roles
insert into roles (role_id,name) values ('1','مدير النظام');
insert into roles (role_id,name) values ('2','معيد');

-- INSERT Query TO Users for Login
insert into users (user_id,name,password,role_id,username) values ('1','اسراء أبو ريا','$2y$10$guHFJ/4zaYXKhUqXe2t76.0azJ9pBG90G6qksVpoa2qfZ2D3chlyS','1','israa@gmail.com');


-- INSERT Query TO Department
insert into department (dept_name, building , budget) values ('هندسة حاسوب','مبني الهندسة','1000');
insert into department (dept_name, building , budget) values ('هندسة كهرباء','مبني الهندسة','1000');
insert into department (dept_name, building , budget) values ('هندسة مدني','مبني الهندسة','1000');

-- INSERT Query TO Book
insert into books  (book_id,name,author,version,dept_name) values ('1' , 'نظم تشغيل' , 'Ahmed' , '5','هندسة حاسوب');
insert into books  (book_id,name,author,version,dept_name) values ('2' , 'قواعد بيانات' , 'Ahmed' , '5','هندسة حاسوب');
insert into books  (book_id,name,author,version,dept_name) values ('3' , 'نظم مغموسة' , 'Ahmed' , '5','هندسة حاسوب');






