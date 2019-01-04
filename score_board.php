<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
table, th, td {
    border: 1px solid #FA9FBA;
}
</style>
  </head>
  <body style="background-color:#262643;">
    <h1 align="center" style="color:white;">Score Board of CryptoType</h1>
    <table align="center" style="width:50%;color:white;">
      <tr>
        <th>Name</th>
        <th>Score</th>
      </tr>

        <?php
        include("db.php");
            $query=mysqli_query($db,"SELECT * FROM signup");
            $numrows=mysqli_num_rows($query);
            if($numrows!=0)
            {
            while($row=mysqli_fetch_assoc($query))
            {
              echo '<tr><td align="center">'.$row['nickname'].'</td><td align="center">'.$row['level_score'].'</td></tr>';
            }
          }
            ?>
</table>
  </body>
</html>
