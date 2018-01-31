<?php

namespace src\Contact;

use \src\Group\Group;

class Contact
{
	private $id;
	private $name;
	private $slug;
	private $email;
	private $groups = [];

	public function __construct($id,$name,$email = '')
	{
		$this->id = $id;
		$this->name = ucfirst($name);
		$this->slug = $this->slugify($name).$id;
		$this->email = $email;
	}

	public function getId()
	{
		return($this->id);
	}

	public function getName()
	{
		return($this->name);
	}

	public function getSlug()
	{
		return($this->slug);
	}

	public function getEmail()
	{
		return($this->email);
	}

	public function slugify($string)
	{
    $slug = $string;
    $slug = preg_replace('#Ç#', 'C', $slug);
    $slug = preg_replace('#ç#', 'c', $slug);
    $slug = preg_replace('#è|é|ê|ë#', 'e', $slug);
    $slug = preg_replace('#È|É|Ê|Ë#', 'E', $slug);
    $slug = preg_replace('#à|á|â|ã|ä|å#', 'a', $slug);
    $slug = preg_replace('#@|À|Á|Â|Ã|Ä|Å#', 'A', $slug);
    $slug = preg_replace('#ì|í|î|ï#', 'i', $slug);
    $slug = preg_replace('#Ì|Í|Î|Ï#', 'I', $slug);
    $slug = preg_replace('#ð|ò|ó|ô|õ|ö#', 'o', $slug);
    $slug = preg_replace('#Ò|Ó|Ô|Õ|Ö#', 'O', $slug);
    $slug = preg_replace('#ù|ú|û|ü#', 'u', $slug);
    $slug = preg_replace('#Ù|Ú|Û|Ü#', 'U', $slug);
    $slug = preg_replace('#ý|ÿ#', 'y', $slug);
    $slug = preg_replace('#Ý#', 'Y', $slug);
     
    return (strtolower($slug));
	}
}
