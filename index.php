<?php
include 'db/connection.php';
?>
<!DOCTYPE html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tour & Travel</title>
<link href="CSS/styles.css" rel="stylesheet" type="text/css">
<link href="CSS/style_menu.css" rel="stylesheet" type="text/css">
<link href="images/icon/android-icon-36x36.png" rel="icon" type="image/png" sizes="32x32">
<link href="CSS/contact.css" rel="stylesheet" type="text/css">
<!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>
<script src="js/jquery.min.js" type="text/javascript"></script>

<!-- End WOWSlider.com HEAD section -->

<script language="javascript">
function doprocess1(data1)
  {
      var objReq;
      
      try
      {
          objReq = new  XMLHttpRequest();//Mozila based browser
      }
      catch(e)
      {
          try
          {
              objReq = new ActiveXObject("Microsoft.XMLHTTP"); //IE 6 family
          }
          catch(e)
          {
              try
              {
                  objReq = new ActiveXObject("Msxml2.XMLHTTP"); //IE 7 family
              }
              catch(e)
              {
                  alert('Your browser not support ajax')
              }
          }
      }
     
      objReq.onreadystatechange = function(){
												if(objReq.readyState == 4)
												{
													document.getElementById('show1').innerHTML = objReq.responseText; 
													
												}
                                        	}
    var url = 'city.php?dta1='+ data1  ;                          
    objReq.open('GET' , url , true );
    objReq.send(null)
  }
  function doprocess(data)
  {
      var objReq;
      
      try
      {
          objReq = new  XMLHttpRequest();//Mozila based browser
      }
      catch(e)
      {
          try
          {
              objReq = new ActiveXObject("Microsoft.XMLHTTP"); //IE 6 family
          }
          catch(e)
          {
              try
              {
                  objReq = new ActiveXObject("Msxml2.XMLHTTP"); //IE 7 family
              }
              catch(e)
              {
                  alert('Your browser not support ajax')
              }
          }
      }
     
      objReq.onreadystatechange = function(){
												if(objReq.readyState == 4)
												{
													document.getElementById('show').innerHTML = objReq.responseText; 
													
												}
                                        	}
    var url = 'city.php?dta='+ data  ;                          
    objReq.open('GET' , url , true );
    objReq.send(null)
  }
 /* function searchData()
  {
  document.getElementById("shw").css("display", "block");
  }*/
  function detail()
  {
     document.getElementById("dtl").style.display = "block";
  }
</script>

</head>
<body>
<div class="row" style="background-color:#00CCFF">
	<div class="col-3 col-m-3">
	 	<img src="images/icon/download.png" style="width:180px; height:57px;">
	 </div>
	<div class="col-3 col-m-3">
		<h3>Tour & Travel</h3>
	</div>
	<div class="col-6 col-m-6">
		<div class="head">
			<label for="demo">Menu</label>
		</div>
			<input type="checkbox" id="demo">
		<div class="menu">
			<ul>
				<li><a href="#" id="home">Home</a></li>
				<li><a href="#" id="bus">BUS</a></li>
				<li><a href="#" id="hotel">Hotel</a></li>
				<li><a href="#" id="service">Services</a></li>
			<!--<ul>
				<li>My Booking</li>
				<li>About Tour and Travel</li>
				<li>Feedback</li>
			</ul>
				</li>-->
				<li><a href="#" id="contact">Contact Us</a></li>
			</ul>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-12 col-m-12">
		<!-- Start WOWSlider.com BODY section -->
<div id="wowslider-container1">
<div class="ws_images"><ul>
		<li><img src="data1/images/bus1.jpg" title="bus1" id="wows1_0"/></li>
		<li><img src="data1/images/bus2.jpg" title="bus2" id="wows1_1"/></li>
		<li><img src="data1/images/bus3.jpg" title="bus3" id="wows1_2"/></li>
		<li><img src="data1/images/bus5.jpg" title="bus5" id="wows1_4"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title="bus1"><span><img src="data1/tooltips/bus1.jpg" alt="bus1"/>1</span></a>
		<a href="#" title="bus2"><span><img src="data1/tooltips/bus2.jpg" alt="bus2"/>2</span></a>
		<a href="#" title="bus3"><span><img src="data1/tooltips/bus3.jpg" alt="bus3"/>3</span></a>
		<a href="#" title="bus4"><span><img src="data1/tooltips/bus4.jpg" alt="bus4"/>4</span></a>
		<a href="#" title="bus5"><span><img src="data1/tooltips/bus5.jpg" alt="bus5"/>5</span></a>
	</div></div>
<div class="ws_shadow"></div>
</div>	
<script type="text/javascript" src="engine1/wowslider.js"></script>
<script type="text/javascript" src="engine1/script.js"></script>
<!-- End WOWSlider.com BODY section -->
	</div>
</div>
<div class="row" id="home_content" style="display:none;">
	<div class="col-12 col-m-12" style="border:solid 1px; height:50px;">
			<p>Welcome In home Page</p>
	</div>
</div>
<div class="row" id="contact_content" style="display:none;">
	<div class="col-12 col-m-12" style="border:solid 1px; height:50px;">
			<p>Welcome In Contact Page</p>
	</div>
