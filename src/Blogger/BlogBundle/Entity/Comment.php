<?php
// src/Blogger/BlogBundle/Entity/Comment.php

namespace App\Blogger\BlogBundle\Entity;

use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints\NotBlank;

/**
 * @ORM\Entity(repositoryClass="App\Blogger\BlogBundle\Entity\Repository\CommentRepository")
 * @ORM\Table(name="comment")
 * @ORM\HasLifecycleCallbacks
 */
class Comment
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;

	/**
	 * @ORM\Column(type="string")
	 */
	protected $user;

	/**
	 * @ORM\Column(type="text")
	 */
	protected $comment;

	/**
	 * @ORM\Column(type="boolean")
	 */
	protected $approved;

	/**
	 * @ORM\Column(type="integer")
	 */
	protected $blog_id;

	/**
	 * @ORM\ManyToOne(targetEntity="Blog", inversedBy="comments")
	 * @ORM\JoinColumn(name="blog_id", referencedColumnName="id")
	 */
	protected $blog;

	/**
	 * @ORM\Column(type="datetime")
	 */
	protected $created;

	/**
	 * @ORM\Column(type="datetime")
	 */
	protected $updated;

	/** @var EntityManager */
	protected $em;

	public function __construct()
	{
		$this->setCreated(new \DateTime());
		$this->setUpdated(new \DateTime());

		$this->setApproved(true);
	}
	public static function loadValidatorMetadata(ClassMetadata $metadata)
	{
		$metadata->addPropertyConstraint('user', new NotBlank(array(
			'message' => 'You must enter your name'
		)));
		$metadata->addPropertyConstraint('comment', new NotBlank(array(
			'message' => 'You must enter a comment'
		)));
	}

	/**
	 * @ORM\preUpdate
	 */
	public function setUpdatedValue()
	{
		$this->setUpdated(new \DateTime());
	}
	/**
	 * Get id.
	 *
	 * @return int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Set user.
	 *
	 * @param string $user
	 *
	 * @return Comment
	 */
	public function setUser($user)
	{
		$this->user = $user;

		return $this;
	}

	/**
	 * Get user.
	 *
	 * @return string
	 */
	public function getUser()
	{
		return $this->user;
	}

	/**
	 * Set comment.
	 *
	 * @param string $comment
	 *
	 * @return Comment
	 */
	public function setComment($comment)
	{
		$this->comment = $comment;

		return $this;
	}

	/**
	 * Get comment.
	 *
	 * @return string
	 */
	public function getComment()
	{
		return $this->comment;
	}

	/**
	 * Set approved.
	 *
	 * @param bool $approved
	 *
	 * @return Comment
	 */
	public function setApproved($approved)
	{
		$this->approved = $approved;

		return $this;
	}

	/**
	 * Get approved.
	 *
	 * @return bool
	 */
	public function getApproved()
	{
		return $this->approved;
	}

	/**
	 * Set created.
	 *
	 * @param \DateTime $created
	 *
	 * @return Comment
	 */
	public function setCreated($created)
	{
		$this->created = $created;

		return $this;
	}

	/**
	 * Get created.
	 *
	 * @return \DateTime
	 */
	public function getCreated()
	{
		return $this->created;
	}

	/**
	 * Set updated.
	 *
	 * @param \DateTime $updated
	 *
	 * @return Comment
	 */
	public function setUpdated($updated)
	{
		$this->updated = $updated;

		return $this;
	}

	/**
	 * Get updated.
	 *
	 * @return \DateTime
	 */
	public function getUpdated()
	{
		return $this->updated;
	}
	#>mine#
	/**
	 * Set blog_id
	 *
	 * @param integer $blog_id
	 *
	 * @return Comment
	 */
	public function setBlogId($blog_id)
	{
		$this->blog_id = $blog_id;

		return $this;
	}

	/**
	 * Get blog_id
	 *
	 * @return integer
	 */
	public function getBlogId()
	{
		return $this->blog_id;
	}
	#<mine#

	/**
	 * Set blog.
	 *
	 * @param \App\Blogger\BlogBundle\Entity\Blog|null $blog
	 *
	 * @return Comment
	 */
	public function setBlog(\App\Blogger\BlogBundle\Entity\Blog $blog = null)
	{
		$this->blog = $blog;

		return $this;
	}

	/**
	 * Get blog.
	 *
	 * @return \App\Blogger\BlogBundle\Entity\Blog|null
	 */
	public function getBlog()
	{
		#>mine#
		if($this->em && !empty($this->blog_id)) {
			return $this->em->getRepository('BloggerBlogBundle:Blog')->find($this->blog_id);
		}
		#<mine#
		return $this->blog;
	}
	#>mine#
	/**
	 * @ORM\PostLoad
	 * @ORM\PostPersist
	 */
	public function fetchEntityManager(LifecycleEventArgs $args)
	{
		if(is_null($this->em)) {
			$this->em = $args->getEntityManager();
		}
	}
	#<mine#
}