<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Enrollments extends MY_Controller {
	
	public function index()
	{	
		$this->data["enrollments"] = Enrollment::all();

		$this->_render('pages/enrollments/manage');	
	}

	public function add()
	{
		// rules
		$this->form_validation->set_rules('studentId', 'student id', 'required|integer');
		$this->form_validation->set_rules('subjectSectionId', 'subject section id', 'required|integer');

		// validate
		if ($this->form_validation->run() == FALSE)
		{
			$this->_render('pages/enrollments/add');
		}
		else
		{
			$e = New Enrollment();
			$e->studentid = $this->input->post('studentId');
			$e->subjectsectionid = $this->input->post('subjectSectionId');

			if ($e->save()) {
				$this->data['notices'] = array('saving to database sucessful!');
				$this->_render('pages/enrollments/add');
			} else {
				$this->data['notices'] = array('saving to database failed!');
				$this->_render('pages/enrollments/add');
			}
		}
	}

	public function edit()
	{
		
		// rules
		$this->form_validation->set_rules('name', 'college department name', 'required|max_length[30]|is_unique[collegedept.collegedeptname.collegedeptid.'.$this->input->post('id').']');

		// validate
		if ($this->form_validation->run() == FALSE)
		{
			$this->data['collegeDept'] = CollegeDept::find_by_collegedeptid($this->uri->segment(3));
			$this->_render('pages/collegeDepts/edit');
		}
		else
		{
			$cD = CollegeDept::find_by_collegedeptid($this->input->post('id'));
			$cD->collegedeptname = $this->input->post('name');

			if ($cD->save()) {
				$this->session->set_flashdata('success', 'update record sucessful!');
				redirect('collegedepts/', 'refresh');
			} else {
				$this->session->set_flashdata('success', 'update record failed!');
				redirect('collegedepts/', 'refresh');
			}
		}
	}

	public function delete($id)
	{
		$cD = CollegeDept::find_by_collegedeptid($id);
		if ($cD->delete()) {
			$this->session->set_flashdata('success', 'delete record sucessful!');
			redirect('collegedepts/', 'refresh');
		} else {
			$this->session->set_flashdata('error', 'delete record failed!');
			redirect('collegedepts/', 'refresh');
		}
	}
	


}