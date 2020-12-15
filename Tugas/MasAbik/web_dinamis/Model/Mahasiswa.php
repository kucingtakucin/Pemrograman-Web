<?php namespace Model\Mahasiswa;

use PDO;
use PDOException;

class Mahasiswa {
    private $dbh;
    private $dbname = 'prak_pemweb';
    private $user = 'root';
    private $pass = 'namaku123';
    private $stmt;

    /**
     * Mahasiswa constructor.
     */
    public function __construct()
    {
        $options = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];
        try {
            $this->dbh = new PDO("mysql:host=127.0.0.1;dbname=$this->dbname", $this->user, $this->pass, $options);
        } catch (PDOException $exception) {
            die($exception);
        }
    }

    /**
     * @return array
     */
    public function fetchAll(): array
    {
        $this->stmt = $this->dbh->query('SELECT * FROM mahasiswa');
        return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }

    /**
     * @param int $nim
     * @return mixed
     */
    public function fetch(int $nim)
    {
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa WHERE nim = :nim');
        $this->stmt->bindValue('nim', $nim, PDO::PARAM_INT);
        $this->stmt->execute();
        return $this->stmt->fetch(PDO::FETCH_OBJ);
    }

    /**
     * @param array $mahasiswa
     * @return bool
     */
    public function insert(array $mahasiswa): bool
    {
        $this->stmt = $this->dbh->prepare(
            'INSERT INTO mahasiswa (nama, jenis_kelamin, tempat_lahir, tanggal_lahir, jurusan, alamat, no_hp, email) 
                    VALUES (:nama, :jenis_kelamin, :tempat_lahir, :tanggal_lahir, :jurusan, :alamat, :no_hp, :email)'
        );
        $this->stmt->bindValue('nama', $mahasiswa['nama'], PDO::PARAM_STR);
        $this->stmt->bindValue('jenis_kelamin', $mahasiswa['jenis_kelamin'], PDO::PARAM_STR);
        $this->stmt->bindValue('tempat_lahir', $mahasiswa['tempat_lahir'], PDO::PARAM_STR);
        $this->stmt->bindValue('tanggal_lahir', $mahasiswa['tanggal_lahir'], PDO::PARAM_STR);
        $this->stmt->bindValue('jurusan', $mahasiswa['jurusan'], PDO::PARAM_STR);
        $this->stmt->bindValue('alamat', $mahasiswa['alamat'], PDO::PARAM_STR);
        $this->stmt->bindValue('no_hp', $mahasiswa['no_hp'], PDO::PARAM_STR);
        $this->stmt->bindValue('email', $mahasiswa['email'], PDO::PARAM_STR);
        return $this->stmt->execute();
    }

    /**
     * @param array $mahasiswa
     * @return bool
     */
    public function update(array $mahasiswa): bool
    {
        $this->stmt = $this->dbh->prepare(
            "UPDATE mahasiswa SET nama = :nama, jenis_kelamin = :jenis_kelamin, tempat_lahir = :tempat_lahir, 
                    jurusan = :jurusan, alamat = :alamat, no_hp = :no_hp, email = :email WHERE nim = :nim"
        );
        $this->stmt->bindValue('nama', $mahasiswa['nama'], PDO::PARAM_STR);
        $this->stmt->bindValue('jenis_kelamin', $mahasiswa['jenis_kelamin'], PDO::PARAM_STR);
        $this->stmt->bindValue('tempat_lahir', $mahasiswa['tempat_lahir'], PDO::PARAM_STR);
        $this->stmt->bindValue('tanggal_lahir', $mahasiswa['tanggal_lahir'], PDO::PARAM_STR);
        $this->stmt->bindValue('jurusan', $mahasiswa['jurusan'], PDO::PARAM_STR);
        $this->stmt->bindValue('alamat', $mahasiswa['alamat'], PDO::PARAM_STR);
        $this->stmt->bindValue('no_hp', $mahasiswa['no_hp'], PDO::PARAM_STR);
        $this->stmt->bindValue('email', $mahasiswa['email'], PDO::PARAM_STR);
        $this->stmt->bindValue('nim', $mahasiswa['nim'], PDO::PARAM_INT);
        return $this->stmt->execute();
    }

    /**
     * @param array $mahasiswa
     * @return bool
     */
    public function delete(array $mahasiswa): bool
    {
        $this->stmt = $this->dbh->prepare('DELETE FROM mahasiswa WHERE nim = :nim');
        $this->stmt->bindValue('nim', $mahasiswa['id'], PDO::PARAM_INT);
        return $this->stmt->execute();
    }
}