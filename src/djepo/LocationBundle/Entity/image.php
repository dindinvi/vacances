<?php

namespace djepo\LocationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * image
 *
 * @ORM\Table(name="loca_image")
 * @ORM\Entity(repositoryClass="djepo\LocationBundle\Entity\imageRepository")
 */
class image
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
* @ORM\ManyToOne(targetEntity="djepo\LocationBundle\Entity\logement", cascade={"Persist"})
* @ORM\JoinColumn(nullable=true)
*@Assert\Valid() 
*/
private $logement;

    /**
     * @var string
     * @Assert\NotBlank(message="Veuillez entrer l url")
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;
/**
     * @var string
     * @Assert\NotBlank(message="Veuillez telecharger un picto")
     * @ORM\Column(name="pictoUrl", type="string", length=255, nullable=true)
     */
    private $pictoUrl;
    /**
     * @var string
     * @Assert\NotBlank(message="Veuillez entrer une description")
     * @ORM\Column(name="alt", type="string", length=255, nullable=true)
     */
    private $alt;


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
     * Set url
     *
     * @param string $url
     * @return image
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set alt
     *
     * @param string $alt
     * @return image
     */
    public function setAlt($alt)
    {
        $this->alt = $alt;

        return $this;
    }

    /**
     * Get alt
     *
     * @return string 
     */
    public function getAlt()
    {
        return $this->alt;
    }

    /**
     * Set logement
     *
     * @param \djepo\LocationBundle\Entity\logement $logement
     * @return image
     */
    public function setLogement(\djepo\LocationBundle\Entity\logement $logement = null)
    {
        $this->logement = $logement;

        return $this;
    }

    /**
     * Get logement
     *
     * @return \djepo\LocationBundle\Entity\logement 
     */
    public function getLogement()
    {
        return $this->logement;
    }

    /**
     * Set pictoUrl
     *
     * @param string $pictoUrl
     * @return image
     */
    public function setPictoUrl($pictoUrl)
    {
        $this->pictoUrl = $pictoUrl;

        return $this;
    }

    /**
     * Get pictoUrl
     *
     * @return string 
     */
    public function getPictoUrl()
    {
        return $this->pictoUrl;
    }
}
