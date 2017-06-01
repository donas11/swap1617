<?php

class Estadistica {

    private $usuario;
    private $fecha;
    private $ipservidor;
    private $memoria_total;
    private $memoria_libretotal;
    private $memoria_usada;
    private $pmemoria_usada;
    private $cpu;
    private $ipcliente;
    private $sistema;
    private $navegador;
    private $resolucion;
    private $tiempo_acceso;


    function __construct() {
               
    }

    function setestadistica($usuario,$fecha,$ipservidor,$memoria_total,$memoria_libretotal,$memoria_usada,$pmemoria_usada,$cpu,$ipcliente,$sistema,$navegador,$resolucion) {
        $this->usuario=$usuario;
        $this->fecha=$fecha;
        $this->ipservidor=$ipservidor;
        $this->memoria_total=$memoria_total;
        $this->memoria_libretotal=$memoria_libretotal;
        $this->memoria_usada=$memoria_usada;
        $this->pmemoria_usada=$pmemoria_usada;
        $this->cpu=$cpu;
        $this->ipcliente=$ipcliente;
        $this->sistema=$sistema;
        $this->navegador=$navegador;
        $this->resolucion=$resolucion;
    }

    function set_usuario($idname) {
        $this->usuario=$id;       
    }
    function set_tiempoacceso($tiempo_acceso){
        $this->tiempo_acceso=$tiempo_acceso;
    }
    function get_id(){
        return $this->usuario;
    }
    function get_fecha(){
        return $this->fecha;
    }
    function get_ipservidor(){
        return $this->ipservidor;
    }
    function get_memoria_total(){
        return $this->memoria_total;
    }
    function get_memoria_libretotal(){
        return $this->memoria_libretotal;
    }
    function get_memoria_usada(){
        return $this->memoria_usada;
    }
    function get_pmemoria_usada(){
        return $this->pmemoria_usada;
    }
    function get_cpu(){
        return $this->cpu;
    }
    function get_ipcliente(){
        return $this->ipcliente;
    }
    function get_sistema(){
        return $this->sistema;
    }
    function get_navegador(){
        return $this->navegador;
    }
    function get_resolucion(){
        return $this->resolucion;
    }
    function get_tiempoacceso(){
        return $this->tiempo_acceso;
    }    
}

?>