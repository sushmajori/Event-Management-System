<html>
    <head></head>
    <body style='background:url(bggg.jpg); background-repeat:no-repeat; background-size:cover;'>
        
        <?php
        #include 'db.php';
        include 'store.php';

        $q1 = "SELECT * from event_reg";
        $r = mysqli_query($conn,$q1);
        if($r)
        {
            echo "<center><table border=1 style='margin-top:50px; background-color:white; padding:10px;'>";
            echo "<tr><th>Name</th><th>Address</th><th>Year</th><th>Email</th><th>Phone Number</th><th>Gender</th><th>Event</th><th>ID</th></tr>";
            while($res = mysqli_fetch_array($r,MYSQLI_ASSOC))
            {
                echo "<tr>
                <td>{$res['nam']}</td>
                <td>{$res['addres']}</td>
                <td>{$res['yer']}</td>
                <td>{$res['mail']}</td>
                <td>{$res['phone']}</td>
                <td>{$res['gen']}</td>
                <td>{$res['evnt']}</td>
                <td><a href='uploads/{$res['pth']}'>Click To View ID</a></td>
                </tr>";
            }
            echo "</table></center>";
        }
        else
        {
            echo "<script>alert('No records to fetch');</script>";
        }


        ?>
        <br><br><center><button style='height:50px; width:130px; background:teal; border:none; font-size:20px;'><a href='home.html' style='text-decoration:none; color:white;'>Home Page</a></button></center>
    </body>
</html>        