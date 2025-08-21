<?php
class Controller
{
    public function view($view, $data = [])
    {
        if (!empty($data)) {
            extract($data); // sekarang $nama, $hobi, $umur bisa dipakai langsung
        }
        require_once '../app/views/' . $view . '.php';
    }

    public function model($model)
    {
        require_once '../app/models/' . $model . '.php';
        return new $model;
    }
}
