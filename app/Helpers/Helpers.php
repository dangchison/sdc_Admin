<?php

class Helper{

	static function active($route){
		$class = "";
		if ( Request::is( $route ) ){
			$class = "active";
		}elseif ( Request::is( $route . "/*" ) ) {
			$class = "nav-active";
		}
		return $class;
	}
}
