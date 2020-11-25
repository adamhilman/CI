<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_perpus extends CI_Model
{
    function edit_data($where,$table){
        return $this->db->get_where($table,$where);
    }
    function edit_data_buku($where){
        return $this->db->select('*')->from('buku')->join('kategori', 'buku.id_kategori=kategori.id_kategori')->where($where)->get();
        //return $this->db->get_where($where);
    }
    function edit_data_anggota($where){
        return $this->db->select('*')->from('anggota')->where($where)->get();
        //return $this->db->get_where($where);
    }
    function get_data_pinjam($where){
        return $this->db->select('transaksi.*, buku.id_buku, buku.judul_buku')->from('transaksi')->join('buku', 'transaksi.id_buku=buku.id_buku')->where($where)->get();
        //return $this->db->get_where($where);
    }
    function get_data_peminjam(){
        return $this->db->select('transaksi.*, buku.id_buku, buku.judul_buku')->from('transaksi')->join('buku', 'transaksi.id_buku=buku.id_buku')->get();
        //return $this->db->get_where($where);
    }
    function get_data($table){
        return $this->db->get($table);
    }
    function insert_data($data, $table){
        $this->db->insert($table, $data);
    }
    function update_data($table, $data, $where){
        $this->db->update($table, $data, $where);
    }
    function delete_data($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }
}
