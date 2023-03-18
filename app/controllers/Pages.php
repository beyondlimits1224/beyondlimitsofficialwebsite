<?php
   /**
    * @property Pages $socmedModel
    * @method Pages getSocmed
    */
   
   class Pages extends Controller {
        public function __construct(){
            
            $this->socmedModel = $this->model('Socmed');
        }

        public function index(){

            $posts = $this->socmedModel->getSocmed();

            $data = [
                'title' => 'Welcome',
                'posts' => $posts // store $posts
            ];

            $this->view('pages/index', $data );
        }

        public function about(){
            $data = [
                'title' => 'About Us'
            ];
            $this->view('pages/about', $data);
            
        }
    }