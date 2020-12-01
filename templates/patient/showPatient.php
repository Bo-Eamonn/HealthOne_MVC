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
                                    echo "<td>" . "<a title='Edit'><i class='fa fa-pen' aria-hidden='true'></i></a>
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