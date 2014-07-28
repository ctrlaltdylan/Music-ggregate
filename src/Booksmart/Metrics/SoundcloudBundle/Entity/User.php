<?php

namespace Booksmart\Metrics\SoundcloudBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 */
class User
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $soundcloudUserId;

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $permalink;

    /**
     * @var string
     */
    private $uri;

    /**
     * @var string
     */
    private $permalinkUrl;

    /**
     * @var string
     */
    private $avatarUrl;

    /**
     * @var string
     */
    private $county;

    /**
     * @var string
     */
    private $fullName;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $website;

    /**
     * @var integer
     */
    private $trackCount;

    /**
     * @var integer
     */
    private $playlistCount;

    /**
     * @var integer
     */
    private $followersCount;

    /**
     * @var integer
     */
    private $followingCount;

    /**
     * @var integer
     */
    private $publicFavoritesCount;


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
     * Set soundcloudUserId
     *
     * @param integer $soundcloudUserId
     * @return User
     */
    public function setSoundcloudUserId($soundcloudUserId)
    {
        $this->soundcloudUserId = $soundcloudUserId;

        return $this;
    }

    /**
     * Get soundcloudUserId
     *
     * @return integer 
     */
    public function getSoundcloudUserId()
    {
        return $this->soundcloudUserId;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set permalink
     *
     * @param string $permalink
     * @return User
     */
    public function setPermalink($permalink)
    {
        $this->permalink = $permalink;

        return $this;
    }

    /**
     * Get permalink
     *
     * @return string 
     */
    public function getPermalink()
    {
        return $this->permalink;
    }

    /**
     * Set uri
     *
     * @param string $uri
     * @return User
     */
    public function setUri($uri)
    {
        $this->uri = $uri;

        return $this;
    }

    /**
     * Get uri
     *
     * @return string 
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * Set permalinkUrl
     *
     * @param string $permalinkUrl
     * @return User
     */
    public function setPermalinkUrl($permalinkUrl)
    {
        $this->permalinkUrl = $permalinkUrl;

        return $this;
    }

    /**
     * Get permalinkUrl
     *
     * @return string 
     */
    public function getPermalinkUrl()
    {
        return $this->permalinkUrl;
    }

    /**
     * Set avatarUrl
     *
     * @param string $avatarUrl
     * @return User
     */
    public function setAvatarUrl($avatarUrl)
    {
        $this->avatarUrl = $avatarUrl;

        return $this;
    }

    /**
     * Get avatarUrl
     *
     * @return string 
     */
    public function getAvatarUrl()
    {
        return $this->avatarUrl;
    }

    /**
     * Set county
     *
     * @param string $county
     * @return User
     */
    public function setCounty($county)
    {
        $this->county = $county;

        return $this;
    }

    /**
     * Get county
     *
     * @return string 
     */
    public function getCounty()
    {
        return $this->county;
    }

    /**
     * Set fullName
     *
     * @param string $fullName
     * @return User
     */
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;

        return $this;
    }

    /**
     * Get fullName
     *
     * @return string 
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return User
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return User
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set website
     *
     * @param string $website
     * @return User
     */
    public function setWebsite($website)
    {
        $this->website = $website;

        return $this;
    }

    /**
     * Get website
     *
     * @return string 
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Set trackCount
     *
     * @param integer $trackCount
     * @return User
     */
    public function setTrackCount($trackCount)
    {
        $this->trackCount = $trackCount;

        return $this;
    }

    /**
     * Get trackCount
     *
     * @return integer 
     */
    public function getTrackCount()
    {
        return $this->trackCount;
    }

    /**
     * Set playlistCount
     *
     * @param integer $playlistCount
     * @return User
     */
    public function setPlaylistCount($playlistCount)
    {
        $this->playlistCount = $playlistCount;

        return $this;
    }

    /**
     * Get playlistCount
     *
     * @return integer 
     */
    public function getPlaylistCount()
    {
        return $this->playlistCount;
    }

    /**
     * Set followersCount
     *
     * @param integer $followersCount
     * @return User
     */
    public function setFollowersCount($followersCount)
    {
        $this->followersCount = $followersCount;

        return $this;
    }

    /**
     * Get followersCount
     *
     * @return integer 
     */
    public function getFollowersCount()
    {
        return $this->followersCount;
    }

    /**
     * Set followingCount
     *
     * @param integer $followingCount
     * @return User
     */
    public function setFollowingCount($followingCount)
    {
        $this->followingCount = $followingCount;

        return $this;
    }

    /**
     * Get followingCount
     *
     * @return integer 
     */
    public function getFollowingCount()
    {
        return $this->followingCount;
    }

    /**
     * Set publicFavoritesCount
     *
     * @param integer $publicFavoritesCount
     * @return User
     */
    public function setPublicFavoritesCount($publicFavoritesCount)
    {
        $this->publicFavoritesCount = $publicFavoritesCount;

        return $this;
    }

    /**
     * Get publicFavoritesCount
     *
     * @return integer 
     */
    public function getPublicFavoritesCount()
    {
        return $this->publicFavoritesCount;
    }
}
