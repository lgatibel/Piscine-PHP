USE db_lgatibel;
SELECT id_film,titre,date_debut_affiche,date_fin_affiche
FROM film
WHERE date_debut_affiche <= '2007-07-27'
AND date_fin_affiche >= '2006-10-30'
OR MONTH(date_debut_affiche) <= 12
AND MONTH(date_fin_affiche) >= 12
AND DAY(date_debut_affiche) <= 24
AND DAY(date_fin_affiche) >= 24;
