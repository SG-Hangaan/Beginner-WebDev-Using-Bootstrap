<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Add New Parrot Hacker</title>
    <style>

        body {
            margin: 0;
            padding: 0;
            background-image: url('background/BG1.png'); 
            background-size: cover; 
            background-repeat: no-repeat; 
        }
        .container {
            margin-top: 150px;
            background-color: black; 
            padding: 20px; 
            color: white;
        }

        h1 {
            margin-bottom: 30px;
            color: white;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Add New Parrot Hacker</h1>
        <form action="controller.php" method="POST" enctype="multipart/form-data">
            <div class="row mb-3">
                <label for="txtfullname" class="col-sm-2 col-form-label">Full Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="txtfullname" name="txtfullname">
                </div>
            </div>
            <div class="row mb-3">
                <label for="txtnickname" class="col-sm-2 col-form-label">Username: </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="txtusername" name="txtusername">
                </div>
            </div>
            <div class="row mb-3">
                <label for="txtkills" class="col-sm-2 col-form-label">Total Score in CTF Event 2024: </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="txthackCount" name="txthackCount">
                </div>
            </div>
            <div class="row mb-3">
                <label for="txtemail" class="col-sm-2 col-form-label">Email: </label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="txtemail" name="txtemail">
                </div>
            </div>
            <div class="row mb-3">
                <label for="txtpic" class="col-sm-2 col-form-label">Insert Profile Picture: </label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" id="txtpic" name="txtpic">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-10 offset-sm-2">
                    <button type="submit" class="btn btn-primary" name="save_record">Save Record</button>
                    <a href="view.php" class="btn btn-secondary">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</body>

</html