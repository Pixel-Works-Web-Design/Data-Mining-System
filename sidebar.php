<?php 
	if(isset($_REQUEST['inquiry_form']))
	{
		$inq_name = addslashes($_REQUEST['name']) ;
		$inq_mobile = addslashes($_REQUEST['mobile']) ;
		$inq_email = $_REQUEST['email'] ;

		$inq_city = addslashes($_REQUEST['city']) ;
		$inq_nationality = addslashes($_REQUEST['nationality']) ;

		$inq_travelDate = $_REQUEST['traveldate'] ;
		$inq_budget = $_REQUEST['budget'] ;

		$inq_day = $_REQUEST['days'] ;
		$inq_room = $_REQUEST['room'] ;

		$inq_hotel = isset($_REQUEST['hotelstar']) ?  $_REQUEST['hotelstar'] : 'NO';
		$inq_hotel2 = "" ;
		if(!($inq_hotel == 'NO'))
		{
			foreach ($inq_hotel as $hotel) {
				$inq_hotel2.= ' , '.$hotel ;
			}
		}


		$inq_adult = $_REQUEST['adult'] ;
		$inq_childrean = $_REQUEST['children'] ;

		
		$inq_food = isset($_REQUEST['Jain']) ? 'Jain' : '' ;
		$inq_food.= isset($_REQUEST['Veg']) ? ' , Veg.' : '' ;
		$inq_food.= isset($_REQUEST['nonveg']) ? ' , Non-Veg' : '' ;
		


		$inq_trainflight = isset($_REQUEST['trainyes']) ? 'YES' : 'NO' ;

		$inq_dom_int = $_REQUEST['tour_dom_inter'] ;
		$inq_destination = addslashes($_REQUEST['destination']) ;

		$inq_timetotalk = addslashes($_REQUEST['timetotalk']) ;
		$inq_requirement =  addslashes($_REQUEST['requirement']) ;


		
		$inq_type = $_REQUEST['tourtype'] ;
		$inq_person = $_REQUEST['persons'] ;

		$inq_extrabed = isset($_REQUEST['extraBedyes']) ? 'Yes' : 'No' ;

		include("connection.php");

		mysql_query("INSERT into  inquiry(inquiry_name , inquiry_whatsappNo , inquiry_email , inquiry_convTimetoTalk , inquiry_Tours , inquiry_destination , inquiry_nationality , inquiry_city	 , inquiry_DateofTravel , inquiry_budget , inquiry_NumberofDays , inquiry_NumberofAdult , inquiry_NumberofChild , inquiry_NumberofRooms , inquiry_Hoteltype , inquiry_ExtraBeds , inquiry_Foods , inquiry_ExtraRequir	, inquiry_assistForTrainFlight , inquiry_Date , inquiry_tourtype , 	inquiry_person) values('$inq_name' , '$inq_mobile' , '$inq_email' , '$inq_timetotalk' , '$inq_dom_int' , '$inq_destination' , '$inq_nationality' , '$inq_city' , '$inq_travelDate' , '$inq_budget' , '$inq_day' , '$inq_adult' , '$inq_childrean' , '$inq_room' , '$inq_hotel2' , '$inq_extrabed' , '$inq_food' , '$inq_requirement' , '$inq_trainflight' , CURDATE() , '$inq_type' , '$inq_person')") ;

		 // echo "<script type='text/javascript'>alert('Thank You For Inquiry !');</script>";
	
		echo "<script type='text/javascript'>window.location='ThankYou.php?inquiry=y'</script>";
		exit();
	}
 ?>							

	<div class="affix-sidebar" id="sidebar">
	<div class="entry-content-tour">
		
		<div class="form-block__title">
			<h4>Inquiry</h4>
		</div>
		
		<div class="booking">
			<div class="">
				
				<form id="inq" method="POST" action="<?php echo $_SERVER['PHP_SELF']?>" class="wpcf7-form" onsubmit="return inquiryvalidation()">
					
		<div class="row">
			<div class="container-fluid">

				<div class="container-fluid" id="datestyle">
				<div class="col-md-12 col-xs-12">
					<br>
					<strong>Date of Travelling <span id="require_star">*</span></strong>
				</div>
				<div class="col-md-12 col-xs-12">
					<span class="wpcf7-form-control-wrap your-name">
						<input type="date" name="traveldate" id="traveldate" value="" size="40" class="wpcf7-form-control" aria-invalid="false" >
					</span>
				</div>
				<div class="col-md-12 col-xs-12" id="travelmessage" style="color: red;">
					
				</div>
			  	</div> <!-- End of container-fluid -->
				
				<div class="container-fluid" id="namestyle">
				<div class="col-md-12 col-xs-12" >
					<strong>Name <span id="require_star">*</span></strong>
				</div>
				<div class="col-md-12 col-xs-12">
					<span class="wpcf7-form-control-wrap your-name">
							<input type="text" name="name" id="name" value="" size="40" class="wpcf7-form-control" aria-invalid="false" placeholder="Your answer">
					</span>
				</div>
				<div class="col-md-12 col-xs-12" id="namemessage" style="color: red;">
					
				</div>
				</div> <!-- End of container-fluid -->
				

				<div class="container-fluid" id="whatsappstyle">
				<div class="col-md-12 col-xs-12">
					<br>
					<strong>WhatsApp No. <span id="require_star">*</span></strong>
				</div>
				<div class="col-md-12 col-xs-12">
					<span class="wpcf7-form-control-wrap your-name">
							<input type="text" name="mobile" id="mobile" value="" size="40" class="wpcf7-form-control" aria-invalid="false" placeholder="Your answer" >
						</span>
				</div>
				<div class="col-md-12 col-xs-12" id="whatsappmessage" style="color: red;">
					
				</div>
				</div> <!-- End of container-fluid -->

				<div class="container-fluid" id="emailstyle">
				<div class="col-md-12 col-xs-12">
					<br>
					<strong>Email Address</strong>
				</div>
				<div class="col-md-12 col-xs-12">
					<span class="wpcf7-form-control-wrap your-name">
							<input type="email" name="email" id="email" value="" size="40" class="wpcf7-form-control" aria-invalid="false" placeholder="Your answer" >
					</span>
				</div>
				<div class="col-md-12 col-xs-12" id="emailmessage" style="color: red;">
					
				</div>
				</div> <!-- End of container-fluid -->

				<div class="container-fluid" id="emailstyle">
				<div class="col-md-12 col-xs-12">
					<strong>City of Residence </strong>
				</div>
				<div class="col-md-12 col-xs-12">
					<span class="wpcf7-form-control-wrap your-name">
							<input type="text" name="city" id="city" value="" size="40" class="wpcf7-form-control" aria-invalid="false" placeholder="Your answer">
					</span>
				</div>
				</div> <!-- End of container-fluid -->

				<div class="container-fluid" id="emailstyle">
				<div class="col-md-12 col-xs-12">
					<strong>Nationality </strong>
				</div>
				<div class="col-md-12 col-xs-12">
					<span class="wpcf7-form-control-wrap your-name">
							<input type="text" name="nationality" id="nationality" value="" size="40" class="wpcf7-form-control" aria-invalid="false" placeholder="Your answer">
						</span>
				</div>
				<div class="col-md-12 col-xs-12" id="emailmessage" style="color: red;">
					
				</div>
				</div> <!-- End of container-fluid -->

				<div class="container-fluid" id="emailstyle">
				<div class="col-md-12 col-xs-12">
					<strong>Convenient Time To Talk </strong>
				</div>
				<div class="col-md-12 col-xs-12">
					<span class="wpcf7-form-control-wrap your-message">
						<input type="text" name="timetotalk" id="timetotalk" value="" size="40" class="wpcf7-form-control" aria-invalid="false" placeholder="Your answer">
					</span>
				</div>
				</div> <!-- End of container-fluid -->

				<div class="container-fluid" id="tourstyle">
				<div class="col-md-12 col-xs-12">
					<br>
					<strong>Tours <span id="require_star">*</span></strong>
				</div>
				<div class="col-md-12 col-xs-12">
					<span class="wpcf7-form-control-wrap your-message" style="margin-top: 5px;">
						<select class="wpcf7-form-control selectcombo" id="tour_dom_inter"  name="tour_dom_inter">
							<option value="0">Choose</option>
							<option value="International">International</option>
							<option value="Domestics">Domestics</option>
						</select>
					</span>
				</div>
				<div class="col-md-12 col-xs-12" id="tourmessage" style="color: red;">
					
				</div>
				</div> <!-- End of container-fluid -->

				<div class="container-fluid" id="destinationstyle">
				<div class="col-md-12 col-xs-12">
					<br>
					<strong>Destinations <span id="require_star">*</span> </strong>
				</div>
				<div class="col-md-12 col-xs-12">
					<span class="wpcf7-form-control-wrap your-message">
						<input type="text" name="destination" id="destination" value="" size="40" class="wpcf7-form-control" aria-invalid="false" placeholder="Your answer">
					</span>
				</div>
				<div class="col-md-12 col-xs-12" id="destinationmessage" style="color: red;">
					
				</div>
				</div> <!-- End of container-fluid -->

				<div class="container-fluid" id="11destinationstyle">
				<div class="col-md-12 col-xs-12">
					<br>
					<strong>Tours Type </strong>
				</div>
				<div class="col-md-12 col-xs-12">
					<span class="wpcf7-form-control-wrap your-message" style="margin-top: 5px;">
						<select class="wpcf7-form-control selectcombo" name="tourtype" id="tourtype">
							<option value="0">Choose</option>
							<?php 
							include("connection.php");
							$gettag = mysql_query("SELECT * from tours_tags");
							if(mysql_num_rows($gettag) > 0)
							{
								while ($tag = mysql_fetch_array($gettag)) {
							  	?>
							  	<option value="<?php echo $tag['Tours_tag_name'] ; ?>"><?php echo $tag['Tours_tag_name'] ; ?></option>
							  	<?php
								}
							}

							 ?>
						</select>
					</span>
				</div>
				</div> <!-- End of container-fluid -->

				<div class="container-fluid" id="personstyle">
				<div class="col-md-12 col-xs-12">
					<br>
					<strong>No. of Persons <span id="require_star">*</span></strong>
				</div>
				<div class="col-md-12 col-xs-12">
				<span class="wpcf7-form-control-wrap your-name">
							<input type="text" name="persons" id="persons" value="" size="40" class="wpcf7-form-control" aria-invalid="false" placeholder="Your answer" >
						</span>
				</div>
				<div class="col-md-12 col-xs-12" id="personnmessage" style="color: red;">
					
				</div>
				</div> <!-- End of container-fluid -->

				<div class="container-fluid" id="adultstyle">
				<div class="col-md-12 col-xs-12">
					<strong>Adults <span id="require_star">*</span></strong>
				</div>
				<div class="col-md-12 col-xs-12">
				<span class="wpcf7-form-control-wrap your-name">
							<input type="text" name="adult" id="adult" value="" size="40" class="wpcf7-form-control" aria-invalid="false" placeholder="Your answer" >
						</span>
				</div>
				<div class="col-md-12 col-xs-12" id="adultmessage" style="color: red;">
					
				</div>
				</div> <!-- End of container-fluid -->

				<div class="container-fluid" id="childstyle">
				<div class="col-md-12 col-xs-12">
					
					<strong>Child ( Below 5 Years ) <span id="require_star">*</span></strong>
				</div>
				<div class="col-md-12 col-xs-12">
				<span class="wpcf7-form-control-wrap your-name">
							<input type="text" name="children" id="children" value="" size="40" class="wpcf7-form-control" aria-invalid="false" placeholder="Your answer" >
						</span>
				</div>
				<div class="col-md-12 col-xs-12" id="childmessage" style="color: red;">
					
				</div>
				</div> <!-- End of container-fluid -->

				<div class="container-fluid" id="style22">
				<div class="col-md-12 col-xs-12">
					<strong>Extra Bed  <span id="require_star">*</span></strong>
				</div>
				<div class="col-md-12 col-xs-12">
				    
					<div class="col-md-5 col-xs-5">
						<div class="pretty p-icon p-smooth">
					        <input type="checkbox" name="extraBedyes" />
					        <div class="state p-success">
					            <i class="icon fa fa-check"></i>
					            <label>&nbsp;&nbsp;&nbsp;Yes</label>
					        </div>
   				 		</div>
					</div>
					<div class="col-md-5 col-xs-5">
						<div class="pretty p-icon p-smooth">
					        <input type="checkbox" name="extraBedno" />
					        <div class="state p-success">
					            <i class="icon fa fa-check"></i>
					            <label>&nbsp;&nbsp;&nbsp;No</label>
					        </div>
   				 		</div>
					</div>
						
				</div>
				</div> <!-- End of container-fluid -->

				<div class="container-fluid" id="roomstyle">
				<div class="col-md-12 col-xs-12">
					<br>
					<strong>No. of Rooms <span id="require_star">*</span></strong>
				</div>
				<div class="col-md-12 col-xs-12">
				<span class="wpcf7-form-control-wrap your-name">
							<input type="text" name="room" id="room" value="" size="40" class="wpcf7-form-control" aria-invalid="false" placeholder="Your answer" >
						</span>
				</div>
				<div class="col-md-12 col-xs-12" id="roommessage" style="color: red;">
					
				</div>
				</div> <!-- End of container-fluid -->

				<div class="container-fluid" id="roomstyle11">
				<div class="col-md-12 col-xs-12">
					<strong>Total Budget </strong>
				</div>
				<div class="col-md-12 col-xs-12">
					<span class="wpcf7-form-control-wrap your-message" style="margin-top: 5px;">
						<select class="wpcf7-form-control selectcombo"  name="budget" id="budget">
							<option value="0">Choose</option>
							<option>Below Rs. 10,000</option>
							<option>Rs. 10,000 - 30,000</option>
							<option>Rs. 30,000 - 50,000</option>
							<option>Above Rs. 50,000</option>
						</select>
					</span>
				</div>
				<div class="col-md-12 col-xs-12" id="11" style="color: red;">
					
				</div>
				</div> <!-- End of container-fluid -->

				<div class="container-fluid" id="daystyle">
				<div class="col-md-12 col-xs-12">
					<br>
					<strong>No. of Days <span id="require_star">*</span></strong>
				</div>
				<div class="col-md-12 col-xs-12">
					<span class="wpcf7-form-control-wrap your-message" style="margin-top: 5px;">
						<select class="wpcf7-form-control selectcombo" name="days" id="days">
							<option value="0">Choose</option>
							<option>1 Nights / 2 Days</option>
							<option>2 Nights / 3 Days</option>
							<option>3 Nights / 4 Days</option>
							<option>4 Nights / 5 Days</option>
							<option>5 Nights / 6 Days</option>
							<option>Above 6 Nights</option>
						</select>
					</span>
				</div>
				<div class="col-md-12 col-xs-12" id="daymessage" style="color: red;">
					
				</div>
				</div> <!-- End of container-fluid -->

				<div class="container-fluid" id="hotelstyle">
				<div class="col-md-12 col-xs-12">
					<br>
					<strong>Hotel Type  <span id="require_star">*</span></strong>
				</div>
				<div class="col-md-12 col-xs-12">
					<input type="hidden" name="hotelchecked" id="hotelchecked" value="0">
					<div class="col-md-6 col-xs-6">
						<div class="pretty p-icon p-smooth">
					        <input type="checkbox"  name="hotelstar[]" id="hotelstar" onchange="doalert(this)" value="2 Star" />
					        <div class="state p-success">
					            <i class="icon fa fa-check"></i>
					            <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2 Star</label>
					        </div>
   				 		</div>
					</div>
					<div class="col-md-6 col-xs-6">
						<div class="pretty p-icon p-smooth">
					        <input type="checkbox"  name="hotelstar[]" id="hotelstar" onchange="doalert(this)" value="3 Star"/>
					        <div class="state p-success">
					            <i class="icon fa fa-check"></i>
					            <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3 Star</label>
					        </div>
   				 		</div>
					</div><div class="col-md-6 col-xs-6">
						<div class="pretty p-icon p-smooth">
					        <input type="checkbox"  name="hotelstar[]" id="hotelstar" onchange="doalert(this)"/ value="4 Star">
					        <div class="state p-success">
					            <i class="icon fa fa-check"></i>
					            <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4 Star</label>
					        </div>	
   				 		</div>
					</div>
					<div class="col-md-6 col-xs-6">
						<div class="pretty p-icon p-smooth">
					        <input type="checkbox"  name="hotelstar[]" id="hotelstar" onchange="doalert(this)" value="5 Star"/>
					        <div class="state p-success">
					            <i class="icon fa fa-check"></i>
					            <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5 Star</label>
					        </div>
   				 		</div>
					</div>
					<div class="col-md-6 col-xs-6">
						<div class="pretty p-icon p-smooth">
					        <input type="checkbox"  name="hotelstar[]" id="hotelstar" onchange="doalert(this)" value="7 Star"/>
					        <div class="state p-success">
					            <i class="icon fa fa-check"></i>
					            <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7 Star</label>
					        </div>
   				 		</div>
					</div>
					<div class="col-md-6 col-xs-6">
						<div class="pretty p-icon p-smooth">
					        <input type="checkbox"  name="hotelstar[]" id="hotelstar" onchange="doalert(this)" value="Resorts"/>
					        <div class="state p-success">
					            <i class="icon fa fa-check"></i>
					            <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Resorts</label>
					        </div>
   				 		</div>
					</div>
				
				</div>
				<div class="col-md-12 col-xs-12" id="hotelmessage" style="color: red;">
					
				</div>
				</div> <!-- End of container-fluid -->

				<div class="container-fluid" id="dayst111yle">
				<div class="col-md-12 col-xs-12">
					<strong>Food </strong>
				</div>
				<div class="col-md-12 col-xs-12">
				
					<div class="col-md-6 col-xs-6">
						<div class="pretty p-icon p-smooth">
					        <input type="checkbox"  name="Jain" id="Jain"/>
					        <div class="state p-success">
					            <i class="icon fa fa-check"></i>
					            <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jain</label>
					        </div>
   				 		</div>
					</div>
					<div class="col-md-6 col-xs-6">
						<div class="pretty p-icon p-smooth">
					        <input type="checkbox"  name="Veg" id="Veg"/>
					        <div class="state p-success">
					            <i class="icon fa fa-check"></i>
					            <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Veg.</label>
					        </div>
   				 		</div>
					</div>
					<div class="col-md-12 col-xs-12">
						<div class="pretty p-icon p-smooth">
					        <input type="checkbox"  name="nonveg" id="nonveg"/>
					        <div class="state p-success">
					            <i class="icon fa fa-check"></i>
					            <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Non - Veg.</label>
					        </div>
   				 		</div>
					</div>
					
				</div>
				<div class="col-md-12 col-xs-12" id="1111" style="color: red;">
					
				</div>
				</div> <!-- End of container-fluid -->

				<div class="container-fluid" id="dayst111yle">
				<div class="col-md-12 col-xs-12">
					<br>
					<strong>Assistance for Trains / Flights </strong>
				</div>
				<div class="col-md-12 col-xs-12">
				
					<div class="col-md-6 col-xs-6">
						<div class="pretty p-icon p-smooth">
					        <input type="checkbox"  name="trainyes" id="trainyes"/>
					        <div class="state p-success">
					            <i class="icon fa fa-check"></i>
					            <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yes</label>
					        </div>
   				 		</div>
					</div>
					<div class="col-md-6 col-xs-6">
						<div class="pretty p-icon p-smooth">
					        <input type="checkbox"  name="trainno" id="trainno"/>
					        <div class="state p-success">
					            <i class="icon fa fa-check"></i>
					            <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No</label>
					        </div>
   				 		</div>
					</div>
					
				</div>
				<div class="col-md-12 col-xs-12" id="1111" style="color: red;">
					
				</div>
				</div> <!-- End of container-fluid -->

				<div class="container-fluid" id="dayst111yle">
				<div class="col-md-12 col-xs-12">
					<br>
					<strong>Special Requirements </strong>
				</div>
				<div class="col-md-12 col-xs-12">
					<span class="wpcf7-form-control-wrap your-message">
						<input type="text" name="requirement" id="requirement" value="" size="40" class="wpcf7-form-control" aria-invalid="false" placeholder="Your answer">
					</span>
				</div>
				<div class="col-md-12 col-xs-12" id="1111" style="color: red;">
					
				</div>
				</div> <!-- End of container-fluid -->

				<div class="col-md-12 col-xs-12" style="text-align: center;">
					<br>
					<input class="btn-booking btn" name="inquiry_form" id="inquiry_form" value="SUBMIT" type="submit" style="background-color: #1A73E8 !important; padding: 8px 17px !important; color: white !important; font-weight: bold !important;">		
				</div>

			</div> <!-- end of Container -->
		</div> <!-- end of Row -->
			
					
							
			  
				</form>
			</div>
		</div>
		
	</div>


	</div>

