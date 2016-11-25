<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Software extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
            $this->load->library('breadcrumbs');
       $this->breadcrumbs->push('Home', '/');
       $this->breadcrumbs->push('Paginas Web', '/paginas-web');
     
       $data = array(
            'title' => 'Desarrollo de Software',
            'descri' => 'Desarrollo de software a medida',
           'content' => 'software/facturacion'
        );
        $this->load->view('front/front-content', $data);
    }
    public function facturacion() {
            $this->load->library('breadcrumbs');
       $this->breadcrumbs->push('Home', '/');
       $this->breadcrumbs->push('Paginas Web', '/paginas-web');
     
       $data = array(
            'title' => 'My Blog Title',
            'heading' => 'My Blog Heading',
           'content' => 'software/facturacion'
        );
        $this->load->view('front/front-content', $data);
    }

    public function paginas_web() {
        echo 'paginas web';
    }

}
