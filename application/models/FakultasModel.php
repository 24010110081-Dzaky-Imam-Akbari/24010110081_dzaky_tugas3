<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FakultasModel extends CI_Model {

    public function getAll()
    {
        return $this->db->get('Fakultas')->result_array();
    }
    public function getById($id)
    {
        return $this->db->get_where('Fakultas', [
            'Fakultas_id' => $id
        ])->row_array();
    }
    public function insert($data)
    {
        return $this->db->insert('Fakultas', $data);
    }
    public function update($id, $data)
    {
        $this->db->where('Fakultas_id', $id);
        return $this->db->update('Fakultas', $data);
    }
    public function delete($id)
    {
        $this->db->where('Fakultas_id', $id);
        return $this->db->delete('fakultas');
    }

    
}