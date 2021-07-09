<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {

    $news = $this->newsModel->findAll();
    $data = [
        'title' => 'Daftar Berita',
        'news' => $news
    ];
    return view('pages\home', $data);
    }

    public function detail($slug)
    {
        $news = $this->newsModel->getNews($slug);
        $data = [
            'tittle' => 'Detail News',
            'news' => $news
        ];
        return view('pages\detail', $data);
    }

    public function create()
{ 
    $data = [
        'title' => 'Add Feedback',
    ];

    return view('index', $data);  
}

public function save()
{
  
    $this->feedbackModel->save([
        'nama' => $this->request->getVar('nama'),
        'email' => $this->request->getVar('email'),
        'nomor' => $this->request->getVar('nomor'),
        'keterangan' => $this->request->getVar('keterangan')

    ]);

    return redirect()->to('/');
}

}

