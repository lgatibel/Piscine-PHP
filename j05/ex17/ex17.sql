USE db_lgatibel;
SELECT COUNT(membre.id_abo)
AS 'nb_abo', TRUNCATE(AVG(abonnement.prix),0)
AS 'moy_abo', SUM(abonnement.duree_abo)%42
AS 'ft'
FROM membre, abonnement
WHERE membre.id_abo = abonnement.id_abo;
