<?php include('header.php');

	
	
	

 ?>

 
			<!-- END NAVBAR -->
			<!-- MAIN CONTENT -->
			 <div class="main-content">
				<div class="container-fluid">
					
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Dashboard</h3>
							<p class="panel-subtitle">
							
							<form method="post" action="inbox.php" align="center">  
								<input type="submit" name="export" value="CSV Export" class="btn btn-success" />  
							</form> 
							</p>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-12">
									
									 <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th><center>Applicant ID </center></th>
										<th><center>Name</center></th>
										<th><center>Cell Number</center></th>
										<th><center>Email</center></th>
										<th><center>Education</center></th>
										<!--<th><center>Photo</center></th>-->
										<th><center>Experience</center></th>
										<th><center>Apply Date</center></th>
										<th><center>Action</center></th>
										
                                    </tr>
                                </thead>
                                <tbody>
								<?php

									while($messageview = $all_message->fetch_assoc()){

									?>
										<tr>
									
										<td><center><?php echo $messageview['serial']; ?></center></td>
										<td><center><?php echo $messageview['name']; ?></center></td>
										<td><center><?php echo $messageview['moblie']; ?></center></td>
										<td><center><?php echo $messageview['email']; ?></center></td>
										<td><center><?php echo $messageview['edication']; ?></center></td>
										<!--<td><center><img src="../upload/</?php echo $messageview['certificate']; ?>" height="50" width="100">
										
										</center></td>-->
										<td><center><?php echo $messageview['experince']; ?></center></td>
										
										<td><center><?php echo $messageview['date']; ?></center></td>
										<td><center><a href="view.php?view_id=<?php echo $messageview['serial']; ?>" class="btn btn-primary">VIEW</a></center></td>
										
									  </tr>
									
									<?php

										}
											
									?>
                                </tbody>
                            </table>
									
									
									
								</div>
							</div>
						</div>
					</div>				
				</div>
			</div>
			<!-- END MAIN CONTENT -->
			
<?php include('footer.php'); ?>