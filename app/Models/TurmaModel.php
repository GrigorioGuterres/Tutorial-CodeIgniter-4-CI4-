<?php namespace App\Models;

use CodeIgniter\Model;

class TurmaModel extends Model
{
    protected $table      = 'turma';
    protected $primaryKey = 'idTurma';
    protected $allowedFields = ['namaturma', 'Observasi'];

    public function getTurma()
    {
        return $this->findAll();
    }
}
