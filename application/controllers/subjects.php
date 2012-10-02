<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Subjects extends MY_Controller {
	
	public function index()
	{	
		$this->data["subjects"] = Subject::all();

		$this->_render('pages/subjects/manage');
	}

	public function add()
	{
		// rules
		$this->form_validation->set_rules('name', 'college department name', 'required|max_length[30]|is_unique[subject.subjectname]');
		$this->form_validation->set_rules('collegeDept', 'college department name', 'required|integer');

		// validate
		if ($this->form_validation->run() == FALSE)
		{
			$collegeDepts = CollegeDept::all();

	  		$collegeDeptsArray = array();

		  	// build an array of college depts for the drop down
		  	foreach ($collegeDepts as $collegeDept) {
		  		$collegeDeptsArray[ $collegeDept->collegedeptid ] = $collegeDept->collegedeptname;
		  	}

		  	$this->data['collegeDeptsArray'] = $collegeDeptsArray;

			$this->_render('pages/subjects/add');
		}
		else
		{
			$s = New Subject();
			$s->subjectname = $this->input->post('name');
			$s->collegedeptid = $this->input->post('collegeDept');

			if ($s->save()) {
				$this->session->set_flashdata('success', 'saving to database sucessful!');
				redirect('subjects/add/', 'refresh');

			} else {
				$this->data['notices'] = array('saving to database failed!');
				$this->_render('pages/subjects/add');
			}
		}
	}

	public function delete($id)
	{
		$s = Subject::find_by_subjectid($id);
		if ($s->delete()) {
			$this->session->set_flashdata('success', 'delete record sucessful!');
			redirect('subjects/', 'refresh');
		} else {
			$this->session->set_flashdata('error', 'delete record failed!');
			redirect('subjects/', 'refresh');
		}
	}

	public function edit()
	{

		$this->output->enable_profiler(TRUE);
		
		// rules
		$this->form_validation->set_rules('name', 'subject name', 'required|max_length[30]|is_unique[subject.subjectname.subjectid.'.$this->input->post('id').']');

		// validate
		if ($this->form_validation->run() == FALSE)
		{
			$this->data['subject'] = Subject::find_by_subjectid($this->uri->segment(3));
			$this->_render('pages/subjects/edit');
		}
		else
		{
			$s = Subject::find_by_subjectid($this->input->post('id'));
			$s->subjectname = $this->input->post('name');

			if ($s->save()) {
				$this->session->set_flashdata('success', 'update record sucessful!');
				redirect('subjects/', 'refresh');
			} else {
				$this->session->set_flashdata('success', 'update record failed!');
				redirect('subjects/', 'refresh');
			}
		}
		
	}

	
}