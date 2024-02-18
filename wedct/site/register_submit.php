<?php
    $db_hostname = "127.0.0.1";
    $db_username = "root";
    $db_password = "";
    $db_name = "wedct";

    $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

    if(!$conn){
        echo "Connection failed: " . mysqli_connect_error();
        exit;
    }

    $name = $_POST['name']; 
    $phone = $_POST["phone"];
    $email = $_POST['email'];

    $sql = "INSERT INTO users (name, phone, email) VALUES ('$name', '$phone', '$email')";
    $result = mysqli_query($conn, $sql);

    if($result){
        echo "<script>alert('Data Submitted Successfully!'); 
        window.location='index.html'</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
?>