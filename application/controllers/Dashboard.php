<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model');
        $this->load->helper(array('url'));
        $this->load->library('form_validation');
        $this->logged_in();
    }

    private function logged_in()
    {
        if (!$this->session->userdata('authenticated')) {
            redirect('login');
        }
    }

    public function index()
    {
        // $data['title'] = "Dashboard";
        $this->load->model('Users_model');
        $data['fetch'] = $this->Users_model->fetch_data();
        $this->load->view('Dashboard/index', $data);
    }

    public function admins()
    {
        // $data['title'] = "Dashboard";
        $data['fetch'] = $this->Users_model->fetch_data();
        $this->load->view('Dashboard/admins', $data);
    }

    public function contact_data()
    {
        $data['fetch'] = $this->Users_model->fetch_contact_data();
        $this->load->view('Dashboard/contact_data', $data);
    }

    public function change()
    {
        $data['fetch'] = $this->Users_model->fetch_data();
        $this->load->view('Dashboard/change', $data);
    }

    public function products_p()
    {
        // $data['title'] = "Dashboard";
        $data['fetch'] = $this->Users_model->fetch_products();
        $this->load->view('Dashboard/products_p', $data);
    }

    public function change_products()
    {
        // $data['title'] = "Dashboard";
        $data['fetch'] = $this->Users_model->fetch_products();
        $this->load->view('Dashboard/change_products', $data);
    }

    public function delete_products($userId)  //for deleting products from products table
    {
        $this->Users_model->delete_products($userId);
        $this->session->set_flashdata('success', 'Record deleted successfully');
        redirect('change_products');
    }

    public function create_user()
    {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('active', 'Active', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('Dashboard/create_user');
        } else {
            $formArray = array();
            $formArray['name'] = $this->input->post('name');
            $formArray['email'] = $this->input->post('email');
            $formArray['password'] = $this->input->post('password');
            $formArray['active'] = $this->input->post('active');
            $formArray['created_at'] = date('Y-m-d');
            $this->Users_model->create_user($formArray);
            $this->session->set_flashdata('success', 'Record added Successfully.!!');
            redirect(base_url() . 'change');
        }
    }

    public function create_product()
    {
        $this->load->view('Dashboard/create_product');
    }

    public function edit_user($userId)
    {
        $this->load->model('Users_model');
        $user = $this->Users_model->getUser($userId);
        $data = array();
        $data['user'] = $user;

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('active', 'Active', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('Dashboard/edit_user', $data);
        } else {
            $formArray = array();
            $formArray['name'] = $this->input->post('name');
            $formArray['email'] = $this->input->post('email');
            $formArray['password'] = $this->input->post('password');
            $formArray['active'] = $this->input->post('active');
            $formArray['created_at'] = date('Y-m-d');
            $this->Users_model->updateUser($userId, $formArray);
            $this->session->set_flashdata('success', 'Record Updated Successfully.!!');
            redirect(base_url() . 'admins');
        }
    }

    public function edit_products($userId)
    {
        $this->load->model('Users_model');
        $data = $this->Users_model->getProducts($userId);
        $this->load->view('Dashboard/edit_products', compact('data'));
    }

    public function update_products($pid)
    {
        if (isset($_POST['title'])) {
            $data['title'] = $this->input->post('title');
            $this->form_validation->set_rules('title', 'Title', 'required|max_length[100]|min_length[1]');
        }

        if (isset($_POST['description'])) {
            $data['description'] = $this->input->post('description');
            $this->form_validation->set_rules('description', 'Description', 'required');
        }

        if (isset($_POST['grade'])) {
            $data['grade'] = $this->input->post('grade');
            $this->form_validation->set_rules('grade', 'Grade', 'required');
        }

        if (isset($_POST['size'])) {
            $data['size'] = $this->input->post('size');
            $this->form_validation->set_rules('size', 'Size', 'required');
        }

        if (isset($_POST['colour'])) {
            $data['colour'] = $this->input->post('colour');
            $this->form_validation->set_rules('colour', 'Colour', 'required');
        }

        if (isset($_POST['place_of_origin'])) {
            $data['place_of_origin'] = $this->input->post('place_of_origin');
            $this->form_validation->set_rules('place_of_origin', 'Place of Origin', 'required');
        }

        if (isset($_POST['processing_method'])) {
            $data['processing_method'] = $this->input->post('processing_method');
            $this->form_validation->set_rules('processing_method', 'Processing Method', 'required');
        }

        if (isset($_POST['packaging'])) {
            $data['packaging'] = $this->input->post('packaging');
            $this->form_validation->set_rules('packaging', 'Packaging', 'required');
        }

        if (isset($_POST['category'])) {
            $data['category'] = $this->input->post('category');
            $this->form_validation->set_rules('category', 'Category', 'required');
        }

        if (isset($_POST['MOISTURE_CONTENT'])) {
            $data['MOISTURE_CONTENT'] = $this->input->post('MOISTURE_CONTENT');
            $this->form_validation->set_rules('MOISTURE_CONTENT', 'MOISTURE CONTENT');
        }
        if (isset($_POST['HOT_WATER_INSOLUBLE'])) {
            $data['HOT_WATER_INSOLUBLE'] = $this->input->post('HOT_WATER_INSOLUBLE');
            $this->form_validation->set_rules('HOT_WATER_INSOLUBLE', 'HOT WATER INSOLUBLE');
        }
        if (isset($_POST['ASH_CONTENT'])) {
            $data['ASH_CONTENT'] = $this->input->post('ASH_CONTENT');
            $this->form_validation->set_rules('ASH_CONTENT', 'ASH CONTENT');
        }
        if (isset($_POST['ACID_INSOLUBLE_ASH'])) {
            $data['ACID_INSOLUBLE_ASH'] = $this->input->post('ACID_INSOLUBLE_ASH');
            $this->form_validation->set_rules('ACID_INSOLUBLE_ASH', 'ACID INSOLUBLE ASH');
        }
        if (isset($_POST['MAJOR_DEFECTS'])) {
            $data['MAJOR_DEFECTS'] = $this->input->post('MAJOR_DEFECTS');
            $this->form_validation->set_rules('MAJOR_DEFECTS', 'MAJOR DEFECTS');
        }
        if (isset($_POST['FOREIGN_MATTER'])) {
            $data['FOREIGN_MATTER'] = $this->input->post('FOREIGN_MATTER');
            $this->form_validation->set_rules('FOREIGN_MATTER', 'FOREIGN MATTER');
        }
        if (isset($_POST['T_P_C'])) {
            $data['T_P_C'] = $this->input->post('T_P_C');
            $this->form_validation->set_rules('T_P_C', 'T.P.C.');
        }
        if (isset($_POST['COLIFORMS'])) {
            $data['COLIFORMS'] = $this->input->post('COLIFORMS');
            $this->form_validation->set_rules('COLIFORMS', 'COLIFORMS');
        }
        if (isset($_POST['E_COLI'])) {
            $data['E_COLI'] = $this->input->post('E_COLI');
            $this->form_validation->set_rules('E_COLI', 'E_COLI');
        }
        if (isset($_POST['MOLDS_YEASTS'])) {
            $data['MOLDS_YEASTS'] = $this->input->post('MOLDS_YEASTS');
            $this->form_validation->set_rules('MOLDS_YEASTS', 'MOLDS YEASTS');
        }
        if (isset($_POST['STAPH_AUREUS'])) {
            $data['STAPH_AUREUS'] = $this->input->post('STAPH_AUREUS');
            $this->form_validation->set_rules('STAPH_AUREUS', 'STAPH AUREUS');
        }
        if (isset($_POST['B_CEREUS'])) {
            $data['B_CEREUS'] = $this->input->post('B_CEREUS');
            $this->form_validation->set_rules('B_CEREUS', 'B.CEREUS');
        }
        if (isset($_POST['SALMONELLA'])) {
            $data['SALMONELLA'] = $this->input->post('SALMONELLA');
            $this->form_validation->set_rules('SALMONELLA', 'SALMONELLA');
        }

        if (isset($_FILES['image'])) {

            $i = $this->Users_model->getProducts($pid);
            $tempImg = $i[0]->image;
            $image = $_FILES['image']['name'];
            if ($image == '' or 'Product-Images/' . $image == $tempImg) {
                $data['image'] = $tempImg;
            } else {
                $data['image'] =  $this->UpdateImg($tempImg, $pid);
            }
        }

        if ($this->form_validation->run() == true) {
            if ($this->Users_model->UpdatePro_Table($pid, $data)) {
                $this->session->set_flashdata('success', 'Record Updated Successfully.!!');
                redirect('products_p');
            } else {
                $this->session->set_flashdata('error', 'Inalid DATA');
                redirect('edit_products');
            }
        } else {
            // $this->session->set_flashdata('error', 'Inalid DATA');
            $this->session->set_flashdata('failure', 'Record Updating failed due to you left some fields blank.!!');
            redirect('products_p');
        }
    }


    public function UpdateImg($tempImg, $id)            //Update image
    {
        $config['upload_path']          = './assets/images/Product-Images';
        $config['allowed_types']        = 'gif|jpg|png';
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('image')) {
            $this->session->set_flashdata('error', $this->upload->display_errors());
            $this->edit_products($id);
        } else {
            $this->delImg($tempImg);
            $im = $this->upload->data('file_name');
            return $im;
        }
    }

    public function DelImg($tempImg)            //Delete Image
    {
        if (file_exists('./assets/images/Product-Images' . $tempImg)) {
            unlink('./assets/images/Product-Images' . $tempImg);
        }
    }

    public function add_products()    //Add Products
    {

        $this->load->model('Users_model');
        if (isset($_POST['title'])) {
            $data['title'] = $this->input->post('title');
            $this->form_validation->set_rules('title', 'Title', 'required|max_length[100]|min_length[1]');
        }

        if (isset($_POST['description'])) {
            $data['description'] = $this->input->post('description');
            $this->form_validation->set_rules('description', 'Description', 'required');
        }

        if (isset($_POST['grade'])) {
            $data['grade'] = $this->input->post('grade');
            $this->form_validation->set_rules('grade', 'Grade', 'required');
        }

        if (isset($_POST['size'])) {
            $data['size'] = $this->input->post('size');
            $this->form_validation->set_rules('size', 'Size', 'required');
        }

        if (isset($_POST['colour'])) {
            $data['colour'] = $this->input->post('colour');
            $this->form_validation->set_rules('colour', 'Colour', 'required');
        }

        if (isset($_POST['place_of_origin'])) {
            $data['place_of_origin'] = $this->input->post('place_of_origin');
            $this->form_validation->set_rules('place_of_origin', 'Place of Origin', 'required');
        }

        if (isset($_POST['processing_method'])) {
            $data['processing_method'] = $this->input->post('processing_method');
            $this->form_validation->set_rules('processing_method', 'Processing Method', 'required');
        }

        if (isset($_POST['packaging'])) {
            $data['packaging'] = $this->input->post('packaging');
            $this->form_validation->set_rules('packaging', 'Packaging', 'required');
        }

        if (isset($_POST['category'])) {
            $data['category'] = $this->input->post('category');
            $this->form_validation->set_rules('category', 'Category', 'required');
        }

        if (isset($_POST['active'])) {
            $data['active'] = $this->input->post('active');
            $this->form_validation->set_rules('active', 'Active', 'required');
        }

        if (isset($_POST['MOISTURE_CONTENT'])) {
            $data['MOISTURE_CONTENT'] = $this->input->post('MOISTURE_CONTENT');
            $this->form_validation->set_rules('MOISTURE_CONTENT', 'MOISTURE CONTENT', 'required');
        }

        if (isset($_POST['HOT_WATER_INSOLUBLE'])) {
            $data['HOT_WATER_INSOLUBLE'] = $this->input->post('HOT_WATER_INSOLUBLE');
            $this->form_validation->set_rules('HOT_WATER_INSOLUBLE', 'HOT WATER INSOLUBLE', 'required');
        }

        if (isset($_POST['ASH_CONTENT'])) {
            $data['ASH_CONTENT'] = $this->input->post('ASH_CONTENT');
            $this->form_validation->set_rules('ASH_CONTENT', 'ASH CONTENT', 'required');
        }

        if (isset($_POST['ACID_INSOLUBLE_ASH'])) {
            $data['ACID_INSOLUBLE_ASH'] = $this->input->post('ACID_INSOLUBLE_ASH');
            $this->form_validation->set_rules('ACID_INSOLUBLE_ASH', 'ACID INSOLUBLE ASH', 'required');
        }

        if (isset($_POST['MAJOR_DEFECTS'])) {
            $data['MAJOR_DEFECTS'] = $this->input->post('MAJOR_DEFECTS');
            $this->form_validation->set_rules('MAJOR_DEFECTS', 'MAJOR DEFECTS', 'required');
        }

        if (isset($_POST['FOREIGN_MATTER'])) {
            $data['FOREIGN_MATTER'] = $this->input->post('FOREIGN_MATTER');
            $this->form_validation->set_rules('FOREIGN_MATTER', 'FOREIGN MATTER', 'required');
        }

        if (isset($_POST['T_P_C'])) {
            $data['T_P_C'] = $this->input->post('T_P_C');
            $this->form_validation->set_rules('T_P_C', 'T.P.C.', 'required');
        }

        if (isset($_POST['COLIFORMS'])) {
            $data['COLIFORMS'] = $this->input->post('COLIFORMS');
            $this->form_validation->set_rules('COLIFORMS', 'COLIFORMS', 'required');
        }

        if (isset($_POST['E_COLI'])) {
            $data['E_COLI'] = $this->input->post('E_COLI');
            $this->form_validation->set_rules('E_COLI', 'E. COLI', 'required');
        }

        if (isset($_POST['MOLDS_YEASTS'])) {
            $data['MOLDS_YEASTS'] = $this->input->post('MOLDS_YEASTS');
            $this->form_validation->set_rules('MOLDS_YEASTS', 'MOLDS & YEASTS', 'required');
        }

        if (isset($_POST['STAPH_AUREUS'])) {
            $data['STAPH_AUREUS'] = $this->input->post('STAPH_AUREUS');
            $this->form_validation->set_rules('STAPH_AUREUS', 'STAPH.AUREUS', 'required');
        }

        if (isset($_POST['B_CEREUS'])) {
            $data['B_CEREUS'] = $this->input->post('B_CEREUS');
            $this->form_validation->set_rules('B_CEREUS', 'B. CEREUS', 'required');
        }

        if (isset($_POST['SALMONELLA'])) {
            $data['SALMONELLA'] = $this->input->post('SALMONELLA');
            $this->form_validation->set_rules('SALMONELLA', 'SALMONELLA', 'required');
        }

        if (isset($_FILES['image'])) {
            $image = $_FILES['image']['name'];

            if ($image == '') {
                $data['image'] = '';
                $data['image'] = $this->input->post('image');
                $this->form_validation->set_rules('image', 'Image', 'required');
            } else {
                $config['upload_path']          = './assets/images/Product-Images';
                $config['allowed_types']        = 'jpg|png|jpeg';


                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('image')) {
                    $this->session->set_flashdata('error', 'cant upload');
                    redirect('create_product/');
                } else {
                    $data['image'] = $this->upload->data('file_name');
                }
            }
        }

        if ($this->form_validation->run() == true) {
            if ($this->Users_model->insert_Product($data)) {
                $this->session->set_flashdata('success', 'Record Added Successfully.!!');
                redirect('change_products');
            } else {
                $this->session->set_flashdata('error', 'Inalid DATA');
                redirect('create_product');
            }
        } else {
            $this->load->view('Dashboard/create_product');
        }
    }


    public function delete($userId)  //for deleting user from users table
    {
        $this->Users_model->deleteUser($userId);
        $this->session->set_flashdata('success', 'Record deleted successfully');
        redirect(base_url() . 'change');
    }

    public function delete_contact($userId)  //for deleting contact us data from contact_us table
    {
        $this->Users_model->delete_contact($userId);
        $this->session->set_flashdata('success', 'Record deleted successfully');
        redirect(base_url() . 'contact_data');
    }
}
