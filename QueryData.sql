-- INSERT Query TO Roles
insert into roles (role_id,name) values ('1','مدير النظام');
insert into roles (role_id,name) values ('2','معيد');

-- INSERT Query TO Users for Login
insert into users (user_id,name,password,role_id,username) values ('1','israa' ,'$2y$10$guHFJ/4zaYXKhUqXe2t76.0azJ9pBG90G6qksVpoa2qfZ2D3chlyS','1','israa@gmail.com' );
insert into users (user_id,name,password,role_id,username) values ('2','anwar' ,'$2y$10$guHFJ/4zaYXKhUqXe2t76.0azJ9pBG90G6qksVpoa2qfZ2D3chlyS','1','anwar@gmail.com');
insert into users (user_id,name,password,role_id,username) values ('3','talaa' ,'$2y$10$guHFJ/4zaYXKhUqXe2t76.0azJ9pBG90G6qksVpoa2qfZ2D3chlyS','2','talaa@gmail.com');
insert into users (user_id,name,password,role_id,username) values ('4','alaa','$2y$10$guHFJ/4zaYXKhUqXe2t76.0azJ9pBG90G6qksVpoa2qfZ2D3chlyS','2','alaa@gmail.com');
insert into users (user_id,name,password,role_id,username) values ('5','isaam' ,'$2y$10$guHFJ/4zaYXKhUqXe2t76.0azJ9pBG90G6qksVpoa2qfZ2D3chlyS','2','issam@gmail.com');
insert into users (user_id,name,password,role_id,username) values ('6','mostafa' ,'$2y$10$guHFJ/4zaYXKhUqXe2t76.0azJ9pBG90G6qksVpoa2qfZ2D3chlyS','2','mostafa@gmail.com');


insert into user_phone (user_id,phone_num) values (1,56956565456);
insert into user_phone (user_id,phone_num) values (2,5695656564);
insert into user_phone (user_id,phone_num) values (3,569565654);
insert into user_phone (user_id,phone_num) values (4,56956565544);
insert into user_phone (user_id,phone_num) values (5,569565546);
insert into user_phone (user_id,phone_num) values (6,5695656554);

-- INSERT Query TO Department
insert into department (dept_name, building , budget) values ('هندسة حاسوب','مبني الهندسة','1000');
insert into department (dept_name, building , budget) values ('هندسة كهرباء','مبني الهندسة','1000');
insert into department (dept_name, building , budget) values ('هندسة مدني','مبني الهندسة','1000');

-- INSERT Query TO Book
insert into books  (book_id,name,author,version,dept_name) values ('1' , 'نظم تشغيل' , 'Ahmed' , '5','هندسة حاسوب');
insert into books  (book_id,name,author,version,dept_name) values ('2' , 'قواعد بيانات' , 'Ahmed' , '5','هندسة حاسوب');
insert into books  (book_id,name,author,version,dept_name) values ('3' , 'نظم مغموسة' , 'Ahmed' , '5','هندسة حاسوب');


-- INSERT Query TO Instructor
insert into instructor (instructor_id,name,salary,dept_name ) values (1, 'اسراء أبو ريا' , 300000, 'هندسة حاسوب');
insert into instructor (instructor_id,name,salary,dept_name) values (2, 'انوار' ,300000, 'هندسة حاسوب');
insert into instructor (instructor_id,name,salary,dept_name) values (3, 'الاء' , 30000, 'هندسة كهرباء');
insert into instructor (instructor_id,name,salary,dept_name) values (4, 'عصام' , 50000, 'هندسة كهرباء');
insert into instructor (instructor_id,name,salary,dept_name) values (5, 'تالا' , 60000,'هندسة كهرباء');
insert into instructor (instructor_id,name,salary,dept_name) values (6, 'مصطفى' , 400000,'هندسة حاسوب');

-- INSERT Query TO Course
insert into course (course_id,title,dept_name,credits,course_type,book_id,instructor_id) values (1,'electrical' , 'هندسة كهرباء',3, '1' , 1,3);
insert into course (course_id,title,dept_name,credits,course_type,book_id,instructor_id) values (2,'electrical' , 'هندسة كهرباء',3, '1' , 2,4);
insert into course (course_id,title,dept_name,credits,course_type,book_id,instructor_id) values (3,'electrical' , 'هندسة حاسوب',3, '1' , 3,5);

