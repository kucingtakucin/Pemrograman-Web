<?php namespace Controller\Mahasiswa;

use Model\Mahasiswa\Mahasiswa as MahasiswaModel;

class Mahasiswa {
    public MahasiswaModel $mahasiswa;

    /**
     * Mahasiswa constructor.
     */
    public function __construct()
    {
        $this->mahasiswa = new MahasiswaModel();
    }

    /**
     * @param array $mahasiswa
     * @return bool
     */
    public function insert(array $mahasiswa): bool
    {
        return $this->mahasiswa->insert($mahasiswa);
    }

    /**
     * @param string $nim
     * @return mixed
     */
    public function edit(string $nim)
    {
        return $this->mahasiswa->fetch($nim);
    }

    /**
     * @param array $mahasiswa
     * @return bool
     */
    public function update(array $mahasiswa): bool
    {
        return $this->mahasiswa->update($mahasiswa);
    }

    /**
     * @param array $mahasiswa
     * @return bool
     */
    public function delete(array $mahasiswa): bool
    {
        return $this->mahasiswa->delete($mahasiswa);
    }
}