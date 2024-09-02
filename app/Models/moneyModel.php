<?php
    namespace App\Models;
    use CodeIgniter\Model;

    class ProductModel extends Model{
        protected $table='users';
        protected $primarykey='id';
        protected $all=['numero','price','password','confpassword'];
    }
?>