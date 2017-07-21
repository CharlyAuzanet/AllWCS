<?php

class Users  {
    private $id;
    private $nom;
    private $prenom;
    private $email;

    public function getId () {
        return $this->id;
    }
    public function setId($id){
        return $this->id = $id;
    }
    public function getNom () {
        return $this->nom;
    }
    public function setNom($nom){
        return $this->nom = $nom;
    }
    public function getPrenom () {
        return $this->prenom;
    }
    public function setPrenom($prenom){
        return $this->prenom = $prenom;
    }
    public function getEmail () {
        return $this->email;
    }
    public function setEmail($email){
        return $this->email = $email;
    }

    public function __construct()
    {
        $db = new PDO(BDD_DRIVER.':host='.BDD_SERVER.';dbname='.BDD, BDD_USER, BDD_MDP);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->db = $db;
    }
    public function createUser(array $tabUser){

        $reqInsertUser = 'INSERT INTO Users (`nom`, `prenom`, `email`) VALUES';

        $reqInsertUser .= '(:nom, :prenom, :email)';
        $Users = $this->db->prepare($reqInsertUser);
        $Users->execute($tabUser);

        return $this->db->lastInsertId();
    }

    public function getAllUsers(array $allUsers){

        $reqAllUser = 'SELECT * FROM Users';
        $reponse = $this->db->prepare($reqAllUser);
        $reponse->execute($allUsers);

        return $this->db->$reponse;
    }
}

