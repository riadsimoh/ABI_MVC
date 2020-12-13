<?php
  class Pages extends Controller {
    public function __construct(){
     
    }
    

    
    public function index(){
      $data = [
        'title' => 'SharePosts',
        'description' => 'Simple social network built on the TraversyMVC PHP framework'
      ];
     
      $this->view('pages/index', $data);
    }

    public function services(){
      $data = [
        'title' => 'About Us',
        'description' => 'App to share posts with other users'
      ];

      $this->view('pages/services', $data);
    }
    public function contact(){
      $data = [
        'title' => 'contact',
        'description' => 'Contacter nous'
      ];

      $this->view('pages/contact', $data);
    }
    

  }