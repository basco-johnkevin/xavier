<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Students extends MY_Controller {
	
	public function index()
	{	
		$this->data["students"] = Student::all();

		$this->_render('pages/students/manage');
	}

	public function add()
	{
		// rules
		$this->form_validation->set_rules('name', 'name', 'required|max_length[30]');
		$this->form_validation->set_rules('studentNumber', 'student number', 'required|max_length[30]|is_unique[student.student_number]');

		// validate
		if ($this->form_validation->run() == FALSE)
		{
			$this->_render('pages/students/add');
		}
		else
		{
			$s = New Student();
			$s->name = $this->input->post('name');
			$s->student_number = $this->input->post('studentNumber');

			if ($s->save()) {
				$this->data['notices'] = array('saving to database sucessful!');
				$this->_render('pages/students/add');
			} else {
				$this->data['notices'] = array('saving to database failed!');
				$this->_render('pages/students/add');
			}
		}
	}

	public function delete($id)
	{
		$s = Student::find_by_studentid($id);
		if ($s->delete()) {
			$this->session->set_flashdata('success', 'delete record sucessful!');
			redirect('students', 'refresh');
		} else {
			$this->session->set_flashdata('error', 'delete record failed!');
			redirect('students', 'refresh');
		}
	}

	public function edit()
	{
		
		// rules
		$this->form_validation->set_rules('name', 'name', 'required|max_length[30]');
		$this->form_validation->set_rules('studentNumber', 'student number', 'required|numeric|is_unique[student.student_number.studentid.'.$this->input->post('id').']');


		// validate
		if ($this->form_validation->run() == FALSE)
		{
			$this->data['student'] = Student::find_by_studentid($this->uri->segment(3));
			$this->_render('pages/students/edit');
		}
		else
		{
			$s = Student::find_by_studentid($this->input->post('id'));
			$s->name = $this->input->post('name');
			$s->student_number = $this->input->post('studentNumber');

			if ($s->save()) {
				$this->session->set_flashdata('success', 'update record sucessful!');
				redirect('students', 'refresh');
			} else {
				$this->session->set_flashdata('success', 'update record failed!');
				redirect('students/', 'refresh');
			}
		}
		
	}

	public function subjects($id)
	{
		$this->data['student'] = Student::find_by_studentid($id);
		$this->_render('pages/students/subjects');

	}
	
}