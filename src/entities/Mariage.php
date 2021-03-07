<?php
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * @ORM\Entity
 * @ORM\Table(name="mariage")
 */
class Mariage{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;
     /**  @ORM\Column(type="string") **/
    private $numero;
     /**  @ORM\Column(type="string") **/
    private $date;
    /**
     * Many mariage have one salle. This is the owning side.
     * @ORM\ManyToOne(targetEntity="Salle", inversedBy="mariages")
     * @ORM\JoinColumn(name="salle_id", referencedColumnName="id")
     */
    private $salle;
    /**
     * One mariage has one epoux.
     * @ORM\ManyToOne(targetEntity="Personne")
     * @ORM\JoinColumn(name="epoux_id", referencedColumnName="id")
     */
    private $epoux;
      /**
     * One mariage has one epouse.
     *  @ORM\ManyToOne(targetEntity="Personne")
     * @ORM\JoinColumn(name="epouse_id", referencedColumnName="id")
     */
    private $epouse;
    /**
     * Many Mariage have Many Invite.
     * @ORM\ManyToMany(targetEntity="Invite", inversedBy="mariages")
     */
    private $invites;
    
    public function __construct()
    {
       $this->invites = new ArrayCollection();
    }
    public function getNumero()
    {
       return $this->numero; 
    }
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }
    public function getDate()
    {
        return $this->date;
    }
    public function setDate($date)
    {
        $this->date = $date;

    }
   

    /**
     * Get many mariage have one salle. This is the owning side.
     */ 
    public function getSalle()
    {
        return $this->salle;
    }

    /**
     * Set many mariage have one salle. This is the owning side.
     *
     * 
     */ 
    public function setSalle(Salle $salle)
    {
        $this->salle = $salle;

    }

    /**
     * Get one mariage has one epoux.
     */ 
    public function getEpoux()
    {
        return $this->epoux;
    }

    /**
     * Set one mariage has one epoux.
     *
     * 
     */ 
    public function setEpoux(Personne $epoux)
    {
        $this->epoux = $epoux;

    }

    /**
     * Get one mariage has one epouse.
     */ 
    public function getEpouse()
    {
        return $this->epouse;
    }

    /**
     * Set one mariage has one epouse.
     *
     * 
     */ 
    public function setEpouse(Personne $epouse)
    {
        $this->epouse = $epouse;

        
    }

    /**
     * Get many Mariage have Many Invite.
     */ 
    public function getInvites()
    {
        return $this->invites;
    }

    /**
     * Set many Mariage have Many Invite.
     *
     * 
     */ 
    public function setInvites($invites)
    {
        $this->invites = $invites;

        
    }
}
?>