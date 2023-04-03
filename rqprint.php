<!-- </?php

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
?> -->
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
            printWindow.document.write('<html><head><title></title>');
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
        <center><h2 style="margin-top: -5px;">Liz Fashion Industry Ltd. </h2></center>
        <center><h4 style="margin-top: -18px;">Request For IT Equipment & Service</h4></center>
<table width="794" border="1" align="center" cellpadding="0" cellspacing="0" class="shawdow">
   <tr>
  
    <td style="padding-left: 5px;">
     <table width="265" border="0" cellspacing="0" cellpadding="0">
  
  <tr>
    <td height="22"><b>Date:</b> 12-12-2022</td>
   </tr>
  
  <tr>
    <td height="22"><b>Reference No:</b> LH24233 </td>
    </tr>
  <tr>
    <td height="22"><b>Cost Center:</b> Liz Fashion Industry Ltd. </td>
    </tr>
      <tr>
      <td height="22"><b>Cost Depart:</b> Liz Fashion</td>
    </tr>
</table>
	 <hr style="margin-left: -7px;">
    <table border="0" cellspacing="0" cellpadding="0" style="">
  
    <tr>
        <td height="24"><b>Device & Equipment</b> </td>
    </tr>
    <tr>
        <td height="24"><b>Mouse:</b> Wireless</td>

    </tr>

    <tr>
        <td height="24"><b>Keyboard:</b> Wireless</td>
    </tr>
    <tr>
        <td height="24"><b>Monitor</b> Display Size: 21"</td>
    </tr>

    <tr>
        <td height="24"><b>Pen drive: </b> 16GB</td>
    </tr>

    <tr>
        <td height="24"><b>External HDD:</b> </td>
    </tr>

    <tr>
        <td height="24"><b>Laptop Bag:</b> </td>
    </tr>

    <tr>
        <td height="24"><b>Projector:</b> No</td>
    </tr>

    <tr>
        <td height="24"><b>Scanner:</b> No</td>
    </tr>

    <tr>
        <td height="24"><b>Photocopier</b></td>
    </tr> 

    <tr>
        <td height="24"><b>Camera</b></td>
    </tr>
    <tr>
        <td height="24"><b>Printer</b></td>
    </tr>

    <tr>
        <td height="24"><b>Other</b></td>
    </tr>
     <tr>
        <td height="24"><b>Brand:</b></td>
    </tr>
     <tr>
        <td height="24"><b>Model:</b></td>
    </tr>
	
</table>

<hr style="margin-left: -7px;">

<table border="0" cellspacing="0" cellpadding="0" style="">
  
    <tr>
        <td height="24"><b>IT Service</b> </td>
    </tr>
    <tr>
        <td height="24"><b>Create New Email</b> Yes</td>

    </tr>

    <tr>
        <td height="24"><b>Email group access</b> LDC</td>
    </tr>
    <tr>
        <td height="24"><b>Zoho workdrive access</b> Yes</td>
    </tr>

    <tr>
        <td height="24"><b>Create Domain Account</b> Yes</td>
    </tr>

    <tr>
        <td height="24"><b>Domain Account Like:</b> Test.Test</td>
    </tr>

    <tr>
        <td height="24"><b> Additional Access: </b></td>
    </tr>
    
</table> <br>
<hr style="margin-left: -7px;">

<table border="0" cellspacing="0" cellpadding="0" style="">
  
    <tr>
        <td height="110"></td>
    </tr>
    
    
</table>

</td>
    
    <td style="padding-left: 10px;">
      <table width="530" border="0" cellspacing="0" cellpadding="0">
      
        <tr>
            <td height="26"><b>Name: Md.Shohag Mia</td>
            <td height="26"><b>Employee ID: LH1962</td>
        </tr>
      
      <tr>
        <td height="26"><b>Designation:</b> Executive</td>
       
        <td height="26"><b>Department:</b> Information Technology</td>
        </tr>
         <tr>
            <td height="26"><b>User Section:</b> Application Development</td>
            <td height="26"><b>Contact Number:</b> 01534693816</td>
        </tr>
        <tr>
            <td height="26"><b>HR Approval:</b> </td>
            <td height="26"><b>Join Date:</b> </td>
        </tr>
    </table>
   <hr style="margin-left: -10px;">
    <table width="495" border="0" cellspacing="0" cellpadding="0" style="">
  
    <tr>
        <td height="23"><b>Desktop</b> </td>
    </tr>
  
  <tr>
    <td height="23"><input type="checkbox" checked>
    Provide a used Desktop if available</td>
    </tr>
  <tr>
    <td height="23"><input type="checkbox"> Purchase a new Desktop</td>
    </tr>
      <tr>
    <td height="23"><input type="checkbox"> For a new user</td>
    </tr>

    <tr>
        <td height="23"><input type="checkbox">Replacement for existing user</td>
    </tr>
    <tr>
        <td height="23"><input type="checkbox"> Replacement for existing user</td>
    </tr>

    <tr>
        <td height="23">Reason:  <input type="checkbox"> User already resigned </td>
        <td height="23" width="220"><input type="checkbox"> Other </td>
    </tr>
    <tr>
        <td height="23"> Replaced equipment name & serial: </td>
    </tr>
    
