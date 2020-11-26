<?php

  // récupère les données postées
  $prixLitre   = $_POST["prix-au-litre"] ?? false;
  $volumePlein = $_POST["volume-plein"] ?? false;
  $kmParcourus = $_POST["kilometres-parcourus"] ?? false;

  // affiche un message si un champ n'est pas rempli
  if ($prixLitre == false) exit("merci de renseigner le prix au litre, payé à la pompe svp");
  if ($volumePlein == false) exit("merci de renseigner le volume");
  if ($kmParcourus == false) exit("merci de renseigner les Km parcourus");

  // calcul à effectuer et formatage 2 decimales
  $moyenneLitresAuCent = ($volumePlein * 100) / $kmParcourus;
  $moyenneLitresAuCent= number_format($moyenneLitresAuCent, 2,',', ' ');
  
  // date à cet instant T
  $dateObjet = new DateTime(null, new DateTimeZone("Europe/Paris"));
  $datePlein = $dateObjet->format("Y-m-d H:i");

  // dépose un nouveau cookie
  $cookieIndex = $dateObjet->format("YmdHisu");
  $cookieContent = "$datePlein|$prixLitre|$moyenneLitresAuCent";
  setcookie("plein[$cookieIndex]", $cookieContent, strtotime( "+6 month" ));

  // redirection vers la page d'accueil
  header("Location: index.php");
  exit; // force l'arrêt de ce script après avoir demander la redirection

?>