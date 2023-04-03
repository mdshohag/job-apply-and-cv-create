<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
        <title>Liz Fashion Industry Ltd.</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>	

        <!-- Top content -->
        <div class="top-content">
            <div class="container">             
	 
          <!-- <div class="modal fade" id="myModal" role="dialog">
				<div class="modal-dialog modal-lg">
				  <div class="modal-content">
					<div class="modal-header">
					  <button type="button" class="close" data-dismiss="modal">&times;</button>
					 <?php// echo $html; ?>
					</div>
					<div class="modal-body">
					  <p>' . $rand . '</p>
					</div>
					<div class="modal-footer">
					  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				  </div>
				</div>
			  </div>  -->
			<div id="div">			  
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1 form-box">
					<!--thankyou.php?aa=<?php //echo $_SESSION[$rand] ; ?> -->
					 <!-- Trigger the modal with a button -->
                    	<form role="form" id="multiphase" enctype="multipart/form-data" action="" method="post" class="f1">

                    		<h3 class="header-title">Liz Fashion Industry Ltd.</h3>
                    		<h4 class="sub-title">Request For IT Equipment & Service</h4>
                   
                    		<div class="f1-steps">
                    			<div class="f1-progress">
                    			    <div class="f1-progress-line" data-now-value="18.66" data-number-of-steps="4" style="width: 18.66%;"></div>
                    			</div>
                    			<div class="f1-step active">
                    				<div class="f1-step-icon"><i class="fa fa-user"></i></div>
                    				<p>User Info. </p>
                    			</div>
                    			<div class="f1-step">
                    				<div class="f1-step-icon"><i class="fa fa-laptop"></i></div>
                    				<p>Device</p>
                    			</div>
								<div class="f1-step">
                    				<div class="f1-step-icon"><i class="fa fa-hdd-o"></i></div>
                    				<p>Equipment</p>
                    			</div>
                    		    <div class="f1-step">
                    				<div class="f1-step-icon"><i class="fa fa-cogs"></i></div>
                    				<p>IT Service</p>
                    			</div> 
								<div class="f1-step">
                    				<div class="f1-step-icon"><i class="fa fa-rocket"></i></div>
                    				<p>Software</p>
                    			</div>
								<div class="f1-step">
                    				<div class="f1-step-icon"><i class="fa fa-print"></i></div>
                    				<p>Printer</p>
                    			</div>
                    		</div>
                    		
                    		<fieldset>
                    			<center><h4 class="title-info">User Information</h4></center>
                    			<div class="row">
                    			  <div class="col-md-6">
	                    			<div class="form-group">
	                    			    <label  for="name">Name</label>
	                                    <input type="text" name="emp_name" placeholder="Enter name..." class="f1-first-name form-control" id="f1-first-name">
	                                </div>
				                   </div>
				                   <div class="col-md-6">
		                                <div class="form-group">
		                    			    <label  for="Employee">Employee ID</label>
		                                    <input type="text" name="employeeID" placeholder="Enter Employee ID..." class="f1-employee-id form-control" id="f1-employee-id">
		                                </div>
				                           
				                </div>
				                <div class="col-md-6">
                                 <div class="form-group">
                                    <label for="f1-email">Designation</label>
                                    <select class="f1-designation form-control" name="designation" id="f1-designation">
										<option value="">Select Designation</option>
										<option value="Manager">Manager</option>
										<option value="Manager">Executive</option>
											
									  </select>
                                </div>
                                </div>
                                <div class="col-md-6">

								<div class="form-group">
                                    <label for="f1-email">Department</label>
                                    <select class="f1-department form-control" name="department" id="f1-department">
										<option value="">Select Department</option>
										<option value="Information Technology">Information Technology</option>
											
									 </select>
                                </div> 
                                </div> 
                                <div class="col-md-6">                                                 
                                <div class="form-group">
                                    <label for="f1-user-section">User Section</label>
                                    <select class="f1-department form-control" name="department" id="f1-department">
										<option value="">Select User Section</option>
										<option value="Application Development">Application Development</option>
											
									 </select>
                                </div>
                                </div>

                                <div class="col-md-6">
                                <div class="form-group">
                                    <label for="contact_number">Contact Number</label>
                                    <input type="text" name="contact_number" placeholder="+880" class="f1-contact_number form-control" id="f1-contact_number">
                                </div>
                                </div>
                                <div class="col-md-6">

                                <div class="form-group">
                                    <label for="f1-user-costcenter">Cost Center</label>
                                    <select class="f1-costcenter form-control" name="costcenter" id="f1-costcenter">
										<option value="">Select Cost Center</option>
										<option value="Liz Fashion Industry">Liz Fashion Industry</option>
											
									 </select>
                                </div>  
                                </div>

                                <div class="col-md-6">                              
                                <div class="form-group">
                                    <label for="f1-user-costdepartment">Cost Department</label>
                                    <select class="f1-costdepartment form-control" name="costdepartment" id="f1-costdepartment">
										<option value="">Select Cost Department</option>
										<option value="HR">HR</option>											
									 </select>
                                </div>
                                </div>

                                   <div class="col-md-6">
								 
                                <div class="form-group">
                                    <label for="f1-twitter">Join date</label>
                                    <input type="text" name="joindate" placeholder="dd-mm-yyyy" class="f1-twitter form-control" id="f1-joindate">
                                </div>
                                </div>

                                   <div class="col-md-6">
								 
                                <div class="form-group">
                                    <label for="f1-ruqest_date">Request Date</label>
                                    <input type="text" name="ruqest_date" placeholder="dd-mm-yyyy" class="f1-ruqest_date form-control" id="f1-ruqest_date">
                                </div>
                                </div>

                               </div>
								
                                <div class="f1-buttons">
                                    <button type="button" class="btn btn-next">Next</button>
                                </div>
                            </fieldset>

                            <fieldset>
                                <center><h4 class="title-info">Device Information</h4></center>
                                 <div class="form-group">
                                     <label name="device" for="sel1">Device</label>
									  <select class="f1-device form-control" name="device_name" id="f1-device">
											<option value="">Select Device</option>
											<option value="Desktop">Desktop</option>
											<option value="Laptop">Laptop</option>
									  </select>								
                                </div>

                                <p id="getdatabs"></p>


                                <div class="f1-buttons">
                                    <button type="button" class="btn btn-previous">Previous</button>
                                    <button type="button" class="btn btn-nextd btn-nexts">Next</button>
                                </div>
                            </fieldset> 
							<fieldset>
                                <center><h4 class="title-info">Device & Equipment</h4> </center>
                                <div class="row">
                    			  <div class="col-md-6">
                                <div class="form-group">
                                    <label for="f1-mouse">Mouse</label>
                                    <select class="f1-mouse form-control" name="mouse" id="f1-mouse">
										<option value="">Select Mouse</option>
										<option value="">Mouse Wired</option>
										<option value="">Mouse Wireless</option>
									</select>
                                </div>
                                </div>
                                <div class="col-md-6">
                                 <div class="form-group">
                                    <label for="f1-keyboard">Keyboard</label>
                                    <select class="f1-keyboard form-control" name="keyboard" id="f1-keyboard">
										<option value="">Select Keyboard</option>
										<option value="">Keyboard Wired</option>
										<option value="">Keyboard Wireless</option>
									</select>
                                </div>
                                </div>
                                <div class="col-md-6">
                                <div class="form-group">
                                    <label for="f1-combo-pack">Combo Pack</label>
                                    <select class="f1-combo-pack form-control" name="combo-pack" id="f1-combo">
										<option value="">Select combo pack</option>
										<option value="">Mouse & Keyboard Wired</option>
										<option value="">Mouse & Keyboard Wireless</option>
									</select>
                                </div>
                                </div>
                                <div class="col-md-6">

                                <div class="form-group">
                                    <label for="f1-monitor">Monitor</label>
                                    <select class="f1-monitor form-control" name="monitor" id="f1-monitor">
										<option value="">Select Display size</option>
										<option value="">21"</option>
										<option value="">28"</option>
									</select>
                                </div>
                                </div>
                                <div class="col-md-6">
                                <div class="form-group">
                                    <label for="f1-pendrive">Pen drive</label>
                                    <select class="f1-pendrive form-control" name="pendrive" id="f1-pendrive">
										<option value="">Select Capacity</option>
										<option value="">16GB</option>
										<option value="">32GB</option>
										<option value="">64GB</option>
									</select>
                                </div>
                                </div>
                                <div class="col-md-6">
                                <div class="form-group">
                                    <label for="f1-externalHDD">External HDD</label>
                                    <select class="f1-externalHDD form-control" name="externalHDD" id="f1-externalHDD">
										<option value="">Select Capacity</option>
										<option value="">500GB</option>
										<option value="">1TB</option>
										<option value="">2TB</option>
									</select>
                                </div>

                                </div>

                                <div class="form-group">
								 <div class="table" style="padding-left:30px;">
									<table>
									<tr>
										<td> <label> Laptop Bag </label></td>
										<td style="padding-left:30px;"><input type="radio" name="laptop-bag" value="Yes"> Yes</td>
										<td style="padding-left:20px;"><input type="radio" name="laptop-bag" value="No"> No</td>
									</tr>
									<tr>
										<td> <label> Projector </label></td>
										<td style="padding-left:30px;"><input type="radio" name="projector" value="Yes"> Yes</td>
										<td style="padding-left:20px;"><input type="radio" name="projector" value="No"> No</td>
									</tr>
									<tr>
										<td> <label> Scanner </label></td>
										<td style="padding-left:30px;"><input type="radio" name="scanner" value="Yes"> Yes</td>
										<td style="padding-left:20px;"><input type="radio" name="scanner" value="No"> No</td>
									</tr>
									<tr>
										<td> <label> Photocopier </label></td>
										<td style="padding-left:30px;"><input type="radio" name="photocopier" value="Yes"> Yes</td>
										<td style="padding-left:20px;"><input type="radio" name="photocopier" value="No"> No</td>
									</tr>
									<tr>
										<td> <label> Camera </label></td>
										<td style="padding-left:30px;"><input type="radio" name="camera" value="Yes"> Yes</td>
										<td style="padding-left:20px;"><input type="radio" name="camera" value="No"> No</td>
									</tr>

									<tr>
										<td> <label> Printer </label></td>
										<td style="padding-left:30px;"><input type="radio" name="printer" value="Yes"> Yes</td>
										<td style="padding-left:20px;"><input type="radio" name="printer" value="No"> No</td>
									</tr>
									<tr>
										<td></td>
										<td style="padding-left:30px;"><input type="checkbox" name="other_equip" value="other"> <label> Other</label></td>
										
										<td style="padding-left:30px;">
											<input name="itemtype" placeholder="Enter Itype......" class="f1-itemtype form-control" id="f1-itemtype">
											</td>
									</tr>
								
								</table>
								
                               </div>
                               </div>
                                <div class="col-md-6">
	                               <div class="form-group">
						                <label for="f1-brand">Brand</label>

						                <input name="brand" placeholder="......" class="f1-brand form-control" id="f1-brand">
						            </div>
						            </div>
					             <div class="col-md-6">
	                               <div class="form-group">
						                <label for="f1-Model">Model</label>
						                <input name="model" placeholder="......" class="f1-model form-control" id="f1-model">
						            </div>
						          </div>

                                <div class="f1-buttons">
                                    <button type="button" class="btn btn-previous">Previous</button>
                                    <button type="button" class="btn btn-nextd btn-next-eq">Next</button>
                                </div>
                               </div>
                            </fieldset> 
							<fieldset>
                               	<center><h4 class="title-info">IT Service</h4></center>

                               	<div class="form-group">
								 <div class="table">
								<table>
									<tr>
										<td> <label> Create New Email</label></td>
										<td style="padding-left:30px;"><input type="radio" name="newemail" value="Yes"> Yes</td>
										<td style="padding-left:20px;"><input type="radio" name="newemail" value="No"> No</td>
										<td></td>
										<td></td>
									</tr>
									<tr>
										<td> <label> Email group access </label></td>
										
										<td colspan="2" style="padding-left:30px;" >
											<input name="group_name" placeholder="Enter group name......" class="f1-itemtype form-control" id="f1-group_name">
											</td>
									</tr>

									<tr>
										<td> <label> Zoho workdrive access </label></td>
										<td style="padding-left:30px;"><input type="radio" name="zoho" value="Yes"> Yes</td>
										<td style="padding-left:20px;"><input type="radio" name="zoho" value="No"> No</td>
										<td></td>
										<td></td>
									</tr>

									<tr>
										<td> <label> Create Domain Account </label></td>
										<td style="padding-left:30px;"><input type="radio" name="domain" value="Yes"> Yes</td>
										<td style="padding-left:20px;"><input type="radio" name="domain" value="No"> No</td>
										<td></td>
										<td></td>
									</tr>								
								</table>
								
                               </div>
                               </div>

                                <div class="form-group">
                                    <label for="f1-domain-name">  Domain Account Like </label><br>
                                   
                                    <input type="text" name="domain-name" placeholder="-----" class="f1-domain-name form-control" id="f1-domain-name"><br> 
																		
                                </div>

                                <div class="form-group">
                                    <label for="f1-additional">  Additional Access </label><br>
                                   
                                    <input type="text" name="additional" placeholder="-----" class="f1-additional form-control" id="f1-additional"><br> 
																		
                                </div>
                               
                                <div class="f1-buttons">
                                    <button type="button" class="btn btn-previous">Previous</button>
                                    <button type="button" class="btn btn-nextss">Next</button>
                                </div>
                            </fieldset>
							<fieldset>
                               <center><h4 class="title-info">Authorized licensed software</h4></center>
							   	
							   	<div class="form-group">
								 <div class="table">
								<table>
									<tr>
										<td> <label> Windows </label></td>
										<td style="padding-left:30px;"><input type="radio" name="windows " value="Yes"> Yes</td>
										<td style="padding-left:20px;"><input type="radio" name="windows" value="No"> No</td>
									</tr>
									<tr>
										<td> <label> Adobe </label></td>
										<td style="padding-left:30px;"><input type="radio" name="adobe" value="Yes"> Yes</td>
										<td style="padding-left:20px;"><input type="radio" name="adobe" value="No"> No</td>
									</tr>

									<tr>
										<td> <label> AutoCAD </label></td>
										<td style="padding-left:30px;"><input type="radio" name="autoCAD " value="Yes"> Yes</td>
										<td style="padding-left:20px;"><input type="radio" name="autoCAD" value="No"> No</td>
									</tr>

									<tr>
										<td> <label> Anti-Virus </label></td>
										<td style="padding-left:30px;"><input type="radio" name="anti-virus" value="Yes"> Yes</td>
										<td style="padding-left:20px;"><input type="radio" name="anti-virus" value="No"> No</td>
									</tr>								
								</table>
								
                               </div>
                               </div>

                                <div class="form-group">
                                    <label for="f1-softwer-other">  Other </label><br>
                                   
                                    <input type="text" name="softwer-other" placeholder="-----" class="f1-softwer-other form-control" id="f1-softwer-other"><br> 
																		
                                </div>
                               
                                <div class="f1-buttons">
                                    <button type="button" class="btn btn-previous">Previous</button>
                                    <button type="button" class="btn btn-nextss">Next</button>
                                </div>
                            </fieldset>
                            <fieldset>
								<center><h4 class="title-info">Printer</h4></center>
                                
							   		<div class="form-group">
									 <div class="table">
										<table>
											<tr>
												<td> <label> Network Printer as Liz Standard </label></td>
												<td style="padding-left:30px;"><input type="radio" name="network " value="Yes"> Yes</td>
												<td style="padding-left:20px;"><input type="radio" name="network" value="No"> No</td>
											</tr>
											<tr>
												<td> <label> Personal Printer </label></td>
												<td style="padding-left:30px;"><input type="radio" name="personal-printer" value="Yes"> Yes</td>
												<td style="padding-left:20px;"><input type="radio" name="personal-printer" value="No"> No</td>
											</tr>

											<tr>
												<td> <label> Printer Type </label></td>
												<td style="padding-left:30px;"><input type="radio" name="printertype " value="Color"> Color</td>
												<td style="padding-left:20px;"><input type="radio" name="printertype" value="Black/White"> Black/White</td>
											</tr>

											<tr>
												<td> <label> Barcode Printer</label></td>
												<td style="padding-left:30px;"><input type="radio" name="barcode-printer" value="Yes"> Yes</td>
												<td style="padding-left:20px;"><input type="radio" name="barcode-printer" value="No"> No</td>
											</tr>								
										</table>
									
	                              	 </div>
	                               </div>

                                <div class="f1-buttons">
                                    <button type="button" class="btn btn-previous">Previous</button>
                                    <button type="submit" name="submit" class="btn btn-submit" data-toggle="modal" data-target="#myModal">Submit</button>                                   
                                </div>
                            </fieldset>
							
                    	
                    	</form>
						
						
                    </div>
                </div>
                </div>
                    
            </div>
        </div>

 
        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/retina-1.1.0.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        <!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
		<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

		<!-- Bootstrap Date-Picker Plugin -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->
		
		<script>
		
		$(window).bind("pageshow", function() {
    var form = $('form'); 
    // let the browser natively reset defaults
    form[0].reset();
});
		</script>

		<script>
            $(document).ready(function() {
                $('.f1-device').on('change', function() {
                    var device = this.value;

                 // alert(Desktop);
                    $.ajax({
                        url: "get-desktop.php",
                        type: "POST",
                        data: {
                            device: device
                        },
                        cache: false,
                        success: function(result) {
                            $("#getdatabs").html(result);
                        }
                    });
                });
            });
        </script>



    </body>

</html>