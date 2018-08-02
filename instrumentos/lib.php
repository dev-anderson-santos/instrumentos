<?php

init();

proteger_arquivo(basename(__FILE__));

function init() {
    if(file_exists(dirname(__FILE__). DIRECTORY_SEPARATOR .'config.php')){
        require_once(dirname(__FILE__). DIRECTORY_SEPARATOR .'config.php');
    } else {
        die(utf8_decode('O arquivo de configuração não foi encontrado, entre em contato com o administrador: admin@email.com'));
    }

    $constantes = [
        'BASE_PATH',
        'BASE_URL',
        'ADM_URL',
        'CLASSES_PATH',
        'MODULOS_PATH',
        'CSS_PATH',
        'JS_PATH',
        'IMG_PATH',
        'VIEW_PATH',
        'DB_HOST',
        'DB_USER',
        'DB_PW',
        'DB_NAME',
    ];

    foreach ($constantes as $value) {
        if(!defined($value)) {
            die(utf8_decode('Faltam arquivos de configurações basicas do sistema, entre em contato com o administrador: admin@email.com: ' . $value));
        }        
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

function load_modulo($modulo = null, $tela = null) {
    if($modulo == null || $tela == null) {
        echo '<p>Erro na função <strong>'.__FUNCTION__.'</strong>: faltam parâmetro para execuçao</p>';
    } else {
        if(file_exists(MODULOS_PATH."$modulo.php")) {
            include_once(MODULOS_PATH."$modulo.php");
        } else {
            echo '<p>Módulo inexistente neste sistema</p>';
        }
    }
}

function proteger_arquivo($filename, $redirec_to = 'index.php?erro=3') {
    $url = $_SERVER["PHP_SELF"];
    if(preg_match("/$filename/i", $url)) {
        redirect($redirec_to);
    }
}

function redirect($url = '') {
    header("Location: " . BASE_URL.$url);
}

