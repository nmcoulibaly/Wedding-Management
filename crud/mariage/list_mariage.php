<?php
require_once "../../bootstrap.php";
$productRepository = $entityManager->getRepository('Mariage');
$mariage = $productRepository->findAll();
foreach($mariages as $mariage)
{
    echo $mariage->getNumero();
    echo $mariage->getDate();
    echo $mariage->getInvite();
    
}
?>