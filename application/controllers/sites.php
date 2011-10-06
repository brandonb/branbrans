<?php
	class Sites extends CI_Controller{
	
		public function index(){
			$this->load->model('Sitesmodel');
			$meta['title'] = 'BranBrans';
			$data['sites'] = $this->Sitesmodel->get_sites();
			$this->load->view('common/header', $meta);
			$this->load->view('sites/index', $data);
			$this->load->view('common/footer');
		}
		
		public function view($slug){
			$this->load->model('Sitesmodel');
			$meta['title'] = 'BranBrans';
			$data['site'] = $this->Sitesmodel->get_site($slug);
			$this->load->view('common/header', $meta);
			$this->load->view('sites/view', $data);
			$this->load->view('common/footer');
		}
		
		public function new_site(){
			$meta['title'] = 'BranBrans';
			$this->load->view('common/header', $meta);
			$this->load->view('sites/new');
			$this->load->view('common/footer');
		}
		
		public function create_site(){
			$this->db->insert('sites', $this->input->post());
			redirect('site/'. $this->input->post('slug'));
		}
		
		public function edit_site($slug){
			$this->load->model('Sitesmodel');
			$meta['title'] = 'BranBrans';
			$data['site'] = $this->Sitesmodel->get_site($slug);
			$this->load->view('common/header', $meta);
			$this->load->view('sites/edit', $data);
			$this->load->view('common/footer');
		}
		
		public function update_site(){
			$this->db->update('sites', $this->input->post(), array('id' => $this->input->post('id')));
			redirect('site/'. $this->input->post('slug'));
		}
		
		public function delete_site(){
		
		}
		
	}
?>