<?php
session_start(); // start (or resume) session

// create database connection ($connection)
$connection = new mysqli("localhost", "student", "CompSci364",
                         "airportDB");

$error = false;
if (! isset($_SESSION["username"]) // already authenticated
    && isset($_POST["username"], $_POST["password"])) {
  // query database for account information
  $statement = $connection->prepare("SELECT password_hash ".
                                    "FROM Users ".
                                    "WHERE username = ?;");
  $statement->bind_param("s", $_POST["username"]);

  $statement->execute();
  $statement->bind_result($password_hash);

  // username present in database
  if ($statement->fetch()) {
    // verify that the password matches stored password hash
    if (password_verify($_POST["password"], $password_hash)) {
      // store the username to indicate authentication
      $_SESSION["username"] = $_POST["username"];
    }
  }

  $error = true;
}

if (isset($_SESSION["username"])) { // authenticated
  $location = "homepage.html";
  if (isset($_REQUEST["redirect"])) {
    $location = $_REQUEST["redirect"];
  }

  // redirect to requested page
  header("Location: ".$location);
}

 ?>
<!DOCTYPE html>
<html>
<head>
<style>
			.head {
				border: 1px solid black;
				padding: 20px;
				margin: 1px;
				text-align: center;
				font-size: 30px;
				background-color: lightgray;
				}
			.links{
				border: 1px solid black;
				padding: 20px;
				margin: 10px;
				text-align: center;
				font-size: 22px;
				background-color: #f0f8ff;
			}
			.art{
				text-align: center;
				font-size: 80px;
			}
		</style>
</head>
  <body>
    <?php
      if ($error) {
        echo "Invalid username or password.";
      }
     ?>
     <div class="head">
     <h1>Airport Information System Login</h1>
     <br>
     <b>Authorized Users Only</b>
     </div>
     <div class="links">
    <form action="<?php echo $_SERVER["PHP_SELF"].
                             "?".$_SERVER["QUERY_STRING"]; ?>"
          method="post">
      <label for="username">Username</label>
      <input name="username" type="text"
             value="<?php if (isset($_POST["username"]))
                            echo $_POST["username"]; ?>" />
      <label for="password">Password</label>
      <input name="password" type="password" />

      <input type="submit" value="Log in" />
      </div>
    </form>
    <div class="art">
		<pre>
__|__
--@--@--(_)--@--@--
		</pre>
		</div>
  </body>
</html>
