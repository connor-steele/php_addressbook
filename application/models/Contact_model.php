<?php

class Contact_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    /*
     * get a Contact by id
     */
    function get_Contact($id)
    {
        return $this->db->get_where('Contacts',array('id'=>$id))->row_array();
    }

    /*
     * get all Contacts
     */
    function get_all_Contacts()
    {
        return $this->db->get('Contacts')->result_array();
    }

    /*
     * function to add new Contact
     */
    function add_Contact($params)
    {
        $this->db->insert('Contacts',$params);
        return $this->db->insert_id();
    }

    /*
     * function to update Contact
     */
    function update_Contact($id,$params)
    {
        $this->db->where('id',$id);
        $this->db->update('Contacts',$params);
    }

    /*
     * function to delete Contact
     */
    function delete_Contact($id)
    {
        $this->db->delete('Contacts',array('id'=>$id));
    }
}
