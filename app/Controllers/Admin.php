<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\News;
use CodeIgniter\HTTP\ResponseInterface;

class Admin extends BaseController
{
    public function index()
    {
        $model = new News();
        $data['news_list'] = $model->findAll();
        return view('templates/adminHeader', ['title' => 'Admin'])
            . view('admin/dashboard', $data)
            . view('templates/footer');
    }
}
