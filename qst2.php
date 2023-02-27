<?php
// Create a PHP class called "Person" with the following properties and methods:
class Person {
      private $name;
      private $email;

      public function setName($name) {
        $this->name = $name;
      }

      public function setEmail($email) {
        $this->email = $email;
      }

      public function getName() {
        return $this->name;
      }

      public function getEmail() {
        return $this->email;
      }
}
// Create an instance of the Person class and set the name and email properties. Use the getName() and getEmail() methods to display the properties on the webpage.
    $person = new Person();
    $person->setName("Farhad Hossain");
    $person->setEmail("info@todaybdjob.com");
    echo "Name: " . $person->getName() . "<br>";
    echo "Email: " . $person->getEmail();

?>