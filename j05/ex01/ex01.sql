USE db_lgatibel;
CREATE TABLE ft_table (
	id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	 login varchar(8) DEFAULT 'toto' NOT NULL,
	 groupe enum('staff', 'student','other') NOT NULL,
	 date_de_creation date NOT NULL);
source base_student.sql;
