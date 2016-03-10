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
  /*private $Id;
  private $Nom;
  private $Prenom;
  private $Titre;
  private $Chef;*/

  public function __set($nomProp, $valProp) {
    if ($nomProp == "ID") {$this->_id = $valProp;}
    if ($nomProp == "Nom" ) {$this->_nom = $valProp;}
    if ($nomProp == "Prenom") {$this->_prenom = $valProp;}
    if ($nomProp == "Titre" ) {$this->_titre = $valProp;}
    if ($nomProp == "Chef") {$this->_chef = $valProp;}
/*    $this->$nomProp=$valProp;*/

  }
  public function __get($nomProp) {
    if ($nomProp == "ID") {return $this->_id;}
    if ($nomProp == "Nom" ) {return $this->_nom;}
    if ($nomProp == "Prenom") {return $this->_prenom;}
    if ($nomProp == "Titre" ) {return $this->_titre;}
    if ($nomProp == "Chef") {return $this->_chef;}
/*    return $this->$nomProp;*/
  }

  public function __construct($inId=null, $inNom=null, $inPrenom=null, $inTitre=null, $inChef=null)
  {
    $this->ID = $inId;
    $this->Nom = $inNom;
    $this->Prenom = $inPrenom;
    $this->Titre = $inTitre;
    $this->Chef = $inChef;
  }

  public function afficherID()
  {
    // cette méthode devrait me permettre d'afficher l'ID correspondant au nom...
    echo $this->_id;
  }

}
