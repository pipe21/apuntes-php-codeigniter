<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Menu 
	{
		private $arr_menu;
		public function __construct($arr_menu){
			$this->arr_menu = $arr_menu;
		}

		public function construirMenu(){

			$ret_menu ="<nav><ul>";
			foreach ($this->arr_menu as $opcion) {

				$ret_menu .= "<li>".$opcion."</li>";
			}
			$ret_menu .="</ul></nav>";
			return $ret_menu;
		}
	}
 ?>