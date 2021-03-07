<?php
require_once "../../bootstrap.php";
$personne = $entityManager->find('Personne', 1);
if($personne!=null)
{
    $personne->setNumero("786368750");
    $entityManager->flush();
    $entityManager->find('Personne', 1);
    echo $personne->getNumero();
}else{
    die("L'element que vous voules modifier n'existe pas");
}
?>