<style type="text/css">
	#sidebar{
		box-shadow: 2px 2px 5px gray;
		border-bottom: 3px double gray !important;
	}
	
	#sidebar input:focus{
		border-bottom: 2px solid #067EAC !important; 
	}
	


	#sidebar input {
    border: none !important;
    margin: 0 !important;
    padding: 0 !important;
    border-bottom: 2px solid #E8E8E8 !important;
    border-radius: 0 !important;
    background: transparent !important;
}

	#sidebar .selectcombo{
		border: none !important;
		width: 100%;
		padding: 5px;
		background-color: #FEF7F5;
			}
	#sidebar .selectcombo:focus{
		border: none !important;
		border-bottom: 2px solid #067EAC !important; 
	}

	#sidebar #require_star{
		color: red;
	}	

	

	.mystyle{
		background-color: #FCE8E6;
	}
	.mystyle input{
		border-bottom: 2px solid #067EAC !important; 
	}

	/*Date Remove up-down*/
	input[type="date"]::-webkit-inner-spin-button{
		display: none;
		-webkit-appearance: none;
	}

	/*Mobile Side*/
	@media (max-width: 768px) {
		#sidebar{
			margin-top: 30px !important;
		}
		
	}
</style>

 <link rel="stylesheet" type="text/css" href=" https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css">
