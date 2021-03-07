<?php
require_once "../../bootstrap.php";
$personne = new Personne();
$personne->setId(1);
$personne->setNumero("786368750");
$personne->setNom("COULIBALY");
$personne->setPrenom("Ndeye");
$personne->setSexe("F");
$personne->setId(2);
$personne->setNumero("786368750");
$personne->setNom("Black");
$personne->setPrenom("Miss");
$personne->setSexe("M");
$entityManager->persist($personne);
$entityManager->flush();
echo $personne->getId();

?>