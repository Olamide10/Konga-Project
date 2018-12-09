<?php
        $serverName = "localhost";
        $database = "mohfoods";
        $username = "root";
        $password = "";

$conn = mysqli_connect($serverName, $username, $password, $database);
if(!$conn){
    die("connection failed:" .mysqli_connect());
}

// Attempt select query execution
$sql = "SELECT * FROM order";
    if($result = mysqli_query($conn, $sql)){
        if(mysqli_num_rows($result) > 0){
            echo "<table>";
                echo "<tr>";
                    echo "<th>id</th>";
                    echo "<th>menu</th>";
                    echo "<th>customer_name</th>";
                    echo "<th>quantity_item</th>";
                    echo "<th>address_cust</th>";
                    echo "<th>phone_num</th>";
                echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['menu'] . "</td>";
                echo "<td>" . $row['customer_name'] . "</td>";
                echo "<td>" . $row['quantity_item'] . "</td>";
                echo "<td>" . $row['address_cust'] . "</td>";
                echo "<td>" . $row['phone_num'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
        } else{
        echo "No records matching your query were found.";
        }
        } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        }
        
        // Close connection
        mysqli_close($conn);
    ?>
<!DOCTYPE html>
    <html>
        <head>
            <title>View All Order</title>
        </head>
        <body>
            <h3>So many orders to view!</h3>
                <a href="admin.php">Return to Form</a>
        </body>
        
</html>