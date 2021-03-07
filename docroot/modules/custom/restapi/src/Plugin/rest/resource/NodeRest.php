<?php


namespace Drupal\restapi\Plugin\rest\resource;

use Drupal\rest\Plugin\ResourceBase;
use Drupal\rest\ResourceResponse;


  /**
  *		@RestResource(
  *
  *		id = "node_rest_api",
  *		label = @Translation("Rest to get Node details"),
  *		uri_paths = {
  *
  *			"canonical" = "/node-details/{id}",
  *     "https://www.drupal.org/link-relations/create" = "/node-details/{id}"
  *		}
  *
  *	)
  */


class NodeRest extends ResourceBase {

		public function get(){



		}


}