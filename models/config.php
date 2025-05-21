<?php
    #Configuração de Rotas
	$project_name = "/app_ideas/"; //Quando estiver desenvolvendo em localhost, utilizar este caminho
    //$project_name = "/"; //Quando subir pra Internet, utilizar este caminho
    $project_index = "http://".$_SERVER['SERVER_NAME'].$project_name;

    $GLOBALS['project_index'] = $project_index;
    $GLOBALS['project_path'] = $project_path;
?>