</div>
<div class="row" id="hotel_content" style="display:none;">
	<div class="col-12 col-m-12" style="border:solid 1px; height:50px;">
			<p>Welcome In Hotel Page</p>
	</div>
</div>
<div class="row" id="service_content" style="display:none;">
	<div class="col-12 col-m-12" style="border:solid 1px; height:50px;">
			<p>Welcome In Service Page</p>
	</div>
</div>
<div class="row" id="bus_content" >
	<div class="col-6 col-m-6">
		 <div id="wrapper">
        <form action="" method="post" >
            <fieldset>
                <legend>Bus Enquiry System</legend>
                <div>
                    <input type="text" name="source" id="source" onKeyUp="doprocess(this.value)" placeholder="Enter source" required title="What's your source ?"/>
					<div id="show"></div>  
                </div>
				
                <div>
                    <input type="text" name="destination" id="destination" onKeyUp="doprocess1(this.value)" placeholder="Enter destination" required title="What's your destination ?"/>
					 <div id="show1"></div>	
                </div>
				<div>
                  Bus Type : <select name="bus_type" id="bus_type" required title="What's your bus type ?" style="height:35px; width:43%;">
				  	 <option value="">Select Bus Type</option>
				  	 <option value="1">AC</option>
				  	 <option value="2">Non AC</option>
				   </select>
                </div>
                <div>
                  Journey Date:  <input type="date" id="date" name="date" required title="What's your journey date ?" style="height:35px; margin-top:10px;"/>
                </div>  
                <input type="submit" name="search" value="Search Now" onSubmit="return searchData();"/>
            </fieldset>    
        </form>
    </div>
	</div>
	<?php if(isset($_POST['search']))
	{?>
	<div class="col-6 col-m-6">
		<fieldset id="shw">
		 <legend>Bus Enquiry Details</legend>
		<table width="100%" height="auto" border="1">
	<tr>
		<th style="border:solid 1px;">Name</th>
		<th style="border:solid 1px;">Departure Time</th>
		<th style="border:solid 1px;">Type</th>
		<th style="border:solid 1px;">Number</th>
		<th style="border:solid 1px;">Source-Destination</th>
		<th style="border:solid 1px;">Total Seat</th>
		<th style="border:solid 1px;">Fare</th>
		<th style="border:solid 1px;">Images</th>
	</tr>
	<?php
 	$source = array($_POST['source'],"-",$_POST['destination']);
 	$src_dst = ucfirst($source[0]).$source[1].ucfirst($source[2]);
 	$date = $_POST['date'];
 	$bus_type = $_POST['bus_type'];
 	$sql = "select * from bus_details where bus_type_id = '".$bus_type."' AND bus_route like '".$src_dst."%'";
	$sql_route = "select * from route where bus_route LIKE '".$src_dst."%' OR bus_route1 LIKE '".$src_dst."%'";
 	$query = mysqli_query($con,$sql);
	$query_route = mysqli_query($con,$sql_route);
      while($rec_bus = mysqli_fetch_assoc($query))
	 {
	       
	   ?>
	  <tr>
		<td><?php echo $rec_bus['bus_name']; ?></td>
		<td><?php echo $rec_bus['depature_time']; ?></td>
		<td><?php echo $rec_bus['bus_type']; ?></td>
		<td><?php echo $rec_bus['bus_number']; ?></td>
		<td><?php echo $rec_bus['bus_route']; ?></td>
		<td><?php echo $rec_bus['num_seat']; ?></td>
		<td><?php echo $rec_bus['bus_price']; ?></td>
		<td><img src="uploads/<?php echo $rec_bus['image']; ?>" style="height:40px; width:60px;"></td>
	</tr>
	 <?php } ?>
	 <tr>
	 	<th colspan="8"><a href="#" onClick="detail()">Detail Route</a></th>
		
	 </tr>
	 </table>
	 <table width="100%" height="auto" border="1" style="display:none" id="dtl">
	 	 <tr>
			<th>Station</th>
			<th>Time</th>
			<th>Distance</th>
		</tr>
	 <?php
	 while($rec_rout = mysqli_fetch_assoc($query_route))
	 {
	   if($src_dst == "Delhi-Mathura")
	   {?>
	     <tr>
			<th><?php echo $rec_rout['source_station']; ?></th>
			<th><?php echo $rec_rout['source_timig']; ?></th>
			<th><?php echo $rec_rout['distance']; ?></th>
		</tr>
	   
	  <?php }
	   elseif($src_dst == "Mathura-Delhi")
	   {?>
	   	 <tr>
			<th><?php echo $rec_rout['destination_station']; ?></th>
			<th><?php echo $rec_rout['destination_timing']; ?></th>
			<th><?php echo $rec_rout['distance']; ?></th>
		</tr>
	   <?php }
	   
	 }
	 ?>
<?php } ?>
</table>
</fieldset>
	</div>
</div>	
<div class="footer">
<h3>&copy; Designed by <a href="#">piyush</a></h3>
</div>
</body>
</html>
