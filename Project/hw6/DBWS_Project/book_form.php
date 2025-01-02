<html>
    <head>
    </head>
    <body>
        <?php
        $servername = "localhost";
        $username = "group15";
        $password = "riskvolume";
        $dbname = "group15";
        
        // Create connection
        $conn =  mysqli_connect($servername, $username, $password,$dbname);
        
        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
         
        $item_query = "SELECT * FROM item;";
        ?>
        <form action="book_out.php" method="post">
        <div>Item</div>  
        <select name = "item">            
            <?php
            $item_result = mysqli_query($conn, $item_query);
            while($row = mysqli_fetch_array($item_result))
              {
                echo "<option value='" . $row['item_id'] . "'>"  . $row['title'] . "</option>";
              }   
              ?>       
        </select>
        <input type="number" name="quantity"/>

        <input type="submit" value = "Submit"/>
        </form>
    </body>
</html>