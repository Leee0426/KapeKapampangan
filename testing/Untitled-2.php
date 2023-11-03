<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
                        $conn = mysqli_connect('localhost','lee','test123','test123');

                        if(!$conn){
                            echo 'Connection error: ' . mysqli_connect_error();
                        }

                        if(isset($_POST["username"])){
                        $name = $_POST["username"];
                        $email = $_POST["email"];
                        $pass = $_POST["pwd"];

                        $sql = "INSERT INTO testtest (name, pass, email)
                        VALUES ('$name', '$pass', '$email');";

                        if(mysqli_query($conn,$sql)){
                            echo "New record";
                        } else {
                            echo "Error" . $sql ."<br>" . mysqli_error($conn);
                        }

                        mysqli_close($conn);
     
                    }


                    ?>
</body>
</html>