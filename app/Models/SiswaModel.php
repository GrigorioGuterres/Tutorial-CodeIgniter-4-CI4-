<?php namespace App\Models;

use CodeIgniter\Model;

class SiswaModel extends Model
{
    protected $table      = 'siswa';
    protected $primaryKey = 'id_siswa';

    protected $allowedFields = ['nama', 'tanggal_lahir', 'id_turma', 'id_materi', 'obs'];

    public function getSiswaJoin()
    {
        $builder = $this->db->table('siswa');
        $builder->select('siswa.*, turma.namaturma, materi.namaMateri');
        $builder->join('turma', 'turma.idTurma = siswa.id_turma');
        $builder->join('materi', 'materi.idMateri = siswa.id_materi');

        return $builder->get()->getResultArray();
    }

    public function insertSiswa($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    public function updateSiswa($id, $data)
    {
        return $this->db->table($this->table)->where($this->primaryKey, $id)->update($data);
    }

    public function deleteSiswa($id)
    {
        return $this->db->table($this->table)->where($this->primaryKey, $id)->delete();
    }
}
