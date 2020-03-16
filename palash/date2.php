<?php include_once("conn.inc.php");

	function Get_Driver_Wages_Monthly($From_Date,$TO_Date) 
	{
		$Html_2_Return="";
		
		$SQL_Query="SELECT DISTINCT drv_uniqId,drv_name,drv_id,(SELECT COUNT(*) FROM diagreport_master WHERE diagreport_upddate between '$From_Date' AND '$TO_Date'  AND diagreport_status='CMPLTD' AND diagreport_paymethod='COD' AND diagreport_id IN(SELECT DISTINCT subdiag_diagreport_id FROM  subdiag_report_otm WHERE subdiag_uniqid   IN (SELECT diagreport_dgrpid FROM diagreport_assigned WHERE diagreport_assigned.diagreport_drvid=driver_master.drv_id AND diagreport_asgstatus='CMPLTD'
))) * (SELECT t_firstKMCharge FROM trip_master) AS AMOUNT,(SELECT COUNT(*) FROM diagreport_master WHERE diagreport_upddate between '$From_Date' AND '$TO_Date' AND diagreport_status='CMPLTD' AND diagreport_paymethod='COD' AND diagreport_id IN(SELECT DISTINCT subdiag_diagreport_id FROM  subdiag_report_otm WHERE subdiag_uniqid   IN (SELECT diagreport_dgrpid FROM diagreport_assigned WHERE diagreport_assigned.diagreport_drvid=driver_master.drv_id AND diagreport_asgstatus='CMPLTD'
))) as TOTAL_COUNT,(SELECT SUM(diagreport_billamount) FROM diagreport_master WHERE diagreport_upddate between '$From_Date' AND '$TO_Date'  AND diagreport_status='CMPLTD' AND diagreport_paymethod='COD' AND diagreport_id IN(SELECT DISTINCT subdiag_diagreport_id FROM  subdiag_report_otm WHERE subdiag_uniqid   IN (SELECT diagreport_dgrpid FROM diagreport_assigned WHERE diagreport_assigned.diagreport_drvid=driver_master.drv_id AND diagreport_asgstatus='CMPLTD'
))) as driver_wages
FROM driver_master 
WHERE drv_usrtype IN ('DG','LD')   AND (SELECT COUNT(*) FROM diagreport_master WHERE diagreport_upddate between '$From_Date' AND '$TO_Date' AND diagreport_status='CMPLTD' AND diagreport_paymethod='COD' AND  diagreport_id IN(SELECT DISTINCT subdiag_diagreport_id FROM  subdiag_report_otm WHERE subdiag_uniqid   IN (SELECT diagreport_dgrpid FROM diagreport_assigned WHERE diagreport_assigned.diagreport_drvid=driver_master.drv_id AND diagreport_asgstatus='CMPLTD'
))) * (SELECT t_firstKMCharge FROM trip_master)>0";
		
		///echo $SQL_Query;
		$Record_Set=mysql_query($SQL_Query);
		$Dat_1=base64_encode($From_Date);
		$Dat_2=base64_encode($TO_Date);
		//$timespan_bs64=base64_encode($MonthYear);
		$timespan_bs64="-";
		
		while($Row=mysql_fetch_array($Record_Set))
		{
			$driver_bs64=base64_encode($Row['drv_id']);	
			
			$Collected_Amount=0;
			
			$Collection_Result=mysql_query("SELECT SUM(drv_amount) AS Collected FROM  driver_adjustment WHERE 	drv_fromdate='$From_Date' AND drv_todate='$TO_Date' and drv_id=".$Row['drv_id']."");
			
			if(mysql_num_rows($Collection_Result)>0)
			{
				$Collection_Result=mysql_query("SELECT SUM(drv_amount) AS Collected FROM  driver_adjustment WHERE 	drv_fromdate='$From_Date' AND drv_todate='$TO_Date' and drv_id=".$Row['drv_id']."");
				$Result_Set=mysql_fetch_array($Collection_Result);
				$Collected_Amount=$Result_Set['Collected'];
			}
			
			$Html_2_Return.="<tr><td>{$Row['drv_name']}</td><td>{$Row['driver_wages']}</td><td>$Collected_Amount</td><td>{$Row['AMOUNT']}</td><td><button class='btn btn-primary' onclick=\"window.location='cash_collection_history.php?D1=$Dat_1&D2=$Dat_2&DvId=$driver_bs64'\">Click to View</button></td>";	
			/*$month_year="";
			//explode("-",$MonthYear);
			$check_Query=mysql_query("SELECT * FROM driver_wages_monthwise WHERE dwm_driverid=".$Row['drv_id']." AND dwm_month='".$month_year[0]."' AND dwm_year='".$month_year[1]."'");
			$Num_Rows=mysql_num_rows($check_Query);
			///----------------------Transaction Status if paid or unpaid
			if($Num_Rows==1) 
			{
				$Html_2_Return.="<td><button class='btn btn-info'>Paid</button></td>";
			}
			else 
			{
				$Html_2_Return.="<td><button class='btn btn-danger'>Unpaid</button></td>";	
			}
			///----------------------Transaction Status if paid or unpaid
			if($Num_Rows==1) 
			{
					$Html_2_Return.="<td><button class='btn btn-secondary' onclick=\"window.location='driver_wages.php?A={$Row['AMOUNT']}&D=$driver_bs64&TS=$timespan_bs64&oper=u'\">Pay/Edit</button></td>";
			}
			else 
			{
					$Html_2_Return.="<td><button class='btn btn-secondary' onclick=\"window.location='driver_wages.php?A={$Row['AMOUNT']}&D=$driver_bs64&TS=$timespan_bs64&oper=i'\">Pay/Edit</button></td>";
			}
			if($Num_Rows==1) 
			{
				$Html_2_Return.="<td><button class='btn btn-secondary' onclick=\"View_Monthly_Payment('".$Row['drv_id']."','".$MonthYear."')\">History</button></td>";		
			}
			else 
			{
				$Html_2_Return.="<td><button class='btn btn-secondary' disabled>History</button></td>";
			}	
			*/
			
			$Html_2_Return.="</tr>";
		}
		return $Html_2_Return;
	}	
	if(isset($_REQUEST['showwages']))
	{
		$FDate=$_REQUEST['FDate'];
		$TDate=$_REQUEST['TDate'];
		$From_Date=DateTime::createFromFormat('d-m-Y', $FDate);
		$From_Date->setTime(0, 0, 0);
		$From_Date = $From_Date->format('Y-m-d h:m:s'); // for example
		$To_Date=DateTime::createFromFormat('d-m-Y', $TDate);
		$To_Date->setTime(23, 59, 0);
		$To_Date = $To_Date->format('Y-m-d h:m:s'); // for example
		
		echo Get_Driver_Wages_Monthly($From_Date,$To_Date);
		exit();
		/*$Oper2Perform=$_REQUEST['Operf'];
		$RecpID=$_REQUEST['RepID'];
		$Amount=$_REQUEST['Amt'];	
		$Report=mysql_query("SELECT  rt_ourprice FROM  report_type WHERE rt_id=$RecpID");
		//mysql_query("SELECT  rt_amount FROM  report_type WHERE rt_id=$RecpID");
		$RPR=mysql_fetch_array($Report);
		$Value2Add=$RPR['rt_ourprice'];//$RPR['rt_amount'];		
		echo AddtoAmount($Amount,$Oper2Perform,$Value2Add);
		exit();*/
	}
	
	if(isset($_REQUEST['btnsave']))
	{
			$explode_array=explode("-",$_REQUEST['hidmonthyear']);
			mysql_query("INSERT INTO driver_wages_monthwise VALUES(0,".$_REQUEST['hiddriverid'].",'".$explode_array[0]."','".$explode_array[1]."',STR_TO_DATE('".$_REQUEST['txtpaymentdate']."', '%d/%m/%Y'),".$_REQUEST['txtwagesamount'].",'".$_REQUEST['rdbpaymentmode']."','".$_REQUEST['txttransactionid']."','13:05:05')");
			$bs_64=base64_encode($_REQUEST['hidmonthyear']);	
			echo "<script type='text/javascript'>window.location='driver_wages.php?tspan=$bs_64'</script>";
	}
	
	if(isset($_REQUEST['btnupdate']))
	{
				$explode_array=explode("-",$_REQUEST['hidmonthyear']);
				mysql_query("UPDATE driver_wages_monthwise SET dwm_paymentdate=STR_TO_DATE('".$_REQUEST['txtpaymentdate']."', '%d/%m/%Y'),dwm_paymentmode='".$_REQUEST['rdbpaymentmode']."',dwm_paymenttransid='".$_REQUEST['txttransactionid']."' Where dwm_driverid=".$_REQUEST['hiddriverid']." AND dwm_month='".$explode_array[0]."' AND dwm_year='".$explode_array[1]."'");
				$bs_64=base64_encode($_REQUEST['hidmonthyear']);	
				echo "<script type='text/javascript'>window.location='driver_wages.php?tspan=$bs_64'</script>";
	}
	
	include_once("header.inc.php");  
