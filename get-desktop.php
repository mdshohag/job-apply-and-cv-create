<?php 
$device = $_POST["device"];

if($device=="Desktop"){ ?>


            <div class="form-group">
			<div id="major-field">
                <label for="f1-device">Desktop</label><br>
               <div class="table">
				<table>
					<tr>
						<td> <label>Provide a used Desktop if available</label></td>
						<td style="padding-left:20px;"><input type="radio" name="device_info" value="1"></td>
					</tr>
					<tr>
						<td> <label> Purchase a new Desktop</label></td>
						<td style="padding-left:20px;"><input type="radio" name="device_info" value="2"></td>
						
					</tr>
					<tr>
						<td> <label> For a new user</label></td>
						<td style="padding-left:20px;"><input type="checkbox" name="device_type" value="3"></td>
					</tr>
					<tr>
						<td> <label>Replacement for existing user</label></td>
						<td style="padding-left:20px;"><input type="radio" name="device_info" value="3"> </td>
					</tr>
					<tr>
						<td> <label> Reason </label></td>
						<td style="padding-left:20px;"><input type="radio" name="device_type" value="5"> User already resigned</td>
						<td style="padding-left:20px;"><input type="radio" name="device_type" value="6"> Other</td>
						<td style="padding-left:20px;">
							<textarea name="other" class="f1-other form-control" id="f1-other" rows="2"></textarea>
						</td>
					</tr>
				</table>
              </div>
            </div> 
            </div> 

			 <div class="form-group">
                <label for="f1-name-serial">Replaced equipment name & serial</label>
                <textarea name="name_serial" placeholder="Replaced equipment name & serial..." class="f1-name-serial form-control" id="f1-name-serial" rows="3"></textarea>
            </div>
 <?php }
      else{ ?>


 <div class="form-group">
			<div id="major-field">
                <label for="f1-device">Laptop</label><br>
               <div class="table">
				<table>
					<tr>
						<td> <label>Provide a used Laptop if available</label></td>
						<td style="padding-left:20px;"><input type="radio" name="device_info" value="7"></td>
					</tr>
					<tr>
						<td> <label> Purchase a new Laptop</label></td>
						<td style="padding-left:20px;"><input type="radio" name="device_info" value="8"></td>
						
					</tr>
					<tr>
						<td> <label> For a new user</label></td>
						<td style="padding-left:20px;"><input type="checkbox" name="device_type" value="9"></td>
					</tr>
					<tr>
						<td> <label>Replacement for existing user</label></td>
						<td style="padding-left:20px;"><input type="radio" name="device_info" value="10"> </td>
					</tr>
					<tr>
						<td> <label> Reason </label></td>
						<td style="padding-left:20px;"><input type="radio" name="device_type" value="11"> User already resigned</td>
						<td style="padding-left:20px;"><input type="radio" name="device_type" value="12"> Other</td>
						<td style="padding-left:20px;">
							<textarea name="other_device" class="f1-other form-control" id="f1-other" rows="2"></textarea>
						</td>
					</tr>
				</table>
              </div>
            </div> 
            </div> 

			 <div class="form-group">
                <label for="f1-name-serial">Replaced equipment name & serial</label>
                <textarea name="name_serial" placeholder="Replaced equipment name & serial..." class="f1-name-serial form-control" id="f1-name-serial" rows="3"></textarea>
            </div>


     <?php 	} ?>