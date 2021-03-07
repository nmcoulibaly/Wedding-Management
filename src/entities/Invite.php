<?php
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @ORM\Entity
 * @ORM\Table(name="invite")
 */
class Invite extends Personne{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;
     /**  @ORM\Column(type="string") **/
    private $status;
     /**
     * Many Invite have Many Mariage.
     * @ORM\ManyToMany(targetEntity="Mariage", inversedBy="invites")
     * @ORM\JoinTable(name="invite_mariage")
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
        $this->id = $id;
    }
    public function getStatus()
    {
        return $this->status;
    }
    public function setStatus($status)
    {
        $this->status = $status;
    }

}
?>