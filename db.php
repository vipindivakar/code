<?php 
class db {
   private $host = "184.168.102.96";
   private $username = "AbhishekBharaty";
   private $database = "Admin_Panal_db";
   private $password = "@bhiBharaty007";
   protected $db;

   public function __construct()
   {
      try 
      {
          $this->db = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->database,$this->username, $this->password);
      } 
      catch(PDOException $e)
      {
          echo "Connection Problem: ". $e->getMessage();
      }
   }
}
 ?>