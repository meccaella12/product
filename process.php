<?php
    include "conn.php";
    session_start();


    //this code is for add products
    if(isset($_POST['add_products'])){


        $picname= $_FILES['pic']['name'];
        $fileTmpName = $_FILES['pic']['tmp_name'];

        $pn = $_POST['pn'];
        $price = $_POST['price'];

       
        $insert = mysqli_query($conn, "INSERT INTO products VALUES('0','$picname','$pn','$price')");

        if($insert == true){

            $fileDestination = 'upload/' .$picname;
            move_uploaded_file($fileTmpName, $fileDestination);

            echo "1 product id added";

        }else{
            echo "error in adding";
        }
    }

    ?>