<script type="text/javascript">
	function inquiryvalidation()
	{
		
		 var names = document.getElementById("name").value;
		 var mobiles = document.getElementById("mobile").value;
		 var traveldates = document.getElementById("traveldate").value;

		 var tour_dom_inters = document.getElementById("tour_dom_inter").value;
		 var destinations = document.getElementById("destination").value;
		 var person = document.getElementById("persons").value;
		 var adults = document.getElementById("adult").value;
		 var childrens = document.getElementById("children").value;
		 var rooms = document.getElementById("room").value;
		 var day = document.getElementById("days").value;

		  var hotelcheckeds = document.getElementById("hotelchecked").value;

		  var n = document.getElementById("namestyle");
		  var w = document.getElementById("whatsappstyle");
		  var tra = document.getElementById("datestyle");

		   var tour = document.getElementById("tourstyle");
		   var dest = document.getElementById("destinationstyle");
		   var per = document.getElementById("personstyle");
		   var ad = document.getElementById("adultstyle");
		   var child = document.getElementById("childstyle");
		   var ro = document.getElementById("roomstyle");
		   var d = document.getElementById("daystyle");
		   var hot = document.getElementById("hotelstyle");


		 if(traveldates == '')
		 {
		 	document.getElementById("travelmessage").innerHTML = "This is a required question";

		 	// Remove Styling
		 	document.getElementById("namemessage").innerHTML = "";
		 	n.classList.remove("mystyle");

		 	document.getElementById("whatsappmessage").innerHTML = "";
		 	w.classList.remove("mystyle");

		 	document.getElementById("tourmessage").innerHTML = "";
		 	tour.classList.remove("mystyle");

		 	document.getElementById("destinationmessage").innerHTML = "";
		 	dest.classList.remove("mystyle");

		 	document.getElementById("personnmessage").innerHTML = "";
		 	per.classList.remove("mystyle");

		 	document.getElementById("adultmessage").innerHTML = "";
		 	ad.classList.remove("mystyle");

		 	document.getElementById("childmessage").innerHTML = "";
		 	child.classList.remove("mystyle");

		 	document.getElementById("roommessage").innerHTML = "";
		 	ro.classList.remove("mystyle");

		 	document.getElementById("daymessage").innerHTML = "";
		 	d.classList.remove("mystyle");

		 	document.getElementById("hotelmessage").innerHTML = "";
		 	hot.classList.remove("mystyle");
			// End of Remove Styling

		 	tra.classList.add("mystyle");

		 	document.getElementById("traveldate").focus();
		 	 return false;


		 }
		 else if(names == '')
		 {
		 	document.getElementById("namemessage").innerHTML = "This is a required question";

		 	// Remove Styling
		 	document.getElementById("travelmessage").innerHTML = "";
		 	tra.classList.remove("mystyle");

		 	document.getElementById("whatsappmessage").innerHTML = "";
		 	w.classList.remove("mystyle");

		 	document.getElementById("tourmessage").innerHTML = "";
		 	tour.classList.remove("mystyle");

		 	document.getElementById("destinationmessage").innerHTML = "";
		 	dest.classList.remove("mystyle");

		 	document.getElementById("personnmessage").innerHTML = "";
		 	per.classList.remove("mystyle");

		 	document.getElementById("adultmessage").innerHTML = "";
		 	ad.classList.remove("mystyle");

		 	document.getElementById("childmessage").innerHTML = "";
		 	child.classList.remove("mystyle");

		 	document.getElementById("roommessage").innerHTML = "";
		 	ro.classList.remove("mystyle");

		 	document.getElementById("daymessage").innerHTML = "";
		 	d.classList.remove("mystyle");

		 	document.getElementById("hotelmessage").innerHTML = "";
		 	hot.classList.remove("mystyle");
			// End of Remove Styling		 	  
		 	
		 	  n.classList.add("mystyle");
		 	  document.getElementById("name").focus();
		 	 return false;
		 }
		 else if(mobiles == '' ||  isNaN(mobiles) || mobiles.length < 10 || mobiles.length > 10)
		 {

		 	document.getElementById("whatsappmessage").innerHTML = "This is a required question";

		 	// Remove Styling
		 	document.getElementById("namemessage").innerHTML = "";
		 	  n.classList.remove("mystyle");

		 	  document.getElementById("travelmessage").innerHTML = "";
		 	  tra.classList.remove("mystyle");

		 	 document.getElementById("tourmessage").innerHTML = "";
		 	tour.classList.remove("mystyle");

		 	document.getElementById("destinationmessage").innerHTML = "";
		 	dest.classList.remove("mystyle");

		 	document.getElementById("personnmessage").innerHTML = "";
		 	per.classList.remove("mystyle");

		 	document.getElementById("adultmessage").innerHTML = "";
		 	ad.classList.remove("mystyle");

		 	document.getElementById("childmessage").innerHTML = "";
		 	child.classList.remove("mystyle");

		 	document.getElementById("roommessage").innerHTML = "";
		 	ro.classList.remove("mystyle");

		 	document.getElementById("daymessage").innerHTML = "";
		 	d.classList.remove("mystyle");

		 	document.getElementById("hotelmessage").innerHTML = "";
		 	hot.classList.remove("mystyle");
		 	// End of Remove Styling

		 	  w.classList.add("mystyle");
		 	   document.getElementById("mobile").focus();
		 	 return false;
		 }
		 else if(tour_dom_inters == '0')
		 {

		 	document.getElementById("tourmessage").innerHTML = "This is a required question";

		 	// Remove Styling
		 	document.getElementById("namemessage").innerHTML = "";
		 	  n.classList.remove("mystyle");

		 	  document.getElementById("travelmessage").innerHTML = "";
		 	  tra.classList.remove("mystyle");

		 	  document.getElementById("whatsappmessage").innerHTML = "";
		 	w.classList.remove("mystyle");

		 	document.getElementById("destinationmessage").innerHTML = "";
		 	dest.classList.remove("mystyle");

		 	document.getElementById("personnmessage").innerHTML = "";
		 	per.classList.remove("mystyle");

		 	document.getElementById("adultmessage").innerHTML = "";
		 	ad.classList.remove("mystyle");

		 	document.getElementById("childmessage").innerHTML = "";
		 	child.classList.remove("mystyle");

		 	document.getElementById("roommessage").innerHTML = "";
		 	ro.classList.remove("mystyle");

		 	document.getElementById("daymessage").innerHTML = "";
		 	d.classList.remove("mystyle");

		 	document.getElementById("hotelmessage").innerHTML = "";
		 	hot.classList.remove("mystyle");
		 	// End of Remove Styling

		 	  tour.classList.add("mystyle");
		 	  document.getElementById("tour_dom_inter").focus();
		 	 return false;
		 }
		 else if(destinations == '')
		 {

		 	document.getElementById("destinationmessage").innerHTML = "This is a required question";

		 	// Remove Styling
		 	document.getElementById("namemessage").innerHTML = "";
		 	  n.classList.remove("mystyle");

		 	  document.getElementById("travelmessage").innerHTML = "";
		 	  tra.classList.remove("mystyle");

		 	  document.getElementById("whatsappmessage").innerHTML = "";
		 	w.classList.remove("mystyle");

		 	  document.getElementById("tourmessage").innerHTML = "";
		 	tour.classList.remove("mystyle");

		 	document.getElementById("personnmessage").innerHTML = "";
		 	per.classList.remove("mystyle");

		 	document.getElementById("adultmessage").innerHTML = "";
		 	ad.classList.remove("mystyle");

		 	document.getElementById("childmessage").innerHTML = "";
		 	child.classList.remove("mystyle");

		 	document.getElementById("roommessage").innerHTML = "";
		 	ro.classList.remove("mystyle");

		 	document.getElementById("daymessage").innerHTML = "";
		 	d.classList.remove("mystyle");

		 	document.getElementById("hotelmessage").innerHTML = "";
		 	hot.classList.remove("mystyle");
		 	// End of Remove Styling

		 	  dest.classList.add("mystyle");
		 	  document.getElementById("destination").focus();
		 	 return false;
		 }
		  else if(person == '' ||  isNaN(person))
		 {

		 	document.getElementById("personnmessage").innerHTML = "This is a required question";

		 	// Remove Styling
		 	document.getElementById("namemessage").innerHTML = "";
		 	  n.classList.remove("mystyle");

		 	  document.getElementById("travelmessage").innerHTML = "";
		 	  tra.classList.remove("mystyle");

		 	  document.getElementById("whatsappmessage").innerHTML = "";
		 	w.classList.remove("mystyle");

		 	  document.getElementById("tourmessage").innerHTML = "";
		 	tour.classList.remove("mystyle");

		 	document.getElementById("destinationmessage").innerHTML = "";
		 	dest.classList.remove("mystyle");

		 	document.getElementById("adultmessage").innerHTML = "";
		 	ad.classList.remove("mystyle");

		 	document.getElementById("childmessage").innerHTML = "";
		 	child.classList.remove("mystyle");

		 	document.getElementById("roommessage").innerHTML = "";
		 	ro.classList.remove("mystyle");

		 	document.getElementById("daymessage").innerHTML = "";
		 	d.classList.remove("mystyle");

		 	document.getElementById("hotelmessage").innerHTML = "";
		 	hot.classList.remove("mystyle");
		 	// End of Remove Styling

		 	  per.classList.add("mystyle");
		 	  document.getElementById("persons").focus();
		 	 return false;
		 }
		  else if(adults == '' ||  isNaN(adults))
		 {

		 	document.getElementById("adultmessage").innerHTML = "This is a required question";

		 	// Remove Styling
		 	document.getElementById("namemessage").innerHTML = "";
		 	  n.classList.remove("mystyle");

		 	  document.getElementById("travelmessage").innerHTML = "";
		 	  tra.classList.remove("mystyle");

		 	  document.getElementById("whatsappmessage").innerHTML = "";
		 	w.classList.remove("mystyle");

		 	  document.getElementById("tourmessage").innerHTML = "";
		 	tour.classList.remove("mystyle");

		 	document.getElementById("destinationmessage").innerHTML = "";
		 	dest.classList.remove("mystyle");

		 	document.getElementById("personnmessage").innerHTML = "";
		 	per.classList.remove("mystyle");

		 	document.getElementById("childmessage").innerHTML = "";
		 	child.classList.remove("mystyle");

		 	document.getElementById("roommessage").innerHTML = "";
		 	ro.classList.remove("mystyle");

		 	document.getElementById("daymessage").innerHTML = "";
		 	d.classList.remove("mystyle");

		 	document.getElementById("hotelmessage").innerHTML = "";
		 	hot.classList.remove("mystyle");
		 	// End of Remove Styling

		 	  ad.classList.add("mystyle");
		 	   document.getElementById("adult").focus();
		 	 return false;
		 }
		  else if(childrens == '' ||  isNaN(childrens))
		 {

		 	document.getElementById("childmessage").innerHTML = "This is a required question";

		 	// Remove Styling
		 	document.getElementById("namemessage").innerHTML = "";
		 	  n.classList.remove("mystyle");

		 	  document.getElementById("travelmessage").innerHTML = "";
		 	  tra.classList.remove("mystyle");

		 	  document.getElementById("whatsappmessage").innerHTML = "";
		 	w.classList.remove("mystyle");

		 	  document.getElementById("tourmessage").innerHTML = "";
		 	tour.classList.remove("mystyle");

		 	document.getElementById("destinationmessage").innerHTML = "";
		 	dest.classList.remove("mystyle");

		 	document.getElementById("personnmessage").innerHTML = "";
		 	per.classList.remove("mystyle");

		 	document.getElementById("adultmessage").innerHTML = "";
		 	ad.classList.remove("mystyle");

		 	document.getElementById("roommessage").innerHTML = "";
		 	ro.classList.remove("mystyle");

		 	document.getElementById("daymessage").innerHTML = "";
		 	d.classList.remove("mystyle");

		 	document.getElementById("hotelmessage").innerHTML = "";
		 	hot.classList.remove("mystyle");
		 	// End of Remove Styling

		 	 child.classList.add("mystyle");
		 	  document.getElementById("children").focus();
		 	 return false;
		 }
		   else if(rooms == '' ||  isNaN(rooms))
		 {

		 	document.getElementById("roommessage").innerHTML = "This is a required question";

		 	// Remove Styling
		 	document.getElementById("namemessage").innerHTML = "";
		 	  n.classList.remove("mystyle");

		 	  document.getElementById("travelmessage").innerHTML = "";
		 	  tra.classList.remove("mystyle");

		 	  document.getElementById("whatsappmessage").innerHTML = "";
		 	w.classList.remove("mystyle");

		 	  document.getElementById("tourmessage").innerHTML = "";
		 	tour.classList.remove("mystyle");

		 	document.getElementById("destinationmessage").innerHTML = "";
		 	dest.classList.remove("mystyle");

		 	document.getElementById("personnmessage").innerHTML = "";
		 	per.classList.remove("mystyle");

		 	document.getElementById("adultmessage").innerHTML = "";
		 	ad.classList.remove("mystyle");

		 	document.getElementById("childmessage").innerHTML = "";
		 	child.classList.remove("mystyle");

		 	document.getElementById("daymessage").innerHTML = "";
		 	d.classList.remove("mystyle");

		 	document.getElementById("hotelmessage").innerHTML = "";
		 	hot.classList.remove("mystyle");
		 	// End of Remove Styling

		 	 ro.classList.add("mystyle");
		 	 document.getElementById("room").focus();
		 	 return false;
		 }
		 else if(day == '0')
		 {

		 	document.getElementById("daymessage").innerHTML = "This is a required question";

		 	// Remove Styling
		 	document.getElementById("namemessage").innerHTML = "";
		 	  n.classList.remove("mystyle");

		 	  document.getElementById("travelmessage").innerHTML = "";
		 	  tra.classList.remove("mystyle");

		 	  document.getElementById("whatsappmessage").innerHTML = "";
		 	w.classList.remove("mystyle");

		 	  document.getElementById("tourmessage").innerHTML = "";
		 	tour.classList.remove("mystyle");

		 	document.getElementById("destinationmessage").innerHTML = "";
		 	dest.classList.remove("mystyle");

		 	document.getElementById("personnmessage").innerHTML = "";
		 	per.classList.remove("mystyle");

		 	document.getElementById("adultmessage").innerHTML = "";
		 	ad.classList.remove("mystyle");

		 	document.getElementById("childmessage").innerHTML = "";
		 	child.classList.remove("mystyle");

		 	document.getElementById("roommessage").innerHTML = "";
		 	ro.classList.remove("mystyle");

		 	document.getElementById("hotelmessage").innerHTML = "";
		 	hot.classList.remove("mystyle");
		 	// End of Remove Styling

		 	 d.classList.add("mystyle");
		 	 document.getElementById("days").focus();
		 	 return false;
		 }
		else if(hotelcheckeds == 0)
		 {

		 	 
		 	document.getElementById("hotelmessage").innerHTML = "This is a required question";

		 	// Remove Styling
		 	document.getElementById("namemessage").innerHTML = "";
		 	  n.classList.remove("mystyle");

		 	  document.getElementById("travelmessage").innerHTML = "";
		 	  tra.classList.remove("mystyle");

		 	  document.getElementById("whatsappmessage").innerHTML = "";
		 	w.classList.remove("mystyle");

		 	  document.getElementById("tourmessage").innerHTML = "";
		 	tour.classList.remove("mystyle");

		 	document.getElementById("destinationmessage").innerHTML = "";
		 	dest.classList.remove("mystyle");

		 	document.getElementById("personnmessage").innerHTML = "";
		 	per.classList.remove("mystyle");

		 	document.getElementById("adultmessage").innerHTML = "";
		 	ad.classList.remove("mystyle");

		 	document.getElementById("childmessage").innerHTML = "";
		 	child.classList.remove("mystyle");

		 	document.getElementById("roommessage").innerHTML = "";
		 	ro.classList.remove("mystyle");

		 	document.getElementById("daymessage").innerHTML = "";
		 	d.classList.remove("mystyle");
		 	// End of Remove Styling

		 	 hot.classList.add("mystyle");
		 	 return false;
		 }



		 

	}



	function doalert(checkboxElem)
	{
		if (checkboxElem.checked) {
		  document.getElementById("hotelchecked").value = 1 ;
  		}
	}
</script>
