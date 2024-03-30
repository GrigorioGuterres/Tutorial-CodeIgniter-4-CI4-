<?php namespace App\Controllers;

use App\Models\TurmaModel;
use App\Models\MateriModel;
use App\Models\SiswaModel;

class Home extends BaseController
{
    public function index()
    {
        return redirect()->to('/turma');
    }

    public function turma()
    {
        $model = new TurmaModel();
        $data['turma'] = $model->getTurma();

        return view('turma/turma_view', $data);
    }

    public function saveTurma()
    {
        $model = new TurmaModel();
        $data = [
            'namaturma' => $this->request->getPost('namaturma'),
            'Observasi' => $this->request->getPost('Observasi')
        ];

        $model->insert($data);

        return redirect()->to('/turma');
    }

    public function updateTurma($id)
    {
        $model = new TurmaModel();
        $data = [
            'namaturma' => $this->request->getPost('namaturma'),
            'Observasi' => $this->request->getPost('Observasi')
        ];

        $model->update($id, $data);

        return redirect()->to('/turma');
    }

    public function deleteTurma($id)
    {
        $model = new TurmaModel();
        $model->delete($id);

        return redirect()->to('/turma');
    }

    public function materi()
    {
        $model = new MateriModel();
        $data['materi'] = $model->getMateri();

        return view('materi/materi_view', $data);
    }

    public function saveMateri()
    {
        $model = new MateriModel();
        $data = [
            'namaMateri' => $this->request->getPost('namaMateri'),
            'keterangan' => $this->request->getPost('keterangan')
        ];

        $model->insert($data);

        return redirect()->to('/materi');
    }

    public function updateMateri($id)
    {
        $model = new MateriModel();
        $data = [
            'namaMateri' => $this->request->getPost('namaMateri'),
            'keterangan' => $this->request->getPost('keterangan')
        ];

        $model->update($id, $data);

        return redirect()->to('/materi');
    }

    public function deleteMateri($id)
    {
        $model = new MateriModel();
        $model->delete($id);

        return redirect()->to('/materi');
    }

    public function siswa()
    {
        $model = new SiswaModel();
        $data['siswa'] = $model->getSiswaJoin();

        $modelTurma = new TurmaModel();
        $data['turma'] = $modelTurma->getTurma();

        $modelMateri = new MateriModel();
        $data['materi'] = $modelMateri->getMateri();

        return view('siswa/siswa_view', $data);
    }

    public function saveSiswa()
    {
        $model = new SiswaModel();
        $data = [
            'nama' => $this->request->getPost('nama'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
            'id_turma' => $this->request->getPost('id_turma'),
            'id_materi' => $this->request->getPost('id_materi'),
            'obs' => $this->request->getPost('obs')
        ];

        $model->insertSiswa($data);

        return redirect()->to('/siswa');
    }

    public function updateSiswa($id)
    {
        $model = new SiswaModel();
        $data = [
            'nama' => $this->request->getPost('nama'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
            'id_turma' => $this->request->getPost('id_turma'),
            'id_materi' => $this->request->getPost('id_materi'),
            'obs' => $this->request->getPost('obs')
        ];

        $model->updateSiswa($id, $data);

        return redirect()->to('/siswa');
    }

    public function deleteSiswa($id)
    {
        $model = new SiswaModel();
        $model->deleteSiswa($id);

        return redirect()->to('/siswa');
    }
}
