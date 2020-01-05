
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+05:30";

CREATE TABLE `survey` (
  `survey_name` text NOT NULL,
  `survey_count` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `surveyq` (
  `surveyq_name` text NOT NULL,
  `surveyq_question` text NOT NULL,
  `surveyq_yes` bigint(20) NOT NULL,
  `surveyq_no` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `survey`
  ADD PRIMARY KEY (`survey_name`(30));

ALTER TABLE `surveyq`
  ADD PRIMARY KEY (`surveyq_question`(150));
