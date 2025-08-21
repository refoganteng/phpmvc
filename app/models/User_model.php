<?php
class User_model
{
    private $nama = 'Revo Nando Aningrum'; //ini bisa dari database/API

    public function getUser()
    {
        return $this->nama;
    }
}
