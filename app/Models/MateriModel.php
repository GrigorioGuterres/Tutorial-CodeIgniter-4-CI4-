<?php namespace App\Models;

use CodeIgniter\Model;

class MateriModel extends Model
{
    protected $table      = 'materi';
    protected $primaryKey = 'idMateri';
    protected $allowedFields = ['namaMateri', 'keterangan'];

    public function getMateri()
    {
        return $this->findAll();
    }
}
