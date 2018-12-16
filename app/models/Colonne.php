<?php
  class Colonne {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }


 public function AddColumns($nomCol,$id_kanban)
    { 
      $this->db->query('insert into columns (nom,id_kanban) values(:nom,:id_kanban)');
      // Bind values
      $this->db->bind(':nom', $nomCol);
      $this->db->bind(':id_kanban', $id_kanban);            
      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }

    public function ModifyColumns($newColName,$id_kanban)
    {
        //Verifié si le nom de la colonne n'est pas utilisé dans une autre colonne de meme projet.


     $this->db->query('update columns set nom= :nom where id_kanban= :id_kanban');
          // Bind values
      $this->db->bind(':nom', $newColName);
      $this->db->bind(':id_kanban', $id_kanban);            
    
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }

    }


    public function ColumnNameNotUsed($newColName,$id_kanban)
    {
       $this->db->query('SELECT * from columns where id_kanban= :id_kanban and nom= :newColName');
    
      $this->db->bind(':id_kanban', $id_kanban);
        $this->db->bind(':newColName', $newColName);

      $this->db->execute();
      if ($this->db->rowCount()>0)
        return true;
      else
        return false;

    }






    }