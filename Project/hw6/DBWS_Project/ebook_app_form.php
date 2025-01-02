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
         
        $ebook_query = "SELECT item.item_id, item.title FROM item INNER JOIN ebook ON item.item_id = ebook.ebook_id;";
        $app_query = "SELECT * FROM app;"; 
        ?>
        <form action="ebook_app_out.php" method="post">
        <div>Ebook</div>  
        <select name = "ebook">            
            <?php
            $ebook_result = mysqli_query($conn, $ebook_query);
            while($row = mysqli_fetch_array($ebook_result))
              {
                echo "<option value='" . $row['item_id'] . "'>"  . $row['title'] . "</option>";
              }   
              ?>       
          </select>
          <div>app</div>  
          <select name = "app">
            <?php
                $app_result = mysqli_query($conn, $app_query);
                while($column = mysqli_fetch_array($app_result))
                {
                  echo "<option value='" . $column['app_id'] . "'>"  . $column['name'] . "</option>";
                }
            ?>
          </select>
          <input type="submit" value = "Submit"/>
        </form>
    </body>
</html>