<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;

class Feedback extends BaseController
{
    
    public function index()
    {
        $feedback= $this->feedbackModel->findAll();
        $data = [
                    'title' => 'Daftar Feedback',
                    'feedback' => $feedback
                ];

         return view('admin/feedback', $data);
}


public function delete($id)
{
    $this->feedbackModel->delete($id);

    session()->setFlashdata('pesan', 'Data Berhasil Dihapus!');

    return redirect()->to('/feedback');
}
   
}