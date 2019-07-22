<!DOCTYPE html>
<html>
<head>
	<title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="styling.css">
  <link rel="stylesheet" type="text/css" href="row_1.css">
  <link rel="stylesheet" href="extra.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<script type="text/javascript">
  function func(){
      document.getElementById("sidebar").classList.toggle("active");
    }

  function validate(){
    var flag=true;
    var a=document.getElementById("area1");
    var p=document.getElementsByClassName("chk");
    if(a.value.trim()==0)
    {
      a.style.border="solid 1px red";
      document.getElementById("label1").style.visibility="visible";
      flag=false;
    }
    if(p[0].checked==false&&p[1].checked==false&&p[2].checked==false&&p[3].checked==false){
      document.getElementById("checkdiv").style.border="solid 1px red";
      document.getElementById("label2").style.visibility="visible";
      flag=false;
    }
    if(flag==false){
      window.scrollTo(0,0);
    }
    return flag;

  }
</script>
<style type="text/css">
  p#what:hover{
    color: red;
    cursor: pointer;
  }
  #addtocart{
    background-color: black;
    height: 50px;
    width: 800px;
    font-size: 20px;
    font-weight: bold;
    color: white;
    margin: 30px;
  }
  #addtocart:hover{
    background-color: #222;
  }
  #checkdiv{
    padding: 10px;
  }
</style>
<body style="overflow-x:hidden; ">

 <!--Side Bar Included-->
    <div id="sidebar" style="z-index:100;">
      <?php include("sideBar.php") ?>     
    </div>
   <!--Sidebar ends-->
  
	

  <nav id="nav1" class="navbar navbar-default" style="position:fixed; left: 65px;width: 100%;z-index: +1;padding-left: 12px; ">
      <?php include("navBar.php") ?>
  </nav>

 

 <div id="mainbodydiv" class="container">
  <div class="container" style="top: 52px;box-shadow: 0px 3px 20px grey;position:fixed;height: 120px;;z-index:+1;background-color: white;">
  <br>
  <h1><b>Computer Repair and Help</b><span style="float: right;">$amount</span></h1>
  </div>

 <br><br>
 <form style="position: relative; top: 200px;left: 200px;" onsubmit="return validate();" action="main.html">
    
    <p style="font-size: 25px;"><b>Describe the issue with your computer.</b></p>
    <br>
    <textarea id="area1" name="issue" rows="5" cols="80"></textarea>
    <label id="label1" style="color: red;visibility: hidden;">This field is required</label>
    <br><br><br><br><br>
    <p style="font-size: 25px;"><b>Is your computer demonstrating any of the following?</b></p><br>

    <div id="checkdiv" style="font-size: 20px;width: 600px;" >
    <input class="chk" type="checkbox" name="problems" value="freez"> Starts, but crashes or freezes right away (+$30)<br><br>
    <input class="chk" type="checkbox" name="problems" value="noise"> Makes loud noises (+$30)<br><br>
    <input class="chk" type="checkbox" name="problems" value="peripheral"> Will not recognize peripheral devices<br><br>
    <input class="chk" type="checkbox" name="problems" value="opening"> Difficulty opening software/downloads

    </div>
    <label id="label2" style="color: red;visibility: hidden;">Please select atleast one option</label>
    <br><br><br><br>

     <p style="font-size: 25px;"><b>What kind of computer do you have?</b></p>
    <br>
      <select name="system" style="height: 40px;width: 400px;">
        <option value="WinD">Windows-Desktop</option>
        <option value="WinL">Windows-Laptop</option>
        <option value="MacD">Mac-Desktop</option>
        <option value="MacL">Mac-Laptop</option>
        <option value="Other">Other</option>
      </select>

      <br><br><br>
      <br>
      <br>

      <p style="font-size: 25px;"><b>What operating system are you running?</b></p><br>
      <input type="text" name="OS" style="width: 500px;height: 40px;">
      <br><br><br>
      <br>
      <br>


      <p style="font-size: 25px;"><b>Do you want CompanyName NOW?</b></p>
    <br>
      <select name="CompanyName" style="height: 40px;width: 400px;">
        <option value="Yes">Yes(Save $20 on instant online support</option>
        <option value="No">No, I want in-home service</option>
      </select>

      <br><br><br>
      <br>
      <br>

      <p id="what" style="font-size: 25px;"><b>What is CompanyName NOW?</b></p>
      <p id="whatdef" style="width: 1000px;display: none;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

    

  <input id="addtocart" type="submit" value="Add to Cart">
 </form>
<br><br>
</div>

</body>


<script src="jquery.js"></script>
<script src="jqueryui/jquery-ui.js"></script>
<script type="text/javascript">
  $(document).ready(function(){    //ready is used so that the button function works only when the entire HTML page is loaded
          
          $("#what").click(function(){

            $("#whatdef").toggle();

          });


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
           
           $("#list1").show();
           $("#list2").hide();
           $("#list3").hide();
           $("#list4").hide();

       });
        });

</script>
</html>