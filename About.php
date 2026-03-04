<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

    public function index()
    {
        $data['title'] = 'Halaman About';
        $data['content'] = 'Ini adalah halaman about yang dikirim dari controller.';
        $this->load->view('about', $data);
    }

    public function contact()
    {
        $data['title'] = 'Halaman Contact';
        $data['content'] = 'Ini adalah halaman contact.';
        $this->load->view('about', $data);
    }

    public function faqs()
    {
        $data['title'] = 'Halaman FAQ';
        $data['content'] = 'Ini adalah halaman pertanyaan yang sering diajukan.';
        $this->load->view('about', $data);
    }

}