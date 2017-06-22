-- Dumping database structure for task
CREATE DATABASE IF NOT EXISTS `task` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `task`;

-- Dumping structure for table task.user_tasks
CREATE TABLE IF NOT EXISTS `user_tasks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date_created` date NOT NULL,
  `date_updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COMMENT='Task Details';

-- Dumping data for table task.user_tasks: ~0 rows (approximately)
/*!40000 ALTER TABLE `user_tasks` DISABLE KEYS */;
INSERT INTO `user_tasks` (`id`, `name`, `description`, `date_created`, `date_updated`) VALUES
	(2, 'Boominathan', 'Task New Added', '2017-06-22', '2017-06-22 08:24:53');
/*!40000 ALTER TABLE `user_tasks` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
