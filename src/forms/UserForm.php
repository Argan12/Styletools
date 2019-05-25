<?php
/*!
 * Styletools 1.5
 * Copyright 2019 Argan Piquet
 * Author : Argan Piquet
 */
 
namespace Styletools\Forms;

require_once('vendor/autoload.php');

use Styletools\Libs\FormBuilder;

class UserForm {
	/**
	 * This method is a form example
	 */
	public static function addForm() {
		$formBuilder = new FormBuilder();
		$form = $formBuilder->startForm().''.
		$form = $formBuilder->newInput('text', 'username', '', array('placeholder' => 'Username')).''.
		$form = $formBuilder->newInput('email', 'email', '', array('placeholder' => 'Mail address')).''.
		$form = $formBuilder->newInput('password', 'pass', '', array('placeholder' => 'Password')).''.
		$form = $formBuilder->newInput('submit', 'submit', 'Register', array('class' => 'btn bc_blue')).''.
		$form = $formBuilder->endForm();
		
		return $form;
	}
}
