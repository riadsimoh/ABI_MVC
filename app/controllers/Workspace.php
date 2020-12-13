<?php



class Workspace extends Controller{

public function __construct()
{
    if(!isLoggedIn()) {
        redirect('users/login');
    }
    
    $this->workspaceModel = $this->model('Theworkspace');
}

public function index() {


    $data =[];

    $this->view('workspace/index', $data);




}

public function listclients() {

    $response = $this->workspaceModel->getClients();

    $data =["clients" => $response];

    $this->view('workspace/clients', $data);

}


public function listprojets() {

    $response = $this->workspaceModel->getProjects();

    $data =["clients" => $response];

    $this->view('workspace/projects', $data);

}



}