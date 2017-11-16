<?php

namespace AppBundle\Service;

/**
 * Test Service to show how a service works in Symfony
 *
 * @author  Jeroen Boschman <jeroen@webtastic.nl>
 **/
class TestService
{
	/**
	 * get test content
	 *
	 * @return void
	 **/
	public function getTestContent()
	{
		return 'Welkom bij de praktijkopdracht.';
	}
}
