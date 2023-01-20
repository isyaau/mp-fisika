<?php

namespace App\Controllers;

class Datamateri extends BaseController
{
   public function index()
   {
      $materi = $this->materiModel;
      $data = [
         'title' => 'Data Materi | Pembelajaran Fisika',
         'materi' => $materi->getMateri()

      ];
      return view('datamateri/index', $data);
   }

   public function create()
   {
      $data = [
         'title' => 'Tambah Data Materi| Pembelajaran Fisika',
         'validation' => \Config\Services::validation()


      ];
      return view('datamateri/create', $data);
   }

   public function save()
   {
      //validasi input
      if (!$this->validate(
         [
            'nama_materi' => [
               'rules' => 'required|is_unique[tb_materi.nama_materi]',
               'errors' => [
                  'required' => 'Nama Materi Harus Diisi.',
                  'is unique' => 'Nama Materi Berhasil Dimasukkan.'
               ]

            ],
            'status' => [
               'rules' => 'required',
               'errors' => [
                  'required' => 'No Status Harus Diisi.',
                  'is unique' => 'No Status Berhasil Dimasukkan.'
               ]

            ]
         ]
      )) {
         return redirect()->to('/datamateri/create')->withInput();
      }


      $this->materiModel->save([
         'nama_materi' => $this->request->getVar('nama_materi'),
         'status' => $this->request->getVar('status'),
      ]);
      session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
      return redirect()->to('/datamateri');
   }

   public function delete($id_materi)
   {

      $this->materiModel->delete($id_materi);
      session()->setFlashdata('pesan', 'Data Berhasil Dihapus.');
      return redirect()->to('/datamateri');
   }

   public function edit($id_materi)
   {
      $data = [
         'title' => 'Ubah Data Materi| Pembelajaran Fisika',
         'validation' => \Config\Services::validation(),
         'datamateri' => $this->materiModel->getMateri($id_materi)

      ];
      return view('datamateri/edit', $data);
   }

   public function update($id_materi)
   {
      //validasi input
      if (!$this->validate(
         [
            'status' => [
               'rules' => 'required',
               'errors' => [
                  'required' => 'No Status Harus Diisi.',

               ]

            ]
         ]
      )) {
         return redirect()->to('/datamateri/edit/' . $this->request->getVar('id_materi'))->withInput();
      }

      $this->materiModel->save([
         'id_materi' => $id_materi,
         'status' => $this->request->getVar('status'),

      ]);
      session()->setFlashdata('pesan', 'Data Berhasil Diubah');
      return redirect()->to('/datamateri');
   }
}
