<?php
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="personne")
 *  @ORM\MappedSuperclass
 */
 class Personne{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
     private $id;
     /**  @ORM\Column(type="string") **/
     private $numero;
     /**  @ORM\Column(type="string") **/
     private $prenom;
     /**  @ORM\Column(type="string") **/
     private $nom;
     /**  @ORM\Column(type="string") **/
     private $sexe;
      /**
     * One personne has many mariages. This is the inverse side.
     * @ORM\OneToMany(targetEntity="Mariage", mappedBy="personne")
     */
     private $mariages;
     public function __construct()
     {
         $this->mariages = new ArrayCollection();
         
     }
     public function getId(){
         return $this->id;

     }
     public function setId($id){
         $this->id = $id; 
     }
       public function getNumero(){
         return $this->numero;

     }
     public function setNumero($numero){
         $this->numero = $numero; 

     }
       public function getPrenom(){
         return $this->prenom;

     }
     public function setPrenom($prenom){
         $this->prenom= $prenom; 

     }
       public function getNom(){
         return $this->nom;

     }
     public function setNom($nom){
         $this->nom = $nom; 

     }
       public function getSexe(){
         return $this->sexe;

     }
     public function setSexe($sexe){
         $this->sexe = $sexe; 

     }

}
?>