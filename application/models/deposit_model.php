<?php

class Deposit_model extends CI_Model {

    function __construct()

    {

        parent::__construct();

        $this->load->database("ci_test");

    }

    public function get_all_deposits()

    {
        $query = $this->db->get('deposits');
        #$query = $this->db->get_where('deposits',array('employee_username'=>"jobelle"));

        return $query->result();

    }

    public function get_my_deposits($user)

    {

        $query = $this->db->get_where('deposits',array('employee_username'=>$user));

        return $query->result();

    }

    public function insert_deposit_to_db($data)

    {

        return $this->db->insert('deposits', $data);

    }


    public function getById($id){
        $query = $this->db->get_where('deposits',array('id'=>$id));
        return $query->row_array();
    }

    public function update_info($data,$id)
    {
        $this->db->where('id',$id);

        return $this->db->update('deposits', $data);

    }

    public function delete_a_deposit($id)
    {

        $this->db->where('id',$id);

        return $this->db->delete('deposits');

    }


}

?>
