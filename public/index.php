<?php 

require(__DIR__.'../../vendor/autoload.php');

use \src\Contact\Contact;
use \src\ContactBook\ContactBook;
use \src\Group\Group;

//Data Source Name
$dsn = 'mysql:host=localhost;port=1337;dbname=ContactBook';
//DB User
$user = 'root';
//DB Password
$password = '';

try
{
	//Ouverture de la connexion BDD via PDO
	$connexion = new PDO($dsn,$user,$password);
} catch (\PDOException $e) {
	echo 'Connexion à la base de données impossible :<br>'.$e->getMessage();
}

//Création de contacts de test
$maurice = new Contact(1,'Maurice','Momo@abc.com');
$claire = new Contact(2,'Claire','Claire@DeuxLunes.fr');

//Création d'un groupe test
$testGroup = new Group('testGroup');
$testGroup->addContact($claire);

//Création d'un repertoire tel vide
$book = new ContactBook();

//Ajout de contact au répertoire 'book' créée précedement
$book->addContact($maurice);

//Ajout d'un groupe au répertoire
$book->addGroup($testGroup);

var_dump($book->getGroups()[0]->getContacts());

//faire la BDD
//Recup les info en BDD (écrire les méthodes qui executent les requetes)
//Ecrire les fonction d'affichage ( contactView )

?>