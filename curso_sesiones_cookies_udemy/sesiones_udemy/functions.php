<?php

function mostrar_warnings(){
    ini_set("display_errors", true);
    error_reporting(E_ALL);
}
function imprime_sesiones(){
    if (isset($_SESSION)) {
        echo '<pre>';
        echo htmlspecialchars(print_r($_SESSION, true));
        echo '</pre>';
    }
}
function imprime_bonito_cookies(){
    if (isset($_COOKIE)) {
        echo '<pre>';
        echo htmlspecialchars(print_r($_COOKIE, true));
        echo '</pre>';
    }
}
function imprime_bonito_post(){
    if (isset($_POST)) {
        echo '<pre>';
        echo htmlspecialchars(print_r($_POST, true));
        echo '</pre>';
    }
}
function imprime_bonito_files(){
    if ($_POST) {
        echo '<pre>';
        echo htmlspecialchars(print_r($_FILES, true));
        echo '</pre>';
    }
}
function imprime_bonito_array($arr){
    echo '<pre>';
    echo htmlspecialchars(print_r($arr, true));
    echo '</pre>';
}