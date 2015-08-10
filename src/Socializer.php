<?php 

namespace VerveSearch\Plugins; 

/**
 *  Plugin to generate Social Sharing links;
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

	 

		public function __call($methods, $params){	 
			try { 
	    		$results = call_user_func_array($methods, $params);
			} catch(Exception $ex) {
	    			echo 'Catched!';
			}
		}

 

		public function generateFacebookUrl($url,$title=null,$summary=null,$image=null){
			$shareUrl  = 'https://www.facebook.com/sharer/sharer.php?s=100&p[url]='.$url;
			if($image){
				$shareUrl = '&p[images][0]='.$image;
			}
			if($title){
				$shareUrl = '&p[title]='.$title;
			}
			if($summary){
				$shareUrl = '&p[summary]='.$summary;
			}

			return $shareUrl; 	 
		}

		/**
		 * Generates twitter share URL given the url and text, via and hashrags are optional
		 * @param string $url the url to generate the share link for twetter
		 * @param string $text the text to tweet (max 150 characters)
		 * @param string $via the channel name. No '@'
		 * @param string $hashtags the list of comma-separeted hashtags, no '#'
		 * @return string the Twitter share URL. 
		 */

		public function generateTwitterUrl($url,$text,$via=null,$hashtags=null){
			$shareUrl  ='https://twitter.com/intent/tweet?text=';
			$shareUrl .= urlencode($text);
			if($hashtags){
				$shareUrl .= '&hashtags='.$hashtags;
			}
			if($via){
				$shareUrl  .= '&via='.$via;
			}
			return $shareUrl;
		}

		/**
		 * Generates GPlus share URL given the url and text, via and hashrags are optional
		 * @param string $url the url to generate the share link for twetter
		 * @return string the GPlus share URL. 
		 */

		public function generateGooglePlusUrl($url){
			$shareUrl  = 'https://plus.google.com/share?url=';
			$shareUrl .= $url;
			return  ($shareUrl);
		}

		/**
		 * Generates LinkedIn share URL given the url and extra fields (optional)
		 * @param string $url the url to generate the share link for twetter
		 * @param string $extra['title'] the text to tweet (max 150 characters)
		 * @param string $extra['summary'] the channel name. No '@'
		 * @param string $extra['source'] the list of comma-separeted hashtags, no '#'
		 * @return string the LinkedIn share URL
		 */

		public function generateLinkedInUrl($url,$extra=[]){
			$shareUrl = 'https://www.linkedin.com/shareArticle?mini=true&url=';
			$shareUrl .= urlencode($url);
			if($extra['title']){
				$shareUrl .=  '&title='. urlencode($extra['title']);
			
			if($extra['summary']){
				$shareUrl .=  '&summary='. urlencode($extra['summary']);
			}
			 if($extra['source']){
				$shareUrl .=  '&source='.  urlencode($extra['source']);
			}
			return $shareUrl;
		}
	}
}


 
