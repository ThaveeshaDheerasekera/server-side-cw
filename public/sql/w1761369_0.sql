--
-- Database: `w1761369_0`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `id` int(11) NOT NULL,
  `comment` mediumtext DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`id`, `comment`, `created_at`, `user_id`, `question_id`) VALUES
(1, 'It is a placeholder for a function/method\r\nexample: \r\n  class foo {\r\n    // code\r\n  }\r\n', '2023-01-04 12:21:10', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `answer_rating`
--

CREATE TABLE `answer_rating` (
  `id` int(11) NOT NULL,
  `rating` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `answer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `answer_rating`
--

INSERT INTO `answer_rating` (`id`, `rating`, `created_at`, `answer_id`) VALUES
(1, 1, '2023-01-04 12:22:13', 1);

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` int(11) NOT NULL,
  `question` mediumtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `question`, `created_at`, `user_id`) VALUES
(1, 'What is \'foo\' is programming?', '2023-01-04 11:01:57', 1);

-- --------------------------------------------------------

--
-- Table structure for table `question_rating`
--

CREATE TABLE `question_rating` (
  `id` int(11) NOT NULL,
  `rating` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `question_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `username`, `email`, `password`, `created_at`) VALUES
(1, 'Shawn', 'Marley', 'sm1995', 'sh@email.com', 'sh123@123', '2023-01-04 10:58:28'),
(2, 'Gomey', 'Khan', 'gk1999', 'gk@email.com', 'gk123@123', '2023-01-04 10:58:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_answer` (`user_id`),
  ADD KEY `fk_question_answer` (`question_id`);

--
-- Indexes for table `answer_rating`
--
ALTER TABLE `answer_rating`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_answer_rating` (`answer_id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_question` (`user_id`);

--
-- Indexes for table `question_rating`
--
ALTER TABLE `question_rating`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_question_rating` (`question_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `answer_rating`
--
ALTER TABLE `answer_rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `question_rating`
--
ALTER TABLE `question_rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answer`
--
ALTER TABLE `answer`
  ADD CONSTRAINT `fk_question_answer` FOREIGN KEY (`question_id`) REFERENCES `question` (`id`),
  ADD CONSTRAINT `fk_user_answer` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `answer_rating`
--
ALTER TABLE `answer_rating`
  ADD CONSTRAINT `fk_answer_rating` FOREIGN KEY (`answer_id`) REFERENCES `answer` (`id`);

--
-- Constraints for table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `fk_user_question` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `question_rating`
--
ALTER TABLE `question_rating`
  ADD CONSTRAINT `fk_question_rating` FOREIGN KEY (`question_id`) REFERENCES `question` (`id`);
COMMIT;
