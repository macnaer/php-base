 
 <?php
 /*$blackList = "10.7.34.7";

  $os_version = $_SERVER["HTTP_USER_AGENT"];*/

  //echo "os_version = " . $os_version . "<br>";

//   if ($os_version != "6.1"){
//       header("HTTP/1.0 404 Not Found");
//       exit;
//   }
  
  //if ($_SERVER['REMOTE_ADDR'] == $blackList){
      /*header("HTTP/1.0 404 Not Found");
      exit;*/
      //echo "Special for you!!! Sale 50%";
    //   header('Location: https://ukr.net');
    //   exit;

  //}
  $email = "";
  $pass = "";
  /*echo "<pre>";
    print_r($_POST);
  echo "</pre>";*/
  if (!empty($_POST)){
      $email = $_POST["email"];
      $pass = $_POST["pass"];
      echo $_POST["email"];
     //echo $pass;
  }


  $a = 10;
  $b = 20;

  if ($a > $b){
    echo "$a > $b";
  }
  else if ($a < $b){
    echo "$a < $b";
  }
  else{
    echo "$a = $b";
  }
