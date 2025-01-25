<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\News;
use CodeIgniter\HTTP\ResponseInterface;

class Pages extends BaseController
{
    public function index()
    {
        $model = new News();
        $data['news_list'] = $model->findAll();
        return view('templates/header', ['title' => 'Beranda'])
            . view('news/index', $data)
            . view('templates/footer');
    }

    public function createPage()
    {

        return view('templates/header', ['title' => 'Tambah Berita'])
            . view('news/create')
            . view('templates/footer');
    }

    public function create()
    {
        helper('form');

        $data = $this->request->getPost(['title', 'content']);
        if (
            !$this->validateData($data, [
                'title' => 'required|max_length[255]|min_length[3]',
                'content' => 'required|max_length[5000]|min_length[10]'
            ])
        ) {
            return redirect()->to('/new')->withInput()->with('errors', $this->validator->getErrors());
        }
        $model = new News();
        $model->save([
            'title' => $this->request->getPost('title'),
            'content' => $this->request->getPost('content'),
        ]);

        session()->setFlashdata('message', 'Berita berhasil ditambahkan');

        return redirect()->to('/');

    }

    public function edit($id)
    {
        $model = new News();

        $data = [
            'news_item' => $model->find($id),
        ];

        return view('templates/header', ['title' => 'Edit Berita'])
            . view('admin/edit', $data)
            . view('templates/footer');
    }

    public function update($id)
    {
        helper(['form', 'url']);
        $data = $this->request->getPost(['title', 'content']);
        if (
            !$this->validate([
                'title' => 'required|max_length[255]|min_length[3]',
                'content' => 'required|max_length[5000]|min_length[10]',
            ])
        ) {
            return view('templates/header', ['title' => 'Edit Berita'])
                . view('admin/edit', [
                    'post' => $data,
                    'validation' => $this->validator
                ])
                . view('templates/footer');
        }
        $model = new News();
        $model->update($id, [
            'title' => $data['title'],
            'content' => $data['content']
        ]);

        session()->setFlashdata('message', 'Berita Berhasil Diupdate');
        return redirect()->to('/admin');
    }

    public function delete($id)
    {
        $model = new News();

        $news_item = $model->find($id);
        if (!$news_item) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Berita tidak ditemukan');
        }

        $model->delete($id);

        session()->setFlashdata('message', 'Berita berhasil dihapus');
        return redirect()->to('/admin');
    }
}
