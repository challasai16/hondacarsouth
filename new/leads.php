<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LEADS</title>
    <style>
        body {
            width: 80%;
            margin: 0 auto;
        }

        table {
            border: 1px solid black;
            border-collapse: collapse;
            margin-top: 50px;
            width: 100%;
            text-align: center;
            padding: 04px;
        }

        table td {
            border: 1px solid black;
            padding: 04px;
        }

        nav {
            gap: 10px;
        }

        a {
            padding: 10px;
            text-decoration: none;
            color: black;
            gap: 10px;
        }

        a:hover, .active {
            color: Orange;
            font-weight: bolder;
        }

        .filter {
            margin: 50px 0;
        }

        button {
            margin: 50px auto;
        }
    </style>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="addCategory">
        <nav>
            <h1><a href="index.php">HOME</a></h1>
        </nav>
        <h1>LEADS</h1>

        <!-- Form for Date Filtering -->
        <!-- <form action="leads.php" class="filter" method="GET">
            <label for="filter"> From:</label>
            <input type="date" id="startfilter" name="startfilter">
            <label for="filter"> To:</label>
            <input type="date" id="endfilter" name="endfilter">
            <input type="submit">
        </form> -->

        <!-- Display the Database Table -->
        <?php
       $servername = "localhost";
    $username = "u468158713_leads";
    $password = "Honda@leads123";
    $database = "u468158713_honda_leads";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $database);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Fetch data from the database
        $sql = "SELECT * FROM `hondaform`";
        $result = $conn->query($sql);

        // Check if there are any rows in the result
        if ($result->num_rows > 0) {
            echo "<table id='headerTable'>";
            echo "<thead>";
            echo "<tr>";
            echo "<td>Id</td>";
            echo "<td>Name</td>";
            echo "<td>Mobile</td>";
            echo "<td>Email</td>";
            echo "<td>Model</td>";
            echo "<td>State</td>";
            echo "<td>Options</td>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";

            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['NAME'] . "</td>";
                echo "<td>" . $row['MOBILE'] . "</td>";
                echo "<td>" . $row['EMAIL'] . "</td>";
                echo "<td>" . $row['MODEL'] . "</td>";
                echo "<td>" . $row['STATE'] . "</td>";
                echo "<td>" . $row['OPTIONS'] . "</td>";
                echo "</tr>";
            }

            echo "</tbody>";
            echo "</table>";
        } else {
            echo "NO RECORDS FOUND";
        }

        // Close the connection
        $conn->close();
        ?>
    </div>
</body>
</html>
