<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
        
    public function index()
    {
        $this->load->model("home_model");
        $data["fetch_data"] = $this->home_model->fetch_data();

        $this->load->view("home_view", $data);
        $this->load->helper(array('form', 'url'));
    }

    public function form_validation(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules("name", "Name", 'required');
        $this->form_validation->set_rules("phone", "Phone", 'required');
        $this->form_validation->set_rules("address", "Address", 'required');

        if($this->form_validation->run()){
            if(!empty($_FILES['avata']['name'])){
                $config['upload_path'] = './uploads/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size']     = '2048';
                $config['max_width'] = '1024';
                $config['max_height'] = '768';
                $config['file_name'] = $_FILES['avata']['name'];

                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if($this->upload->do_upload('avata')){
                    $uploadData = $this->upload->data();
                    $image = $uploadData['file_name'];
                }else{
                    $image = '';
                }
            }else{
                $image = '';
            }
            $this->load->model("home_model");
            $data = array(
                "name" =>$this->input->post("name"),
                "phone" =>$this->input->post("phone"),
                "address" =>$this->input->post("address"),
                "avata" =>$image
            );
            if($this->input->post("update")){
                $this->home_model->update_data($data, $this->input->post("hidden_id"));
                redirect(base_url());
            }
            if ($this->input->post("insert")) {
                $this->home_model->insert_data($data);
                redirect(base_url());
            }  
        }else{
            redirect(base_url());
        }
        
    }

    public function delete_data(){
        $id = $this->uri->segment(3);
        $this->load->model("home_model");
        $this->home_model->delete_data($id);
        redirect(base_url());
    }

    public function update_data(){
        $users_id = $this->uri->segment(3);
        $this->load->model("home_model");
        $data["user_data"] = $this->home_model->fetch_single_data($users_id);
        $data["fetch_data"] = $this->home_model->fetch_data();
        $this->load->view("update", $data);
    }
}
?>