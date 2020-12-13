<?php
  class Users extends Controller {
    public function __construct(){

      $this->userModel = $this->model('User');

    }

    public function register(){
      // Check for POST
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
      // Procces form
  
      // Sanitize Post data

      // Sanitizing data = Remove any illegal character from the data.
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $data =[
          // Trim to remove white spaces
          'userlogin' => trim($_POST['userlogin']),
         
          'password' => trim($_POST['password']),
          'confirm_password' => trim($_POST['confirm_password']),
          'userlogin_err' => '',
     
          'password_err' => '',
          'confirm_password_err' => ''
        ];
        //Validating data = Determine if the data is in proper form.

        if(empty($data['userlogin'])) {
          $data['userlogin_err'] = 'Vous devez entrer voutre nom';
        }
          else {
        // Check email
        if($this->userModel->findUserByUserLogin($data['userlogin'])){
          $data['userlogin_err'] = 'user loing is already taken';
        }
      }
        
        if(empty($data['password'])) {
          $data['password_err'] = 'Vous devez entrer un mot de pass';
        }
        elseif(strlen($data['password']) < 6) {
          $data['password_err'] = 'Vous devez entrer un mot de plus de 6 charachter de long';

        }
        if(empty($data['confirm_password'])) {
          $data['confirm_password_err'] = 'Vous devez entrer un mot de pass';
        }
        elseif($data['password'] != $data['confirm_password']) {
          $data['confirm_password_err'] = 'Les mots de passe ne sommes pas conformes';

        }
        if(empty($data['userlogin_err'])  && empty($data['password_err']) && empty($data['confirm_password_err'])) {
          $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT );
        }
         if($this->userModel->register($data)) {
          flash('register_success', 'You are registered and can log in');
           redirect('users/login');
      

         }

          
        else {
          $this->view('users/register', $data);
        }
      } else {
        // Init data
        $data =[
          'userlogin' => '',
   
          'password' => '',
          'confirm_password' => '',
          'userlogin_err' => '',

          'password_err' => '',
          'confirm_password_err' => ''
        ];

        // Load view
        $this->view('users/register', $data);
      }
    }
    
    public function login(){
      // Check for POST
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Process form
        // Sanitize POST data
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        
        // Init data
        $data =[
          'userlogin' => trim($_POST['userlogin']),
          'password' => trim($_POST['password']),
          'userlogin_err' => '',
          'password_err' => '',      
        ];

        // Validate Email
        if(empty($data['userlogin'])){
          $data['userlogin_err'] = 'Vous devez entrer votre pseudo';
        }

        // Validate Password
        if(empty($data['password'])){
          $data['password_err'] = 'Vous devez entrer votre mot de passe';
        }


        if($this->userModel->findUserByUserLogin($data['userlogin'])) {

          //user Found
        }
        else {
          $data['userlogin_err'] = 'cet utilisateur n\'exite pas!';
        }

        // Make sure errors are empty
        if(empty($data['userlogin_err']) && empty($data['password_err'])){
          // Validated
          // Check and set logged in user
          $loggedInUser = $this->userModel->login($data['userlogin'], $data['password']);

          if($loggedInUser){
            // Create Session
            $this->createUserSession($loggedInUser);
          } else {
            $data['password_err'] = 'Password incorrect';

            $this->view('users/login', $data);
          }
        } else {
          // Load view with errors
          $this->view('users/login', $data);
        }


      } else {
        // Init data
        $data =[    
          'userlogin' => '',
          'password' => '',
          'userlogin_err' => '',
          'password_err' => '',        
        ];

        // Load view
        $this->view('users/login', $data);
      }
    }
    public function createUserSession($user){
      $_SESSION['user_id'] = $user->IDUSER;
      $_SESSION['userlogin'] = $user->LOGINUSER;
   
      redirect('workspace');
    }
    public function logout(){
      unset($_SESSION['user_id']);
      unset($_SESSION['user_email']);
  
      session_destroy();
      redirect('pages/');
    }
  

  }