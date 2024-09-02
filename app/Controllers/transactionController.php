<?php
    namespace App\Controllers;

    use App\Models\UserModel;
    use App\Models\TransactionModel;
    use CodeIgniter\Controller;

    class Bank extends Controller{
        protected $userModel;
        protected $TransactionModel;

        public function __construct()
        {
            $this->userModel=new UserModel();
            $this->TransactionModel=new TransactionModel();
        }

        public function index($userId){

            $user=$this->userModel->getUser($userId);
            $transaction=$this->TransactionModel->getTransaction($userId);
            return view('bank/index',["user"=>$user,'transaction'=>$transaction]);
        }

        public function depot($userId){
            if($this->request->getMethod()==='post'){
                $amount=$this->request->getPost('Price');
                $numero=$this->request->getPost('numero');
                $this->userModel->updateSolde($userId,$amount,$numero);
                $this->TransactionModel->AddTransaction($userId,'Depot',$amount);
                return redirect()->to('bank/index/'.$userId);
            }else{
                return view('bank/Depot',['user'=>$this->userModel->getUser($userId)]);
            }
        }

        public function Retrait($userId){
            if($this->request->getMethod()==='post'){
                $amount=$this->request->getPost('Price');
                $numero=$this->request->getPost('numero');
                $this->userModel->updateSolde($userId,-$amount,$numero);
                $this->TransactionModel->AddTransaction($userId,'Retrait',$amount);
                return redirect()->to('bank/index/'.$userId);
            }else{
                return view('bank/Retrait',['user'=>$this->userModel->getUser($userId)]);
            }
        }

        public function Emprunt($userId){
            if($this->request->getMethod()==='post'){
                $amount=$this->request->getPost('price');
                $duedate=$this->request->getPost('date');
                $numero=$this->request->getPost('numero');
                if(strtotime($duedate)>time()){
                    $this->userModel->updateSolde($userId,-$amount,$numero);
                    $this->TransactionModel->AddTransaction($userId,'Emprunt',$amount);
                    // $this->TransactionModel->deadline_Date();
                    return redirect()->to('bank/index/'.$userId);
                }else{
                    $data['error']='La date de remboursement doit etre dans le futur!';
                    return view('bank/Emprunt',$data);
                }
            }else{
                return view('bank/Emprunt',['user'=>$this->userModel->getUser($userId)]);
            }
        }
        public function Transaction() {
            return redirect()->to('bank/transaction');
        }
    }
?>