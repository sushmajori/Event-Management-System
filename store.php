<?php
    include 'db.php';

    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $address = $_POST['add'];
        $year   = $_POST['year'];
        $email = $_POST['email'];
        $phonenum = $_POST['number'];
        $gender = $_POST['gender'];
        $event = $_POST['event'];

        


        $filename = $_FILES['file']['name'];
        $target_dir = "uploads/";
        $target_file = $target_dir.basename($_FILES["file"]["name"]);

        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        $q = "INSERT into event_reg(nam,addres,yer,mail,phone,gen,evnt,pth) VALUES('$name','$address','$year','$email','$phonenum','$gender','$event','$filename')";
        $res = mysqli_query($conn,$q);
        
        
        if (file_exists($target_file)) 
        {
            echo "<script>alert('Sorry, file already exists.')</script>";
            $uploadOk = 0;
        }
      
        if ($_FILES["file"]["size"] > 500000) 
        {
            echo "<script>alert('Sorry, your file is too large.')</script>";
            $uploadOk = 0;
        }
        
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") 
        {
            echo "<script>alert('Sorry, only JPG, JPEG & PNG files are allowed.')</script>";
            $uploadOk = 0;
        }
        
        if ($uploadOk == 0) 
        {
            echo "<script>alert('Sorry, your file was not uploaded.')</script>";
        } 
        else 
        {
            if ((move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) AND ($res)) 
            {
                echo "<script>alert('You are succesfully registered !!!')</script>";
                #header('location:view.php');
            } 
            else 
            {
                echo "<script>alert('Sorry, there was an error uploading your file.')</script>";
            }
        }

    }

?>