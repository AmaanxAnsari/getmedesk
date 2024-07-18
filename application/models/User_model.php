<?php

class User_model extends CI_Model
{



    // public function login_user($username, $password){

    //     $this->db->where(['username' => $username]);
    //     $this->db->where(['password' => $password]);

    //     $result = $this->db->get('users');
    //     if ($result->num_rows() == 1) {
    //         return $result->rows(0)->id;
    //     } else {
    //         return false;
    //     }

    // }

    public function update_user($data, $id)
    {

        $this->db->where(['id' => $id]);
        $this->db->update('users', $data);

    }

    public function get_data_by_id_multiple($table_name, $array)
    {
        $query = $this->db->get_where($table_name, $array);
        if ($query) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function get_full_data_by_table_name($table_name)
    {

        $query = $this->db->get($table_name);
        return $query->result();
    }

    public function get_data($table_name)
    {
        $query = $this->db->get($table_name);
        return $query->result();
    }

    public function insert_job($table_name, $array)
    {

        if ($this->db->insert($table_name, $array)) {
            $insert_id = $this->db->insert_id();
            return $insert_id;
        } else {
            return false;
        }
    }
    public function insert_company($table_name, $array)
    {
        if ($this->db->insert($table_name, $array)) {
            $insert_id = $this->db->insert_id();
            return $insert_id;
        } else {
            return false;
        }
    }

    public function insert_city($table_name, $array)
    {

        if ($this->db->insert($table_name, $array)) {
            return true;
        } else {
            return false;
        }


    }
    public function insert_data($table_name, $array)
    {

        if ($this->db->insert($table_name, $array)) {
            return true;
        } else {
            return false;
        }


    }

    public function get_data_by_id($table_name, $id, $column_name)
    {
        $this->db->order_by("id", "asc");

        if ($this->db->field_exists('deleted_at', $table_name)) {
            $query = $this->db->get_where($table_name, array($column_name => $id, "deleted_at" => null))->result();
        } else {
            $query = $this->db->get_where($table_name, array($column_name => $id))->result();
        }
        if ($query) {
            return $query;
        } else {
            return false;
        }
    }
    public function get_candidate_by_id($table_name, $id, $column_name)
    {
        $this->db->order_by("candidate_id", "asc");


        $query = $this->db->get_where($table_name, array($column_name => $id))->result();

        if ($query) {
            return $query;
        } else {
            return false;
        }
    }

    public function get_full_product_by_table_name($table_name)
    {
        $query = $this->db->get($table_name);
        return $query->result();
    }
    public function get_jobs_descending_order($table_name)
    {
        $this->db->order_by("created_date", "desc");

        $query = $this->db->get($table_name);
        return $query->result();
    }
    public function get_product_by_table_name($table_name)
    {
        $query = $this->db->get($table_name);
        return $query->result();
    }
    public function get_product_by_id($id)
    {
        $query = $this->db->get_where('candidates', array('id' => $id));
        return $query->result();
    }

    public function insert_candidate($table_name, $array)
    {

        if ($this->db->insert($table_name, $array)) {
            $insert_id = $this->db->insert_id();
            return $insert_id;
        } else {
            return false;
        }


    }

    public function update_candidate($data, $id)
    {

        $this->db->where(['id' => $id]);
        $update = $this->db->update('candidates', $data);
        if ($update) {
            return true;
        } else {
            return false;
        }
    }

    public function update_allot_candidate($data, $candidate_id, $id)
    {

        $this->db->where(['candidate_id' => $candidate_id]);
        $this->db->where(['job_id' => $id]);
        $this->db->update('candidate_jobs', $data);

    }

    public function update_expected_locations($data, $id)
    {

        $this->db->where(['candidate_id' => $id]);
        $this->db->update('expected_locations', $data);

    }

    public function delete_row($product_id)
    {


        //echo $product_id;
        $this->db->delete('candidates', array('id' => $product_id));
    }

    public function delete_city($city_id)
    {

        foreach ($city_id as $key) {
            $this->db->delete('expected_locations', array("candidate_id" => $key));
        }
    }

    public function delete_city_jobs($city_id)
    {

        foreach ($city_id as $key) {
            $this->db->delete('job_locations', array("job_id" => $key));
        }
    }


    // Companies model

    public function get_company($table_name)
    {
        $query = $this->db->get($table_name);
        return $query->result();
    }

    public function get_company_by_id($id)
    {
        $query = $this->db->get_where('companies', array('id' => $id));
        return $query->result();
    }

    public function update_company($data, $id)
    {

        $this->db->where(['id' => $id]);
        $this->db->update('companies', $data);

    }
    public function update_city($data, $id)
    {

        $this->db->where(['id' => $id]);
        $this->db->update('cities', $data);

    }

    // Job model

    public function get_job_by_id($id)
    {
        $query = $this->db->get_where('jobs', array('id' => $id));
        return $query->result();
    }
    public function get_job_by_slug($slug)
    {
        $query = $this->db->get_where('jobs', array('slug' => $slug));
        return $query->result();
    }
    public function update_job($data, $id)
    {

        $this->db->where(['id' => $id]);
        $update = $this->db->update('jobs', $data);
        if ($update) {
            return true;
        } else {
            return false;
        }
    }



    // Check if data exists in database

    public function read_data_where($table_name, $data)
    {
        $query_data = $this->db->get_where($table_name, $data)->result();
        if ($query_data) {
            return $query_data;
        } else {
            return false;
        }
    }
    public function update_data($table_name, $data, $id)
    {

        $this->db->where(['id' => $id]);
        $this->db->update($table_name, $data);

    }

}
?>