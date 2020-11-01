<?php 

namespace App\Controllers;

use App\Models\TodoModel;

class Todo extends BaseController
{
    public function index() {
        $model = new TodoModel();
        $data['title'] = 'Todo';
        $data['todos'] = $model->getTodos();
        echo view('templates/header',$data);
        echo view('todo/list',$data);
        echo view('templates/footer',$data);
    }
}