-- INSERT Query TO Lecture
insert into lecture (lecture_id,course_id, location,name) values (1,1,'مبني الهندسة','المحاضرة الاولى');
insert into lecture (lecture_id,course_id, location,name) values (2,1,'مبني الهندسة','المحاضرة التانية');
insert into lecture (lecture_id,course_id, location,name) values (3,1,'مبني الهندسة','المحاضرة الثالثة');
insert into lecture (lecture_id,course_id, location,name) values (4,2,'مبني الهندسة','المحاضرة الثالثة');
insert into lecture (lecture_id,course_id, location,name) values (5,2,'مبني الهندسة','المحاضرة الثالثة');
insert into lecture (lecture_id,course_id, location,name) values (6,2,'مبني الهندسة','المحاضرة الثالثة');


-- INSERT Query TO Student
insert into student (std_id,first_name,second_name,third_name,last_name,dept_name) values (1, 'israa' , 'hamdi','ibrahem', 'aburayya' , 'هندسة حاسوب');
insert into std_phone (std_id,phone_num) values (1,6346654645);
insert into student (std_id,first_name,second_name,third_name,last_name,dept_name) values (2, 'alaa' , 'hamdi','ibrahem', 'aburayya' , 'هندسة كهرباء');
insert into std_phone (std_id,phone_num) values (2,654644645);
insert into student (std_id,first_name,second_name,third_name,last_name,dept_name) values (3, 'isaam' , 'hamdi','ibrahem', 'aburayya' , 'هندسة حاسوب');
insert into std_phone (std_id,phone_num) values (3,654124645);
insert into student (std_id,first_name,second_name,third_name,last_name,dept_name) values (4, 'YASER' , 'hamdi','ibrahem', 'aburayya' , 'هندسة مدني');
insert into std_phone (std_id,phone_num) values (4,654784645);
insert into student (std_id,first_name,second_name,third_name,last_name,dept_name) values (5, 'basel' , 'hamdi','ibrahem', 'aburayya' , 'هندسة حاسوب');
insert into std_phone (std_id,phone_num) values (5,659654645);
insert into student (std_id,first_name,second_name,third_name,last_name,dept_name) values (6, 'najah' , 'hamdi','ibrahem', 'aburayya' , 'هندسة كهرباء');
insert into std_phone (std_id,phone_num) values (6,654644645);
insert into student (std_id,first_name,second_name,third_name,last_name,dept_name) values (7, '3laa' , 'hamdi','ibrahem', 'aburayya' , 'هندسة مدني');
insert into std_phone (std_id,phone_num) values (7,654784645);


--INSERT Query TO std_course
insert into std_course (std_id,course_id) values (1,1);
insert into std_course (std_id,course_id) values (1,2);
insert into std_course (std_id,course_id) values (2,1);
insert into std_course (std_id,course_id) values (2,2);
-- insert into std_course (std_id,course_id) values (2,3);
insert into std_course (std_id,course_id) values (3,2);
-- insert into std_course (std_id,course_id) values (3,3)
insert into std_course (std_id,course_id) values (4,1);
insert into std_course (std_id,course_id) values (4,2);
insert into std_course (std_id,course_id) values (5,1);
insert into std_course (std_id,course_id) values (5,2);
-- insert into std_course (std_id,course_id) values (5,3)
insert into std_course (std_id,course_id) values (6,1);
insert into std_course (std_id,course_id) values (7,2);


