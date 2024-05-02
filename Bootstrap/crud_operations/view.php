<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Parrot Experts Cracking</title>
    <style>
        body {
            padding-top: 150px;
            background-image: url('background/BG2.png'); 
            background-size: cover; 
            background-repeat: no-repeat; 
            color: black; 
        }

        .container {
            width: 80%;
            padding: 20px; 
           
        }

        h1 {
            margin-bottom: 30px;
           

            
        }
        .table-header {
            background-color: black;
           
        }

        .table-header th,
        .table-header td {
            text-align: center;
            color: white; 
            
        }

        .table-header th:first-child,
        .table-header td:first-child {
            border-top-left-radius: 10px;
            
        }

        .table-header th:last-child,
        .table-header td:last-child {
            border-top-right-radius: 10px;
            
        }

        .btn-add-record {
            margin-bottom: 20px;
        }

    

    </style>
</head>

<body>
    <div class="container">
        <h1 class="text-center mb-4">Add New Parrot Hacker</h1>
        <?php
        if (isset($_SESSION['status']) && $_SESSION != '') {
            echo "<div class='alert alert-info'>" . $_SESSION['status'] . "</div>";
            unset($_SESSION['status']);
        }
        ?>
        <table class="table table-striped table-bordered table-hover">
            <thead class="table-header">
                <tr>
                    <th>ID</th>
                    <th>Full Name</th>
                    <th>Username</th>
                    <th>Total Score in CTF Event 2024</th>
                    <th>Email</th>
                    <th>Profile</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php viewAll(); ?>
            </tbody>
        </table>
        <form action="insert.php" method="POST">
            <button type="submit" class="btn btn-primary btn-add-record">Add New Record</button>
        </form>
    </div>
</body>

</html>

<?php

function viewall()
{
    include("includes/sqlconnection.php");
    $sql = "SELECT * FROM Parrotexploit ORDER BY id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "
                <tr>
                    <td>$row[id]</td>
                    <td>$row[fullname]</td>
                    <td>$row[username]</td>
                    <td>$row[hackCount]</td>
                    <td>$row[email]</td>
                    <td>
                        <img src='uploads/$row[pic]' width='100' height='75' alt='$row[pic]'>
                    </td>
                    <td>
                        <a href='edit.php?id=$row[id]' class='btn btn-sm btn-primary'>Edit</a>
                    </td>
                    <td>
                        <a href='controller.php?id=$row[id]&pic=$row[pic]' class='btn btn-sm btn-danger'>Delete</a>
                    </td>
                </tr> 
            ";
        }
    } else {
        echo "
            <tr>
                <td colspan='8' class='text-center'>No records found</td>
            </tr>
        ";
    }
    $conn->close();
}
