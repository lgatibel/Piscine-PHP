USE db_lgatibel;
UPDATE ft_table
SET date_de_creation = adddate(date_de_creation, INTERVAL 20 YEAR)
WHERE id > 5;
