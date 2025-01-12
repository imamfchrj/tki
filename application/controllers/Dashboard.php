<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('username')){
            redirect('login');
            exit;
        }
    }

	public function index()
	{
        $this->load->view('dashboard');
	}

    public function pendaftaran($id=0)
    {
        $this->load->model(array(
            'm_negara_tujuan',
            'm_fr_regis',
            'm_np',
            'm_mst_regis_kerja',
            'm_mst_regis_bahasa',
            'm_mst_regis_keterampilan'));
        $data['menu']="pendaftaran";
        $data['negara'] =$this->m_negara_tujuan->get_all();
        $data['negara_ker'] =$this->m_mst_regis_kerja->get_all();
        $data['np'] =$this->m_np->get_all();
        $data['keterampilan'] =$this->m_mst_regis_keterampilan->get_all_by_id($id);
        $data['bahasa_val'] =$this->m_mst_regis_bahasa->get_all_by_id($id);
        $data['values']=$this->m_fr_regis->get_by_id_tki($id);
        $this->load->view('pendaftaran',$data);
    }

    public function data_tki()
    {
        $this->load->view('data_tki');
    }

    public function biodata($id=0)
    {
        $this->load->model(array(
            'm_negara_tujuan',
            'm_fr_regis',
            'm_fr_bio_sgp',
            'm_mst_sg_illness',
            'm_np',
            'm_mst_regis_bahasa',
            'm_mst_regis_keterampilan'));
        $data['menu']="biodata";
        $data['negara'] =$this->m_negara_tujuan->get_all();
        $data['negara_by'] =$this->m_negara_tujuan->get_by_id($id);
        $data['np'] =$this->m_np->get_all();
        $data['values']=$this->m_fr_regis->get_by_id_tki($id);
        $data['bio_sgp']=$this->m_fr_bio_sgp->get_by_id_tki($id);
        $data['illness']=$this->m_mst_sg_illness->get_all_by_id($id);
        $data['food']=$this->m_mst_sg_illness->get_all_food_by_id($id);
        $data['keterampilan'] =$this->m_mst_regis_keterampilan->get_all_by_id($id);
        $data['bahasa_val'] =$this->m_mst_regis_bahasa->get_all_by_id($id);
        $this->load->view('biodata',$data);
    }

    public function data_tki_bio()
    {
        $this->load->view('data_tki_bio');
    }

    public function data_rekom()
    {
        $this->load->view('data_rekom');
    }

    public function rekom($id=0)
    {
        $this->load->model(array(
            'm_negara_tujuan',
            'm_fr_regis',
            'm_fr_bio_sgp',
            'm_mst_sg_illness',
            'm_np',
            'm_mst_regis_bahasa',
            'm_mst_regis_keterampilan'));
        $data['menu']="biodata";
        $data['negara'] =$this->m_negara_tujuan->get_all();
        $data['negara_by'] =$this->m_negara_tujuan->get_by_id($id);
        $data['np'] =$this->m_np->get_all();
        $data['values']=$this->m_fr_regis->get_by_id_tki($id);
        $data['bio_sgp']=$this->m_fr_bio_sgp->get_by_id_tki($id);
        $data['illness']=$this->m_mst_sg_illness->get_all_by_id($id);
        $data['food']=$this->m_mst_sg_illness->get_all_food_by_id($id);
        $data['keterampilan'] =$this->m_mst_regis_keterampilan->get_all_by_id($id);
        $data['bahasa_val'] =$this->m_mst_regis_bahasa->get_all_by_id($id);
        $this->load->view('rekom',$data);
    }

    public function data_lanjut()
    {
        $this->load->view('data_lanjut');
    }

    public function lanjut($id=0)
    {
        $this->load->model(array(
            'm_negara_tujuan',
            'm_fr_regis',
            'm_fr_bio_sgp',
            'm_mst_sg_illness',
            'm_np',
            'm_mst_regis_bahasa',
            'm_mst_regis_keterampilan'));
        $data['menu']="biodata";
        $data['negara'] =$this->m_negara_tujuan->get_all();
        $data['negara_by'] =$this->m_negara_tujuan->get_by_id($id);
        $data['np'] =$this->m_np->get_all();
        $data['values']=$this->m_fr_regis->get_by_id_tki($id);
        $data['bio_sgp']=$this->m_fr_bio_sgp->get_by_id_tki($id);
        $data['illness']=$this->m_mst_sg_illness->get_all_by_id($id);
        $data['food']=$this->m_mst_sg_illness->get_all_food_by_id($id);
        $data['keterampilan'] =$this->m_mst_regis_keterampilan->get_all_by_id($id);
        $data['bahasa_val'] =$this->m_mst_regis_bahasa->get_all_by_id($id);
        $this->load->view('lanjut',$data);
    }

    public function data_market()
    {
        $this->load->view('data_market');
    }

    public function widgets()
    {
        $this->load->view('widgets');
    }

    public function charts()
    {
        $this->load->view('charts');
    }

    public function buttons()
    {
        $this->load->view('buttons');
    }

    public function forms()
    {
        $this->load->view('forms');
    }

    public function tables()
    {
        $this->load->view('tables');
    }

    public function panels()
    {
        $this->load->view('panels');
    }

    public function icons()
    {
        $this->load->view('icons');
    }

    public function gallery()
    {
        $this->load->view('gallery');
    }

    public function search()
    {
        $this->load->view('search');
    }

    public function login()
    {
        $this->load->view('login');
    }

}
