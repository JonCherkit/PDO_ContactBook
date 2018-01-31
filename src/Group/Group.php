<?php

namespace src\Group;

use \src\Contact\Contact;

class Group
{
	private $label;
	private $contacts = [];

	public function __construct($label)
	{
		$this->label = $label;
	}

	public function getLabel()
	{
		return($this->label);
	}
	
	public function getContacts()
	{
		return($this->contacts);
	}

	public function addContact($target)
	{
		if(!in_array($target,$this->contacts))
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