--INSERT Query TO attendance
insert into attendance (std_id,lecture_id,isAttend) values (1,1,true);
insert into attendance (std_id,lecture_id,isAttend) values (1,2,true);
insert into attendance (std_id,lecture_id,isAttend) values (1,3,true);
insert into attendance (std_id,lecture_id,isAttend) values (1,4,false);
insert into attendance (std_id,lecture_id,isAttend) values (1,5,false);
insert into attendance (std_id,lecture_id,isAttend) values (1,6,false);
insert into attendance (std_id,lecture_id,isAttend) values (2,1,true);
insert into attendance (std_id,lecture_id,isAttend) values (2,2,false);
insert into attendance (std_id,lecture_id,isAttend) values (2,3,false);
insert into attendance (std_id,lecture_id,isAttend) values (2,4,true);
insert into attendance (std_id,lecture_id,isAttend) values (2,5,true);
insert into attendance (std_id,lecture_id,isAttend) values (2,6,false);
insert into attendance (std_id,lecture_id,isAttend) values (3,4,true);
insert into attendance (std_id,lecture_id,isAttend) values (3,5,false);
insert into attendance (std_id,lecture_id,isAttend) values (3,6,false);
insert into attendance (std_id,lecture_id,isAttend) values (4,1,true);
insert into attendance (std_id,lecture_id,isAttend) values (4,2,true);
insert into attendance (std_id,lecture_id,isAttend) values (4,3,true);
insert into attendance (std_id,lecture_id,isAttend) values (4,4,true);
insert into attendance (std_id,lecture_id,isAttend) values (4,5,true);
insert into attendance (std_id,lecture_id,isAttend) values (4,6,true);
insert into attendance (std_id,lecture_id,isAttend) values (5,1,true);
insert into attendance (std_id,lecture_id,isAttend) values (5,2,true);
insert into attendance (std_id,lecture_id,isAttend) values (5,3,true);
insert into attendance (std_id,lecture_id,isAttend) values (5,4,false);
insert into attendance (std_id,lecture_id,isAttend) values (5,5,false);
insert into attendance (std_id,lecture_id,isAttend) values (5,6,false);
insert into attendance (std_id,lecture_id,isAttend) values (6,1,true);
insert into attendance (std_id,lecture_id,isAttend) values (6,2,false);
insert into attendance (std_id,lecture_id,isAttend) values (6,3,false);
insert into attendance (std_id,lecture_id,isAttend) values (7,4,true);
insert into attendance (std_id,lecture_id,isAttend) values (7,5,true);
insert into attendance (std_id,lecture_id,isAttend) values (7,6,false);


--Display the list of students who attended less than 25% of lectures.
SELECT s.std_id, s.first_name, s.last_name
FROM student s
JOIN attendance a ON s.std_id = a.std_id
JOIN lecture l ON a.lecture_id = l.lecture_id
GROUP BY s.std_id, s.first_name, s.last_name
HAVING SUM(CASE WHEN a.isAttend = true THEN 1 ELSE 0 END) / COUNT(*) < 0.25;



--What are the top 10 most attended lectures of all time?
SELECT l.lecture_id, l.name, COUNT(*) AS attendance_count
FROM lecture l
JOIN attendance a ON l.lecture_id = a.lecture_id
WHERE a.isAttend = true
GROUP BY l.lecture_id, l.name
ORDER BY attendance_count DESC
LIMIT 10;

-- For each student who attended more than 80% of all lectures,
--show the lectures he or she did not attend
SELECT s.std_id, s.first_name, s.last_name, l.lecture_id, l.name
FROM student s
CROSS JOIN lecture l
LEFT JOIN attendance a ON s.std_id = a.std_id AND l.lecture_id = a.lecture_id
GROUP BY s.std_id, s.first_name, s.last_name, l.lecture_id, l.name
HAVING SUM(CASE WHEN a.isAttend = true THEN 1 ELSE 0 END) / COUNT(*) > 0.8
    AND SUM(CASE WHEN a.isAttend = true THEN 1 ELSE 0 END) < COUNT(*);

-- Display the list of students who missed 3 consecutive
--lectures.

SELECT s.std_id, s.first_name, s.last_name
FROM student s
JOIN attendance a1 ON s.std_id = a1.std_id
JOIN attendance a2 ON s.std_id = a2.std_id
JOIN attendance a3 ON s.std_id = a3.std_id
JOIN lecture l1 ON a1.lecture_id = l1.lecture_id
JOIN lecture l2 ON a2.lecture_id = l2.lecture_id
JOIN lecture l3 ON a3.lecture_id = l3.lecture_id
WHERE (a1.isAttend = false AND a2.isAttend = false AND a3.isAttend = false)
  AND (l2.date = DATE_ADD(l1.date, INTERVAL 1 DAY)
    AND l3.date = DATE_ADD(l2.date, INTERVAL 1 DAY))
GROUP BY s.std_id, s.first_name, s.last_name;

