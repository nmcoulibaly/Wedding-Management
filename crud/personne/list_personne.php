<?php
require_once "../../bootstrap.php";
$productRepository = $entityManager->getRepository('Personne');
$personne = $productRepository->findAll();
foreach($personnes as $personne)
{
    echo $personne->getNom();
    echo $personne->getPrenom();
    echo $personne->getNumero();
    echo $personne->getSexe();



}

?>