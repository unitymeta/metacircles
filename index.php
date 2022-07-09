<?php 
    require 'rb-mysql.php';
    R::setup( 'mysql:host=localhost;dbname=fintch','fintch', 'Muxa7515');


    if(!R::testConnection()){
     echo "No connection";
	 exit;
    }else{
        echo "Hello Fintch!";
    }
    
    $name = $_POST['Name'];
    $pass = $_POST['Pass'];
    
    if(!isset($name) || !isset($pass)){
        echo "Legacy information(s)";   
        exit;
    }
    
    echo registerUser($name, $pass);
    
    function registerUser($login, $password){
        $user = R::dispense('users');
        $user->login = $login;
        $user->password = $passwprd;
        R::store($user);
        return "Success: User $login sucessifull adedd!";
    }



   // $connection = mysqli_connect("localhost", "fintch", "Muxa7515", "fintch");
   // $a = 0;
   // $sql = "SELECT * FROM users ORDER BY id DESC";
   // $result = mysqli_query($connection, $sql);
    
   // if($result){
   //     while($row = mysqli_fetch_assoc($result)){
   //         echo $row["id"] . "," . $row["login"]. ",". $row["lvl"]. "*";
   //         $a++;
   //     }
   //     if($a == 0){
   //         echo "There is not one user!";
   //     }
   // }else{
   //     echo "Error!";
   // }
?>			