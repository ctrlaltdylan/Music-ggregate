<?php

namespace Booksmart\Metrics\SoundcloudBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

use Doctrine\ORM\Mapping as ORM;

/**
 * Search
 */
class Search
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $query;

    protected $results;

    public function __construct()
    {
        $this->results = new ArrayCollection();
    }

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
     * Set query
     *
     * @param string $query
     * @return Search
     */
    public function setQuery($query)
    {
        $this->query = $query;

        return $this;
    }

    /**
     * Get query
     *
     * @return string 
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * Add results
     *
     * @param \Booksmart\Metrics\SoundcloudBundle\Entity\Track $results
     * @return Search
     */
    public function addResult(\Booksmart\Metrics\SoundcloudBundle\Entity\Track $results)
    {
        $this->results[] = $results;

        return $this;
    }

    /**
     * Remove results
     *
     * @param \Booksmart\Metrics\SoundcloudBundle\Entity\Track $results
     */
    public function removeResult(\Booksmart\Metrics\SoundcloudBundle\Entity\Track $results)
    {
        $this->results->removeElement($results);
    }

    /**
     * Get results
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getResults()
    {
        return $this->results;
    }
}
