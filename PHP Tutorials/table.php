<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Table</title>

    <!-- CSS for table -->
    <style>
       table{
       border-collapse: collapse;
       width: 50%;
       display: flex;
       justify-content: center;
       align-items: center;
       height: 30%;
       margin: auto;
       column-gap: 5px;
       margin-top: 15%;
       }
       th,td{
         border: 1px, solid, black;
         padding: 8px;
         text-align: left;
       }

       th{
         background-color:#f2f2f2;
      }

    </style>
</head>
<body>
    
  <?php

  // creating 2D Array
    
    $info = array(
        array("01", "John", "john@email.com", "30", "pic.jpg"),
        array("02", "Jame", "jame@email.com", "20", "pic.jpg"),
        array("03", "Jason", "jason@email.com", "10", "pic.jpg"),
        array("04", "Jolly", "jolly@email.com", "32", "pic.jpg")
    );

// output table

    echo "<table>";
    echo "<tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Age</th>
         </tr>";

// output each row

    echo "<tr>";
    echo "<td>" . $info[0][0] . "</td>";
    echo "<td>" . $info[0][1] . "</td>";
    echo "<td>" . $info[0][2] . "</td>";
    echo "<td>" . $info[0][3] . "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>" . $info[1][0] . "</td>";
    echo "<td>" . $info[1][1] . "</td>";
    echo "<td>" . $info[1][2] . "</td>";
    echo "<td>" . $info[1][3] . "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>" . $info[2][0] . "</td>";
    echo "<td>" . $info[2][1] . "</td>";
    echo "<td>" . $info[2][2] . "</td>";
    echo "<td>" . $info[2][3] . "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>" . $info[3][0] . "</td>";
    echo "<td>" . $info[3][1] . "</td>";
    echo "<td>" . $info[3][2] . "</td>";
    echo "<td>" . $info[3][3] . "</td>";
    echo "</tr>";

    echo "</table>";

  ?>

    
</body>
</html>