<?php
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="salle")
 */
class Salle{
     /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;
     /**  @ORM\Column(type="string") **/
    private $nom;
     /**  @ORM\Column(type="integer") **/
    private $capacite;
     /**  @ORM\Column(type="string") **/
    private $adresse;
     /**
     * One salle has many mariages. This is the inverse side.
     * @ORM\OneToMany(targetEntity="Mariage", mappedBy="salle")
     */
    private $mariages;

     public function __construct()
     {
         $this->mariages = new ArrayCollection();
     }
     public function getId()
     {
         return $this->id;
     }
     public function setId($id)
     {
         $this->id= $id;
     }
      public function getNom()
     {
         return $this->nom;
     }
     public function setNom($nom)
     {
         $this->nom= $nom;
     }
      public function getCapacite()
     {
         return $this->capacite;
     }
     public function setCapacite($capacite)
     {
         $this->capacite= $capacite;
     }
      public function getAdresse()
     {
         return $this->adresse;
     }
     public function setAdresse($adresse)
     {
         $this->adresse= $adresse;
     }
}
?>