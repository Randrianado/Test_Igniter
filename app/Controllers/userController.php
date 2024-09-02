<?php
    namespace App\Controllers;

 
    use App\Models\UserModel;
    use CodeIgniter\Controller;

    class Auth extends Controller{
        protected $userModel;

        public function __construct()
        {
            $this->userModel=new UserModel();
        }
        
        public function index(){
            return view('auth/index');
        }


        public function register(){
            if($this->request->getMethod()==="post"){
                $name=$this->request->getPost('name');
                $email=$this->request->getPost('email');
                $passe=$this->request->getPost('password');
                $confpasse=$this->request->getPost("confpassword");

                if($this->userModel->isEmail($email)){
                    $data['error']='Email ou Nom deja utilisé';
                    return view('auth/regiser',$data);
                }else{
                    $this->userModel->createUser($name,$email,$passe,$confpasse);
                    $nv_user=$this->userModel->isEmail($email);
                    $data['carte']=$nv_user["carte"];
                    return view('auth/register',$data);
                }
            }else{
                return view('auth/register');
            }
        }
        public function login(){
            if($this->request->getMethod()==='post'){
                $name=$this->request->getPost('name');
                $numero=$this->request->getPost('numero');
                $passe=$this->request->getPost('password');

                $user=$this->userModel->verifyUser($name,$numero,$passe);
                if($user){
                    session()->set('user_id',$user["id"]);
                    return redirect()->to('bank/index/'.$user["id"]);
                }else{
                    $data["error"]='Nom ou numero ou mot de passe Incorrecte';
                    return view('auth/login',$data);
                }
            }else{
                return view('auth/login');
            }
        }

        public function logout() {
            session()->destroy('user_id');
            return redirect()->to('auth/login');
        }
    }
?>