<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<title><?php wp_title(''); ?></title>

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>

 <script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDVXP1I4HJj1LntUbytVTigmJAyeI4tv5g&sensor=false">
    </script>

		<script type="text/javascript">


$(document).ready(function() {
		$('h1.page-title, h3.home-title').each(function(){
     var self = $(this);
     var p = self.text().split(' ');
     var html = self.html().replace(p[0], '<span>'+ p[0] +'</span>');
     self.html(html);
});
		 });


function initialize() {

  // Create an array of styles.
  var styles = [
    {
      stylers: [
        { hue: "#000" },
        { saturation: -100 }
      ]
    },{
      featureType: "road",
      elementType: "geometry",
      stylers: [
        { lightness: 100 },
        { visibility: "simplified" }
      ]
    },
  ];

  // Create a new StyledMapType object, passing it the array of styles,
  // as well as the name to be displayed on the map type control.
  var styledMap = new google.maps.StyledMapType(styles,
    {name: "Styled Map"});

  // Create a map object, and include the MapTypeId to add
  // to the map type control.
  var mapOptions = {
    zoom: 15,
    center: new google.maps.LatLng(37.7981, -122.398285),
    mapTypeControlOptions: {
      mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
    }
  };
  var map = new google.maps.Map(document.getElementById('map_canvas'),
    mapOptions);

  //Associate the styled map with the MapTypeId and set it to display.
  map.mapTypes.set('map_style', styledMap);
  map.setMapTypeId('map_style');
}


  var map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);

  var marker = new google.maps.Marker({
      position: styledMap,
      map: map,
      title:"Hello World!"
  });

// To add the marker to the map, call setMap();
marker.setMap(map);

		</script>



		<!-- Google Chrome Frame for IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<!-- mobile meta (hooray!) -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<!-- icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) -->
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<!-- or, set /favicon.ico for IE10 win -->
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">


  	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->

		<!-- drop Google Analytics Here -->
		<!-- end analytics -->

		

	</head>

	<body <?php body_class(); ?> onload="initialize()">


		<div id="container">

			<header class="header" role="banner">

				<div id="inner-header" class="wrap clearfix">

					<div id="login"><a href="http://alsoplouie.sharevault.net/"><img style="width: 78px;" src="<?php echo get_template_directory_uri(); ?>/library/images/login.png"/></a></div>

					<!-- to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> -->
					<p id="logo"><a href="http://samuelt.com/al-staging"><img src="<?php echo get_template_directory_uri(); ?>/library/images/logo.png"/></a></p>

					<nav role="navigation">
						<?php bones_main_nav(); ?>
					</nav>

				</div> <!-- end #inner-header -->

				<?php
						if ( is_home() ) {
    					include('slider.php');
						} else {
    					// This is not a homepage
						}
					?>

			</header> <!-- end header -->

					