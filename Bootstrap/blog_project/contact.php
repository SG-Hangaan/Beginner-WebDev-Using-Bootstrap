<!DOCTYPE html>
<html>
<head>
    <title>My Blog</title>
  
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<link rel="stylesheet" href="stylekoto.css">
	<script
	  src="https://code.jquery.com/jquery-3.7.1.js"
	  integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
	  crossorigin="anonymous"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


</head>

<body style="background: black;">
    <nav class="navbar navbar-custom">
        <div class="container-fluid"> 
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Tech Insights</a> 
            </div>
			
			<div class="nav navbar-nav form-inline navbar-right" style="padding: 1px">
				<div class="input-group">
					<input type="text" class="form-control">
					<div class="input-group-btn">
						<button class="btn btn-default"><i class="glyphicon glyphicon-search"> </i> </button>
					</div>
				</div>
			</div>
            <ul class="nav navbar-nav navbar-right"> 
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li> 
				<li><a href="post.php">Post</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
        </div>
    </nav>
	
	<header style="background: url (images/header.jpg);">
		<div class="text-center">
			
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
		</div>
	</header>
	