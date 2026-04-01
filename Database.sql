CREATE DATABASE student_app;

USE student_app;

CREATE TABLE students ( 
    id INT AUTO_INCREMENT PRIMARY KEY, 
    first_name VARCHAR(50), 
    last_name VARCHAR(50), 
    email VARCHAR(100), 
    course VARCHAR(50) 
);

CREATE TABLE courses ( 
    id INT AUTO_INCREMENT PRIMARY KEY, 
    course_name VARCHAR(50) NOT NULL, 
    course_code VARCHAR(10) NOT NULL, 
    description TEXT, 
    credits INT 
);

INSERT INTO courses (course_name, course_code, description, credits) VALUES
('Web Development', 'WEB101', 'Learn HTML, CSS, JS', 3),
('Database Systems', 'DBS102', 'Learn MySQL and database design', 3),
('Mobile Development', 'MOB103', 'Learn Android and iOS app development', 4),
('Networking', 'NET104', 'Learn network fundamentals', 2);