<?php

	 public function signupValidation()
    {

    	$this->load->library('form_validation');
    	$this->load->model('model_users');
		

		$this->form_validation->set_rules('registerFirstName','First Name','required|trim|alpha');
		$this->form_validation->set_rules("phone","Phone","required|trim|numeric");
		$this->form_validation->set_rules("registerUsername","Username","required|trim|is_unique[users.username]|is_unique[temp_users.username]");
    	$this->form_validation->set_rules('registerEmail','Email','required|trim|valid_email|is_unique[users.email]|is_unique[temp_users.email]');
    	$this->form_validation->set_rules('registerPassword','password','required|trim');
    	$this->form_validation->set_rules('registerCPassword','confirm password','required|trim|matches[registerPassword]');
		$this->form_validation->set_rules("registerTerms","registerTerms","callback_terms");
        $this->form_validation->set_message('is_unique','That %s address already exists');


        if($this->form_validation->run())
        {
		echo'succesfully complete';
        }
        else
        {
        	echo validation_errors();
        }
  }
?>