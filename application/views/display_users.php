<!DOCTYPE html>
<html>
    <head>
        <title>display records</title>
        <style>
            table,td,th{
                border: 1px solid black;
            }
            td{
                padding:5px;
                text-align:center;
            }
        </style>
    </head>

    <body>
        <table style="width:100%;">
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Delete</th>
            <th>Update</th>
        </tr>
        <?php
            foreach($data as $row){
                echo "<tr>";
                echo "<td>".$row->id."</td>";
                echo "<td>".$row->name."</td>";
                echo "<td>".$row->email."</td>";
                echo "<td>".$row->mobile."</td>";
                echo "<td><a href='deletedata?id=".$row->id."'>Delete</a></td>";
                echo "<td><a href='updatedata?id=".$row->id."'>update</a></td>";
                echo "</tr>";
            }
        ?>
        </table>

    </body>
</html>
