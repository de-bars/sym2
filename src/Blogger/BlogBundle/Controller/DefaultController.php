<?php

namespace App\Blogger\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController
{
	public function indexAction()
	{
		return $this->render('@BloggerBlog/Default/index.html.twig');
	}
}