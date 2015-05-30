<?php

class Employee_model extends CI_Model {

    function __construct()

    {

        parent::__construct();

        $this->load->database("ci_test");

    }

    public function get_all_employees()

    {

        $query = $this->db->get('employees');

        return $query->result();

    }

    public function get_employee_names()

    {

        $names = array('ADMIN');

        $this -> db -> select('username');
        $this -> db -> from('employees');
        $this->db->where_not_in('role', $names);

        $query = $this -> db -> get();

        return $query->result();

    }

    public function insert_employee_to_db($data)

    {

        return $this->db->insert('employees', $data);

    }

    public function getById($id){
        $query = $this->db->get_where('employees',array('id'=>$id));
        return $query->row_array();
    }


    public function update_info($data,$id)
    {
        $this->db->where('id',$id);

        return $this->db->update('employees', $data);

    }

    public function delete_an_employee($id)
    {

        $this->db->where('id',$id);

        return $this->db->delete('employees');

    }

    function login($username, $password)
    {
        $this -> db -> select('id, username, password, role');
        $this -> db -> from('employees');
        $this -> db -> where('username', $username);
        $this -> db -> where('password', MD5($password));
        $this -> db -> limit(1);

        $query = $this -> db -> get();

        if($query -> num_rows() == 1)
        {
            return $query->result();
        }
        else
        {
            return false;
        }


    }



}

?>
