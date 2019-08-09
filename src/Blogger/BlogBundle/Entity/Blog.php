<?php
// src/Blogger/BlogBundle/Entity/Blog.php

namespace App\Blogger\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass="App\Blogger\BlogBundle\Entity\Repository\BlogRepository")
 * @ORM\Table(name="blog")
 * @ORM\HasLifecycleCallbacks
 */
class Blog
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
	protected $title;

	/**
	 * @ORM\Column(type="string", length=100)
	 */
	protected $author;

	/**
	 * @ORM\Column(type="text")
	 */
	protected $blog;

	/**
	 * @ORM\Column(type="string", length=20)
	 */
	protected $image;

	/**
	 * @ORM\Column(type="text")
	 */
	protected $tags;

	/**
	 * @ORM\OneToMany(targetEntity="Comment", mappedBy="blog")
	 */
	protected $comments;

	/**
	 *
	 */
	protected $commentsCount;

	/**
	 * @ORM\Column(type="datetime")
	 */
	protected $created;

	/**
	 * @ORM\Column(type="datetime")
	 */
	protected $updated;

	/**
	 * @ORM\Column(type="string")
	 */
	protected $slug;

	public function __construct()
	{
		$this->comments = new ArrayCollection();
		$this->setCreated(new \DateTime());
		$this->setUpdated(new \DateTime());
	}
	/**
	 * @ORM\PreUpdate
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
	 * Set title.
	 *
	 * @param string $title
	 *
	 * @return Blog
	 */
	public function setTitle($title)
	{
		$this->title = $title;

		$this->setSlug($this->title);

		return $this;
	}

	/**
	 * Get title.
	 *
	 * @return string
	 */
	public function getTitle()
	{
		return $this->title;
	}

	/**
	 * Set author.
	 *
	 * @param string $author
	 *
	 * @return Blog
	 */
	public function setAuthor($author)
	{
		$this->author = $author;

		return $this;
	}

	/**
	 * Get author.
	 *
	 * @return string
	 */
	public function getAuthor()
	{
		return $this->author;
	}

	/**
	 * Set blog.
	 *
	 * @param string $blog
	 *
	 * @return Blog
	 */
	public function setBlog($blog)
	{
		$this->blog = $blog;

		return $this;
	}

	/**
	 * Get blog.
	 *
	 * @return string
	 */
	public function getBlog($length = null)
	{
		if (false === is_null($length) && $length > 0)
			return substr($this->blog, 0, $length);
		else
			return $this->blog;
	}
	/**
	 * Set image.
	 *
	 * @param string $image
	 *
	 * @return Blog
	 */
	public function setImage($image)
	{
		$this->image = $image;

		return $this;
	}

	/**
	 * Get image.
	 *
	 * @return string
	 */
	public function getImage()
	{
		return $this->image;
	}

	/**
	 * Set tags.
	 *
	 * @param string $tags
	 *
	 * @return Blog
	 */
	public function setTags($tags)
	{
		$this->tags = $tags;

		return $this;
	}

	/**
	 * Get tags.
	 *
	 * @return string
	 */
	public function getTags()
	{
		return $this->tags;
	}

	/**
	 * Set created.
	 *
	 * @param \DateTime $created
	 *
	 * @return Blog
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
	 * @return Blog
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
	/**
	 * Add comment.
	 *
	 * @param \App\Blogger\BlogBundle\Entity\Comment $comment
	 *
	 * @return Blog
	 */
	public function addComment(\App\Blogger\BlogBundle\Entity\Comment $comment)
	{
		$this->comments[] = $comment;

		return $this;
	}

	/**
	 * Remove comment.
	 *
	 * @param \App\Blogger\BlogBundle\Entity\Comment $comment
	 *
	 * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
	 */
	public function removeComment(\App\Blogger\BlogBundle\Entity\Comment $comment)
	{
		return $this->comments->removeElement($comment);
	}

	/**
	 * Get comments.
	 *
	 * @return \Doctrine\Common\Collections\Collection
	 */
	public function getComments()
	{
		return $this->comments;
	}

	/**
	 * Set comments count
	 *
	 * @param integer $commentsCount
	 *
	 * @return Blog
	 */
	public function setCommentsCount($count)
	{
		$this->commentsCount = $count;

		return $this;
	}

	/**
	 * Get comments count
	 *
	 * @return integer
	 */
	public function getCommentsCount()
	{
		return $this->commentsCount;
	}

	/**
	 * Set slug.
	 *
	 * @param string $slug
	 *
	 * @return Blog
	 */
	public function setSlug($slug)
	{
		$this->slug = $this->slugify($slug);

		return $this;
	}

	/**
	 * Get slug.
	 *
	 * @return string
	 */
	public function getSlug()
	{
		return $this->slug;
	}
	public function slugify($text)
	{
		// replace non letter or digits by -
		$text = preg_replace('#[^\\pL\d]+#u', '-', $text);

		// trim
		$text = trim($text, '-');

		// transliterate
		if (function_exists('iconv'))
		{
			$text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
		}

		// lowercase
		$text = strtolower($text);

		// remove unwanted characters
		$text = preg_replace('#[^-\w]+#', '', $text);

		if (empty($text))
		{
			return 'n-a';
		}

		return $text;
	}
	public function __toString()
	{
		return $this->getTitle();
	}
}