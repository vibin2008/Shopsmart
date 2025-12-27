<html>
    <head>
        <title>Shopsmart Home</title>
        <link rel="stylesheet" href="company.css">
    </head>

    <?php

        $conn = new mysqli("localhost","root","Vibin@#123","shopsmart");
        if($conn->connect_error){
            echo "<script>alert('Connection Error !')</script>";
        }

        $sql = "select * from company;";
        $result = $conn->query($sql);
        $array = [];
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                array_push($array,$row['company']);
            }
        }
        $conn->close();
    ?>

    <body>
        <nav>
            <h1>ShopSmart</h1>
        </nav>
        <br><br>
        
        <div id=search>
            <input type="text" oninput="find()" id='inp'>
        </div>

        <br><br>

        <script>
            const img = <?php echo json_encode($array); ?>
        </script>
        <div id="img"></div>

        <script src="company.js"></script>
    </body>
</html>