CREATE TABLE IF NOT EXISTS books(
bookID INT AUTO_INCREMENT PRIMARY KEY,
title  VARCHAR(100) NOT NULL,
author VARCHAR(40) NOT NULL,
genre VARCHAR(30),
publication_year YEAR NOT NULL);

INSERT INTO books (title, author, genre, publication_year) VALUES
('Learning SQL', 'John Doe', 'Programming', '1999'),
('The Great Adventure', 'Alice Smith', 'Fiction', '2005'),
('Data Science 101', 'Bob Johnson', 'Education', '2015'),
('History of Rome', 'Catherine Lee', 'History', '1988'),
('Cooking Made Easy', 'David Brown', 'Cooking', '2010'),
('Journey to the Stars', 'Emma Davis', 'Science Fiction', '2020'),
('Mastering Python', 'Frank Miller', 'Programming', '2018'),
('World War II Stories', 'Grace Wilson', 'History', '1995'),
('The Art of Painting', 'Henry Taylor', 'Art', '2003'),
('Healthy Living', 'Isabella Thomas', 'Health', '2012');