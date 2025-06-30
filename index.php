<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dynamic Website with Database Integration</title>
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>
  <header>
    <nav class="navbar">
      <div class="nav-container">
        <a class="navigation" href="index.php"><img src="./img/company_logo.png" alt="header logo"></a>
          <ul class="nav-menu">
            <li class="nav-item"><a class="nav-link" aria-current="page" href="#">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="view.php">View</a></li>
          </ul>
      </div>
    </nav>
  </header>
	<section class="main-header">
		<div>
            <h1>Welcome to Street Style Fashion Employee Portal</h1>
			<h3>Dynamic Website with Database Integration</h3>
		</div>
	</section>
  <main class="form-container">
      <section class="form">
          <form method="post" action="add.php" class="form-row">
              <p><input type="text" name="name" placeholder="Your Name"></p>
              <p><input type="number" name="hours" placeholder="Your Hours Worked"></p>
              <p><input type="number" name="age" placeholder="Your Age"></p>
              <p><input type="email" name="email" placeholder="Your Email"></p>
              <p><input type="tel" name="phone" placeholder="Your Phone Number"></p>
              <p><input  type="text" name="gender" placeholder="Your Gender"></p>
              <p><input type="text" name= "address" placeholder="Your Address"></p>

              <input class="button" type="submit" name="Submit" value="Add">
              <input class="button" type="reset" value="Clear">
		     </form>
      </section>
     </main>
   </body>
</html>
