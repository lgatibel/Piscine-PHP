USE db_lgatibel;
SELECT nom,prenom
FROM fiche_personne
WHERE nom
LIKE '%-%'
OR prenom
LIKE '%-%'
ORDER BY nom ASC, prenom ASC;
