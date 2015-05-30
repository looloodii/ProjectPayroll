<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Controller {

    function __construct()

    {

        parent::__construct();

        #$this->load->helper('url');

        $this->load->model('news_model');

    }

    public function index()

    {

        $data['news_list'] = $this->news_model->get_all_news();

        $this->load->view('show_news', $data);

    }

    public function add_form()

    {

        $this->load->view('create_news');

    }

    public function insert_new_news()

    {

        $udata['title'] = $this->input->post('title');

        $udata['body'] = $this->input->post('body');

        $res = $this->news_model->insert_news_to_db($udata);

        if($res){

            header('location:'.base_url()."index.php/news/".$this->index());

        }

    }

}
