<?php namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model {
    protected $table = 'user';
    protected $allowedFields = ['username','password','firstname','lastname'];

    public function check($username, $password) {
        $this->where('username',$username);
        $query = $this->get();
        $row = $query->getRow();
        if ($row) {
            if (password_verify($password,$row->password)) {
            return $row;
            }
        }
        return null;
    }
}