<?php
/* --- Object Oriented Programming --- */
/* 
From PHP5 onwards you can write PHP in either a procedural or object oriented way. OOP consists of classes that can hold "properties" and "method". Objects can be created from classes. 
*/

class User {
   // Properties are just variables that belong to a class
   // Access modifier: public, private, protected
   // public - access from everywhere
   // private - access inside the class
   // protected - access inside the class and by inheriting class
   public $name;
   public $email;
   public $password;

   // Constructor
   public function __construct($name, $email, $password)
   {
      $this -> name = $name;
      $this -> email = $email;
      $this -> password = $password;
   }

   // Methods are fuction that belong to a class
   function set_name($name) {
      $this -> name = $name;
      }

   function get_name() {
      return $this -> name;
      }
}

/* Inst */
$user1 = new User('Ryan', 'ryan@gmail.com', '12345');
$user2 = new User('Benjie', 'benjie@gmail.com', 'qwerty');

echo $user1 -> email;
echo $user1 -> name;

// $user1 = new User();
// $user2 = new User();


// $user1 -> name='Ryan';
// $user2 -> name='Juan';

// // var_dump($user1);
// echo $user1 -> get_name();
// echo $user2 -> get_name();

class Employee extends User {
   public function __construct($name, $email, $password, $title)
   {
      parent::__construct($name, $email, $password);
      $this -> title = $title;
   }

   public function get_title() {
      return $this -> title;
   }
}

$employee1 = new Employee('Catrice', 'cat@gmail.com', '12345', 'Manager');
echo $employee1 -> get_title();

?>