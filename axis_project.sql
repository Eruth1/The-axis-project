CREATE DATABASE IF NOT EXISTS `axis_project`
  DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `axis_project`;

DROP TABLE IF EXISTS `about`;
CREATE TABLE `about` (
  `student_id`              VARCHAR(10)      NOT NULL,
  `full_name`               VARCHAR(60)      NOT NULL,
  `email`                   VARCHAR(100)     NOT NULL,
  `hometown`                VARCHAR(40)      NOT NULL,
  `programming_background`  VARCHAR(80)      NOT NULL,
  `favourite_book`          VARCHAR(80)      NOT NULL,
  `favourite_film`          VARCHAR(80)      NOT NULL,
  `part1_contribution`      VARCHAR(255)     NOT NULL,
  `part2_contribution`      VARCHAR(500)     NOT NULL,
  `quote_vi`                VARCHAR(255)     NOT NULL,
  `quote_en`                VARCHAR(255)     NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `about`
  (`student_id`,`full_name`,`email`,`hometown`,`programming_background`,`favourite_book`,`favourite_film`,
   `part1_contribution`,`part2_contribution`,`quote_vi`,`quote_en`)
VALUES
('SWS00906','Tat Thanh Nguyen','thanhntfsc0262@fpt.edu.vn','Can Tho','Python, HTML','call of cthulhu','neon genesis evangelion',
 'Home page layout, hero and work section, shared stylesheet.',
 'Users table with hashed passwords, login and logout pages, the session check that protects manage.php, and the manager queries on manage.php.',
 'Có công mài sắt, có ngày nên kim.',
 'If you keep grinding iron, one day it becomes a needle.'),
('SWS02354','Quang Hung Phat Tran','123hungphat456@gmail.com','Ho Chi Minh','Python, HTML','To Kill a Mockingbird','12 angry men',
 'Jobs page: job descriptions, lists and aside.',
 'Project folder structure, shared header, nav and footer includes, settings.php, the database and SQL file, the About page loaded from the database, the finished home page, merging branches and packaging the submission.',
 'Một cây làm chẳng nên non, ba cây chụm lại nên hòn núi cao.',
 'One tree alone cannot make a hill; three trees together make a high mountain.'),
('SWS02187','Huynh Nhat An Nguyen','nhatantumn@gmail.com','Ho Chi Minh','Python, HTML','Nothing','Nothing',
 'Apply page: form fields, input patterns and validation.',
 'Jobs table and sample data, jobs.php rendered from the database, the search bar and search.php, and matching job reference numbers with the EOI table.',
 'Học thầy không tày học bạn.',
 'Learning from a teacher is not as good as learning from friends.'),
('SWS01870','Nguyen The Son Pham','sonproghe@gmail.com','Vung Tau','Python, HTML','Harry Potter','The Odyssey',
 'About page, testing in different browsers and final review.',
 'EOI table, apply.php posting to process_eoi.php, server-side validation and sanitising, the EOI number confirmation and the test EOI records.',
 'Thất bại là mẹ thành công.',
 'Failure is the mother of success.');
