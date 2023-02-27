<?php
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

    $person = new Person();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];

    $person = new Person();
    $person->setName($name);
    $person->setEmail($email);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <title>Modules-5 | Assignment</title>
</head>
<body>
    <section class="setctionform py-5">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="show_daa">
                    <h3><?php echo "Name: " . $person->getName();?></h3>
                    <h3><?php echo "Email: " . $person->getEmail();?></h3>
                </div>
            <form method="post"action="qst3.php">
                    <div class="form-group">
                        <label for="exampleInputFullName">Full Name <span style="color:red;">*</span></label>
                        <input type="text" class="form-control" name="name" id="exampleInputFullName" placeholder="Enter FullName...">
                </div>

                <div class="form-group">
                        <label for="exampleInputemail">E-mail <span style="color:red;">*</label>
                        <input type="email" class="form-control" name="email" id="exampleInputemail" placeholder="Example: info@gmail.com">
                </div>

                <div class="form-group">
                    <input type="submit" class="form-control btn btn-primary"  id="" value="Submit">
                </div>
             </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    </section>
</body>
</html>




