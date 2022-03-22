<?php
class Latihan1 extends CI_controller
{

    public function index()
    {
        echo"Selamat datang.. Selamat belajar Web Programming 2";
    }

    public function penjumlahan($n1, $n2)
    {
        $this->load->model('Model_latihan1');
        //$hasil = $this->Model_latihan1->jumlah($n1, $n2);
        //echo "Hasil Penjumlahan dari". $n1 ." + ". $n2 ." = " .$hasil;
        $data['nilai1'] = $n1;
        $data['nilai2'] = $n2;
        $data['hasil'] = $this->Model_latihan1->jumlah($n1, $n2);
        
        $this->load->view('view-latihan', $data);
    }
}