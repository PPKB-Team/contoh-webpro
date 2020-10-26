<?php
    class Kampus extends CI_Controller {

        public function index()
        {
            $this->load->view('form_mahasiswa');
        }
		
        public function show_data() 
        {
            // mengecek masukan dari form
            $nama = $this->input->post('nama');
            $nim = $this->input->post('nim');
            $jurusan = $this->input->post('jurusan');
            $fakultas = $this->input->post('fakultas');
            $semester = $this->input->post('semester');            
            $tingkat = "";
            
            // mengecek proses perhitungan yang diminta 
            if ($semester == "1" || $semester == 2) 
            {
                $tingkat = 1;
            }
            else if ($semester == "3" || $semester == "4") 
            {
                $tingkat = 2;
            }
            else if ($semester == "5" || $semester == "6") 
            {
                $tingkat = 3;
            }
            else if ($semester == "7" || $semester == "8") 
            {
                $tingkat = 4;
            }
            else{
                $tingkat = "Tua";
            }
            
            $data['nama'] = $nama;
            $data['nim'] = $nim;
            $data['jurusan'] = $jurusan;
            $data['fakultas'] = $fakultas;
            $data['semester'] = $semester;
            $data['tingkat'] = $tingkat;
            
            // menampilkan hasil
            $this->load->view('show_data', $data);
        }

    }

?>
