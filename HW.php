<?php
$host='locaLhost';
$username='root';
$password='';
$dbname='webb';
$connt = mysqli_connect($host,$username,$password,$dbname);
if(!$connt){
echo"error";
} else {
echo"connection done";
}

if (isset($_POST['send'])) {
    $gender =  $_POST['gender'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $imaguser ='namw';

   
    $stmt = $connt->prepare("INSERT INTO user (name ,email ,pass ,gend,imag)
    VALUES (?, ?, ?, ?,'$imaguser' )");
    $stmt->bind_param("ssis", $name, $email,$password,$gender);
    $stmt->execute();
    $stmt->close();
    $connt->close();
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HW Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container" style="margin-top: 30px;">

        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="exampleInputName1" class="form-label">Name</label>
                <input value="" name="name" type="text" class="form-control" id="exampleInputName1" aria-describedby="nameHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input value="" name="email" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input name="password" value="" type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
                <input name='checkMe' type="checkbox" class="form-check-input" id="exampleCheck1" require>
                <label class="form-check-label" for="exampleCheck1">Remember Me</label>
            </div>

            <div class="form-check">
                <input name="gender" value="1" class="form-check-input" type="radio" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                    Male
                </label>
            </div>
            <div class="form-check">
                <input name="gender" value="2" class="form-check-input" type="radio" id="flexRadioDefault2">
                <label class="form-check-label" for="flexRadioDefault2">
                    Female
                </label>
            </div><br>
            <div class="mb-3">
                <label for="formFileDisabled" class="form-label">Image</label>
                <input name="image" class="form-control" type="file" id="formFileDisabled">
            </div>

            <button name="send" type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>