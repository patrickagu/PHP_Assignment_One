<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Data Content</title>
	<meta name="description" content="Street Style Fashion App">
        <link rel="stylesheet" href="./css/style.css">	
</head>
<body>
	<header>
    <nav class="navbar">
      <div class="nav-container">
        <a class="navbar-brand" href="index.php"><img src="./img/company_logo.png" alt="header logo"></a>
          <ul class="nav-menu">
            <li class="nav-item"><a class="nav-link" aria-current="page" href="#">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="view.php">Content</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
<div class="container">
	<div class="row">
		<table class="table">
      <?php
      include "crud.php";
      // New crud object
      $crud = new crud();
      //variable to store sql
      $query = "SELECT * FROM employees";
      $result = $crud -> getData($query);
      ?>
      <!-- Add Table headings -->
      <tr>
          <th>Employee_Name</th>
          <th>Hours_Worked</th>
          <th>Gender</th>
          <th>Employee_Age</th>
          <th>Email_Address</th>
          <th>Phone_Number</th>
          <th>Home_Address</th>
      </tr>
            <?php
            foreach ($result as $key => $response) {
                echo "<tr>";
                echo "<td>".$response['name']."</td>";
                echo "<td>".$response['hours']."</td>";
                echo "<td>".$response['gender']."</td>";
                echo "<td>".$response['age']."</td>";
                echo "<td>".$response['email']."</td>";
                echo "<td>".$response['phone']."</td>";
                echo "<td>".$response['address']."</td>";
                echo "</tr>";
            }
            ?>
		</table>
	</div>
</div>
</body>
</html>
