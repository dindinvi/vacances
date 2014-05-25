<?php

namespace djepo\PrestationBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * prestation
 *
 * @ORM\Table(name="loca_prestation")
 * @ORM\Entity(repositoryClass="djepo\PrestationBundle\Entity\prestationRepository")
 */
class prestation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * 
     * @ORM\Column(name="typePrestation", type="boolean")
     */
    private $typePrestation;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set typePrestation
     *
     * @param string $typePrestation
     * @return prestation
     */
    public function setTypePrestation($typePrestation)
    {
        $this->typePrestation = $typePrestation;

        return $this;
    }

    /**
     * Get typePrestation
     *
     * @return string 
     */
    public function getTypePrestation()
    {
        return $this->typePrestation;
    }
}
