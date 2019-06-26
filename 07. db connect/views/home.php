<?php
session_start();

if (isset($_SESSION["username"])){
     header("Location: search.php");
}

// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";

if (!empty($_POST)){
    $email = $_POST["email"];
    $password = $_POST["password"];

    require_once "./controller/userController.php";
    $formValidate = new userController();
    $user = $formValidate->Validate($email, $password );
    if (isset($user['email'])){
        $useremail = $user['email'];
        $_SESSION["username"] = $useremail;
        header("Location: search.php");
    }
    else if (empty($user)){
        $msg = "User does not exist!";
        $_SESSION["msg"] = $msg;
    }

}
?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Home page</h1>
            <form method="POST" action="index.php">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control"  name="password" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <div class="msg">
                <?php 
                    if (isset($_SESSION["msg"])){
                        echo $_SESSION["msg"];
                    }
                ?>
            </div>
        </div>
    </div>
</div>