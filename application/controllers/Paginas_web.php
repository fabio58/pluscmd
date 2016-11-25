<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Paginas_web extends CI_Controller {

    public function __construct() {
        parent::__construct();
        
    }

    public function index() {
       $this->load->library('breadcrumbs');
       $this->breadcrumbs->push('Home', '/');
       $this->breadcrumbs->push('Paginas Web', '/paginas-web');
     
       $data = array(
            'title' => 'Desarrollo de paginas web',
            'descri' => 'Desarrollamos sitios web segun sus necesidades empresariales', 
           'content' => 'paginasweb/productos'
        );
        $this->load->view('front/front-content', $data);
    }
    public function home() {
       $this->load->library('breadcrumbs');
      
       $this->breadcrumbs->unshift('Home', '/');
         $this->load->view('front/front-site');
    }
    public function pagos_online() {
       $this->load->library('breadcrumbs');
       $this->breadcrumbs->push('Home', '/');
       $this->breadcrumbs->push('Paginas web', '/paginas-web');
       $this->breadcrumbs->push('Pagos Online', '/pagos-online');
     
       $data = array(
            'title' => 'Pagos Online',
            'descri' => 'Pasarela de pagos online',
           'content' => 'paginasweb/pagosonline'
        );
        $this->load->view('front/front-content', $data);
    }
    public function clientes_amigos() {
       $this->load->library('breadcrumbs');
       $this->breadcrumbs->push('Home', '/');
       $this->breadcrumbs->push('Paginas Web', '/paginas-web');
     
       $data = array(
            'title' => 'Clientes',
            'descri' => 'Listado de Clientes y amigos',
           'content' => 'paginasweb/clientes_amigos'
        );
        $this->load->view('front/front-content', $data);
    }
    public function webmaster_online() {
       $this->load->library('breadcrumbs');
       $this->breadcrumbs->push('Home', '/');
       $this->breadcrumbs->push('Paginas web', '/paginas-web');
       $this->breadcrumbs->push('Pagos Online', '/pagos-online');
     
       $data = array(
            'title' => 'Webmaster Online',
            'descri' => 'Webmaster Online',
           'content' => 'paginasweb/webmasteronline'
        );
        $this->load->view('front/front-content', $data);
    }

    

}
