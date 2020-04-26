{% load static %}
<!doctype html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
				<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    
    

    <title>Rohrer Group - Industrieservices komplett & kompetent aus einer Hand</title>

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

	<div class="main-row row ">
	
	<div class="nav-side-bar col-md-3">

		<div class="brand"><img class="mb-4 mt-4" src="{% static 'geruestproject/img/rohrer-logo.png' %}" alt="" width="144" ></div>
				<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
				        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#tab-planning-scaffold" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fas fa-calendar-alt"></i> Planung</a>
                        <a class="nav-link" id="v-pills-home-tab" data-toggle="pill" href="#tab-new-scaffold" role="tab" aria-controls="v-pills-home" aria-selected="false"><i class="fas fa-plus-circle"></i> Gerüst-Anmeldung</a>
						<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#tab-remove-scaffold" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="fas fa-minus-circle"></i> Gerüst-Abmeldung</a>
						<a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#tab-rebuild-scaffold" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="fas fa-exchange-alt"></i> Gerüst-Umbau</a>
						<a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#tab-enhance-scaffold" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fas fa-expand-arrows-alt"></i> Gerüst-Erweiterung</a>
						<div class="dropdown-divider"></div>
						<a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#tab-measurement-control" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fas fa-check"></i> Aufmaßkontrolle</a>
                        <div class="dropdown-divider"></div>
						<a class="nav-link" href="https://rohrer.herokuapp.com/admin" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fas fa-table"></i> Gerüstbuch</a>
						<a class="nav-link" href="https://reiff-angular.herokuapp.com/" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fas fa-chart-line"></i> Dashboard</a>
				</div>
	</div>
			<div class="col-md-9 form-content">
				<div class="tab-content" id="v-pills-tabContent">
						<div class="tab-pane fade show active" id="tab-planning-scaffold" role="tabpanel" aria-labelledby="v-pills-home-tab">{% include 'interface/pages/planung.php' %}</div>
                        <div class="tab-pane fade" id="tab-new-scaffold" role="tabpanel" aria-labelledby="v-pills-home-tab">{% include 'interface/pages/anmelden.php' %}</div>
                        <div class="tab-pane fade" id="tab-remove-scaffold" role="tabpanel" aria-labelledby="v-pills-profile-tab">{% include 'interface/pages/abmelden.php' %}</div>
						<div class="tab-pane fade" id="tab-enhance-scaffold" role="tabpanel" aria-labelledby="v-pills-settings-tab">{% include 'interface/pages/erweiterung.php' %}</div>
						<div class="tab-pane fade" id="tab-rebuild-scaffold" role="tabpanel" aria-labelledby="v-pills-messages-tab">{% include 'interface/pages/umbau.php' %}</div>						
						<div class="tab-pane fade" id="tab-measurement-control" role="tabpanel" aria-labelledby="v-pills-settings-tab">{% include 'interface/pages/aufmass.php' %}</div>
						<div class="tab-pane fade" id="tab-account-control" role="tabpanel" aria-labelledby="v-pills-settings-tab">{% include 'interface/pages/rechnung.php' %}</div>
						<div class="tab-pane fade" id="tab-time-tracking" role="tabpanel" aria-labelledby="v-pills-settings-tab">Zeiterfassung</div>
						<div class="tab-pane fade" id="tab-data-view" role="tabpanel" aria-labelledby="v-pills-settings-tab">Datenansicht</div>
						<div class="tab-pane fade" id="tab-dashboard-view" role="tabpanel" aria-labelledby="v-pills-settings-tab">{% include 'interface/pages/dashboard.php' %}</div>
				</div>
			</div>
	</div>
		

				


	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery.min.js"><\/script>')</script>
	<script src="{% static 'geruestproject/js/popper.min.js' %}"></script>
	<script src="{% static 'geruestproject/js/bootstrap.js' %}"></script>
	<script src="{% static 'geruestproject/js/form_step_by_step.js' %}"></script>
	<script src="{% static 'geruestproject/js/main.js' %}"></script>
	<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
	<!-- <script src="holder.min.js"></script> -->
	<script>$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})</script>
</body>
</html>
