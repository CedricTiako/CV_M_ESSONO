

<?php 

Class Personne{

    public $nom;
    public $prenom;
    public $metier;
    public $date_naiss;
    public $tribut;
    public $statut;
    public $adresse;
    public $contact;
    public $email;
    public $langue;

    public function __construct( $nom, $prenom, $metier, $date_naiss, $tribut, $statut, $adresse, $contact, $email, $langue) 
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->metier = $metier;
        $this->date_naiss = $date_naiss;
        $this->tribut = $tribut;
        $this->statut = $statut;
        $this->adresse = $adresse;
        $this->contact = $contact;
        $this->email = $email;
        $this->langue = $langue;
        

    }

    public function get_nom(){
        return $this->nom;
    }

    public function get_prenom(){
        return $this->prenom;
    }

    public function get_metier(){
        return $this->metier;
    }

    public function get_date_naiss(){
        return $this->date_naiss;
    }

    public function get_tribut(){
        return $this->tribut;
    }

    public function get_statut(){
        return $this->statut;
    }

    public function get_adresse(){
        return $this->adresse;
    }

    public function get_contact(){
        return $this->contact;
    }

    public function get_email(){
        return $this->email;
    }

    public function get_langue(){
        return $this->langue;
    }

}

?>