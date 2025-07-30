<?php
class Nyoba
{
    public function index()
    {
        echo '/nyoba/index';
    }

    public function nyobain($nama = "[Nama]", $hobi = "[Hobi]") {
        echo "Nama saya adalah $nama, hobi saya adalah $hobi";
    }
}
