 <!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
  
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	
	<script
	  src="https://code.jquery.com/jquery-3.7.1.js"
	  integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
	  crossorigin="anonymous"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


		<style>
		
			body {
				background-color: silver; 
				margin: 0; 
				padding: 0; 
				font-family: Arial, sans-serif; 
				
			}
			#contact {
				margin-top:90px;
				background: silver;
				text-align: center;
				padding: 20px;
			}

			.form-container {
				margin-top:40px;
				display: flex;
				justify-content: center;
			}

			.contact-form {
				width: 50%;
				max-width: 500px; 
			}

			.form-group {
				margin-bottom: 15px;
			}
			
		</style>

</head>
<body>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">E-Commerce</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="index.php">Home</a></li>
					<li><a href="software.php">Software</a></li>
					<li><a href="music.php">Music</a></li>
					<li><a href="contact.php">Contact Us</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<section id="contact">
        <div class="page-header">
            <h1>Contact Me</h1>
        </div>
        <div class="form-container">
            <form class="contact-form">
                <div class="form-group">
                    <input class="form-control" placeholder="Enter Your Name" type="text">
                </div>
                <div class="form-group">
                    <input class="form-control" placeholder="Enter Your E-mail" type="email">
                </div>
                <div class="form-group">
                    <input class="form-control" placeholder="Subject" type="text">
                </div>
                <div class="form-group">
                    <textarea class="form-control" rows="5" placeholder="Comments"></textarea>
                </div>
                <div class="form-group">
                    <input class="btn btn-success btn-block" type="submit" value="Submit">
                </div>
            </form>
        </div>
    </section>
</body>
</html>