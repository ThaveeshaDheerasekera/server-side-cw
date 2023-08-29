-- --
-- -- Database: `w1761369_0`
-- --

CREATE TABLE `user` ( 
  `id` int(11) NOT NULL AUTO_INCREMENT, 
  `first_name` varchar(255) NOT NULL, 
  `last_name` varchar(255) NOT NULL, 
  `username` varchar(255) NOT NULL, 
  `email` varchar(255) NOT NULL, 
  `password` varchar(255) NOT NULL, 
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(), 
  PRIMARY KEY (`id`) 
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `user` (`id`, `first_name`, `last_name`, `username`, `email`, `password`, `created_at`) VALUES
(1, 'Shawn', 'Marley', 'sm1995', 'sh@email.com', 'sh123@123', '2023-01-04 10:58:28'),
(2, 'Gomey', 'Khan', 'gk1999', 'gk@email.com', 'gk123@123', '2023-01-04 10:58:28'),
(3, 'Thaveesha', 'Dheerasekera', 'thaveesha', 'thaveesha.00@email.com', '$2y$10$cMN0Fz1r5UMGSHT..uAYgu.KCSJ/0uAFzuIFZr.IxRjk8qD4BafPK', '2023-01-15 01:05:39'),
(4, 'Shanuka', 'Peiris', 'shanuka', 'shanuka.00@email.com', '$2y$10$GVs04vHiRpl3P.YanpDyfumg2hxygd4EjipyATGgBkF/QZcqftbhW', '2023-01-15 01:07:07');

CREATE TABLE `question` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` mediumtext NOT NULL,
  `description` longtext NOT NULL,
  `tags` text,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) NOT NULL,
  PRIMARY KEY(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `question` (`id`, `title`, `description`, `tags`, `created_at`, `user_id`) VALUES
(1, 'What is \'foo\' is programming?', 'What is \'foo\' is programming?\nCan someone explain this...', NULL, '2023-01-04 11:01:57', 1),
(2, 'How do I fetch data from a database by ID in CodeIgniter?\n', 'How do I fetch data from a database by ID in CodeIgniter?\nCan someone explain this...', 'CodeIgniter,Database', '2023-01-15 04:15:32', 2);

CREATE TABLE `answer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comment` longtext DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  PRIMARY KEY(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `answer` (`id`, `comment`, `created_at`, `user_id`, `question_id`) VALUES
(1, 'It is a placeholder for a function/method\r\nexample: \r\n  class foo {\r\n    // code\r\n  }\r\n', '2023-01-04 12:21:10', 1, 1);

CREATE TABLE `question_rating` (
  `id` int(11) NOT NULL,
  `rating` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  PRIMARY KEY(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `answer_rating` (
  `id` int(11) NOT NULL,
  `rating` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) NOT NULL,
  `answer_id` int(11) NOT NULL,
  PRIMARY KEY(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `question`
  ADD CONSTRAINT `fk_user_question` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

ALTER TABLE `answer`
  ADD CONSTRAINT `fk_question_answer` FOREIGN KEY (`question_id`) REFERENCES `question` (`id`),
  ADD CONSTRAINT `fk_user_answer` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

ALTER TABLE `question_rating`
  ADD CONSTRAINT `fk_question_rating` FOREIGN KEY (`question_id`) REFERENCES `question` (`id`),
  ADD CONSTRAINT `fk_user_question_rating` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

ALTER TABLE `answer_rating`
  ADD CONSTRAINT `fk_answer_rating` FOREIGN KEY (`answer_id`) REFERENCES `answer` (`id`),
  ADD CONSTRAINT `fk_user_asnwer_rating` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);