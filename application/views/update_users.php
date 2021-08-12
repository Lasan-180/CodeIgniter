<!DOCTYPE html>
<html>
    <head>
        <title>registation</title>
        <style>
            table,td{
                border: 1px solid black;
            }
            td{
                padding:5px;
            }
        </style>
    </head>

    <body>

    <?php
        foreach($data as $row)
    ?>
    
        <form method="post">
        <table style="width:100%;">
            <tr>
                <td> Enter Your Name </td>
                <td><input type="text" name="name" value ="<?php echo $row->name; ?>"></td>
            </tr>
            <tr>
                <td> Enter Your Email </td>
                <td><input type="text" name="email" value ="<?php echo $row->email; ?>"></td>
            </tr>
            <tr>
                <td> Enter Your Mobile </td>
                <td><input type="text" name="mobile" value ="<?php echo $row->mobile; ?>"></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align:center;"><input type="submit" name="update" value="update"> </td>
            </tr>
        </table>
        </form>

    </body>
</html>

