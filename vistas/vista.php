<?php


/*
 * 
 */

/**
 * Description of vista
 *
 * @author JuanDiego
 * 
 * Vistas con las que se construyen las páginas con bloques de html o php
 */
class vista {
   
    public function cabecero() {
        require_once  '../bloqueshtml/cabecero.php';
    }
    public function metalinks() {
        
    }
    public function menudesarrollado() {
        require_once  '../bloqueshtml/menu-desarrollado.html';
    }
    public function pie() {
        require_once '../bloqueshtml/pie.html';
    }
    
    public function scripts() {
        require_once '../bloqueshtml/script.html';
    }
}
