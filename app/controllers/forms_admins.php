<?php

class forms_admins extends Controller{
    public function index(){
        $data['isi'] = $this->model('artikel')->getAllartikel();
        $this->view('admin/header');
        $this->view('admin/sidebar');
        $this->view('admin/berita/index',$data);
        $this->view('admin/footer');
    }
    public function user(){
        $data['isi'] = $this->model('user')->getAlluser();
        $this->view('admin/header');
        $this->view('admin/sidebar');
        $this->view('admin/user/user',$data);
        $this->view('admin/footer');
    }
    public function pegawai(){
        $data['isi'] = $this->model('pegawai')->getAllpegawai();
        $this->view('admin/header');
        $this->view('admin/sidebar');
        $this->view('admin/pegawai/index',$data);
        $this->view('admin/pegawai/edit',$data);
        $this->view('admin/footer');
    }
    public function createberita(){
        $this->view('admin/header');
        $this->view('admin/sidebar');
        $this->view('admin/berita/create');
        $this->view('admin/footer');
    }
    public function createpeg(){
        $this->view('admin/header');
        $this->view('admin/sidebar');
        $this->view('admin/pegawai/create');
        $this->view('admin/footer');
    }
    public function createuser(){
        $this->view('admin/header');
        $this->view('admin/sidebar');
        $this->view('admin/user/create');
        $this->view('admin/footer');
    }
    public function editberita($artikel_id){
        $data = $this->model('artikel')->getdataid($artikel_id);
        $this->view('admin/header');
        $this->view('admin/sidebar');
        $this->view('admin/berita/edit',$data);
        $this->view('admin/footer');
    }
    public function delete($artikel_id){
        $data = $this->model('artikel')->getdataid($artikel_id);
        $this->view('admin/berita/hapus',$data);
        
    }
    public function deletepeg($id){
        $data = $this->model('pegawai')->getdataid($id);
        $this->view('admin/pegawai/delete',$data);
        
    }
    public function deleteuser($id){
        $data = $this->model('user')->getdataid($id);
        $this->view('admin/pegawai/delete',$data);
        
    }
    public function tambah(){

        $this->view('admin/berita/tambah');       
    }
    public function tambahpeg(){

        $this->view('admin/pegawai/tambah');       
    }
    public function tambahuser(){

        $this->view('admin/user/tambah');       
    }
    public function ubah($artikel_id){
        $data = $this->model('artikel')->getdataid($artikel_id);
        $this->view('admin/berita/ubah',$data);   
    }
}