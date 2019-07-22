<!DOCTYPE html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>designs/css/styling.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>designs/css/row_1.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>designs/css/extra.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <script>
    function func(){
      document.getElementById("sidebar").classList.toggle("active");
  		document.getElementById('hid').style.visibility='hidden';
      ;
		}
		function func2(){
			document.getElementById("hid").style.visibility="visible";
			document.getElementById("inst1").style.visibility="visible";
		}

  </script>


</head>
<body style="overflow-x: hidden;">

    <!--Side Bar Included-->
    <div id="sidebar" style="z-index:100;">
      <?php include("sideBar.php") ?>     
    </div>
    <!--Sidebar ends-->
    <!-- Popup main (Lets get Started) -->
    <div class="" style="height:100%;width:100%; background-color:yellow;opacity:0.5;position:absolute;left:60px; z-index:5;visibility:hidden;" id="hid">

    </div>
    <div id="inst1" style="position:absolute; width:100%;left:200px;z-index:100;visibility:hidden;">
    	<h1 id="cross" style="font-weight:bold;font-size:100px;color:red; cursor: pointer;" onclick="func2()">X</h1>
    	<br><br><br><br><br>
    	<h1 id="cross" style="font-weight:bold;font-size:50px;color:black">Its as easy as 123!!!</h1>
    	<marquee scrollamount="60" behavior="slide"> <font size='30px' color='blue'>Hello world</font></marquee>
    	<marquee scrollamount="60" behavior="slide"> <font size='30px' color='blue'>Hello world</font></marquee>
    	<marquee scrollamount="60" behavior="slide"> <font size='30px' color='blue'>Hello world</font></marquee>

    </div>
    <!-- Pop Ends -->

    <nav id="nav1" class="navbar navbar-default" style="position:fixed; left: 65px;width: 100%;z-index: +1;padding-left: 12px">
      <?php include("navBar.php") ?>
    </nav>




  <div id="maincon" class="container" style="position:relative;left: 65px;top: 50px;">
    <?php include("mainContent.php") ?>
	</div>




</body>
<script src="jquery.js"></script>
<script src="jqueryui/jquery-ui.js"></script>
<script type="text/javascript">
	$(document).ready(function(){    //ready is used so that the button function works only when the entire HTML page is loaded
          $("#icon1").click(function(){

           $("#list1").slideDown();
           $("#list2").slideUp();
           $("#list3").slideUp();
           $("#list4").slideUp();

       });

	   //ready is used so that the button function works only when the entire HTML page is loaded
            $("#icon2").click(function(){
          	$("#list2").slideDown();
           $("#list1").slideUp();

           $("#list3").slideUp();
           $("#list4").slideUp();

       });


   //ready is used so that the button function works only when the entire HTML page is loaded
            $("#icon3").click(function(){

           $("#list1").slideUp();
           $("#list2").slideUp();
           $("#list3").slideDown();
           $("#list4").slideUp();

       });


  //ready is used so that the button function works only when the entire HTML page is loaded
            $("#icon4").click(function(){

           $("#list1").slideUp();
            $("#list2").slideUp();
           $("#list3").slideUp();
           $("#list4").slideDown();

       });
           $(".toggle").click(function(){
					 $('this').addClass('active');
           $("#list1").show();
           $("#list2").hide();
           $("#list3").hide();
           $("#list4").hide();

       });
			 $('#cross').click(function(){
				 $('#hid').css('visibility','hidden');
				 $('#inst1').css('visibility','hidden');
			 });
        });




</script>
</html>
