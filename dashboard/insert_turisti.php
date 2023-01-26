
<?php

$nume="";
$prenume="";
$idLocatia="";
$sex="";
$job="";


//create connection
$conn = mysqli_connect('localhost','root','','php_app');

$errorMessage="";
$successeMessage ="";

if($_SERVER['REQUEST_METHOD']=='POST'){

    $nume=$_POST["nume"];
    $prenume=$_POST["prenume"];
    $idLocatia=$_POST["idLocatia"];
    $sex=$_POST["sex"];
    $job=$_POST["job"];



    do{
        if(empty ($nume) ||empty ($prenume) || empty ($idLocatia) || empty ($sex) || empty ($job)){
            $errorMessage = "All the fields are required";
            break;
        }

        //add a new book to DB
        $sql = "INSERT INTO lista_turistilor (nume,prenume,idLocatia,sex,job)
        VALUES ('$nume','$prenume','$idLocatia','$sex','$job')";
        $result = mysqli_query($conn, $sql);

        if(!$result){
            $errorMessage = "Invalid query:".$conn->error;
            break;
        }

        $nume="";
        $prenume="";
        $idLocatia="";
        $sex="";
        $job="";


        $successeMessage = "Row added correctly";
        header("location:../dashboard/vezi_turisti.php");
        exit;

    }while(false);
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css1/main.css">
    <link rel="stylesheet" href="./css1/row.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
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
            <a href="#" class="active">
                <i class='bx bx-grid-alt' ></i>
                <span class="links_name">Acasa</span>
            </a>
        </li>
        <li>
            <a href="#">
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
        <div class="container my-5">
            <h2 style="position:relative;top:-40vh;left:20vh;">New Row</h2>
            <?php
            if(!empty($errorMessage)){
                echo"
    <div class='alert alert-warning alert-dismissible fade show' role='alert'>
    <strong>$errorMessage</strong>
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    </div>
    
    ";
            }


            ?>
            <form method="post">
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label ">Nume</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="nume" value="<?php echo $nume; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label ">Prenume</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="prenume" value="<?php echo $prenume; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label ">idLocatie</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="idLocatia" value="<?php echo $idLocatia; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label ">Sex</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="sex" value="<?php echo $sex; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label ">Job</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="job" value="<?php echo $job; ?>">
                    </div>
                </div>




                <?php
                if(!empty($successeMessage)){
                    echo"
    div class='row mb-3'>
    <div class='offset-sm-3 col-sm-6'>
    <div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>$successeMessage</strong>
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    </div>
    </div>
    </div>
    ";

                }


                ?>


                <div class="row mb-3">
                    <div class="offset-sm-3 col-sm-3 d-grid">
                        <button style="color:white;background-color:lightslategray;"type="submit" class="btn btn-primary">Confirma</button>
                    </div>
                    <div class="col-sm-3 d-grid">
                        <a style="color:lightslategray;background-color:white;" class="btn btn-outline-primary" href="../dashboard/vezi_turisti.php" role="button">Anuleaza</a>
                    </div>
                </div>
            </form>
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

