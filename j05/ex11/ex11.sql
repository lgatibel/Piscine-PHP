USE db_lgatibel;
SELECT UPPER(fiche_personne.nom)
AS 'NOM',fiche_personne.prenom,abonnement.prix
FROM fiche_personne,abonnement,membre
WHERE fiche_personne.id_perso = membre.id_fiche_perso
AND abonnement.id_abo = membre.id_abo
AND abonnement.prix > 42
ORDER BY fiche_personne.nom ASC,fiche_personne.prenom ASC;
