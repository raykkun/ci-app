<?php

class Handphone_model extends CI_Model{

    public function getAllHandphone()
    {
        return $this->db->get('handphone')->result_array();
    }

    public function tambahDataHandphone()
    {
        $data = [
                "merk" => $this->input->post('merk', true),
                "harga" => $this->input->post('harga', true),
                "buatan" => $this->input->post('buatan', true),
                "stok" => $this->input->post('stok', true),
        ];

        $this->db->insert('handphone', $data);
    }

    public function hapusDataHandphone($id)
    {
        // $this->db->where('id', $id);
        $this->db->delete('handphone', ['id' => $id]);
    }

    public function getHandphoneById($id)
    {
        return $this->db->get_where('handphone', ['id' => $id])->row_array();
    }

    public function ubahDataHandphone()
    {
        $data = [
                "merk" => $this->input->post('merk', true),
                "harga" => $this->input->post('harga', true),
                "buatan" => $this->input->post('buatan', true),
                "stok" => $this->input->post('stok', true),
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('handphone', $data);
    }

    public function cariDataHAndphone()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('merk', $keyword);
        $this->db->or_like('harga', $keyword);
        $this->db->or_like('buatan', $keyword);
        $this->db->or_like('stok', $keyword);
        return $this->db->get('handphone')->result_array();
    }
}