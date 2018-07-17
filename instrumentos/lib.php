<?php

init();

function init() {
    if(file_exists(dirname(__FILE__).'/config.php')){
        require_once(dirname(__FILE__).'/config.php');
    } else {
        die(utf8_decode('O arquivo de configuração não foi encontrado, entre em contato com o administrador: admin@email.com'));
    }

    if(!defined("BASE_PATH") || !defined("BASE_URL")) {
        die(utf8_decode('Faltam arquivos de configurações basicas do sistema, entre em contato com o administrador: admin@email.com'));
    }

    require_once(BASE_PATH.CLASSES_PATH.'autoload.php');
}

function load_css($arquivo = null, $media = 'screen', $import = FALSE) {
    if ($arquivo != null) {
        if($import == true) {
            echo '<style type="text/css">@import url("'.CSS_PATH.$arquivo.'.css");</style>';
        } else {
            echo '<link rel="stylesheet" type="text/css" href="'.CSS_PATH.$arquivo.'.css" media="'.$media.'" />';
        }
    }
}

function load_js($file = null, $remote_file = false) {
    if($file != null) {
        if($remote_file == false) $file = JS_PATH.$file.'.js';
        echo '<script src="'.$file.'"></script>';
    }
}