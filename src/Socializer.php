<?php 

namespace VerveSearch\Plugins; 

/**
 * 
 * 
 * 
 */
class Socializer {
	public function __construct(){
		
	}

	/**
	 * Generates facebook share URL given the url and text. 
	 * @param string $url the url to generate the share link for
	 * @param string $text the text to add to the share story (max 150 characters)
	 * @return string the Facebook share URL. 
	 */
	public function generateFacebookUrl($url,$text){

	}

	public function generateTwitterUrl($url,$text,$via=null,$hashtags=null){

	}

	public function generateGooglePlusUrl($url){

	}

	public function generateLinkedInUrl($url,$extra=[]){

	}
}