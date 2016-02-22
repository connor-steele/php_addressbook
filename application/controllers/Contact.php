<?php
/*
 * Generated by CRUDigniter v2.0 Beta
 * www.crudigniter.com
 */

class Contact extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Contact_model');
    }

    /*
     * Listing of Contacts
     */
    function index()
    {
        $data['Contacts'] = $this->Contact_model->get_all_Contacts();
        $this->load->view('Contact/index',$data);
    }

    /*
     * Adding a new Contact
     */
    function add()
    {
        $this->load->library('form_validation');

    $this->form_validation->set_rules('name','Name','min_length[5]|required|max_length[50]');
    $this->form_validation->set_rules('email','Email','valid_email|required|max_length[500]');
    $this->form_validation->set_rules('comments','Comments','max_length[300]');

    if($this->form_validation->run())
        {
            $params = array(
        'name' => $this->input->post('name'),
        'email' => $this->input->post('email'),
        'comments' => $this->input->post('comments'),
            );

            $Contact_id = $this->Contact_model->add_Contact($params);
            redirect('contact/index');
        }
        else
        {
            $this->load->view('Contact/add');
        }
    }

    /*
     * Editing a Contact
     */
    function edit($id)
    {
        // check if the Contact exists before trying to edit it
        $Contact = $this->Contact_model->get_Contact($id);

        if(isset($Contact['id']))
        {
            $this->load->library('form_validation');

    $this->form_validation->set_rules('name','Name','min_length[5]|required|max_length[50]');
    $this->form_validation->set_rules('email','Email','valid_email|required|max_length[500]');
    $this->form_validation->set_rules('comments','Comments','max_length[300]');

    if($this->form_validation->run())
            {
                $params = array(
          'name' => $this->input->post('name'),
          'email' => $this->input->post('email'),
          'comments' => $this->input->post('comments'),
                );

                $this->Contact_model->update_Contact($id,$params);
                redirect('contact/index');
            }
            else
            {
                $data['Contact'] = $this->Contact_model->get_Contact($id);

                $this->load->view('Contact/edit',$data);
            }
        }
        else
            show_error('The Contact you are trying to edit does not exist.');
    }

    /*
     * Deleting Contact
     */
    function remove($id)
    {
        $Contact = $this->Contact_model->get_Contact($id);

        // check if the Contact exists before trying to delete it
        if(isset($Contact['id']))
        {
            $this->Contact_model->delete_Contact($id);
            redirect('contact/index');
        }
        else
            show_error('The Contact you are trying to delete does not exist.');
    }

}
