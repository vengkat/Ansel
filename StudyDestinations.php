	<!-- header section -->
	<?php include('header.html'); ?>
	<!-- header section end-->

<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Navigation section  -->
	<?php include('navigation.html'); ?>
	<!-- Navigation section end -->


	<!-- Breadcrumb section -->
	<div class="site-breadcrumb">
		<div class="container">
			<a href="home.php"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-right"></i>
			<span>Study Destinations</span>
		</div>
	</div>
	<!-- Breadcrumb section end -->
	<?php 
		$queries = array();
		parse_str($_SERVER['QUERY_STRING'], $queries);		
		// print(print($queries['q'])); 
		if($queries['q']=='AU'){			
			include('study-destinations/Australia.htm');
		}
		if($queries['q']=='CA'){			
			include('study-destinations/Canada.htm');
		}
		if($queries['q']=='EU'){			
			include('study-destinations/Europe.htm');
		}
		if($queries['q']=='GD'){			
			include('study-destinations/Grenada.htm');
		}
		if($queries['q']=='MY'){			
			include('study-destinations/Malaysia.htm');
		}
		if($queries['q']=='NZ'){			
			include('study-destinations/NewZealand.htm');
		}
		if($queries['q']=='RU'){			
			include('study-destinations/Russia.htm');
		}
		if($queries['q']=='SG'){			
			include('study-destinations/Singapore.htm');
		}
		if($queries['q']=='UK'){			
			include('study-destinations/UK.htm');
		}if($queries['q']=='US'){			
			include('study-destinations/US.htm');
		}
	?>
		
	<?php include('footer.html'); ?>
	<!-- Footer section end-->
</body>