<?php

class M_model extends CI_Model
{
    function get_data($table)
    {
        return $this->db->get($table);
    }

    function getwhere($table, $data)
    {
        return $this->db->get_where($table, $data);
    }

    public function delete($table, $field, $id)
    {
        $data = $this->db->delete($table, [$field => $id]);
        return $data;
    }

    public function tambah_data($table, $data)
    {
        $this->db->insert($table, $data);
        return $this->db->insert_id();
    }
    public function get_by_id($table, $id_column, $id)
    {
        $data = $this->db->where($id_column, $id)->get($table);
        return $data;
    }
    public function ubah_data($table, $data, $where)
    {
        $data = $this->db->update($table, $data, $where);
        return $this->db->affected_rows();
    }
    public function get_guru_by_id($id_guru)
    {
        $this->db->where('id_guru', $id_guru);
        return $this->db->get('guru')->row();
    }
    public function get_siswa_by_id($id_guru)
    {
        $this->db->where('id_siswa', $id_guru);
        return $this->db->get('siswa')->row();
    }
}

?>
