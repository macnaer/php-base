<?php 

$validEmail = "test@test.com";
$validPass = "mypass";

if(isset($_POST["submitForm"])){
    if(!empty($_POST["email"]) && !empty($_POST["password"])){
       // print_r($_POST);
        $email = $_POST["email"];
        $pass = $_POST["password"];

        if ($email == $validEmail && $validPass == $pass){
            echo "Login success!";
        }
        else {
            echo "Login or password incorrect!";
        }
    }
    
}
    

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <div class="container">
    <div class="row">
        <div class="col">
             <h1>Hello, world!</h1>
             <form method="POST" action="index.php"> 
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary" name="submitForm">Submit</button>
            </form>
            <!-- <div>Email: <?php //echo  $email  ?></div> -->
            <!-- <div>Password: <?php //echo $pass ?></div> -->
        </div>
    </div>
  </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>


<?php
/*$name = "Bill";
echo $name;
$number =  5;
echo "  " . $number;

$numberFloat =  5.14;
echo "  " . $numberFloat;


$boolVar =  true;
echo "  " . $boolVar . "  ";

$arr = [1,2,32,43,43,5,"Test"];
print_r($arr);*/
?>

