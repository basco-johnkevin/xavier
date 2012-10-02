<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Subjectsections extends MY_Controller {
	
	public function index()
	{	
		$this->data["subjectSections"] = SubjectSection::all();

		$this->_render('pages/subjectsections/manage');
	}

	public function add()
	{
		// rules
		$this->form_validation->set_rules('subjectId', 'subject', 'required|integer');
		$this->form_validation->set_rules('schedule', 'schedule', 'required');

		// validate
		if ($this->form_validation->run() == FALSE)
		{
			$subjects = Subject::all();

	  		$subjectsArray = array();

		  	// build an array for the drop down
		  	foreach ($subjects as $subject) {
		  		$subjectsArray[ $subject->subjectid ] = $subject->subjectname;
		  	}

		  	$this->data['subjectsArray'] = $subjectsArray;

			$this->_render('pages/subjectsections/add');
		}
		else
		{
			// check if record already exists
			$sSCheck = SubjectSection::find_all_by_subjectid_and_schedule($this->input->post('subjectId'), $this->input->post('schedule'));

			if (count($sSCheck) >= 1) {
				$this->session->set_flashdata('error', 'subject section already exists');
				redirect('subjectsections/add/', 'refresh');
			} else {
				$sS = New SubjectSection();
				$sS->subjectid = $this->input->post('subjectId');
				$sS->schedule = $this->input->post('schedule');

				if ($sS->save()) {
					$this->session->set_flashdata('success', 'saving to database sucessful!');
					redirect('subjectsections/add/', 'refresh');

				} else {
					$this->data['notices'] = array('saving to database failed!');
					$this->_render('pages/subjectsections/add');
				}
			}
		}
	}

	public function delete($id)
	{
		$sS = SubjectSection::find_by_subjectsectionid($id);
		if ($sS->delete()) {
			$this->session->set_flashdata('success', 'delete record sucessful!');
			redirect('subjectsections', 'refresh');
		} else {
			$this->session->set_flashdata('error', 'delete record failed!');
			redirect('subjectsections', 'refresh');
		}
	}

	public function edit()
	{

		$this->output->enable_profiler(TRUE);
		
		$subjectsArray = array();
		$subjects = Subject::all();

		foreach ($subjects as $subject) {
			$subjectsArray[ $subject->subjectid ] = $subject->subjectname;
		}

		//return print_r($subjectsArray);

		$this->data['subjectsArray'] = $subjectsArray;

		// rules
		$this->form_validation->set_rules('subjectId', 'subject Id', 'required|max_length[30]');
		$this->form_validation->set_rules('schedule', 'schedule', 'required|max_length[30]');

		// validate
		if ($this->form_validation->run() == FALSE)
		{
			$this->data['subjectSection'] = SubjectSection::find_by_subjectsectionid($this->uri->segment(3));
			$this->_render('pages/subjectsections/edit');
		}
		else
		{
			$sS = SubjectSection::find_by_subjectsectionid($this->input->post('id'));
			$sS->subjectid = $this->input->post('subjectId');
			$sS->schedule = $this->input->post('schedule');

			if ($sS->save()) {
				$this->session->set_flashdata('success', 'update record sucessful!');
				redirect('subjectsections', 'refresh');
			} else {
				$this->session->set_flashdata('success', 'update record failed!');
				redirect('subjectsections', 'refresh');
			}
		}
		
	}



	
}