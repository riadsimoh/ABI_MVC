<?php

class Theworkspace {

  private $db;


  public function __construct(){
    $this->db = new Database();
  }

  public function getClients() {

    $this->db->query('SELECT *, SECTEUR_ACTIVITE.IDSECT AS
             idSect FROM
            CLIENTS INNER JOIN SECTEUR_ACTIVITE ON CLIENTS.IDSECT = SECTEUR_ACTIVITE.IDSECT');

    $result = $this->db->resultSet();

    return $result;


  }
  public function getProjects() {

    $this->db->query('SELECT CLIENTS.RAISONSOCIALE, PROJETS.NOMPROJET, PROJETS.TYPEPROJET
     FROM CLIENTS 
     JOIN COMMANDER ON CLIENTS.IDCLIENT = COMMANDER.IDCLIENT 
     JOIN PROJETS ON COMMANDER.CODEPROJET = PROJETS.CODEPROJET');

    $result = $this->db->resultSet();

    return $result;


  }







}