</table>
 <hr style="margin-left: -10px;">
   <table width="495" border="0" cellspacing="0" cellpadding="0" style="">
  
    <tr>
        <td height="23"><b>Laptop</b> </td>
    </tr>
  
  <tr>
    <td height="23"><input type="checkbox">
    Provide a used Laptop if available</td>
    </tr>
  <tr>
    <td height="23"><input type="checkbox"> Purchase a new Laptop</td>
    </tr>
      <tr>
    <td height="23"><input type="checkbox"> For a new user</td>
    </tr>

    <tr>
        <td height="23"><input type="checkbox">Replacement for existing user</td>
    </tr>
    <tr>
        <td height="23"><input type="checkbox"> Replacement for existing user</td>
    </tr>

    <tr>
        <td height="23">Reason:  <input type="checkbox"> User already resigned </td>
        <td height="23" width="220"><input type="checkbox"> Other </td>
    </tr>
    <tr>
        <td height="23"> Replaced equipment name & serial: </td>
    </tr>
    
</table> 
 <hr style="margin-left: -10px;">
  <table width="495" border="0" cellspacing="0" cellpadding="0" style="">
  
    <tr>
        <td height="23"><b>Authorized licensed software</b> </td>
    </tr>
    <tr>
        <td height="23"><b>Windows</b> Yes</td>
    </tr>
     <tr>
        <td height="23"><b>Adobe</b> No</td>
    </tr>
     <tr>
        <td height="23"><b>Anti-Virus</b> No</td>
    </tr>

     <tr>
        <td height="23"><b>Anti-Virus</b> Yes</td>
    </tr>
    <tr>
        <td height="23"><b>Other</b> </td>
    </tr>
    
</table> 
 <hr style="margin-left: -10px;">
  <table width="495" border="0" cellspacing="0" cellpadding="0" style="">
  
    <tr>
        <td height="23"><b>Printer</b> </td>
    </tr>
    <tr>
        <td height="23"><b>Network Printer as Liz Standard</b> </td>
    </tr>
     <tr>
        <td height="23"><b>Printer Type</b> Black/White</td>
    </tr>
     <tr>
        <td height="23"><b>Barcode Printer</b> No</td>
    </tr>
    
    </table> 
    </td>
  </tr>
</table><br>
<table width="820" border="1" align="center" cellpadding="0" cellspacing="0" class="shawdow">
   <tr>
        <td style="padding-left: 10px;" height="23"> </td>
         <td style="padding-left: 10px;" height="23"><b>Comment</b> </td>
          <td style="padding-left: 10px;" height="23"><b>Signature</b> </td>
    </tr>
     <tr>
        <td style="padding-left: 10px;" height="23"> Requester</td>
        <td style="padding-left: 10px;" height="23">Test data</td>
        <td style="padding-left: 10px;" height="23">sss </td>
    </tr>

     <tr>
        <td style="padding-left: 10px;" height="23"> Department Head</td>
        <td style="padding-left: 10px;" height="23">Test data</td>
        <td style="padding-left: 10px;" height="23">sss </td>
    </tr>

     <tr>
        <td style="padding-left: 10px;" height="23"> Store Status </td>
        <td style="padding-left: 10px;" height="23">Test data</td>
        <td style="padding-left: 10px;" height="23">sss </td>
    </tr>
      <tr>
        <td style="padding-left: 10px;" height="23"> IT Asset Controller </td>
        <td style="padding-left: 10px;" height="23">Test data</td>
        <td style="padding-left: 10px;" height="23">sss </td>
    </tr>
      <tr>
        <td style="padding-left: 10px;" height="23"> IT Approver </td>
        <td style="padding-left: 10px;" height="23">Test data</td>
        <td style="padding-left: 10px;" height="23">sss </td>
    </tr>



</table>

</div>
<div id="editor"></div>
<table width="705" border="0" cellspacing="0" cellpadding="0" style="">
 
	<tr>
		<td height="30" align="right" valign="middle"><button id="btnPrint">Print</button>&nbsp;&nbsp;&nbsp;&nbsp;   </td>
		
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