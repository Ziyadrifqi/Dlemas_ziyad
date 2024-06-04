<?php 
class DLemas extends CI_Controller 
{ 
    function __construct(){ 
        parent::__construct(); 
        $this->load->helper('url');
    }

    public function index() {
        $data['judul'] = "Halaman Home";
        $this->load->view('D_index', $data)
        ;
    }

    public function input() 
    { 
        $this->load->view('D_header');
        $this->load->view('view-form-siswa'); 
        $this->load->view('D_footer');

    } 

    public function cetak() 
    { 
        $this->form_validation->set_rules('nama', 'Nama Siswa', 'required|min_length[3]', [
            'required' => 'Nama Siswa Harus diisi',
            'min_length' => 'Nama Siswa terlalu pendek'
        ]);
        $this->form_validation->set_rules('nis', 'NIS', 'required|min_length[3]', [
            'required' => 'NIS Harus diisi',
            'min_length' => 'Nis terlalu pendek'
        ]);
        $this->form_validation->set_rules('kelas', 'Kelas', 'required', [
            'required' => 'Kelas Harus diisi'
        ]);
        $this->form_validation->set_rules('tgl', 'Tanggal Lahir', 'required', [
            'required' => 'Tanggal Lahir Harus diisi'
        ]);
        $this->form_validation->set_rules('tmpt', 'Tempat lahir', 'required|min_length[3]', [
            'required' => 'Tempat Lahir Harus diisi',
            'min_length' => 'Tempat Lahir terlalu pendek'
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|min_length[3]', [
            'required' => 'Alamat Harus diisi',
            'min_length' => 'Alamat terlalu pendek'
        ]);
        $this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required', [
            'required' => 'Jenis Kelamin Harus diisi'
        ]);
        $this->form_validation->set_rules('agama', 'Agama', 'required', [
            'required' => 'Agama Harus diisi'
        ]);

        if ($this->form_validation->run() != true) {
            $this->load->view('D_header');
            $this->load->view('view-form-siswa'); 
            $this->load->view('D_footer');
        } else {
            $data = [ 
                'nama' => $this->input->post('nama'), 
                'nis' => $this->input->post('nis'), 
                'kelas' => $this->input->post('kelas'), 
                'tgl' => $this->input->post('tgl'), 
                'tmpt' => $this->input->post('tmpt'), 
                'alamat' => $this->input->post('alamat'), 
                'jk' => $this->input->post('jk'), 
                'agama' => $this->input->post('agama'), 
            ]; 

            $this->load->view('D_header');
            $this->load->view('view-data-siswa', $data); 
            $this->load->view('D_footer');
        }
    }  
}