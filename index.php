<?php

## PHP - Les dates
## Pour tous les exercices, vous pouvez utiliser le site http://php.net
## N'hesitez pas à faire des pages avec du HTML/CSS

## Exercice 1 Afficher la date courante en respectant la forme jj/mm/aaaa (ex : 16/05/2016)
$dateToday = date('d/m/Y');
echo "$dateToday<br><br>";



## Exercice 2 Afficher la date courante en respectant la forme jj-mm-aa (ex : 16-05-16)

$dateToday2 = date('d-m-y');
echo "$dateToday2<br><br>";



## Exercice 3 Afficher la date courante avec le jour de la semaine et le mois en toutes lettres (ex : mardi 2 août 2016)
## Bonus : Le faire en français.
setlocale(LC_ALL, ['fr', 'fra', 'fr_FR']);
echo strftime("%A %d %B %Y");
echo "<br><br>";



## Exercice 4 Afficher le timestamp du jour.
## Afficher le timestamp du mardi 2 août 2016 à 15h00.
$timestamp = time();
echo "Le timestamp du jour est $timestamp<br><br>";
echo "Le timestamp du mardi 2 août 2016 à 15h00 est: ".mktime(15,0,0, 8, 2, 2016 )."<br><br>";



##Exercice 5 Afficher le nombre de jours qui séparent la date du jour avec le 16 mai 2016.
$today = time();
$dateMai = mktime(0,0, 0, 5,16,2016);
$result = ($today - $dateMai) / (60*60*24);
echo "Le nombre de jour entre aujourdh'ui et le 16 mai 2016 est de: ".round($result)."<br><br>";



##Exercice 6 Afficher le nombre de jours dans le mois de février de l'année 2016.

$mois = mktime(0, 0, 0, 2, 0, 2016);
echo date('t', $mois);
echo "<br><br>";



##Exercice 7 Afficher la date du jour + 20 jours.
$dateTime = new DateTime();
$dateTime->modify('+20 day');
echo $dateTime->format('d-m-Y')."<br><br>";

##Exercice 8 Afficher la date du jour - 22 jours
$dateTime2 = new DateTime();
$dateTime2->modify('-20 day');
echo $dateTime2->format('d-m-y')."<br><br>";
echo "<br><br>";?>



## TP Faire un formulaire avec deux listes déroulantes.
## La première sert à choisir le mois, et le deuxième permet d'avoir l'année.
# MEGA BONUS ( surligné et caractère gras :-)  ) : En fonction des choix, afficher un calendrier ( voir libs JS ou autres )


