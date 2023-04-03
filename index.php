<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
        <title>Job Apply</title>

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
              <?php
		 require_once('admin/cls_dbconfig.php');
			function __autoload($classname){
			  require_once("$classname.class.php");
			}
		$cls_dbconfig = new cls_dbconfig();
		$connect = $cls_dbconfig->connection();
		
		//$connect = mysqli_connect("localhost", "root", "", "jobapply");


		$last_id= "SELECT id FROM `tbl_apply` ORDER BY id DESC LIMIT 0 , 1" ;
		$result = mysqli_query($connect, $last_id); 
	  
		$row = $result->fetch_assoc();
		$id =  $row['id'];
          if(isset($_POST["submit"]))
          {
		  
		  $name 		= $connect->real_escape_string($_POST['name']);
		  $cell_number 		= $connect->real_escape_string($_POST['cell_number']);
		  $f1_email 		= $connect->real_escape_string($_POST['f1-email']);
		  $f1_nid 		= $connect->real_escape_string($_POST['f1_nid']);
		  $education 		= $connect->real_escape_string($_POST['education']);
		  $experience 		= $connect->real_escape_string($_POST['experience']);
		  $skill 		= $connect->real_escape_string($_POST['skill']);
		  $caddress 		= $connect->real_escape_string($_POST['caddress']);
		  $cphone 		= $connect->real_escape_string($_POST['cphone']);
		  $cemail 		= $connect->real_escape_string($_POST['cemail']);
		  $job_title 		= $connect->real_escape_string($_POST['job_title']);
		  $responsibility 		= $connect->real_escape_string($_POST['responsibility']);
		  $pcaddress 		= $connect->real_escape_string($_POST['pcaddress']);
		  $pcphone 		= $connect->real_escape_string($_POST['pcphone']);
		  $pcemail 		= $connect->real_escape_string($_POST['pcemail']);
		  $pjob_title 		= $connect->real_escape_string($_POST['pjob_title']);
		  $presponsibility 		= $connect->real_escape_string($_POST['presponsibility']);
		  $english 		= $connect->real_escape_string($_POST['english']);
		  $bangla 		= $connect->real_escape_string($_POST['bangla']);
		  $re_name 		= $connect->real_escape_string($_POST['re_name']);
		  $re_organization 		= $connect->real_escape_string($_POST['re_organization']);
		  $re_designation 		= $connect->real_escape_string($_POST['re_designation']);
		  $re_mobile 		= $connect->real_escape_string($_POST['re_mobile']);
		  $re_email 		= $connect->real_escape_string($_POST['re_email']);
		   $re_names 		= $connect->real_escape_string($_POST['re_names']);
		  $re_organizations 		= $connect->real_escape_string($_POST['re_organizations']);
		  $re_designations 		= $connect->real_escape_string($_POST['re_designations']);
		  $re_mobiles 		= $connect->real_escape_string($_POST['re_mobiles']);
		  $re_emails 		= $connect->real_escape_string($_POST['re_emails']);
		  $psalary 		= $connect->real_escape_string($_POST['psalary']);
		  $expected_salary 		= $connect->real_escape_string($_POST['expected_salary']);
		  $joindate 		= $connect->real_escape_string($_POST['joindate']);
		  $yourself 		= $connect->real_escape_string($_POST['yourself']);
		  
		 $crti = $_FILES["f1-file"]["tmp_name"];
		 if($crti != ""){
			$randd = rand('11111','99999');
			$n = "$randd.jpg";
			$destination = "upload/$n";
			move_uploaded_file($crti,$destination);
		 }
		 
		 /* $img = $_FILES["file"]["tmp_name"];
		 if($img != ""){
			$randd = rand('11111','99999');
			$file = "$randd.jpg";
			$destination = "pic/$file";
			move_uploaded_file($img,$destination);
			}
			*/
		// $cv = $_FILES["cv"]["tmp_name"];
		 
			
			//$destinations = "cv/$cv";
			//move_uploaded_file($cv,$destinations);
		 
		 
		/* $target_path = "cv/";

	$ext = pathinfo(basename($_FILES['file']['name']), PATHINFO_EXTENSION);
	$file = rand(1000,100000)."-".$_FILES['file']['name'];

	//$target_path = $target_path . $_FILES['uploadedfile']['name'];

	$target_path = $target_path . $file;

	move_uploaded_file($_FILES['file']['tmp_name'], $target_path);
	*/
	
	
		 
		  $rand = rand('1111','9999');
		 echo $for_query = '';
		 echo $for_querys = '';
		 echo $for_queryss = '';
           if(!empty($_POST["mjt"] || $_POST["computerskill"] ))
		 //  if( $_POST['deployment']=='' || $_POST['employe_nb']=='' || $_POST['location']=='')
           {
            foreach($_POST["mjt"] as $mjt)
            {
             $for_query .= $mjt . '. ';
            } 
			/*|| $_POST["absoft"] 
			foreach($_POST["absoft"] as $absoft)
            {
             $for_querys .= $absoft . '. ';
            }*/
			foreach($_POST["computerskill"] as $computerskill)
            {
             $for_queryss .= $computerskill . '. ';
            }
            $for_query = substr($for_query, 0, -2);
           /* $for_querys = substr($for_querys, 0, -2);*/
            $for_queryss = substr($for_queryss, 0, -2);
			
			$todate = date("d-m-Y");
			
            $query = "INSERT INTO tbl_apply (serial,name,moblie,email,national_id,edication,certificate,experince,major_task,caddress, cphone,cemail,job_title,responsibility,pcaddress,pcphone,pcemail,pjob_title, presponsibility, skill,english,bangla,computer_skill,re_name,re_organization,re_designation,re_mobile,re_email,re_names,re_organizations,re_designations,re_mobiles,re_emails,present_salary,expected_salary,joining_date,contact_address,date,rand) VALUES ('170$id','$name','$cell_number','$f1_email','$f1_nid','$education ','$n','$experience','$for_query','$caddress', '$cphone','$cemail','$job_title','$responsibility','$pcaddress','$pcphone','$pcemail','$pjob_title', '$presponsibility', '$skill','$english','$bangla','$for_queryss','$re_name','$re_organization','$re_designation','$re_mobile','$re_email','$re_names','$re_organizations','$re_designations','$re_mobiles','$re_emails','$psalary','$expected_salary','$joindate','$yourself','$todate','$rand')";
            if(mysqli_query($connect, $query))
            {
			echo ('<SCRIPT LANGUAGE="JavaScript">
			window.alert("Form submission successfully")
			window.location.href="orderprint.php?aa=' . $rand . '";
			</SCRIPT>');
			
				echo '<a href="orderprint.php?aa=' . $rand . '">Save and Print Admit Card</a>';
              	
			
            }
			else{
			echo ('<SCRIPT LANGUAGE="JavaScript">
			window.alert("Your email is already use")
			</SCRIPT>');
			}
           }
           else
           {
            echo "<label class='text-danger'>* Please Select Atleast one Programming language</label>";
           }
          }
		  
	  
	  ?>
	 
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
                    <div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2 form-box">
					<!--thankyou.php?aa=<?php //echo $_SESSION[$rand] ; ?> -->
					 <!-- Trigger the modal with a button -->
                    	<form role="form" id="multiphase" enctype="multipart/form-data" action="" method="post" class="f1">

                    		<h3>Job Application</h3>
                   
                    		<div class="f1-steps">
                    			<div class="f1-progress">
                    			    <div class="f1-progress-line" data-now-value="18.66" data-number-of-steps="4" style="width: 18.66%;"></div>
                    			</div>
                    			<div class="f1-step active">
                    				<div class="f1-step-icon"><i class="fa fa-user"></i></div>
                    				<p>General </p>
                    			</div>
                    			<div class="f1-step">
                    				<div class="f1-step-icon"><i class="fa fa-user"></i></div>
                    				<p>Experience</p>
                    			</div>
								<div class="f1-step">
                    				<div class="f1-step-icon"><i class="fa fa-user"></i></div>
                    				<p>Employment</p>
                    			</div>
                    		    <div class="f1-step">
                    				<div class="f1-step-icon"><i class="fa fa-user"></i></div>
                    				<p>Computer Skill</p>
                    			</div> 
								<div class="f1-step">
                    				<div class="f1-step-icon"><i class="fa fa-user"></i></div>
                    				<p>Reference</p>
                    			</div>
								<div class="f1-step">
                    				<div class="f1-step-icon"><i class="fa fa-user"></i></div>
                    				<p>Detail</p>
                    			</div>
                    		</div>
                    		
                    		<fieldset>
                    		
                    			<div class="form-group">
                    			    <label  for="name">Name</label>
                                    <input type="text" name="name" placeholder="Enter name..." class="f1-first-name form-control" id="f1-first-name">
                                </div>
                                <div class="form-group">
                                    <label for="cell_number">Cell Number</label>
                                    <input type="text" name="cell_number" placeholder="+880" class="f1-last-name form-control" id="f1-last-name">
                                </div>
								<div class="form-group">
                                    <label for="f1-email">Email Address</label>
                                    <input type="email" style="height:44px;" name="f1-email" placeholder="Email..." class="f1-email form-control" id="f1-email">
                                </div>
								 <div class="form-group">
                                    <label for="f1-about-yourself">Detail contact address</label>
                                    <textarea name="yourself" placeholder="Contact address..." class="f1-about-yourself form-control" id="f1-about-yourself"></textarea>
                                </div>
								<div class="form-group">
                                    <label for="f1-nation">National ID No</label>
                                    <input type="text" name="f1_nid" placeholder="NID..." class="f1-nid form-control" id="f1-nid">
                                </div>
								
								 <div class="form-group"><br>
								   <label> Upload your photo (PP size):</label>
									<input type="file" name="f1-file" id="f1-file" required="">
                                </div>
								
                                <div class="f1-buttons">
                                    <button type="button" class="btn btn-next">Next</button>
                                </div>
                            </fieldset>

                            <fieldset>
                                <h4></h4>
                                <div class="form-group">
                                     <label name="cell_number" for="sel1">Education (highest degree)</label>
									  <select class="f1-last-name form-control" name="education" id="f1-last-name" onchange="showDivp(this)">
										<option class="hid" value="">Select One</option>
										<option class="show" value="HSC">HSC (Commerce)</option>
										<option class="show" value="B.Com">B.Com</option>
										<option class="show" value="BBA">BBA</option>
										<option value="none">None</option>
									  </select>
								
                                </div>
                               <div class="form-group">
                                    <label for="f1-email">Year of Experience in Similar Position</label>
                                    <select class="f1-last-name form-control" name="experience" id="f1-last-name" onchange="showDivps(this)">
											<option value="">Select One</option>
											<option value="2 Years">02 Years</option>
											<option value="3 Years">03 Years</option>
											<option value="4 Years">04 Years</option>
											<option value="5 Years">05 Years</option>
											<option value="nonee">None</option>
									  </select>
                                </div>
                                <div class="form-group">
								<div id="major-field">
                                    <label for="f1-password">Major tasks you performing in present 
organization (last one year)</label><br>
                                   <div class="table">
									<table>
										<tr>
											<td> <label> Prepare payment statement </label></td>
											<td style="padding-left:20px;"><input type="checkbox" name="mjt[]" value=" Prepare payment statement Yes"> Yes</td>
											<!--<td style="padding-left:10px;"><input type="checkbox" name="mjt[]" value="Prepare payment statement No"> No</td>-->
										</tr>
										<tr>
											<td> <label> Book
keeping </label></td>
											<td style="padding-left:20px;"><input type="checkbox" name="mjt[]" value="Book Keeping Yes"> Yes</td>
											<!--<td style="padding-left:10px;"><input type="checkbox" name="mjt[]" value="Book Keeping No"> No</td>-->
										</tr>
										<tr>
											<td> <label> Bill/voucher checking </label></td>
											<td style="padding-left:20px;"><input type="checkbox" name="mjt[]" value="Bill Checking Yes"> Yes</td>
											<!--<td style="padding-left:10px;"><input type="checkbox" name="mjt[]" value="Bill Checking No"> No</td>-->
										</tr>
										<tr>
											<td> <label> Bill/
v
oucher 
posting </label></td>
											<td style="padding-left:20px;"><input type="checkbox" name="mjt[]" value="Vouchers Posting Yes"> Yes</td>
										<!--	<td style="padding-left:10px;"><input type="checkbox" name="mjt[]" value="Vouchers Posting No"> No</td>-->
										</tr>
										<tr>
											<td> <label> Processi
ng of 
bill/voucher </label></td>
											<td style="padding-left:20px;"><input type="checkbox" name="mjt[]" value="Processing of Bill Yes"> Yes</td>
										<!--	<td style="padding-left:10px;"><input type="checkbox" name="mjt[]" value="Processing of Bill No"> No</td>-->
										</tr><tr>
											<td> <label> Petty 
cash </label></td>
											<td style="padding-left:20px;"><input type="checkbox" name="mjt[]" value="Petty Cash Yes"> Yes</td>
										<!--	<td style="padding-left:10px;"><input type="checkbox" name="mjt[]" value="Petty Cash No"> No</td>-->
										</tr><tr>
											<td> <label> Inventory/stock 
register </label></td>
											<td style="padding-left:20px;"><input type="checkbox" name="mjt[]" value="Inventory Yes"> Yes</td>
										<!--	<td style="padding-left:10px;"><input type="checkbox" name="mjt[]" value="Inventory No"> No</td>-->
										</tr><tr>
											<td> <label> Purchasing/procure
ment </label></td>
											<td style="padding-left:20px;"><input type="checkbox" name="mjt[]" value="Purchasing Yes"> Yes</td>
											<!--<td style="padding-left:10px;"><input type="checkbox" name="mjt[]" value="Purchasing No"> No</td>-->
										</tr><tr>
											<td> <label> None of the above  </label></td>
											<td style="padding-left:20px;"><input type="checkbox" class="none_value" value="none"></td>
											<!--<td style="padding-left:10px;"></td>-->
										</tr>
									</table>
                                  </div>
                                </div> 
                                </div> 
								
								<!--<div class="form-group">
								<div id="account-field">
                                    <label for="f1-password">Experience on the using of accounting software</label>
									<br>
                                     <div class="table">
									<table>
										<tr>
											<td> <label> Tally </label></td>
											<td style="padding-left:30px;"><input type="checkbox" name="absoft[]" value="Tally Expert"> Expert</td>
											<td style="padding-left:20px;"><input type="checkbox" name="absoft[]" value="Tally Beginner"> Beginner</td>
										</tr>
										<tr>
											<td> <label> Quick Book </label></td>
											<td style="padding-left:30px;"><input type="checkbox" name="absoft[]" value="Quick Book Expert"> Expert</td>
											<td style="padding-left:20px;"><input type="checkbox" name="absoft[]" value="Quick Book Beginner"> Beginner</td>
										</tr>
										<tr>
											<td> <label> Quicken </label></td>
											<td style="padding-left:30px;"><input type="checkbox" name="absoft[]" value="Quicken Expert"> Expert</td>
											<td style="padding-left:20px;"><input type="checkbox" name="absoft[]" value="Quicken Beginner"> Beginner</td>
										</tr>
										<tr>
											<td> <label> Others </label></td>
											<td style="padding-left:30px;"><input type="checkbox" name="absoft[]" value="Others Expert"> Expert</td>
											<td style="padding-left:20px;"><input type="checkbox" name="absoft[]" value="Others Beginner"> Beginner</td>
										</tr>
										<tr>
											<td> <label> None </label></td>
											<td style="padding-left:30px;"><input type="checkbox" name="absoft[]" value="none"> </td>
											<td style="padding-left:20px;"></td>
										</tr>
									</table>
								   </div>
									
                                </div>
                               </div>--->
                                <div class="form-group">
                                    <label for="f1-skill">Skill</label>
                                    <textarea name="skill" placeholder="Enter Skill..." class="f1-about-yourself form-control" id="f1-skill" rows="3"></textarea>
                                </div>
                                <div class="f1-buttons">
                                    <button type="button" class="btn btn-previous">Previous</button>
                                    <button type="button" class="btn btn-nextd btn-nexts">Next</button>
                                </div>
                            </fieldset> 
							<fieldset>
                                <center><h4>Employment/Experiences</h4> </center>
								<table width="100%">
								<tr>
								<td style="width:50%;">
								
								<div class="form-group">
                                    <label for="f1-last">Last employer name</label><br>
									<label for="f1-last"> Company address</label>
                                   <input type="text" style="height:44px;" name="caddress" placeholder="Enter Company address..." class="f1-caddress form-control" id="f1-caddress">
                                </div>
								<div class="form-group">
									<label for="f1-last">Tele/cell phone</label>
                                   <input type="text" style="height:44px;" name="cphone" placeholder="Enter Company Tele/cell phone..." class="re_name2 form-control" id="f1-cphone">
                                </div>
								<div class="form-group">
									<label for="f1-last">Email:</label>
                                   <input type="email" style="height:44px;" name="cemail" placeholder="Enter Company Email..." class="re_name2 form-control" id="f1-cemail">
                                </div>
								<div class="form-group">
									<label for="f1-last">Job title you hold:</label>
                                   <input type="text" style="height:44px;" name="job_title" placeholder="Enter Job title..." class="f1-job_title form-control" id="f1-job_title">
                                </div>
								<div class="form-group">
									<label for="f1-last">Key responsibility:</label>
                                   <input type="text" style="height:44px;" name="responsibility" placeholder="Enter Key responsibility..." class="f1-responsibility form-control" id="f1-responsibility">
                                </div>
								
								</td>
								<td style="width:15px;">
								</td>
								<td>
									
									<div class="form-group">
                                    <label for="f1-last">Past employer name</label><br>
									<label for="f1-last"> Company address</label>
                                   <input type="" style="height:44px;" name="pcaddress" placeholder="Enter Company address..." class="f1-pcaddress form-control" id="f1-pcaddress">
                                </div>
								<div class="form-group">
									<label for="f1-last">Tele/cell phone</label>
                                   <input type="" style="height:44px;" name="pcphone" placeholder="Enter Company Tele/cell phone..." class="re_name2 form-control" id="f1-pcphone">
                                </div>
								<div class="form-group">
									<label for="f1-last">Email:</label>
                                   <input type="" style="height:44px;" name="pcemail" placeholder="Enter Company Email..." class="re_name2 form-control" id="pf1-cemail">
                                </div>
								<div class="form-group">
									<label for="f1-last">Job title you hold:</label>
                                   <input type="" style="height:44px;" name="pjob_title" placeholder="Enter Job title..." class="f1-pjob_title form-control" id="f1-pjob_title">
                                </div>
								<div class="form-group">
									<label for="f1-last">Key responsibility:</label>
                                   <input type="" style="height:44px;" name="presponsibility" placeholder="Enter Key responsibility..." class="f1-presponsibility form-control" id="f1-presponsibility">
                                </div>
									
								</td>
								</tr>
								</table>
								
                               
                                <div class="f1-buttons">
                                    <button type="button" class="btn btn-previous">Previous</button>
                                    <button type="button" class="btn btn-nextd btn-nexts">Next</button>
                                </div>
                            </fieldset> 
							<fieldset>
                               
                                <div class="form-group">
                                    <label for="f1-email">Typing skill</label><br>
                                   
                                    <input type="text" name="english" placeholder="english-----words/min" class="f1-email form-control" id="f1-email"><br> 
									
                                    <input type="" style="height:44px;" name="bangla" placeholder="bangla-----words/min" class="f1-bangla form-control" id="f1-bangla">
									<div class="table">
									<table>
										<tr>
											<td> <label> None </label></td>
											<td style="padding-left:96px;"><input type="checkbox" class="none_value" value="none"></td>
											
										</tr>
										
									</table>
									
									
                                </div>
                                </div>
                               <div class="form-group">
							   <div id="computer-field">
                                    <label for="f1-password">Computer literacy</label>
									<br>
                                    <div class="table">
									<table>
										<tr>
											<td> <label> MS Word </label></td>
											<td style="padding-left:30px;"><input type="checkbox" name="computerskill[]" value="MS Word Expert"> Expert</td>
											<td style="padding-left:20px;"><input type="checkbox" name="computerskill[]" value="MS Word Beginner"> Beginner</td>
										</tr>
										<tr>
											<td> <label> Excel </label></td>
											<td style="padding-left:30px;"><input type="checkbox" name="computerskill[]" value="Excel Expert"> Expert</td>
											<td style="padding-left:20px;"><input type="checkbox" name="computerskill[]" value="Excel Beginner"> Beginner</td>
										</tr>
										<tr>
											<td> <label> PowerPoint </label></td>
											<td style="padding-left:30px;"><input type="checkbox" name="computerskill[]" value="PowerPoint Expert"> Expert</td>
											<td style="padding-left:20px;"><input type="checkbox" name="computerskill[]" value="PowerPoint Beginner"> Beginner</td>
										</tr>	
										<tr>
											<td> <label> Outlook/Email </label></td>
											<td style="padding-left:30px;"><input type="checkbox" name="computerskill[]" value="Outlook/Email Expert"> Expert</td>
											<td style="padding-left:20px;"><input type="checkbox" name="computerskill[]" value="Outlook/Email Beginner"> Beginner</td>
										</tr>
										<tr>
											<td> <label> Photoshop </label></td>
											<td style="padding-left:30px;"><input type="checkbox" name="computerskill[]" value="Photoshop Expert"> Expert</td>
											<td style="padding-left:20px;"><input type="checkbox" name="computerskill[]" value="Photoshop Beginner"> Beginner</td>
										</tr>
										<tr>
											<td><label> None of above </label> </td>
											<td style="padding-left:30px;"><input type="checkbox" class="none_value" value="none"> </td>
											<td style="padding-left:20px"></td>
										</tr>
									</table>
									</div>
                                 
									
                                </div>
                                </div>
                                <div class="f1-buttons">
                                    <button type="button" class="btn btn-previous">Previous</button>
                                    <button type="button" class="btn btn-nextss">Next</button>
                                </div>
                            </fieldset>
							<fieldset>
                               
							   <table width="100%">
								<tr>
								<td style="width:50%;">
								<div class="form-group">
                                    <label for="f1-about-referee">Reference 1</label><br>
									<label for="re_name">Name </label>
                                    <input type="text" name="re_name" placeholder="Name..." class="re_name form-control" id="f1-re_name">
									<label for="re_organization">Organization  </label>
                                    <input type="text" name="re_organization" placeholder="Organization..." class="re_name form-control" id="f1-re_organization">
									<label for="re_designation">Designation  </label>
                                    <input type="text" name="re_designation" placeholder="Designation..." class="re_name form-control" id="f1-re_designation">
									<label for="re_mobile">Mobile  </label>
                                    <input type="text" name="re_mobile" placeholder="Mobile..." class="re_name form-control" id="f1-re_mobile">
									<label for="re_email">Email  </label>
                                    <input type="text" name="re_email" placeholder="Email..." class="re_name form-control" id="f1-re_email">
                                </div>
								</td>
								<td style="width:15px;">
								</td>
								<td>
								 <div class="form-group">
                                    <label for="f1-about-referees">Reference 2</label><br>
                                   <label for="re_names">Name </label>
                                    <input type="text" name="re_names" placeholder="Name..." class="re_name2 form-control" id="f1-re_names">
									<label for="re_organizations">Organization  </label>
                                    <input type="text" name="re_organizations" placeholder="Organization..." class="re_name2 form-control" id="f1-re_organizations">
									<label for="re_Designation">Designation  </label>
                                    <input type="text" name="re_designations" placeholder="Designation..." class="re_name2 form-control" id="f1-re_designations">
									<label for="re_Mobile">Mobile  </label>
                                    <input type="text" name="re_mobiles" placeholder="Mobile..." class="re_name2 form-control" id="f1-re_mobiles">
									<label for="re_emails">Email  </label>
                                    <input type="text" name="re_emails" placeholder="Email..." class="re_name2 form-control" id="f1-re_emails">
                                </div>
								</td>
								</tr>
							</table>
                               
                                <div class="f1-buttons">
                                    <button type="button" class="btn btn-previous">Previous</button>
                                    <button type="button" class="btn btn-nextss">Next</button>
                                </div>
                            </fieldset>
                            <fieldset>
						
                                <div class="form-group">
                                    <label for="f1-facebook">Present gross monthly salary (include all benefits)(Tk.)</label>
                                    <input type="text" name="psalary" placeholder="Present Gross Salary..." class="f1-salary form-control" id="f1-salary">
                                </div>
								<div class="form-group">
                                    <label for="f1-facebook">Your expected monthly gross salary</label>
                                    <input type="text" name="expected_salary" placeholder="Present Expected Salary..." class="f1-salary form-control" id="f1-expected_salary">
                                </div>
                                <div class="form-group">
                                    <label for="f1-twitter">Possible joining date</label>
                                    <input type="text" name="joindate" placeholder="dd-mm-yyyy" class="f1-twitter form-control" id="f1-joindate">
                                </div>
								
                                <!--  <div class="form-group">
                                    <label for="f1-google-plus">Upload Your Photo</label>
                                  <input type="file" name="file" id="f1-google-plus">
                                </div>-->
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

    </body>

</html>