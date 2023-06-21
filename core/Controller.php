<?php

class Controller {
    // method untuk memanggil view
    public function view($view, $data = [])
    {
        // memanggil file view
        require_once '../app/views/' . $view . '.php';
    }

    // method untuk memanggil model
    public function model($model)
    {
        // memanggil file model
        require_once '../app/models/' . $model . '.php';
        // instansiasi class model
        return new $model;
    }
}