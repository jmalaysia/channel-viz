

<!DOCTYPE html/>

<html>
    
	<head> 
		<title>Underwood Oil</title>
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	
	<body>
		<div id = "container">
			<div id = "header">
				<h1> Underwood Oil Dipper </h1>
			</div>
			<div id = "content">
				<div id = "nav">
				
				</div>
                <div id = "fault">
                    <form action="landing.php" method="post">
                        ENTER ACCESS ID:<input type="password" name="accessid">
                        <input type="submit">
                    </form>  
				    <?php
                        if(isset($_POST['accessid']))
                        {
                            if ($_POST['accessid']=="wellcontrol")
                            {
                                header('Location:process.php');
                            }
                            else {
                            header('Location:landing.php');
                            }
                        }
                    ?>
 
                  
				</div>
				<div id = "level">
				
				</div>
				<div id = "config">
				
				</div>
			</div>
				<div id = "footer">
				<h3> Copyright &copy; 2014 John Hudson </h3>
                <h3>hudsoncontrols@gmail.com</h3>
				</div>
		</div>
	</body>
    
</html>

