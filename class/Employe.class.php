<?php
/**
 *  La classe pour manipuler et instancier un-e employé-e
 */
class Employe
{
  private $_id;
  private $_nom;
  private $_prenom;
  private $_titre;
  private $_chef;

  public function __set($name, $value) {
    if ($name == "ID") {$this->_id = $value;}
    if ($name == "Nom" ) {$this->_nom = $value;}
    if ($name == "Prenom") {$this->_prenom = $value;}
    if ($name == "Titre" ) {$this->_titre = $value;}
    if ($name == "Chef") {$this->_chef = $value;}
  }
  public function __get($name) {
    if ($name == "ID") {return $this->_id;}
    if ($name == "Nom" ) {return $this->_nom;}
    if ($name == "Prenom") {return $this->_prenom;}
    if ($name == "Titre" ) {return $this->_titre;}
    if ($name == "Chef") {return $this->_chef;}
  }

  public function __construct($nom)
  {
    # code...
    echo "<p>Voici le constructeur...</p>";
    $this->_nom = $nom;
    $this->_prenom = $prenom;
    $this->_id = $_id;
    $this->_chef = $chef;
    $this->_titre = $titre;
  }

  public function afficherID()
  {
    // cette méthode devrait me permettre d'afficher l'ID correspondant au nom...
    echo $this->_id;
  }

}
