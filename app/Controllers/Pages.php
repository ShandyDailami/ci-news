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
        helper('form');

        $data['errors'] = session()->getFlashdata('errors');

        return view('templates/header', ['title' => 'Tambah Berita'])
            . view('news/create', $data)
            . view('templates/footer');
    }

    public function create()
    {
        helper('form');

        $data = $this->request->getPost(['title', 'content']);
        if (
            !$this->validateData($data, [
                'title' => 'required',
                'content' => 'required',
            ])
        ) {
            session()->setFlashdata('errors', $this->validator->getErrors());
            return $this->createPage();
        }

        $post = $this->validator->getValidated();
        $model = new News();
        $model->save([
            'title' => $post['title'],
            'content' => $post['content'],
        ]);

        return view('templates/header', ['title' => 'Tambah Berita'])
            . view('news/create')
            . view('templates/footer');
    }
}
