<?php

namespace App\Blogger\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use App\Blogger\BlogBundle\Entity\Enquiry;
use App\Blogger\BlogBundle\Form\EnquiryType;

class PageController extends AbstractController
{
	public function indexAction()
	{
		$em = $this->getDoctrine()
			->getManager();

		$blogs = $em->getRepository('BloggerBlogBundle:Blog')
			->getLatestBlogs();

		return $this->render('@BloggerBlog/Page/index.html.twig', array(
			'blogs' => $blogs
		));
	}
	public function aboutAction()
	{
		return $this->render('@BloggerBlog/Page/about.html.twig');
	}
	public function contactAction(Request $request, \Swift_Mailer $mailer)
	{
		$enquiry = new Enquiry();

		$form = $this->createForm(EnquiryType::class, $enquiry);

		if ($request->isMethod($request::METHOD_POST)) {
			$form->handleRequest($request);

			if ($form->isValid()) {
				$message = new \Swift_Message(
					'Contact enquiry from symblog',
					$this->renderView('@BloggerBlog/Page/contactEmail.txt.twig', array('enquiry' => $enquiry))
				);
				$message->setFrom('enquiries@symblog.co.uk');
				$message->setTo($this->getParameter('blogger_blog.emails.contact_email'));

				$mailer->send($message);

				$this->get('session')->getFlashBag()->add('blogger-notice', 'Ваш контактный запрос был успешно отправлен. Спасибо!');

				// Redirect - This is important to prevent users re-posting
				// the form if they refresh the page
				return $this->redirect($this->generateUrl('BloggerBlogBundle_contact'));
			}
		}

		return $this->render('@BloggerBlog/Page/contact.html.twig', array(
			'form' => $form->createView()
		));
	}
	public function sidebarAction()
	{
		$em = $this->getDoctrine()
			->getManager();

		$tags = $em->getRepository('BloggerBlogBundle:Blog')
			->getTags();

		$tagWeights = $em->getRepository('BloggerBlogBundle:Blog')
			->getTagWeights($tags);

		$commentLimit   = $this->getParameter('blogger_blog.comments.latest_comment_limit');
		$latestComments = $em->getRepository('BloggerBlogBundle:Comment')
			->getLatestComments($commentLimit);

		return $this->render('@BloggerBlog/Page/sidebar.html.twig', array(
			'latestComments'    => $latestComments,
			'tags' => $tagWeights
		));
	}
}
