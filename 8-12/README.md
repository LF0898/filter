----创建员工表------


 CREATE TABLE staff
(
staff_no INT NOT NULL AUTO_INCREMENT,
staff_name VARCHAR(10) NOT NULL,
staff_home VARCHAR(25) NOT NULL,
staff_email VARCHAR(25) NOT NULL,
staff_tel VARCHAR(18) NOT NULL,
PRIMARY KEY(staff_no)
) ENGINE=INNODB;

-----创建部门表-----

CREATE TABLE dapartebt
(
dapartebt_no INT NOT NULL AUTO_INCREMENT,
dapartebt_name VARCHAR(20) NOT NULL,
PRIMARY KEY(dapartebt_no)
) ENGINE=INNODB;

-----创建职位表-----

CREATE TABLE position
(
dapartebt_no INT NOT NULL AUTO_INCREMENT,
staff_no INT NOT NULL AUTO_INCREMENT,
position VARCHAR(20) NOT NULL;
PRIMARY KEY(dapartebt_no，staff_no)
) ENGINE=INNODB;
创建student表：
CREATE TABLE student
(
stu_id INT NOT NULL AUTO_INCREMENT,
stu_name VARCHAR(10) NOT NULL,
PRIMARY KEY(stu_id)
) ENGINE=INNODB;

 1. 练习sql查询
（1）创建一张学生表：
CREATE TABLE student
(
stu_no INT NOT NULL AUTO_INCREMENT,
stu_name VARCHAR(20) NOT NULL,
stu_ege INT(3) NOT NULL;
stu_sex VARCHAR(4) NOT NULL,
stu_home VARCHAR(25) NOT NULL,
stu_tel int(18) NOT NULL,
PRIMARY KEY(stu_no)
) ENGINE=INNODB;
(2)添加列：
ALTER TABLE test01.student
ADD COLUMN stu_edu VARCHAR(8) NOT NULL;
(3)删除列：
ALTER TABLE test01.student
UPDATE test01.student
DROP COLUMN stu_home;
(4)修改学生表的数据：
UPDATE test01.student
SET stu_edu='大专'
WHERE stu_tel LIKE '11%';
(5)删除学生表的数据：
DELETE FROM test01.student
WHERE student.stu_name='C' AND student.stu_sex='1';
(7)查询表：
SELECT student.stu_name,student.stu_no
FROM test01.student
WHERE student.stu_age<22 AND student.stu_edu='大专';
(8）查询表：
select * from student where stu_no
<=(select count(*) from student)/4;
（9）查询表：
SELECT stu_name,stu_sex,stu_age
FROM student
ORDER BY stu_age DESC; 
（10）平均年龄：
SELECT * ,AVG(stu_age)
FROM student
GROUP BY stu_sex;

----------


为管理岗位业务培训信息创表


-----user-----

CREATE TABLE user(
userNo INT NOT NULL AUTO_INCREMENT,
userName VARCHAR(10) NOT NULL,
currentUnit VARCHAR(20) NOT NULL,
age INT(4) NOT NULL,
PRIMARY KEY(userNo)
)ENGINE=INNODB;


-----course-----


CREATE TABLE course(
courseNo INT NOT NULL AUTO_INCREMENT,
courseName VARCHAR(20) NOT NULL,
PRIMARY KEY(courseNo)
)ENGINE=INNODB;

-----point-----

CREATE TABLE point(
userNo INT NOT AUTO_INCREMNT,
courseNo INT NOT NULL AUTO_INCREMENT,
grade VARCHAR(20) NOT NULL,
PRIMARY KEY(userNo,courseNo)
)ENGINE=INNODB;

（1）嵌套语句：
SELECT DISTINCT `user`.userNo,`user`.userName
FROM `user`
JOIN point ON `user`.userNo=point.userNo
JOIN course ON point.courseNo=course.courseNo
WHERE course.courseName="税收基础";
（2）嵌套语句：
SELECT DISTINCT `user`.userNo,`user`.currentUnit
FROM `user`
JOIN point ON `user`.userNo=point.userNo
JOIN course ON point.courseNo=course.courseNo
WHERE course.courseNo="C2";
(3)嵌套语句：
SELECT DISTINCT `user`.userNo,`user`.currentUnit
FROM `user`
JOIN point ON `user`.userNo=point.userNo
JOIN course ON point.courseNo=course.courseNo
WHERE course.courseNo!="C5";
（4）嵌套语句：
SELECT DISTINCT `user`.userNo,`user`.currentUnit
FROM `user`
WHERE userNo IN (SELECT userNo 
FROM point 
RIGHT JOIN courseON point.courseNo=course.courseNo
GROUP BY userNo HAVING COUNT(*)=COUNT(userNo));
（5）嵌套查询：
SELECT `user`.userName
FROM `user`
WHERE `user`.userNo IN 
(SELECT `user`.userNo FROM point
GROUP BY `user`.userNo HAVING COUNT(*)=(SELECT COUNT(*) FROM course));
（6）
SELECT `user`.userNo,`user`.currentUnit
FROM `user`,point
HAVING COUNT(point.courseNo)=5;
（四联查询）
select user.userName,course.courseName,point.grade,teacher.teachterName from user
        left join point on user.userNo=point.userNo  //关联user表和point表
        left join course on course.courseNo=point.courseNo  //关联point表和course表
        left join teacher on teacher.teacherNo=course.teacherNo; 关联course表和teacher表
 MySqlClass.php是一个封装mysql类,testMysql.php为其测试方法
 MysqliClass.php是一个封装mysqli类,testMysqli.php为其测试方法
 PdoClass.php是一个封装pdo类,testPdao.php为其测试方法
