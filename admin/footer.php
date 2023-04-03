<footer>
				<div class="container-fluid">
					<p class="copyright">&copy; 2017.</p>
				</div>
			</footer>
		</div>
		<!-- END MAIN -->
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="assets/js/jquery/jquery-2.1.0.min.js"></script>
	<script src="assets/js/bootstrap/bootstrap.min.js"></script>
	<script src="assets/js/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/js/plugins/jquery-easypiechart/jquery.easypiechart.min.js"></script>
	<script src="assets/js/plugins/chartist/chartist.min.js"></script>
	<script src="assets/js/klorofil.min.js"></script>
	
	<script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="vendor/datatables-responsive/dataTables.responsive.js"></script>
	
	<script src="alert/alertify.min.js"></script>
	<!--Add External Libraries - JQuery and jspdf-->
	
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/0.9.0rc1/jspdf.min.js"></script>

<script type="text/javascript">

var doc = new jsPDF();
var specialElementHandlers = {
    '#editor': function (element, renderer) {
        return true;
    }
};

$('#cmd').click(function () {   
    doc.fromHTML($('#printableArea').html(), 15, 15, {
        'width': 1070,
            'elementHandlers': specialElementHandlers
    });
    doc.save('cv.pdf');
});
</script>

<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>
	<script>
    $(document).ready(function() {
        $('#dataTables-inbox').DataTable({
            responsive: true
        });
    });
    </script>

	<script>
	$(function(){
		$("#signouts").click(function(e){
			e.preventDefault();
			//alert('ok');
			$.ajax({
				type:'post',
				url:'signout.php',
				success:function(res){
					//alert(res);
					if(res == '1'){
						location.href='index.php';
					}else{
						alertify.error('Error on Logout');
					}
				}
			})
		});
	})
	</script>
	<script>
function goBack() {
    window.history.go(-1);
}
</script>
	<script type="text/javascript"> 
		$(".message_delete").click(function(){
			var root_id=$(this).attr('message_id');
			//alert(root_id);
			//return false;
			var confirm = alertify.confirm('Are you sure want to delete.').set('onok', function(closeEvent){  
				//alertify.alert(root_id);
			 var dataString ='message='+root_id;
			 
			 $.ajax({
			  type:"post",
			  url:"message_delete.php",
			  data:dataString,
			  success:function(res){
				location.href='inbox.php';
			  }
			  ,error:function(){
			   alert('Error on Ajax');
			  }
			  	  
			 });

		   });
			 confirm.set({'title':'Message'});
		});
	</script>
	
</body>

</html>