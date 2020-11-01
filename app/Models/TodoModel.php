<?php namespace App\Models;

use CodeIgniter\Model;

class TodoModel extends Model {
    protected $table = 'task';

    public function getTodos() {
        return $this->findAll();
    }
}