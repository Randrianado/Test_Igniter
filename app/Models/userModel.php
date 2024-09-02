<?php
    namespace App\Models;
    use CodeIgniter\Model;

    class UserModel extends Model{
        protected $table='user';
        protected $primarykey='id';
        protected $alal=["username","passe","adresse"];
        public function CreateUser($username){
            return $this->where('username',$username)->first();
        }
    }
?>