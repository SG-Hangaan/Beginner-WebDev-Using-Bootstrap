<?php

session_start();

include ("includes/sqlconnection.php");

if (isset($_POST['save_record'])) {
    $fullname = $_POST['txtfullname'];
    $username = $_POST['txtusername'];
    $hackCount = $_POST['txthackCount'];
    $email = $_POST['txtemail'];
    $pic = $_FILES['txtpic']['name'];

    echo $fullname;
    echo $username;
    echo $hackCount;
    echo $email;
    echo $pic;

    $sql = "INSERT INTO Parrotexploit(fullname, username, hackCount, email, pic) 
        VALUES('$fullname', '$username', '$hackCount', '$email', '$pic')";

    if ($conn->query($sql) === TRUE) {
        move_uploaded_file($_FILES["txtpic"]["tmp_name"], "uploads/" . $_FILES['txtpic']['name']);
        $_SESSION['status'] = "Record Insert Successfully";
        header('location:view.php');
    } else {
        $_SESSION['status'] = "Error: Insert Failed......";
        header('location:view.php');
    }

    $conn->close();
}

if (isset($_POST['update_record'])) {
    $id = $_POST['txtid'];
    $fullname = $_POST['txtfullname'];
    $nickname = $_POST['txtusername'];
    $hackCount = $_POST['txthackCount'];
    $email = $_POST['txtemail'];
    $pic_new = $_FILES['txtpic']['name'];
    $pic_old = $_POST['txtpic_old'];

    if ($pic_new != '')
        $update_pic = $pic_new;
    else
        $update_pic = $pic_old;

    echo "$update_pic";

    $sql = "UPDATE Parrotexploit
        SET fullname = '$fullname', username = '$username', hackCount ='$hackCount', email = '$email', pic = '$update_pic' 
        WHERE id = '$id'";

    if ($conn->query($sql) === TRUE) {
        move_uploaded_file($_FILES['txtpic']['tmp_name'], "uploads/" . $_FILES['txtpic']['name']);
        $_SESSION['status'] = "Record Update Successfully";
        header('location:view.php');
    } else {
        $_SESSION['status'] = "Error: Update Failed.....";
        header('location:edit.php');
    }

    $conn->close();
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $pic = $_GET['pic'];

    echo $id;
    echo $pic;

    $sql = "DELETE FROM Parrotexploit WHERE id = '$id'";

    if ($conn->query($sql) === TRUE) {
        unlink("uploads/" . $pic);
        $_SESSION['status'] = "Record Deleted Successfully";
        header('location:view.php');
    } else {
        $_SESSION['status'] = "Deletion Failed....";
        header('location:view.php'); 
    }

    $conn->close();
}