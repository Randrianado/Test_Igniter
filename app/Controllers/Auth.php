<?php
    namespace App\Controllers;

 
    use App\Models\UserModel;
    use CodeIgniter\Controller;

    class Auth extends Controller{
        public function login(){
            return view('login');
        }

        public function loginProcess(){
            $userModel=new UserModel();

            $username=$this->request->getPost('username');
            $passe=$this->request->getPost('passe');

            $user=$userModel->CreateUser($username);

            if($user){
                if(password_verify($passe,$user["passe"])){
                    session()->set('user',$user);
                    return redirect()->back()->with('error','Mot de passe incorrect');
                }else{
                    return redirect()->back()->with('errror','Utilisateur non trouvé');
                }
            }
        }
        public function logout(){
            session()->destroy();
            return redirect()->to("/login");
        }
    }
?>