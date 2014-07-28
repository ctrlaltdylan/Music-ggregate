<?php

namespace Booksmart\Metrics\SoundcloudBundle;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Booksmart\Metrics\SoundcloudBundle\Entity\Track;

class Soundcloud extends Controller {

	public $query;

	function __construct(){

		$this->clientId = '6f4be45ac6121f6a83f591e3ce4e7835';
		$this->clientSecret = 'f3aebc077a0d975e0bbcb4ce5b0704af';
	}
	public function save($type, $data, $em, $target)
	{

		switch ($type) {
			case 'track':
				$scTrack = $data;
				$track = $target;
				
					$track = new Track;
					$track->setSoundCloudTrackId($scTrack->id);
					$track->setTitle($scTrack->title);
					$track->setGenre($scTrack->genre);
					$track->setDuration($scTrack->duration);
					$track->setUri($scTrack->uri);
					$track->setPlaybackCount($scTrack->playback_count);
					$track->setDownloadCount($scTrack->download_count);
					$track->setFavoritesCount($scTrack->favoritings_count);
					if (isset($scTrack->comment_count)){
						$track->setCommentCount($scTrack->comment_count);						
					} else {
						$track->setCommentCount(0);
					}

					if($scTrack->downloadable){
						$track->setDownloadUrl($scTrack->download_url);
					}
					$track->setOriginalFormat($scTrack->original_format);
					if (isset($scTrack->artwork_url)){
						$track->setArtworkUrl($scTrack->artwork_url);	
					} else {
						$track->setArtworkUrl('');
					}
					$track->setPermalinkUrl($scTrack->permalink_url);
					$track->setAvatarUrl($scTrack->user->avatar_url);

					return $track;
				
				break;
		}

	}
}