--What are the lectures that had more students missing that
--lecture than actually attending it? (if a student joined after
--that lecture, we should not count him as absent)
SELECT l.lecture_id, l.name
FROM lecture l
JOIN attendance a ON l.lecture_id = a.lecture_id
JOIN (
    SELECT lecture_id, COUNT(*) AS num_missing
    FROM attendance
    WHERE isAttend = false
    GROUP BY lecture_id
) AS missing_counts ON l.lecture_id = missing_counts.lecture_id
WHERE missing_counts.num_missing > (SELECT COUNT(*) FROM student) - (SELECT COUNT(*) FROM student WHERE join_date > l.date)
GROUP BY l.lecture_id, l.name;


--another solution
SELECT l.lecture_id, l.name
FROM lecture l
JOIN attendance a ON l.lecture_id = a.lecture_id
JOIN (
    SELECT lecture_id, SUM(CASE WHEN isAttend = 0 THEN 1 ELSE 0 END) AS num_missing
    FROM attendance
    WHERE lecture_id NOT IN (
        SELECT DISTINCT lecture_id
        FROM attendance
        WHERE isAttend = true
          AND std_id IN (
              SELECT std_id
              FROM student
              WHERE join_date > l.date
          )
    )
    GROUP BY lecture_id
) AS missing_counts ON l.lecture_id = missing_counts.lecture_id
WHERE missing_counts.num_missing > (SELECT COUNT(*) FROM attendance WHERE lecture_id = l.lecture_id AND isAttend = true)
GROUP BY l.lecture_id, l.name;


--Display the students ordered by their ‘commitment’ from the
--most committed to the least. (commitment = في لتزامoا
--(الحضور
SELECT s.std_id, s.first_name, s.last_name
FROM student s
JOIN attendance a ON s.std_id = a.std_id
GROUP BY s.std_id, s.first_name, s.last_name
ORDER BY SUM(CASE WHEN a.isAttend = true THEN 1 ELSE 0 END) DESC;


--تسجيل معلومة حضور الطالب الفلني للمحاضرة الفلنية أو تغيبه عنها
--UPDATE attendance
--SET isAttend = true -- لتسجيل حضور الطالب
-- SET isAttend = false -- لتسجيل غياب الطالب
--WHERE std_id = 'رقم الطالب الفلاني' AND lecture_id = 'رقم المحاضرة الفلانية';


--تسجيل الحضور باستخدام الرقم الجامعي أو رقم الجوال أو الاسم بسرعة مع اكمال التلقائي
SELECT std_id, first_name, last_name
FROM student
WHERE std_id = 'رقم الطالب المحدد' OR phone_num = 'رقم الجوال المحدد' OR CONCAT(first_name, ' ', last_name) LIKE '%اسم الطالب المحدد%';

--عرض جميع المحاضرات المنتمية الى مساق معين
SELECT lecture_id, name, location, date
FROM lecture
WHERE course_id = 'معرف المساق المعين';



--عرض تقرير الحضور لكل طالب في مساق معين بسرعة عند طلب الطالب ذلك أثناء تسجيل حضوره في أحد المحاضرات. مع توفير وسيلة لتعديل الخطأ في التقرير بسرعة


SELECT
  s.std_id,
  s.first_name,
  s.last_name,
  a.isAttend,
  l.name AS lecture_name
FROM
  student s
  JOIN std_course sc ON s.std_id = sc.std_id
  JOIN course c ON sc.course_id = c.course_id
  JOIN lecture l ON c.course_id = l.course_id
  LEFT JOIN attendance a ON s.std_id = a.std_id AND l.lecture_id = a.lecture_id
WHERE
  c.course_id = 'معرف المساق المعين';



--عرض كشوف الحضور والغياب لكل محاضرة من المحاضرات مع نسبة الحضور وعدد الحضور في كل محاضرة

  SELECT
  l.lecture_id,
  l.name,
  l.location,
  COUNT(CASE WHEN a.isAttend = true THEN 1 END) AS attendance_count,
  COUNT(CASE WHEN a.isAttend = false THEN 1 END) AS absence_count,
  COUNT(CASE WHEN a.isAttend = true THEN 1 END) / COUNT(*) * 100 AS attendance_percentage
FROM
  lecture l
  LEFT JOIN attendance a ON l.lecture_id = a.lecture_id
GROUP BY
  l.lecture_id,
  l.name,
  l.location;

--البحث عن كشف محاضرة معينة باستخدام عنوان المحاضرة

SELECT l.lecture_id, l.name, l.location, l.date, c.title
FROM lecture l
JOIN course c ON l.course_id = c.course_id
WHERE l.name = 'عنوان المحاضرة';
