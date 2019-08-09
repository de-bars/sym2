<?php
// src/Blogger/BlogBundle/Controller/BlogController.php

namespace App\Blogger\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * Blog controller.
 */
class BlogController extends AbstractController
{
	/**
	 * Show a blog entry
	 */
	public function showAction($id, $slug, $comments)
	{
		$em = $this->getDoctrine()->getManager();

		$blog = $em->getRepository('BloggerBlogBundle:Blog')->find($id);

		if (!$blog) {
			throw $this->createNotFoundException('Unable to find Blog post.');
		}

		$comments = $em->getRepository('BloggerBlogBundle:Comment')
			->getCommentsForBlog($blog->getId());

		return $this->render('@BloggerBlog/Blog/show.html.twig', array(
			'blog'      => $blog,
			'comments' => $comments
		));
	}
}