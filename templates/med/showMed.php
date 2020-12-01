<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HealthOne | Show Medicijnen</title>
    <link rel="stylesheet" href="/HealthOne_MVC/assets/css/user.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
</head>

<?php
require_once "templates/header.php";
require_once "templates/nav.php";
?>
<main>
    <div class="content">
        <img src="/healthone/frontend/static/images/profilePicture/profilePlaceholder.png" alt="Profiel Foto">
        <?php
               
        ?>
        <div class="container">
            <button onclick="document.getElementById('medAddModal').style.display='block'">Toevoegen</button>
            <div class="table">
                <?php
                        
                            echo "<table>";
                            echo "<tr>";     
                                echo "<th>Naam</th>";                       
                                echo "<th>Categorie</th>";   
                                echo "<th>edit</th>";   
                            echo "</tr>";                       
                                foreach ($result as $med) {
                                echo "<tr>";    
                                    echo "<td id='" . $med->insured."'>" . $med->name . " </td>";
                                    echo "<td id='" . $med->insured."'>" . $med->cat . " </td>";
                                    echo "<td id='" . $med->insured."'>" . "<a title='Edit'><i class='fa fa-pen' aria-hidden='true'></i></a>
                                                                               <a title='Delete'><i class='fa fa-trash' aria-hidden='true'></i></a>" . " </td>";
                                echo "</tr>";
                            }
                            echo "</table>";     
                            
                    ?>
            </div>
        </div>
    </div>
</main>
<?php
require_once "templates/footer.php";
?>
