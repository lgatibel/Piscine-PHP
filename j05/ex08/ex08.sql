USE db_lgatibel;
SELECT CONCAT(nom ,prenom ,YEAR(date_naissance))
AS 'date de naissance'
FROM fiche_personne
WHERE YEAR(date_naissance) = '1989'
ORDER BY nom ASC;
