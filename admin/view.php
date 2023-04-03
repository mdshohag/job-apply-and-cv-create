<?php 
include('header.php');

	$id = $_GET['view_id'];
	
	$cv = $cls_meassage->show_cv($id);
	$data = $cv->fetch_assoc();

 ?>

 
			<!-- END NAVBAR -->
			<!-- MAIN CONTENT -->
			 <div class="main-content">
				<div class="container-fluid">
					
					<div class="panel panel-headlines">
						
						<div class="panel-body">
							<div class="row">
								<div class="col-md-12">
								<h3 class="panel-title"><input type="button" class="btn btn-danger" onclick="printDiv('printableArea')" value="PRINT" /><!--&nbsp;&nbsp;&nbsp;&nbsp;    <button type="button" class="btn btn-danger" id="cmd">PDF Save</button>--></h3><br>
								<div id="printableArea" style="margin:0 auto width:1000px;background-color:white;">
									<ul class="notification" style="margin-top:10px;width:970px;background-color:white;">
									
									<table>
											<tr>
												<td style="width:320px;">CV ID:&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $data['serial']; ?><br>
													Name:&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $data['name']; ?><br>
													Mobile number:&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $data['moblie']; ?> 
												</td>
												<td style="width:418px;"></td>
												<td><img src="../upload/<?php echo $data['certificate']; ?>" alt="img" height="170" width="180"/></td>
											</tr>
											
									</table><br><br>
									<table class="table table-bordered" style="margin-right:20px;">
										<tr>
											<td width="360">Name</td>
											<td><?php echo $data['name']; ?></td>
										</tr>
										<tr>
											<td>Cell number</td>
											<td><?php echo $data['moblie']; ?></td>
										</tr>
										<tr>
											<td>Email address</td>
											<td><?php echo $data['email']; ?></td>
										</tr>
										<tr>
											<td>Detail address</td>
											<td><?php echo $data['contact_address']; ?></td>
										</tr>
										<tr>
											<td>National ID No.</td>
											<td><?php echo $data['national_id']; ?></td>
										</tr>
										<tr>
											<td>Education (highest degree)</td>
											<td><?php echo $data['edication']; ?></td>
										</tr>
										<tr>
											<td>Years of experience in similar position</td>
											<td><?php echo $data['experince']; ?></td>
										</tr>
										<tr>
											<td>Major tasks you are performing in present organization (last one year)</td>
											<td><?php echo $data['major_task']; ?></td>
										</tr>
										<tr>
											<td>Skill</td>
											<td><?php echo $data['skill']; ?></td>
										</tr>
										<tr>
											<td colspan="2"><center>Employment/Experiences</center></td>
											
										</tr>
										<tr>
											<td rowspan="6">
											<br>
											<br>
											<br>
											Last employer name
											</td>
											
										</tr>
										<tr>
											<td><?php echo $data['caddress']; ?></td>
											
										</tr>
										<tr>
											<td><?php echo $data['cphone']; ?></td>
										</tr>
										<tr>
											<td><?php echo $data['cemail']; ?></td>
											
										</tr>
										<tr>
											<td><?php echo $data['job_title']; ?></td>
											
										</tr>
										<tr>
											<td><?php echo $data['responsibility']; ?></td>
											
										</tr>
										<tr>
											<td rowspan="6">
											<br>
											<br>
											<br>
											Past employer name
											</td>
											
										</tr>
										<tr>
											<td><?php echo $data['pcaddress']; ?></td>
											
										</tr>
										<tr>
											<td><?php echo $data['pcphone']; ?></td>
										</tr>
										<tr>
											<td><?php echo $data['pcemail']; ?></td>
											
										</tr>
										<tr>
											<td><?php echo $data['pjob_title']; ?></td>
											
										</tr>
										<tr>
											<td><?php echo $data['presponsibility']; ?></td>
											
										</tr>
										
										<tr>
											<td>Typing skill</td>
											<td>English: <?php echo $data['english']; ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      Bangla: <?php echo $data['bangla']; ?> </td>
										
										</tr>
										<tr>
											<td>Computer literacy</td>
											<td><?php echo $data['computer_skill']; ?></td>
										</tr>
										<tr>
											<td>
											<br>
											<br>
											Referee 1
											</td>
											<td>Name: <?php echo $data['re_name']; ?><br>
												Organization: <?php echo $data['re_organization']; ?><br>
												Designation: <?php echo $data['re_designation']; ?><br>
												Mobile: <?php echo $data['re_mobile']; ?>	<br>
												E-mail: <?php echo $data['re_email']; ?>
											</td>
										</tr>
										<tr>
											<td>
											<br>
											<br>
											Referee 2
											</td>
											<td>Name: <?php echo $data['re_names']; ?><br>
												Organization: <?php echo $data['re_organizations']; ?><br>
												Designation: <?php echo $data['re_designations']; ?><br>
												Mobile: <?php echo $data['re_mobiles']; ?>	<br>
												E-mail: <?php echo $data['re_emails']; ?>
											</td>
										</tr>
										<tr>
											<td>Present gross monthly salary</td>
											<td><?php echo $data['present_salary']; ?></td>
										</tr>
										<tr>
											<td>Your expected monthly gross salary</td>
											<td><?php echo $data['expected_salary']; ?></td>
										</tr>
										<tr>
											<td>Possible joining date</td>
											<td><?php echo $data['joining_date']; ?></td>
										</tr>
									</table>
									</ul>
								</div>
								</div>
							</div>
						</div>
					</div>				
				</div>
			</div>
			<!-- END MAIN CONTENT -->
			
<?php include('footer.php'); ?>