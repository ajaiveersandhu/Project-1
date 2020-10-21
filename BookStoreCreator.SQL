CREATE DATABASE project_1;

CREATE TABLE `bookinventory`
(
 `book_id` int
(10) NOT NULL,
 `book_name` varchar
(20) NOT NULL,
 `book_image` varchar
(50) NOT NULL,
 `book_author` varchar
(20) NOT NULL,
 `book_price` int
(10) NOT NULL,
 `book_serial_number` int
(20) NOT NULL,
 PRIMARY KEY
(`book_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;