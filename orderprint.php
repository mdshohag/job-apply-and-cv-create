<?php

require_once('admin/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("admin/$classname.class.php");
	}
	$cls_dbconfig = new cls_dbconfig();
	$db = $cls_dbconfig->connection();
	

	$orderid = htmlspecialchars($_REQUEST['aa'], ENT_QUOTES, 'UTF-8');
    //$orderid = $_GET['orderid'];
	
	
	 $sql = $db->query("select * from tbl_apply where rand='$orderid'");
	
    $order_r = $sql->fetch_assoc();
	
  	 
	// mysqli_query($connect,$sql); 
?>
<html lang="en">

<meta charset="utf-8">
<style type="text/css">
<head>
body{
background-color:;
}
.tr_f{ color:#fff; font-size:12px; text-transform:uppercase !important;}
#printableArea{
margin: 0 auto;

}
table{

}
</style>
 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
   <script src="https://docraptor.com/docraptor-1.0.0.js"></script>
<script>

   $("#btnPrint").live("click", function () {
            var divContents = $("#printableArea").html();
            var printWindow = window.open('', '', 'height=400,width=800');
            printWindow.document.write('<html><head><title>DIV Contents</title>');
            printWindow.document.write('</head><body >');
            printWindow.document.write(divContents);
            printWindow.document.write('</body></html>');
            printWindow.document.close();
            printWindow.print();
        });
		 var downloadPDF = function() {
      DocRaptor.createAndDownloadDoc("#printableArea", {
        test: true, // test documents are free, but watermarked
        type: "pdf",
        document_content: document.querySelector('html').innerHTML, // use this page's HTML
        // document_content: "<h1>Hello world!</h1>",               // or supply HTML directly
        // document_url: "http://example.com/your-page",            // or use a URL
        // javascript: true,                                        // enable JavaScript processing
        // prince_options: {
        //   media: "screen",                                       // use screen styles instead of print styles
        // }
      })
    }
</script>
</head>
    <body>
	<div id="printableArea">
<table width="740" border="1" align="center" cellpadding="0" cellspacing="0" class="shawdow">
 <input type="hidden" id="refreshed" value="no">
  <tr>
  
    <td align="center" valign="middle">
	
    <table width="695" border="0" cellspacing="0" cellpadding="0" style="background:#ccc;">
  
  <tr>
    <br>
    <td height="27" align="left" valign="middle" bgcolor="#FFFFFF">Date		: <?php echo  $order_r['date']; ?></td>
    </tr>
  
  <tr>
    <td height="27" align="left" valign="middle" bgcolor="#FFFFFF">Applicant SL No	: <?php echo $order_r['serial']; ?></td>
    </tr>
  <tr>
    <td height="47" align="left" valign="middle" bgcolor="#FFFFFF">Dear <?php echo $order_r['name']; ?>,</td>
    </tr> <tr>
    <td height="97" align="left" valign="middle" bgcolor="#FFFFFF"><p>Thank You very much for your application and interest on the Position. We are in process to short list of the applications. We will communicate you shortly if your application is short listed.</p>
<p>Your serial number of this application is <?php echo $order_r['serial']; ?>, Please preserve it for further communication.</p>

 </td> 
    </tr>
	
</table>

</td>
  </tr>
</table><br><br>
</div>
<div id="editor"></div>
<table width="695" border="0" cellspacing="0" cellpadding="0" style="background:#ccc;">
 
	<tr>
		<td height="47" align="right" valign="middle" bgcolor="#FFFFFF"><button id="btnPrint">Print</button>&nbsp;&nbsp;&nbsp;&nbsp;    <button id="cmd">Save</button></td>
		
	</tr>
</table>

    

<!--Add External Libraries - JQuery and jspdf-->
<script src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
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
        'width': 170,
            'elementHandlers': specialElementHandlers
    });
    doc.save('Apdmit.pdf');
});
</script>
<body>
</html>