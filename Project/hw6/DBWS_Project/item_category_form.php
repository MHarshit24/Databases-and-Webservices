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
        $category_query = "SELECT * FROM category;"; 
        ?>
        <form action="item_category_out.php" method="post">
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
          <div>Category</div>  
          <select name = "category">
            <?php
                $category_result = mysqli_query($conn, $category_query);
                while($column = mysqli_fetch_array($category_result))
                {
                  echo "<option value='" . $column['category_id'] . "'>"  . $column['name'] . "</option>";
                }
            ?>
          </select>
          <input type="submit" value = "Submit"/>
        </form>
    </body>
</html>