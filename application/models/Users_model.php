<?php

class Users_model extends CI_Model
{

    public function login($email, $password)
    {
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $this->db->where('active', 'Publish');
        $query = $this->db->get('users');

        if ($query->num_rows() == 1) {
            return $query->row();
        }

        return false;
    }

    public function insert_contact_data($formArray) //for creating new admin
    {
        $this->db->insert("contact_us", $formArray);
    } //changed

    public function create_user($formArray) //for creating new admin
    {
        $this->db->insert("users", $formArray);
    }

    public function fetch_data() //for fetching admins from user table
    {
        $this->db->SELECT('*');
        $t = $this->db->get('users');
        return $t;
    }

    public function fetch_contact_data() //for contact data from contact_us table
    {
        $this->db->SELECT('*');
        $c = $this->db->get('contact_us');
        return $c;
    } //changed

    public function fetch_products() //for contact data from contact_us table
    {
        $this->db->SELECT('*');
        $c = $this->db->get('products');
        return $c;
    }

    public function delete_products($userId)
    {
        $this->db->where('id', $userId);
        $this->db->delete('products');
    }

    public function return_products($category)  // To fetch products as per category...
    {
        $query = $this->db->like('category', $category);
        $result = $query->get('products')->result();
        return $result;
    }

    public function getUser($userId) //to get single user for edit 
    {
        $this->db->where('id', $userId);
        return $user = $this->db->get('users')->row_array();
    }

    // public function getSingleProduct($id)
    // {
    //     $query = $this->db->where('id', $userId)->get('products');
    //     $result = $query->result();
    //     return $result;
    // }

    public function getProducts($userId) //to get single product for edit 
    {
        $query = $this->db->where('id', $userId)->get('products');
        $result = $query->result();
        return $result;
    }

    public function updateProducts($userId, $formArray)
    {
        $this->db->where('id', $userId);
        $this->db->update('products', $formArray);
    }

    public function UpdatePro_Table($pid, $data)       // To update data
    {

        $this->db->where('id', $pid);
        if ($this->db->update('products', $data)) {
            return true;
        } else {
            return false;
        }
    }

    public function updateUser($userId, $formArray)
    {
        $this->db->where('id', $userId);
        $this->db->update('users', $formArray);
    }

    public function deleteUser($userId)
    {
        $this->db->where('id', $userId);
        $this->db->delete('users');
    }

    public function delete_contact($userId)
    {
        $this->db->where('id', $userId);
        $this->db->delete('contact_us');
    } //changed


    public function insert_Product($data)          // To insert data 
    {
        if ($this->db->insert('products', $data)) {
            return true;
        } else {
            return false;
        }
    }
}
