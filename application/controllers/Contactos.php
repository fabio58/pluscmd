<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contactos extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('form');
    }

    public function index() {
            $this->load->library('session');
        $this->load->library('breadcrumbs');
        $this->breadcrumbs->push('Home', '/');
        $this->breadcrumbs->push('Paginas Web', '/paginas-web');

        $data = array(
            'title' => 'Contacte con nosotros',
            'descri' => 'Contacte con plusmedia, solicite su presupuetos',
            'content' => 'contactos/index'
        );
        $this->load->view('front/front-content', $data);
    }

    public function enviar() {
            $this->load->library('session');
//Descargar la libreria
        $this->load->library('email');
        $config = array('mailtype' => 'html');
        $this->email->initialize($config);

        $last = $this->input->post('last'); // capturo los campos del formulario
        $nombre = $this->input->post('nombre'); // capturo los campos del formulario
        $telefono = $this->input->post('telefono'); // capturo los campos del formulario
        $email = $this->input->post('email'); // capturo los campos del formulario
        $mensaje = $this->input->post('mensaje'); // capturo los campos del formulario
        $mensajeHtml="
            <html>
    <head>
        
    </head>
    <body>
<h1>Formulario de contacto plusmedia.com.py</h1>
<p>Nombre: $nombre</p>
<p>Telefono: $telefono</p>
<p>Email: $email</p>
<p>Mensaje: $mensaje</p>
               

    </body>
</html>
";
     $asunto = "Pagina de Plusmedia";
     $this->email->from($email, 'Contacto'); //email desde donde envio
    $this->email->to('info@plusmedia.com.py'); // email a donde envio
    $this->email->subject($asunto);
    $this->email->message($mensajeHtml);

    if ($last=="") {
        $this->email->send();
            $this->session->set_flashdata('success', 'Se ha enviado correctamente el mensaje. Nos pondremos en contactos con Usded.');
            redirect("contactos/index");
        } else {
            $this->session->set_flashdata('error', 'Error no se ha podido enviar el correo ');
            redirect("contactos/index");
        }
    }

}
