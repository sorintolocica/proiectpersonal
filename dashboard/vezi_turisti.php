<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link rel="stylesheet" href="css1/main.css">
    <link rel="stylesheet" href="css1/row.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="sidebar">
    <div class="logo-details">
        <span class="logo_name">Sistemul pentru pensiuni</span>
    </div>
    <ul class="nav-links">
        <li>
            <a href="dashboard.php" class="active">
                <i class='bx bx-grid-alt' ></i>
                <span class="links_name">Acasa</span>
            </a>
        </li>
        <li>
            <a href="../dashboard/vezi_turisti.php">
                <i class='bx bx-box' ></i>
                <span class="links_name">Lista turistilor</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class='bx bx-list-ul' ></i>
                <span class="links_name">Lista preferintelor</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class='bx bx-pie-chart-alt-2' ></i>
                <span class="links_name">Lista activitatilor</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class='bx bx-coin-stack' ></i>
                <span class="links_name">Lista localitatilor</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class='bx bx-book-alt' ></i>
                <span class="links_name">Lista pensiunilor</span>
            </a>
    </ul>
</div>
<section class="home-section">
    <nav>
        <div class="sidebar-button">
            <i class='bx bx-menu sidebarBtn'></i>
            <span class="dashboard">Panoul de control</span>
        </div>
    </nav>

    <div class="home-content">
        <div class="container_2 my-5">
            <h2 style="text-align:center;"  >Lista turistilor</h2>
            <a  style="color:white;background-color:lightslategray; position:relative; left:6vh;"  class="btn btn-primary" href="../dashboard/insert_turisti.php" role="button">Adauga turist nou</a>
            <br>
            <table class="new_row">
                <thead>
                <tr>
                    <td>Cod</td>
                    <td>Nume</td>
                    <td>Prenume</td>
                    <td>idLocatia</td>
                    <td>Sex</td>
                    <td>Job</td>
                    <td>Actiuni</td>


                </tr>
                </thead>
                <tbody>
                <?php

                $host = "localhost";
                $username = "root";
                $password = "";
                $database = "php_app";

                $conn = mysqli_connect($host, $username, $password, $database) or die ('Nu se poate conecta');

                //check connection to db
                if($conn->connect_error){
                    die("Connection failed:".$conn->connect_error);
                }
                //read all row from db table
                $sql = "SELECT * FROM lista_turistilor";
                $result =mysqli_query($conn,$sql);
                if(!$result){
                    die("Invalid query:".$conn->error);
                }
                //read data of each row
                while($row = $result->fetch_assoc()){
                    echo " 
            <tr>
            <td>$row[cod]</td>
            <td>$row[nume]</td>
            <td>$row[prenume]</td>
            <td>$row[idLocatia]</td>
            <td>$row[Sex]</td>
            <td>$row[Job]</td>
           
            <td>
                <a class= 'btn btn-primary  btn-sm' href='../dashboard/edit_turisti.php?nume=$row[nume]'>Editare</a>
                <a class= 'btn btn-danger btn-sm'  href='../dashboard/delete_turisti.php?cod=$row[cod]'>Stergere</a>
                </td>
           </tr>";
                }
                ?>



                </tbody>
            </table>


        </div>
</section>

<script>
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".sidebarBtn");
    sidebarBtn.onclick = function() {
        sidebar.classList.toggle("active");
        if(sidebar.classList.contains("active")){
            sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
        }else
            sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
    }
</script>

</body>
</html>

