<?php

class News_model extends CI_Model {

    function __construct()

    {

        parent::__construct();

        $this->load->database("ci_test");

    }

    public function get_all_news()

    {

        $query = $this->db->get('news');

        return $query->result();

    }

    public function insert_news_to_db($data)

    {

        return $this->db->insert('news', $data);

    }

    public function getById($id){
        $query = $this->db->get_where('news',array('id'=>$id));
        return $query->row_array();
    }


}

?>
