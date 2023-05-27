<?php
header('Locatin:../dashboard.php');
?>
<?php
include ('../db.php');
$sql="SELECT * FROM users";
$result=$con->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
  
    <title>All Users</title>
    <style>
    body{
        background-color: #1161ed;
    }
    h1{
      color: black;
      text-align: center;
      font-family: 'Montserrat', sans-serif;
    }
    /* CSS styles for the table */
    table {
        width: 100%;
        border-collapse: collapse;
        background-color: #f2f2f2;
    }

    th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
      background-color: #f2f2f2;
    }
    footer{
      text-align: center;
      color: white;
    }

  </style>
</head>
<body>
<header>   <div class="form">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
      
        <p>You are in user dashboard page.</p>
        <p><a href="../logout.php">Logout</a></p>
    </div></header>
<?php
if($result->num_rows > 0){
?>
  <h1>All Users</h1>
  
  <table>
    <thead>
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Created-at</th>
        <th>Edit/Delete</th>

      </tr>
      <?php
			$i=0;
      while($row=$result->fetch_assoc()){
			?>
    </thead>
    
      <tr>
        <td><?php echo $row["id"]; ?></td>
        <td><?php echo $row["username"];?></td>
        <td><?php echo $row["email"];?></td>
        <td><?php echo $row["password"];?></td>
        <td><?php echo $row["createdatetime"];?></td>
        <td><p><button><a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a></button>
        <button><a href="edite.php?id=<?php echo $row["id"]; ?>">Edite</a></button></p></td>
      </tr>
      <?php
			$i++;
			}
			?>

  </table>
  <?php
}
else
{
    echo "No result found";
}
?>
  <footer>
<?php
include('a.html')
?>
</footer>
</body>


</html>