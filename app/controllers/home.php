<?php

class home extends Controller{
    public function index(){
        $data['isi'] = $this->model('artikel')->getAllartikel();
        $this->view('home/index',$data);
    }
    public function berita($artikel_id){
        $data = $this->model('artikel')->getdataid($artikel_id);
        $this->view('layouts/header');
        $this->view('home/berita',$data);
        $this->view('layouts/footer');
    }

    public function cari(){
        $data['isi'] = $this->model('artikel')->caridataartikel();
        $this->view('home/index',$data);
    }
}