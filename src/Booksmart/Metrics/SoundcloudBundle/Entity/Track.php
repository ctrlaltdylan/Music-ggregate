<?php

namespace Booksmart\Metrics\SoundcloudBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tracks
 */
class Track
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $soundcloudTrackId;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $genre;

    /**
     * @var integer
     */
    private $duration;

    /**
     * @var string
     */
    private $uri;

    /**
     * @var integer
     */
    private $playbackCount;

    /**
     * @var integer
     */
    private $downloadCount;

    /**
     * @var integer
     */
    private $favoritesCount;

    /**
     * @var integer
     */
    private $commentCount;

    /**
     * @var string
     */
    private $downloadUrl;

    /**
     * @var string
     */
    private $originalFormat;

    /**
     * @var string
     */
    private $artworkUrl;

    /**
     * @var string
     */
    private $permalinkUrl;

    /**
     * @var string
     */
    private $avatarUrl;


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
     * Set soundcloudTrackId
     *
     * @param integer $soundcloudTrackId
     * @return Tracks
     */
    public function setSoundcloudTrackId($soundcloudTrackId)
    {
        $this->soundcloudTrackId = $soundcloudTrackId;

        return $this;
    }

    /**
     * Get soundcloudTrackId
     *
     * @return integer 
     */
    public function getSoundcloudTrackId()
    {
        return $this->soundcloudTrackId;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Tracks
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set genre
     *
     * @param string $genre
     * @return Tracks
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Get genre
     *
     * @return string 
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set duration
     *
     * @param integer $duration
     * @return Tracks
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration
     *
     * @return integer 
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set uri
     *
     * @param string $uri
     * @return Tracks
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
     * Set playback_count
     *
     * @param integer $playbackCount
     * @return Tracks
     */
    public function setPlaybackCount($playbackCount)
    {
        $this->playbackCount = $playbackCount;

        return $this;
    }

    /**
     * Get playback_count
     *
     * @return integer 
     */
    public function getPlaybackCount()
    {
        return $this->playbackCount;
    }

    /**
     * Set download_count
     *
     * @param integer $downloadCount
     * @return Tracks
     */
    public function setDownloadCount($downloadCount)
    {
        $this->downloadCount = $downloadCount;

        return $this;
    }

    /**
     * Get download_count
     *
     * @return integer 
     */
    public function getDownloadCount()
    {
        return $this->downloadCount;
    }

    /**
     * Set favorites_count
     *
     * @param integer $favoritesCount
     * @return Tracks
     */
    public function setFavoritesCount($favoritesCount)
    {
        $this->favoritesCount = $favoritesCount;

        return $this;
    }

    /**
     * Get favorites_count
     *
     * @return integer 
     */
    public function getFavoritesCount()
    {
        return $this->favoritesCount;
    }

    /**
     * Set comment_count
     *
     * @param integer $commentCount
     * @return Tracks
     */
    public function setCommentCount($commentCount)
    {
        $this->commentCount = $commentCount;

        return $this;
    }

    /**
     * Get comment_count
     *
     * @return integer 
     */
    public function getCommentCount()
    {
        return $this->commentCount;
    }

    /**
     * Set download_url
     *
     * @param string $downloadUrl
     * @return Tracks
     */
    public function setDownloadUrl($downloadUrl)
    {
        $this->downloadUrl = $downloadUrl;

        return $this;
    }

    /**
     * Get download_url
     *
     * @return string 
     */
    public function getDownloadUrl()
    {
        return $this->downloadUrl;
    }

    /**
     * Set original_format
     *
     * @param string $originalFormat
     * @return Tracks
     */
    public function setOriginalFormat($originalFormat)
    {
        $this->originalFormat = $originalFormat;

        return $this;
    }

    /**
     * Get original-format
     *
     * @return string 
     */
    public function getOriginalFormat()
    {
        return $this->originalFormat;
    }

    /**
     * Set artwork_url
     *
     * @param string $artworkUrl
     * @return Tracks
     */
    public function setArtworkUrl($artworkUrl)
    {
        $this->artworkUrl = $artworkUrl;

        return $this;
    }

    /**
     * Get artwork_url
     *
     * @return string 
     */
    public function getArtworkUrl()
    {
        return $this->artworkUrl;
    }

    /**
     * Set permalink_url
     *
     * @param string $permalinkUrl
     * @return Tracks
     */
    public function setPermalinkUrl($permalinkUrl)
    {
        $this->permalinkUrl = $permalinkUrl;

        return $this;
    }

    /**
     * Get permalink_url
     *
     * @return string 
     */
    public function getPermalinkUrl()
    {
        return $this->permalinkUrl;
    }

    /**
     * Set avatar_url
     *
     * @param string $avatarUrl
     * @return Tracks
     */
    public function setAvatarUrl($avatarUrl)
    {
        $this->avatarUrl = $avatarUrl;

        return $this;
    }

    /**
     * Get avatar_url
     *
     * @return string 
     */
    public function getAvatarUrl()
    {
        return $this->avatarUrl;
    }
    /**
     * @var \Booksmart\Metrics\SoundcloudBundle\Entity\Search
     */
    private $search;


    /**
     * Set search
     *
     * @param \Booksmart\Metrics\SoundcloudBundle\Entity\Search $search
     * @return Track
     */
    public function setSearch(\Booksmart\Metrics\SoundcloudBundle\Entity\Search $search = null)
    {
        $this->search = $search;

        return $this;
    }

    /**
     * Get search
     *
     * @return \Booksmart\Metrics\SoundcloudBundle\Entity\Search 
     */
    public function getSearch()
    {
        return $this->search;
    }


}
