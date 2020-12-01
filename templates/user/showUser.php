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
                                echo "<th>Categorie</th>";   
                                echo "<th>Edit</th>";   
                            echo "</tr>";                       
                                foreach ($result as $user) {
                                echo "<tr>";    
                                    echo "<td>" . $user->uname . " </td>";
                                    echo "<td>" . $user->role . " </td>";
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