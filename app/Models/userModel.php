<?php
    namespace App\Models;
    use CodeIgniter\Model;

    class UserModel extends Model{
        protected $table='users';
        protected $id='id';
        protected $data=['nom','email','passe','numero','solde','confpasse'];

        public function getUser($id){
            return $this->find($id);
        }
        public function getUserByNumero($numero){
            return $this->where('numero',$numero)->first();
        }
        public function isEmail($email){
            return $this->where('email',$email)->findAll();
        }
        public function isNom($name){
            return $this->where('nom',$name)->first();
        }

        private function generNumero(){
            do {
                $carte=str_pad(rand(0,999999),6,'0',STR_PAD_LEFT);
                $existeCart=$this->where('numero',$carte)->first();
            } while ($existeCart);
            return $carte;
        }
        public function createUser($name,$email,$passe,$confpasse){
            $carte=$this->generNumero();
            // $nom=$this->isNom($name);
            // $em=$this->isEmail($email);
            // if($nom && $em){
            //     $test=true;
            // }else{
            //     $test=false;
            // }
            $data=[
                "nom"=>$name,
                "email"=>$email,
                "passe"=>password_hash($passe,PASSWORD_BCRYPT),
                "numero"=>$carte,
                "solde"=>0,
                "confpasse"=>password_hash($confpasse,PASSWORD_BCRYPT)
            ];
            // if($test){
                return $this->insert($data);
            // }else{
            //     return false;
            // }
        }

        public function updateSolde($id,$amount,$numero){
            $this->set('solde','solde+'.(float)$amount,FALSE);
            $this->where('id',$id);
            $this->where('numero',$numero);
            return $this->update();
        }

        public function verifyUser($name,$numero,$passe){
            $user=$this->getUserByNumero($numero);
            $nom=$this->isNom($name);
            if($user && $nom && password_verify($passe,$user["passe"])){
                return $user;
            }
            return false;
        }
    }
?>