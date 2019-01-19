{% load static %}
<!doctype html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
				<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    
    

    <title>test läuft</title>

    <!-- Bootstrap core CSS -->
    <link href="{% static 'geruestproject/css/bootstrap.css' %}" rel="stylesheet">
	<!-- From Step by Step -->
	<link rel="stylesheet" href="{% static 'geruestproject/css/main.css?v=<?php echo time(); ?>' %}">
	<!-- From Step by Step -->
	<link rel="stylesheet" href="{% static 'geruestproject/css/form_step_by_step.css?v=<?php echo time(); ?>' %}">
    <!-- Custom styles for this template -->
    <link href="{% static 'geruestproject/css/sidenav.css?v=<?php echo time(); ?>' %}" rel="stylesheet">
				
				<!-- Font Awesome -->
				<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/solid.js" integrity="sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l" crossorigin="anonymous"></script>
				<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>
				
				
				
		</head>
<body>

	Hier steht ein Text verdammt!
	{{ wert }}
		

				


	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery.min.js"><\/script>')</script>
	<script src="{% static 'geruestproject/js/popper.min.js' %}"></script>
	<script src="{% static 'geruestproject/js/bootstrap.js' %}"></script>
	<script src="{% static 'geruestproject/js/form_step_by_step.js' %}"></script>
	<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
	<!-- <script src="holder.min.js"></script> -->
	<script>$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})</script>
</body>
</html>