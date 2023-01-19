<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DPA | Statement</title>
    <link rel="icon" type="image/x-icon" href="/img/dynamic.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/table1.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>

    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to your DPA Account.</h1>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
    </p>

<section>
        <h1>DYNAMIC ACCOUNT STATEMENT</h1>
        <!-- TABLE CONSTRUCTION -->
        <table id>
            <tr>
                <th>PAYMENT MONTH</th>
                <th>DATE OF PAYMENT</th>
                <th>SAVED AMOUNT</th>
                <th>SHARES</th>
                <th>LOAN</th>
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS -->
            <?php
			
								
				//*****************************************************************************
				// Include config file
				require_once "connections/config.php";

				//*****************************************************************************
				// SQL query to select data from database
				$username = $_SESSION["username"];
				$sql = " SELECT * FROM accounts  WHERE username = '$username'";
				$result = $link->query($sql);
				//$link->close();
				
				//**************************************************************************
                // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
            ?>

            <tr>                          
                    <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                <td style="font-weight:bold;"><?php echo $rows['dates'];?></td>
                <td style="font-weight:bold;"><?php echo $rows['description'];?></td>
                <td style="font-weight:bold;"><?php echo $rows['savings'];?></td>
				<td style="font-weight:bold;"><?php echo $rows['shares'];?></td>
                <td style="font-weight:bold;"><?php echo $rows['loan'];?></td>                
            </tr>

            <?php
                }
            ?>
        </table>
    </section>
  </body>
      
</html>