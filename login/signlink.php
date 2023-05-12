<?php
if(isset($_POST['fsubmit']))

{
    //fetching data from the html form
    $name=$_POST["name"];
    $email=$_POST["email"];
    $pass=$_POST["password"];

    //database details
    $host="localhost";
    $username="root";
    $dbname="haree";
    $password="root123";

    //create connection
    $con=mysqli_connect($host,$username,$password,$dbname);
    //check connection whether it is working or not
    if(!$con)
    {
        die("connection failed-".mysqli_connect_error());
    }

    // inserting data from the html form
    $sql = "insert into sign(name,email,password) values ('$name','$email','$pass')";

    //save and check whether data is stored properly into database or not
    $save = mysqli_query($con,$sql);
    if($save)
    {
        echo "Data has been stored successfully.";
        
    }
    else{
        echo "Error occured during sending the data.";
    }

    //close the connection
    mysqli_close($con);
}
?>