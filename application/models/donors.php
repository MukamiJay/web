<?php
/**
 * Created by PhpStorm.
 * User: EBENEZER
 * Date: 2/20/2018
 * Time: 12:44 PM
 */

class donors extends CI_Model{

    //initialize
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function save($data){
       /* print_r($data);
        die();*/
        $this->db->insert('donor',$data);
        return true;
    }

    public function display(){
        $q = $this->db->get('donor');

        /* after we've made the queries from the database, we will store them inside a variable called $data, and return the variable to the controller */
        if($q->num_rows() > 0)
        {
            foreach ($q->result() as $row)
            {
                $data[] = $row;
            }
            return $data;
        }
    }
public function show($data){
        $this->db->select('*');
        $this->db->from('donor');
        $this->db->where('id',$data);
        $query = $this->db->get();
        $result =$query->result();
        return $result;

}
public function delete($id){
    $this->db->where('id', $id);
    $this->db->delete('donor');
}

    public function update_record($data, $id)
    {
        $this->db->where('id', $id); // here is the id
        $this->db->update('assets', $data);
    }
}