<?php
/*
Plugin Name: Red banner
Plugin URI: redacademy.com
Description:Adding function to create a custom banner
Version: 0.1
Author: Your name
*/
class header {

	/* Constructor */
	function __construct() {
		$this->primary_banner_image = get_field("primary_banner_image");
	}

	/* Banner Functions */
	public function banner_class(){
			if ($this->primary_banner_image == null || is_post_type_archive() || is_search()) {
				self::hide_banner();
			} else {
				self::show_banner();
			}	
	}
	private function show_banner(){
		$this -> display = "banner-show";
		self::render_banner();
	}
	private function hide_banner(){
		$this -> display = "banner-hide";
		self::render_banner();
	}
	private function render_banner(){
		 echo $this -> display;
	}
	public function banner_image(){
		if ($this->primary_banner_image == null || is_post_type_archive() || is_search()) {	
		} else {
		echo "background: url('./wp-content/themes/ra-project05/assets/images/logos/inhabitent-logo-full.svg') center center / 20% no-repeat, linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('".get_field('primary_banner_image')."')center 10% / cover no-repeat;</style>";
		}
	}

	/* Logo Functions */
	public function logo_image() {
			if ($this->primary_banner_image == null || is_post_type_archive() || is_search()) {
				echo "white-logo";
			} else {
				echo "green-logo";
			}	
	}
}

?>
