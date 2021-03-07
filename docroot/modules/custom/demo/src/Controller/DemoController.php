<?php


/**
  * @file
  * Contains \Drupal\demo\Controller\DemoController.
  */

namespace Drupal\demo\Controller;

use Drupal\Core\Controller\ControllerBase;

class DemoController extends ControllerBase{

	public function content(){

		return [

			'#type' => 'markup',
			'#markup' => t('This is Demo Custom Page'),

		];

	}

}

