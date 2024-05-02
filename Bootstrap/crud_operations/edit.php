<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Edit Parrot Hacker</title>
</head>
<style>
        body {
            margin: 0;
            padding: 0;
            background-image: url('background/BG1.png'); 
            background-size: cover; 
            background-repeat: no-repeat; 
        }
        .container {
            margin-top: 80px;
            background-color: black; 
            padding: 20px; 
            color: white;
        }

        h1 {
            margin-top:70px;
            margin-bottom: 30px;
            color: white;
        }
    </style>
<body>
    
    <center>
        <h1>Edit Parrot Hacker</h1>
        <form action="controller.php" method="POST" enctype="multipart/form-data">
            <div class="container">
                <?php
                getRecord($_GET['id']);
                ?>
                <button type="submit" class="btn btn-primary" name="update_record">Update Record</button>
                <a href="view.php" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </center>
</body>

</html>

<?php

function getRecord($recno)
{
    include ("includes/sqlconnection.php");
    $sql = "SELECT * FROM Parrotexploit WHERE id='$recno'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "
                <div class='row mb-3'>
                    <input type='hidden' name='txtid' value='" . $row['id'] . "'>
                    <label for='txtfullname' class='col-sm-2 col-form-label'>Full Name</label>
                    <div class='col-sm-10'>
                        <input type='text' class='form-control' id='txtfullname' name='txtfullname' value='" . $row['fullname'] . "'>
                    </div>
                </div>
                <div class='row mb-3'>
                    <label for='txtusername' class='col-sm-2 col-form-label'>Username</label>
                    <div class='col-sm-10'>
                        <input type='text' class='form-control' id='txtusername' name='txtusername' value='" . $row['username'] . "'>
                    </div>
                </div>
                <div class='row mb-3'>
                    <label for='txtkills' class='col-sm-2 col-form-label'>Total Score in CTF Event 2024: </label>
                    <div class='col-sm-10'>
                        <input type='text' class='form-control' id='txthackCount' name='txthackCount' value='" . $row['hackCount'] . "'>
                    </div>
                </div>
                <div class='row mb-3'>
                    <label for='txtemail' class='col-sm-2 col-form-label'>Email</label>
                    <div class='col-sm-10'>
                        <input type='email' class='form-control' id='txtemail' name='txtemail' value='" . $row['email'] . "'>
                    </div>
                </div>
                <div class='row mb-3'>
                    <label for='txtpic' class='col-sm-2 col-form-label'>Insert Profile Picture: </label>
                    <div class='col-sm-10'>
                        <input type='file' class='form-control' id='txtpic' name='txtpic'>
                        <input type='hidden' name='txtpic_old' value='" . $row['pic'] . "'>
                    </div>
                </div>
            ";
        }
    } else
        echo "No record found";
    $conn->close();
}

?>