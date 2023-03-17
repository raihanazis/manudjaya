<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Daftar_warga extends Web_Controller
{
    public function __construct()
    {
        parent::__construct();

    }

    public function index()
    {
        $this->load->view(WARGA . '/daftar');
    }

}
