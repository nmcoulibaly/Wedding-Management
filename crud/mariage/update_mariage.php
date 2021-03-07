<?php
require_once "../../bootstrap.php";
$mariage = $entityManager->find($Mariage, 1);
if($mariage!= null)
{
    $mariage->setNumero(1);
    $entityManager->flush();
    $entityManager->find('Mariage', 1);
    echo $mariage->getNumero();

}else{
    die("Le mariage que vous voulez modifier n'existe pas");
}
?>