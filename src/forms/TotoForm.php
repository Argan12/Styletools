<?php
/*!
 * Styletools 1.5
 * Copyright 2019 Argan Piquet
 * Author : Argan Piquet
 */
 
namespace Styletools\Forms;

require_once('vendor/autoload.php');

use Styletools\Libs\FormBuilder;

class TotoForm {
	/**
	 * This method is form example
	 */
	public static function addForm() {
		$formBuilder = new FormBuilder();
		$form = $formBuilder->startForm().''.
		$form = $formBuilder->newInput('text', 'username', '', array('placeholder' => 'Nom')).''.
		$form = $formBuilder->newInput('email', 'email', '', array('placeholder' => 'Adresse e-mail')).''.
		$form = $formBuilder->newInput('password', 'pass', '', array('placeholder' => 'Mot de passe')).''.
		$form = $formBuilder->newInput('submit', 'submit', 'S\'inscrire', array('class' => 'btn bc_blue')).''.
		$form = $formBuilder->endForm();
		
		return $form;
	}
}