?>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<div class="container">
  <div class="content">
    <div class="content-container">
      <div class="content-header">
        <h2 class="content-header-title">Manage Cash Collection:[From 'COD' Orders]</h2>
        <ol class="breadcrumb">
          <li><a href="index.php">Home</a></li>
          <!--<li><a href="javascript:;"></a></li>-->
          <li class="active">Manage Cash Collection:[From 'COD' Orders]</li>
        </ol>
      </div> <!-- /.content-header -->
      <div class="row">
        <div class="col-sm-12">
          <div class="portlet">
             <!-- /.portlet-header -->
	<?php if(isset($_REQUEST['oper'])) 
	{
		if($_REQUEST['oper']=="i")
		{
			$month_array=array("01"=>"January","02"=>"February","03"=>"March","04"=>"April","05"=>"May","06"=>"June","07"=>"July","08"=>"August","09"=>"September","10"=>"October","11"=>"November","12"=>"December");
	$time_period=base64_decode($_REQUEST['TS']);
	$driverID=base64_decode($_REQUEST['D']);
	
	$Month_Year=explode("-",$time_period);
	
	$driveQuery=mysql_query("SELECT * FROM driver_master where drv_id=$driverID");
	$Drive_Row=mysql_fetch_array($driveQuery);
	
		?>
        <div class="portlet-header">
              <h3>
                <i class="fa fa-tasks"></i>
             Manage Cash Collection
              </h3>
         </div>
         
         <div class="portlet-content">
        <form method="post" id="validate-basic" action="driver_wages.php" class="form parsley-form" data-validate="parsley" enctype="multipart/form-data">
        <input type="hidden" id="hiddriverid" name="hiddriverid" value="<?php echo base64_decode($_REQUEST['D']);?>" /> 
                <input type="hidden" id="hidmonthyear" name="hidmonthyear" value="<?php echo base64_decode($_REQUEST['TS']);?>" /> 
     	<div class="row"> 
        
        <div class="col-md-12"><div class="alert alert-danger"><strong>(Note:All marked(<strong style="color:Red">*</strong>) are compulsory fields)</strong></div></div>
            <div class="col-sm-4">
              <div class="form-group">
             <label class="col-md-12 ">Payment Date:<strong style="color:Red">*</strong></label>
               <div class="col-md-12">
          <div id="dp-ex-1" class="input-group date" data-date-format="dd/mm/yyyy">
                					<input id="txtpaymentdate" name="txtpaymentdate" class="form-control"   data-required="true"/>
                  		<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                    </div>
             </div>
             </div>
          </div> 
          
          <div class="col-sm-4">
             <div class="form-group">
             <label class="col-md-12">Payment Mode:<strong style="color:Red">*</strong></label>
               <div class="col-md-12">
              		<input type="radio"  name="rdbpaymentmode" id="rdbpay1" value="Cash" checked="checked"/><label for="rdbpay1">Cash</label>
                    <input type="radio"  name="rdbpaymentmode" id="rdbpay2" value="NEFT/RTGS"/><label for="rdbpay2">NEFT/RTGS</label>
                    <input type="radio"  name="rdbpaymentmode" id="rdbpay3" value="Cheque/DD"/><label for="rdbpay3">Cheque/DD</label>
              </div>
              </div>
          </div>
          
          
            <div class="col-sm-4">
             <div class="form-group">
             <label class="col-md-12">Wages(Amount):<strong style="color:Red">*</strong></label>
               <div class="col-md-12">
              	 	<input type="text" id="txtwagesamount" name="txtwagesamount" value="<?php echo $_REQUEST['A'];?>" readonly="readonly"  class="form-control"/>
              </div>
              </div>
          </div>
          
          <div class="clearfix"></div>
            <div class="col-sm-4">
             <div class="form-group">
             	<label class="col-md-12">Cheque/UTR No.:<strong style="color:Red">*</strong></label>
               <div class="col-md-12">
              	 	<input type="text" id="txttransactionid" name="txttransactionid" class="form-control"/>
              </div>
              </div>
          </div>
         
          
          <div class="clearfix" style="margin-bottom:28px"></div>
          <div class="row">
            <div class="clearfix" style="margin-bottom:28px"></div>
             <div class="col-sm-12">
               <div class="form-group">
               			<button type="submit" class="btn btn-primary"   name="btnsave">Save</button>
            </div>
            </div>
            </div> 
            </form>
            </div>
           <!-- /.portlet-content -->
		<?php } else if($_REQUEST['oper']=="u") 
		{
				$month_array=array("01"=>"January","02"=>"February","03"=>"March","04"=>"April","05"=>"May","06"=>"June","07"=>"July","08"=>"August","09"=>"September","10"=>"October","11"=>"November","12"=>"December");
	$time_period=base64_decode($_REQUEST['TS']);
	$driverID=base64_decode($_REQUEST['D']);
	$Month_Year=explode("-",$time_period);
	$driveQuery=mysql_query("SELECT * FROM driver_master where drv_id=$driverID");
	$Drive_Row=mysql_fetch_array($driveQuery);
	$check_Query=mysql_query("SELECT *,DATE_FORMAT(dwm_paymentdate,'%d/%m/%Y') AS payment_date FROM driver_wages_monthwise WHERE dwm_driverid=$driverID AND dwm_month='".$Month_Year[0]."' AND dwm_year='".$Month_Year[1]."'");
	$Payment_Info=mysql_fetch_array($check_Query);	
	
	?>
    
        <div class="portlet-header">
            <h3>
                <i class="fa fa-tasks"></i>
                Wages Payment:for &lt;<?php echo $Drive_Row['drv_name'];?> &gt;, for month & year of. &lt;<?php echo $month_array[$Month_Year[0]].", ".$Month_Year[1]; ?> &gt;
              </h3>
            </div>
            
         <div class="portlet-content">
        <form method="post" id="validate-basic" action="driver_wages.php" class="form parsley-form" data-validate="parsley" enctype="multipart/form-data">
        <input type="hidden" id="hiddriverid" name="hiddriverid" value="<?php echo base64_decode($_REQUEST['D']);?>" /> 
        <input type="hidden" id="hidmonthyear" name="hidmonthyear" value="<?php echo base64_decode($_REQUEST['TS']);?>" /> 
     	<div class="row">
        <div class="col-md-12"><div class="alert alert-danger"><strong>(Note:All marked(<strong style="color:Red">*</strong>) are compulsory fields)</strong></div></div>
            <div class="col-sm-4">
              <div class="form-group">
             <label class="col-md-12 ">Payment Date:<strong style="color:Red">*</strong></label>
               <div class="col-md-12">
          <div id="dp-ex-1" class="input-group date" data-date-format="dd/mm/yyyy">
                					<input id="txtpaymentdate" name="txtpaymentdate" class="form-control"   data-required="true" value="<?php echo $Payment_Info['payment_date'];?>"/>
                  		<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                    </div>
             </div>
             </div>
          </div> 
          
          <div class="col-sm-4">
             <div class="form-group">
             <label class="col-md-12">Payment Mode:<strong style="color:Red">*</strong></label>
               <div class="col-md-12">
              		<input type="radio"  name="rdbpaymentmode" id="rdbpay1" value="Cash"  <?php if($Payment_Info['dwm_paymentmode']==="Cash") { echo "checked='checked'";}?>/><label for="rdbpay1">Cash</label>
                    <input type="radio"  name="rdbpaymentmode" id="rdbpay2" value="NEFT/RTGS"  <?php if($Payment_Info['dwm_paymentmode']==="NEFT/RTGS") { echo "checked='checked'";}?>/><label for="rdbpay2">NEFT/RTGS</label>
                    <input type="radio"  name="rdbpaymentmode" id="rdbpay3" value="Cheque/DD" <?php if($Payment_Info['dwm_paymentmode']==="Cheque/DD") { echo "checked='checked'";}?>/><label for="rdbpay3">Cheque/DD</label>
              </div>
              </div>
          </div>
          
          <div class="col-sm-4">
             <div class="form-group">
             <label class="col-md-12">Wages(Amount):<strong style="color:Red">*</strong></label>
               <div class="col-md-12">
              	 	<input type="text" id="txtwagesamount" name="txtwagesamount" value="<?php echo $Payment_Info['dwm_paymentamount'];?>" readonly="readonly"  class="form-control"/>
              </div>
              </div>
          </div>
          
          <div class="clearfix"></div>
            <div class="col-sm-4">
             <div class="form-group">
             <label class="col-md-12">Cheque/UTR No.:<strong style="color:Red">*</strong></label>
               <div class="col-md-12">
              	 	<input type="text" id="txttransactionid" name="txttransactionid"  class="form-control"  value="<?php echo $Payment_Info['dwm_paymenttransid'];?>" />
              </div>
              </div>
          </div>
          
          <div class="clearfix" style="margin-bottom:28px"></div>
          <div class="row">
            <div class="clearfix" style="margin-bottom:28px"></div>
             <div class="col-sm-12">
               <div class="form-group">
               			<button type="submit" class="btn btn-primary"   name="btnupdate">Update</button>
            </div>
            </div>
            </div> 
            </form>
            </div>
		<?php } 
		} 
		else  
		{?> <!-- insert the table to view data here-->
        <div class="portlet-header">
              <h3>
              <i class="fa fa-tasks"></i>
              		Manage Cash Collection
              </h3>
            </div>
            
        <div class="portlet-content">
        			<div class="row"> 
				<form action="#" method="post">
            		<div class="col-sm-8">
            		<div class="form-group">
                    <div class="col-sm-1">
            		<div class="form-group">
            		<strong>From:</strong>
                     </div>
                       </div>
            		<div class="form-group">
            		
                    <div class="col-sm-3">
                        <div id="dp-ex-10" class="input-group date" >
                					<input id="txtfromdate" name="txtfromdate" class="form-control" <?php if(isset($_REQUEST['FD'])) {  echo "value='".base64_decode($_REQUEST['FD'])."'";}?>/>
                  					<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                    </div>
                    </div>
                    
                    <div class="col-sm-1">
            		<div class="form-group">
            		<strong>To:</strong>
                     </div>
                       </div>
                    <div class="col-sm-3">
                        <div id="dp-ex-11" class="input-group date" >
                		<input id="txttodate" name="txttodate" class="form-control" <?php if(isset($_REQUEST['TD'])) {  echo "value='".base64_decode($_REQUEST['TD'])."'";}?>/>
                        
                  		<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                    </div>
                    </div>
                     
                    <div class="col-sm-2">
                    		<button type="button" id="btngetwages" class="btn btn-primary"  onclick="Show_Wages()">Get COD Orders!</button>
                    </div>
                    </div>
                    </div>
                    </div>
</form>
                    <div class="clearfix" style="margin-top:15px"></div>
                      <div class="col-sm-12 text-center" id="divplaceholder">
                      </div>      
                    </div>
                    </div>        
            <div class="clearfix" style="margin-bottom:15px"></div>
            <div class="table-responsive">
              <table 
                class="table table-striped table-bordered table-hover table-highlight table-checkable"
                data-display-rows="10"
                data-info="true"
                data-search="true"
                data-length-change="true"
                data-paginate="true">
                  <thead>
                    <tr>
                      	<th>Driver</th>
                      	<th>Order Amount</th>
                      	<th>Collected Amount</th>
                        <th>Driver Wages</th>
                      
                      	<th>View Orders</th>
                    </tr>
                  </thead>
                  <tbody id="T_Body">
                  </tbody>              
                </table>
              </div> <!-- /.table-responsive -->
            </div>
        <?php }
		?>
          </div> <!-- /.portlet -->
        </div> <!-- /.col -->
      <!-- /.col -->
      </div> <!-- /.row -->
    </div> <!-- /.content-container -->
  </div> <!-- /.content -->
