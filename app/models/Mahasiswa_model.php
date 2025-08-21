<?php
class Mahasiswa_model
{
    // private $mhs = [
    //     [
    //         "nama" => "Revo Nando",
    //         "nim" => "16.9378",
    //         "email" => "refonndd@gmail.com",
    //         "jurusan" => "Statistika"
    //     ],
    //     [
    //         "nama" => "Riko Dwi Vahyo",
    //         "nim" => "16.8999",
    //         "email" => "rikodc@gmail.com",
    //         "jurusan" => "Komputer"
    //     ],
    //     [
    //         "nama" => "Cesar Hadiansyah",
    //         "nim" => "16.5790",
    //         "email" => "cesarhdy@gmail.com",
    //         "jurusan" => "Bahasa Konoha"
    //     ]
    // ];

    private $dbh;
    private $stmt;

    public function __construct() {
    //data source name
        $dsn = 'mysql:host=localhost;dbname=phpmvc';

        try {
            $this->dbh = new PDO($dsn,'root', '');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getAllMahasiswa()
    {
        // return $this->mhs;

        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
    $this->stmt->execute();
    return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
