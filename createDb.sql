CREATE TABLE User_Info ( user_id INT(10) AUTO_INCREMENT,
                      user_type VARCHAR(20) NOT NULL,
                      first_name VARCHAR(70) NOT NULL,
                      middle_name VARCHAR(70),
                      last_name VARCHAR(70) NOT NULL,
                      user_email VARCHAR(70) NOT NULL,
                      alternate_email VARCHAR(70),
					  address VARCHAR(100),
					  phone_no VARCHAR(15) NOT NULL,
					  password VARCHAR(70) NOT NULL,
                      PRIMARY KEY(user_id),
					  CONSTRAINT user_type_ConstraintCheck CHECK (user_type IN('student','professor')));
					  
					  
insert into User_Info (user_type, first_name, middle_name, last_name, user_email, alternate_email, address, phone_no, password) VALUES 
('student','Abhinav','','Mishra','abhi@usc.edu','abhi@yahoo.com','1756 Scott St, LAKE CITY,FL 32056 ','2132132132','abhinav'), 
('student','Abhishek','Ratan','Tiwari','shek@usc.edu','abhishk@gmail.com',' 1549 Alameda Ave, Adak,AK 99546 ', '3123123123','abhishek'),
('student','Aldrich','','Stibel','ald@usc.edu','ald@gmail.com',' 736 Bush St,VERNON HILLS,IL 60061 ', '3233233232','aldrich'),
('professor','Dennis','John','Lillee','dennis@usc.edu','dennis@yahoo.com',' 70 Golden Gate Ave, SAN FRANCISCO, CA 94102 ','4124124124','dennis'),
('professor','Davy','','Hudson','davy@usc.edu','',' 1426 Guerrero St, NEW YORK ,NY 10010 ','8128128123','davy');


CREATE TABLE Student_Info (
                       user_id INT(10) DEFAULT NULL,
                       degree VARCHAR(10) NOT NULL,
                       major VARCHAR(10) NOT NULL,
                       gpa DECIMAL(3,2),
                       credits_earned INT(10),
                       credits_required_for_degree INT(10),
                       CONSTRAINT foreignkey_user_id FOREIGN KEY(user_id) REFERENCES User_Info,
                       CONSTRAINT degreeConstraintCheck CHECK (degree IN('MS','BS')),
					   CONSTRAINT majorConstraintCheck CHECK (major IN('CS','EE')));
					   
INSERT INTO Student_Info (user_id, degree, major, gpa, credits_earned, credits_required_for_degree) VALUES 
(1,'MS','CS',3.5,9,27),
(2,'MS','EE',3.2,8,27),
(3,'BS','CS',3.6,20,52);


CREATE TABLE Course_Info (
                       course_id VARCHAR(10),
                       course_name VARCHAR(50) NOT NULL,
                       semester VARCHAR(10) NOT NULL,
                       class_location VARCHAR(20),
                       class_timings VARCHAR(50),
                       no_of_credits INT(10),
					   PRIMARY KEY(course_id));
					   
INSERT INTO Course_Info (course_id, course_name, semester, class_location, class_timings, no_of_credits) VALUES 
('EE450','Introduction to Computer Networks','SPRING 2013','OHE 102','7.30AM - 8.45AM',3),
('CS402','Operating Systems','SPRING 2013','OHE 301','9.30AM - 10.45AM',3);


CREATE TABLE Professor_Info (
                       user_id INT(10) DEFAULT NULL,
                       office_hours VARCHAR(50),
                       subject VARCHAR(50) NOT NULL,
                       CONSTRAINT foreignkey_user_id FOREIGN KEY(user_id) REFERENCES User_Info);
					   
INSERT INTO Professor_Info (user_id, office_hours, subject) VALUES 
(4,'9.30AM - 10.45AM','Introduction to Computer Networks'),
(5,'11.30AM - 12.45PM','Operating Systems');
				
CREATE TABLE Student_Courses (
					   user_id INT(10) DEFAULT NULL,
                       course_id VARCHAR(10) DEFAULT NULL,
                       semester VARCHAR(10) NOT NULL,
                       grade_type VARCHAR(20),
                       grade  VARCHAR(10),
                       CONSTRAINT foreignkey_user_id FOREIGN KEY(user_id) REFERENCES User_Info,
					   CONSTRAINT foreignkey_course_id FOREIGN KEY(course_id) REFERENCES Course_Info);
					   
INSERT INTO Student_Courses (user_id, course_id, semester, grade_type, grade) VALUES 
(1,'CS402','SPRING 2013','letter grade','A-'),
(2,'EE450','SPRING 2013','letter grade','B+');