</div>

<div id="styledModal3" class="modal modal-styled fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3 class="modal-title">Driver Wages</h3>
      </div>
      		<div class="modal-body" id="delvinfo">
            </div>
      </div>
</div>
</div>
<?php include_once("footer.inc.php");?>
<?php include_once("closebody.php");?>
<script type="text/javascript">
jQuery(document).ready(function () {
	$('#dp-ex-10').datepicker({format:"dd-mm-yyyy"});
	$('#dp-ex-11').datepicker({format:"dd-mm-yyyy"});
	/*if (window.location.href.indexOf('?tspan=') > 0) 
	{
                jQuery("#btngetwages").click();
    }
	else if($("#txtdate").val()!="") 
	{
		  jQuery("#btngetwages").click();
	}*/
		if (window.location.href.indexOf('?TD=') > 0) 
	{
                jQuery("#btngetwages").click();
    }
	else if(jQuery("#txtfromdate").val()!="") 
	{	
		//alert("value gotten");
		  jQuery("#btngetwages").click();
	}
	
});
function Show_Wages() 
{
 				var From_Date=$("#txtfromdate").val();
				var TO_Date=$("#txttodate").val(); 
				
				//alert(checkstatus+"="+checkId);
				$.ajax({
       					 url: 'cash_collection.php?showwages=1&FDate='+From_Date+'&TDate='+TO_Date,
        				 type: 'get',
        				// data: { "IncreDecre": "1","Operf":checkstatus,"RepID":checkId,"Amt":AmountField},
        				 success: function(response) 
						 {  //success braces start
							//alert(response);
							$("#T_Body").html("");
							$("#T_Body").html(response);
							var Time_Period=$("#txtdate").val();  
							//var words = Time_Period.split('-');
							//var formattedMonth = moment(words[0], 'MM').format('MMMM'); // September
							var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];					
						//	jQuery("#divplaceholder").html("<h3>For the time period of:"+months[words[0] - 1]+", "+words[1]+"</h3>");
							//var formattedMonth = moment('09', 'MM').format('MMMM'); 
							//September
							//$('#txtbillamount').change();
							//console.log(response); 
						 }  
						 //success braces ends
    			});
}

function View_Monthly_Payment(DriverId,TSpan) 
{
	$.ajax({
  		url: "Driver_Past_Payment.php?DR="+DriverId+"&TS="+TSpan,
  		cache: false,
  		success:function(html)
		{
			$("#delvinfo").html("");
			$("#delvinfo").append(html);
  			$('#styledModal3').modal();
		}
	});	
}
</script>