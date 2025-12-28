<html>
    <head>
        <title>Shopsmart Signin</title>
        <link rel="stylesheet" href="msg.css">
    </head>

    <body>
        
        <nav>
            <h1>ShopSmart</h1>
        </nav>

        <center>
        <div id="confirm">
            <h3>do you want to create a new account ?</h3>
            <br>
            <button onclick="yes()">Yes</button>
            <button onclick="no()">No</button>
        </div>
        </center>

        <?php
        $username = $_POST['username'];
        $password = $_POST['password'];

        $conn = new mysqli("localhost","root","Vibin@#123","shopsmart");
        if($conn -> connect_error){
            echo "<script>alert('a Error has occured Please Retry !')</script>";
            echo "<script> window.location.href = 'signin.html'</script>";
        }
        $sql = "select * from signin where username='$username';";
        $result = $conn -> query($sql);
        if($result -> num_rows >0){
            $row = $result->fetch_assoc();
            if($username==$row['username'] && $password==$row['password']){
                $conn->close();
                echo "<script>alert('Signed in successfully!')</script>";
                echo "<script>window.location.href = 'company/company.php'</script>";
            }
            else{
                $conn->close();
                echo "<script>alert('Username or password is incorrect!')</script>";
                echo "<script>window.location.href = 'signin.html'</script>";
            }
        }
        else{
            echo "<script>document.getElementById('confirm').style.display = 'inline-block'</script>";
        }
        ?>
        
        <script src="signin.js"></script>
    </body>
</html>