<?php
	include_once 'models/config.php';
	//include_once $GLOBALS['project_path']."/models/class/Connect.class.php";
	//include_once $GLOBALS['project_path']."/models/class/Manager.class.php";

	/*
	* Função para carregar as páginas do site (home, about, jobs, contact)
	*/
	function load_pages(){
		if (empty($_GET['op']) || !isset($_GET['op'])) {
			include_once $GLOBALS['project_path']."views/pages/home.phtml";
        } else {

			match ($_GET['op']) {
				'csv2json' => include_once $GLOBALS['project_path']."views/csv2json/index.php",
				'json2csv' => include_once $GLOBALS['project_path']."views/json2csv/index.php",
				'rn_generator' => include_once $GLOBALS['project_path']."views/rn_generator/index.phtml",
				default => include_once $GLOBALS['project_path']."views/erro.phtml",
				// => ,
			};
		}

		/*if (empty($_GET['op']) || !isset($_GET['op'])) {
			include_once $GLOBALS['project_path']."views/pages/home.phtml";
        } else {
            switch ($_GET['op']) {
				case 'csv2json':
                    include_once $GLOBALS['project_path']."views/csv2json/index.php";
                break;
			}
        }*/
    }
?>