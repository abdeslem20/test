<?php
  class Kanban {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }

    // ajout d'un kanban
    //data contient les clés name, id_user,public
    public function add($data){
      $this->db->query('INSERT INTO kanbans (name, id_user,public) VALUES(:name, :id_user, :public)');
      // Bind values
      $this->db->bind(':name', $data['name']);
      $this->db->bind(':id_user', $data['id_user']);
      $this->db->bind(':public', $data['public']);

      if($this->db->execute()){
      return true;  
      } else {
        return false;
      }
    }

 

    public function modifyName($data)
    { 
      $this->db->query('update kanbans set name=:name where id=:id');
      // Bind values
      $this->db->bind(':name', $data['name']);
      $this->db->bind(':id', $data['id']);            
      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }


    public function modifyPublic($data)
    { 
      $this->db->query('update kanbans set public=:public where id=:id');
      // Bind values
      $this->db->bind(':name', $data['name']);
      $this->db->bind(':public', $data['public']);            
      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }


   

// la fonction getIdKanban retourn le ID de la kanban 
// retourn -1 si il y a pas un kanban avec les critere qu'on a pas mis 
// retourn le id s'il existe
 public function getIdKanban($name, $id_user){
      $this->db->query('SELECT id FROM kanbans WHERE name = :name and id_user = :id_user');
      $this->db->bind(':name', $name);
      $this->db->bind(':id_user', $id_user);
      $row = $this->db->single();
      // test si il y a un id dans la table kanbans avec les données qu'on cherche
      // Conversion de l'objet en array pour verfier si son contenu est n'est pas vide 
      $id = (array)$row;
        if (empty($arr)) {
           // il n y a pas un kanban avec ces critere 
          return -1;
        }
      else 
      {
        // la fonction reset (array) retourn le premier element dans un array
        return reset($id);
      }
    
    }


//KanbanExist vérifie si un utilisateur a utilisé le meme nom qu'une aute kanban déja ajouté par lui meme.
// Type de retour true / false
public function KanbanExist($name, $id_user){
      $this->db->query('SELECT * FROM kanbans WHERE name = :name and id_user = :id_user');
      $this->db->bind(':name', $name);
      $this->db->bind(':id_user', $id_user);
      $row = $this->db->single();
      if ($this->db->rowCount()>0)
        return true;
      else
        return false;
    
    }





    }