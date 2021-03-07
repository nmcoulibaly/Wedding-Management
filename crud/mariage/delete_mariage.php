<?PHP
require_once "../../bootstrap.php";
$entityManager->find($Mariage, 1);
if($Mariage != null)
{
    $entityManager->remove($mariage);
    $entityManager->flush();
}else{
    echo("Le mariage que vous voulez supprimer n'existe pas");
}
?>