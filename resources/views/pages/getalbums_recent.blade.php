<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pixelbug</title>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <script type="text/javascript" src="js/jquery.flexisel.js"></script>
  <script type="text/javascript" src="js/flickity.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/flickity.css">

	<!--FONTS-->
	<link href='https://fonts.googleapis.com/css?family=Oxygen:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Merriweather:400,700' rel='stylesheet' type='text/css'>
	<!--Style Sheet-->
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<style type="text/css">
	.photo{
		margin-bottom: 85px;
	}

  body{
    background-color: white;
  }

	#gallery h2{
		padding-top: 55px;
		padding-bottom: 40px;
	}

	</style>

</head>
<body>

<div id="loading">
<div id="loading-center">
<div id="loading-center-absolute">
<div class="object" id="object_four"></div>
<div class="object" id="object_three"></div>
<div class="object" id="object_two"></div>
<div class="object" id="object_one"></div>

</div>
</div>
 
</div>

<!-- <nav class="navbar navbar-default" data-spy="affix" data-offset-top="786">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img src="images/pixelbug-logo.png" width="75"></a>
    </div> 
 
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#us">Home<span class="sr-only">(current)</span></a></li>
        <li><a href="#who">About us</a></li>
      	<li><a href="#what">Work</a></li>
      	<li><a href="#gallery">Gallery</a></li>
      	<li><a href="#testimonial">Testimonials</a></li>
      	<li><a href="#contact">Contact</a></li>
      </ul>
    </div>
  </div>
</nav> -->

<div id="wrapper">
 <div class="overlay"></div>
 <!-- Sidebar -->
        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
                <li>
                    <a href="{{action('PagesController@index')}}">HOME</a>
                </li><!-- 
                 <li>
                    <a href="index.html">ABOUT US</a>
                </li> -->
                <li>
                    <a href="{{action('PhotoController@RecentAlbumPhotos')}}">GALLERY</a>
                </li>
                <li>
                    <a href="{{action('MemberController@GetMap')}}">TEAM</a>
                </li>
                 @if(Auth::check())
                  <li>
                      <a href="{{action('PhotoController@GetAdd')}}">ADD PHOTOS</a>
                    </li>
                    <li>
                      <a href="{{action('MemberController@GetCreate')}}">ADD MEMBER</a>
                    </li>
                  <li>
                      <a href="{{action('MemberController@GetEdit')}}">EDIT TEAM</a>
                    </li>
                  <li>
                      <a href="{{action('Auth\AuthController@getLogout')}}">LOGOUT</a>
                  </li>
                @endif
            </ul>
        </nav>
        <!-- /#sidebar-wrapper -->
<div id="page-content-wrapper">
      <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
            <span class="hamb-top"></span>
            <span class="hamb-middle"></span>
			<span class="hamb-bottom"></span>
      </button>

<section id="gallery">
	<div class="container">
	<h2>GALLERY</h2>
			</div>

</section>


<!-- 
<section id="gallery">
	<h2>GALLERY</h2>
	<p>A glimpse of our work</p>
	    <div class="gallery js-flickity" data-flickity-options='{ "wrapAround": true }'>
		  <div class="gallery-cell" id="festember"><h3>FESTEMBER</h3><button class="photo">VIEW PHOTOS</button></div>
		  <div class="gallery-cell" id="pragyan"><h3>PRAGYAN</h3><button class="photo">VIEW PHOTOS</button></div>
		  <div class="gallery-cell" id="nittfest"><h3>NITTFEST</h3><button class="photo">VIEW PHOTOS</button></div>
		  <div class="gallery-cell" id="sportsfete"><h3>SPORTSFETE</h3><button class="photo">VIEW PHOTOS</button></div>
		  <div class="gallery-cell"></div>
	</div>

</section>
 -->

<footer>
	<div class="container">
		<div class="col-md-8">
			
		</div>
		<div class="col-md-4">
				<h2>Find us!</h2>
					<ul class="social-icons icon-circle list-unstyled list-inline"> 
				   <li> <a href="#"><i class="fa fa-facebook"></i></a></li> 
				    <li> <a href="#"><i class="fa fa-youtube"></i></a></li>
			       <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
			        <li> <a href="#"><i class="fa fa-google-plus"></i></a></li> 
			         <li> <a href="#"><i class="fa fa-instagram"></i></a></li> 
	         	</ul>
			</div>
	</div>
</footer>

</div>
</div>

<script>
$(window).load(function() {
  $("#loading").fadeOut(500);
  
});


	$(document).ready(function () {
  var trigger = $('.hamburger'),
      overlay = $('.overlay'),
     isClosed = false;

    trigger.click(function () {
      hamburger_cross();      
    });

    function hamburger_cross() {

      if (isClosed == true) {          
        overlay.hide();
        trigger.removeClass('is-open');
        trigger.addClass('is-closed');
        isClosed = false;
      } else {   
        overlay.show();
        trigger.removeClass('is-closed');
        trigger.addClass('is-open');
        isClosed = true;
      }
  }
  
  $('[data-toggle="offcanvas"]').click(function () {
        $('#wrapper').toggleClass('toggled');
  });  



  
$.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
      url: '{{action("PhotoController@GetRecentAlbumPhotos")}}',
      type: 'POST',
      data: '',
      success:function(data){
       var json = JSON.parse(data);
       var photos = json['album'];
       var count=0;
       $.each(photos,function(index,photo){
        var url = '/storage/app/photos/'+ photo[0]['id'] +'.jpg';
        /*var id = value['id'];
        document.getElementById('main').innerHTML += '<img src="'+url+'" height="200" width="200"/> <br/>';*/
         
  $('#gallery .container').append('<div class="col-md-4" style="background-size:cover;background-repeat: no-repeat;background-position:center;" id='+photo[0]['album']+'><h3>'+photo[0]['album']+'</h3><a href="/getalbums_photos/'+photo[0]['album']+'"><button class="photo">VIEW PHOTOS</button></a></div>');
  $('#'+photo[0]['album']).css("background-image", "url("+url+")"); 
       // $("#"+count).attr('src', String(url));
       // $("#"+count).attr('data-fullsrc', String(url));

        console.log(photo[0]['id']);
        count++;

       });
      },
      error:function(){
        alert('error');
      }



    });

});
</script>


</body>
</html>