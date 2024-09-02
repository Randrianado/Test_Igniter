<?php
    namespace App\Models;
    use CodeIgniter\Model;

    class TransactionModel extends Model{
        protected $table='transaction';
        protected $primarykey='id';
        protected $all=['id_users','nom','date','limite_date','amount'];

        public function getTransaction($user_id){
            return $this->where('id_users',$user_id)->findAll();
        }

        public function AddTransaction($user_id,$nom,$amount){
            $data=[
                "id_users"=>$user_id,
                "nom"=>$nom,
                "amount"=>$amount,
                "date"=>date('Y-m-d H:i:s')
            ];
            return $this->insert($data);
        }

        // public function deadline_Date(){
        //     $this->where('nom','emprunt');
        //     $this->where('limite_date<',date('Y-m-d'));
        //     return $this->where('date')->findAll();
        // }
    }
?>