<?php

 require_once('Model.php');

 class User extends Model
 {
   protected $table='users';

    public function create($data)
   {
      $stmt=$this->db_manager->dbh->prepare('INSERT INTO ' . $this->table . ' (email,password, created) VALUES(?,?,now())');
       $stmt->execute($data);
   }

   public function findByEmail($data)
   {
       $stmt=$this->db_manager->dbh->prepare('SELECT * FROM ' . $this->table . ' WHERE email = ?');

       $stmt->execute($data);
       $user=$stmt->fetch();
       return $user;
   }
 }

 


 