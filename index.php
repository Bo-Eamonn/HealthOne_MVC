<!-- 
originaly i've to make it like this but that ain't working so i'm doing it on my way 

use mvc\controller\Controller;

include_once "mvc/controller/Controller.php"; 
$controller = new Controller();
session_start();

if(isset($_SESSION['role']) && $_SESSION['role']=="admin")
{
    echo "Succes";
    $controller->showMedAction();
    $controller->showUserAction();
    $controller->showPatientAction();
    
} 
else {
    $controller->loginAction();
} 

Cause the above aint working i've to make it a bit different' 
-->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HealthOne | Inloggen</title>
    <link rel="stylesheet" href="/healthone_mvc/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>

<body>
    <div class="login">
    <img src="/healthone_mvc/assets/images/logo.png" alt="logo">
    <?php
        try{
            $db = new PDO("mysql:host=localhost;dbname=healthone", "root", "");
            if(isset($_POST['inloggen'])){
                $username = filter_input(INPUT_POST, "uname", FILTER_SANITIZE_STRING);
                $postPass = ($_POST['pswrd']);
                $password = strtoupper(hash("sha256", $postPass));
                $query = $db->prepare("SELECT * FROM users WHERE uname = :user AND pswrd = :pass");
                $query->bindParam("user", $username);
                $query->bindParam("pass", $password);
                $query->execute();
                if($query->rowCount() == 1){
                    session_start();
                    $_SESSION['login'] = true;
                    $_SESSION['username'] = $username;
                    header('Location: /HealthOne_MVC/home.php');
                    
                } else{
                    echo "<p id='wrng'>Onjuiste gegevens!</p>";
                }
                echo "<br>";
                
            }
        }
            catch(PDOException $e){
            die ("Error!: " . $e->getMessage());
        }
    ?>
        
        <h1>login</h1>
        <form method="POST">
            <input type="text" placeholder="Gebruikersnaam" autocomplete="off" name="uname" required="required" id="uname">
            <div class="container"> 
                <input type="password" placeholder="Wachtwoord" autocomplete="off" name="pswrd" required="required" id="pswrd">
                    <i class="far fa-eye" id="pswrdToggle"></i>
            </div> 
            <button name="inloggen" type="submit">Inloggen</button>
        </form>
    </div>
    <script src="/healthone_mvc/assets/js/pswrdToggle.js"></script>
</body>

</html>