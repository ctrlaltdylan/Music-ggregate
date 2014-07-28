<?php

namespace Booksmart\Metrics\EchonestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Genre
 */
class Genre
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;


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
     * Set name
     *
     * @param string $name
     * @return Genre
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $artists;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->artists = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add artists
     *
     * @param \Booksmart\Metrics\EchonestBundle\Entity\Artist $artists
     * @return Genre
     */
    public function addArtist(\Booksmart\Metrics\EchonestBundle\Entity\Artist $artists)
    {
        $this->artists[] = $artists;

        return $this;
    }

    /**
     * Remove artists
     *
     * @param \Booksmart\Metrics\EchonestBundle\Entity\Artist $artists
     */
    public function removeArtist(\Booksmart\Metrics\EchonestBundle\Entity\Artist $artists)
    {
        $this->artists->removeElement($artists);
    }

    /**
     * Get artists
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getArtists()
    {
        return $this->artists;
    }
}
