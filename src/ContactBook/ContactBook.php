<?php

namespace src\ContactBook;

use \src\Contact\Contact;
use \src\Group\Group;

class ContactBook
{
	private $contacts = [];
	private $groups = [];

	public function __construct()
	{
		$this->contacts = [];
		$this->groups = [];
	}

	public function getContacts()
	{
		return($this->contacts);
	}

	public function getGroups()
	{
		return($this->groups);
	}

	public function addGroup($target)
	{
		if(!in_array($target,$this->groups))
		{
			array_push($this->groups,$target);
		}
		return($this);
	}

	public function removeGroup($target)
	{
		if(in_array($target,$this->groups))
		{
			array_splice($this->groups,array_search($target),1);
		}
		return($this);
	}

	public function addContact($target)
	{
		if(!in_array($target,$this->contacts) || empty($this->contacts))
		{
			array_push($this->contacts,$target);
		}
		return($this);
	}

	public function removeContact($target)
	{
		if(in_array($target,$this->contacts))
		{
			array_splice($this->contacts,array_search($target),1);
		}
		return($this);
	}
}

?>