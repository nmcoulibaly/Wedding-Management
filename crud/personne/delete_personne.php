<?php
require_once "../../bootstrap.php";
$personne = $entityManager->find('Personne', 2);
if($personne!=null)
{
    $entityManager->remove($personne);
    $entityManager->flush();
}else{
    echo("L'element que vous voulez supprimer n'existe pas");
}
?>