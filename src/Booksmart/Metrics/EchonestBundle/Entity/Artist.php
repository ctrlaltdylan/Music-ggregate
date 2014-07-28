<?php

namespace Booksmart\Metrics\EchonestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Artist
 */
class Artist
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
     * @var string
     */
    private $echonestId;


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
     * @return Artist
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
     * Set echonestId
     *
     * @param string $echonestId
     * @return Artist
     */
    public function setEchonestId($echonestId)
    {
        $this->echonestId = $echonestId;

        return $this;
    }

    /**
     * Get echonestId
     *
     * @return string 
     */
    public function getEchonestId()
    {
        return $this->echonestId;
    }
    /**
     * @var \Booksmart\Metrics\SoundcloudBundle\Entity\Search
     */
    private $artistSearch;


    /**
     * Set artistSearch
     *
     * @param \Booksmart\Metrics\SoundcloudBundle\Entity\Search $artistSearch
     * @return Artist
     */
    public function setArtistSearch(\Booksmart\Metrics\SoundcloudBundle\Entity\Search $artistSearch = null)
    {
        $this->artistSearch = $artistSearch;

        return $this;
    }

    /**
     * Get artistSearch
     *
     * @return \Booksmart\Metrics\SoundcloudBundle\Entity\Search 
     */
    public function getArtistSearch()
    {
        return $this->artistSearch;
    }
    /**
     * @var float
     */
    private $hotness;


    /**
     * Set hotness
     *
     * @param float $hotness
     * @return Artist
     */
    public function setHotness($hotness)
    {
        $this->hotness = $hotness;

        return $this;
    }

    /**
     * Get hotness
     *
     * @return float 
     */
    public function getHotness()
    {
        return $this->hotness;
    }
}
