<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HealthOne | Show Patienten</title>
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
            <img src="/healthone/assets/images/profilePicture/profilePlaceholder.png" alt="Profiel Foto">
            <?php
            ?>
            <div class="container">
            <form action="home.php" method="post">    
            <button class="add" type="submit" name="showAddPatient">Toevoegen</button>
        </form>
                <div class="table">
                    <?php
                            echo "<table>";
                            echo "<tr>";     
                                echo "<th>Naam</th>";                          
                                echo "<th>Geboorte datum</th>";                          
                                echo "<th>Zorg Nummer</th>";                          
                                echo "<th>Edit</th>";                          
                            echo "</tr>";                       
                                foreach ($result as $patient) {
                                echo "<tr>";    
                                    echo "<td>" . $patient->naam . " </td>";
                                    echo "<td>" . $patient->geboortedatum . " </td>";
                                    echo "<td>" . $patient->zknummer . " </td>";
                                    echo "<td>" . "<form action='home.php' method='post'>
                                    <button class='ud' type='submit' value='$patient->id' name='editPatient' ><i class='fa fa-pen'></i></button>
                                    <button class='ud' type='submit' value='$patient->id' name='deletePatient' ><i class='fa fa-trash'></i></button>
                                </form>" . " </td>";
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