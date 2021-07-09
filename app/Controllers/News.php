<?php

namespace App\Controllers;

class News extends BaseController
{

    public function index()
    { 
        $currentPage = $this->request->getVar('page_news') ? $this->request->getVar('page_news') :
        1;

        $keyword = $this->request->getVar('keyword');
        if($keyword) {
            $nw = $this->newsModel->search($keyword);
        }
        else {
            $nw = $this->newsModel;
        }

        $data = [
            'title' => 'Daftar Berita',
            'news' => $this->newsModel->paginate (6, 'news'),
            'pager' => $this->newsModel->pager,
            'currentPage' => $currentPage
        ];
        return view('admin/news', $data);  
    }

    public function add_news()
    { 
        // session();
        $data = [
            'title' => 'Add News Form',
            // 'validation' => \Config\Services::validation()
        ];
        return view('admin/add_news', $data);  
    }

    public function save()
    {
        // //validasi
        // if(!$this->validate([
        //     'gambar' => 'uploaded[gambar]'
        // ])){
        //     // $validation = \Config\Services::validation();
        //     // return redirect()->to('/add_news')->withInput()->with('validation', $validation);
        // }

        //ambil gambar
        // $fileSampul = $this->request->getFile('gambar');
        // $fileSampul->move('assets/img');
        // $namaSampul = $fileSampul->getName();

        

        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->newsModel->save([
            // 'gambar' => $namaSampul,
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'keterangan' => $this->request->getVar('keterangan')

        ]);


        session()->setFlashdata('pesan', 'Data Saved!');
        return redirect()->to('/news');
    }

    public function delete($id)
    {
        $this->newsModel->delete($id);

        session()->setFlashdata('pesan', 'Data Berhasil Dihapus!');
        return redirect()->to('/news');
    }

    public function edit_news($slug)
    { 
        $data = [
            'title' => 'Update News Form',
            'news' => $this->newsModel->getNews($slug)
        ];
        return view('admin/edit_news', $data);  
    }

    public function update($id)
    {

        // $fileSampul = $this->request->getFile('gambar');
        // if ($fileSampul->getError() == 4) {
        //     $namaSampul = $this->request->getVar('sampulLama');
        // } else {
        //     $namaSampul = $fileSampul->getName();

        //     $fileSampul->move('assets/img', $namaSampul);

        //     unlink('assets/img' . $this->request->getVar('sampulLama'));
        // }

        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->newsModel->save([
            'id' => $id,
            // 'gambar' => $namaSampul,
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'keterangan' => $this->request->getVar('keterangan')
        ]);

        session()->setFlashdata('pesan', 'Data Updated!');
        return redirect()->to('/news');
    }
}
