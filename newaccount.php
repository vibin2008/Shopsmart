<html>
    <head>
        <title>
            New Account ShopSmart
        </title>
    </head>
    <body>
        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $username = $_POST['username'];
                $password = $_POST['password'];
                $conn = new mysqli("localhost","root","Vibin@#123","javapro");
                if($conn -> connect_error){
                    echo "<script>alert('a Error has occured Please Retry !')</script>";
                }
                $sql = "select * from signin where username='$username';";
                $result = $conn -> query($sql);
                if($result -> num_rows > 0){
                    echo "<script>alert('Username Unavailable !')</script>";
                }
                else{
                    $sql = "insert into signin values($username,$password);";
                    $result = $conn -> query($sql);
                    echo "<script>Account Created Successfully !</script>";
                }
            }

        ?>

        <nav>
            <h1>ShopSmart</h1>
        </nav>
        <center>
            <link rel="stylesheet" href="signin.css">

            <div id="signin">
                <h2>Sigin up</h2>
                <form action="" method="post">
                    <input type="text" placeholder="username" name="username" required><br><br>
                    <input type="password" placeholder="password" name="password" required><br><br>
                    <br><br>
                    <center>
                    <button type="submit" class = "submit">Create New Account</button>
                    </center>
                </form>
            </div>
        </center>
    </body>
</html>