<style>
.signature, .title { 
float:left;
  border-top: 1px solid #000;
  width: 200px; 
  text-align: center;
  color: white;
}
.form{ 
	background-image: url("https://images.unsplash.com/photo-1479660656269-197ebb83b540?dpr=2&auto=compress,format&fit=crop&w=1199&h=798&q=80&cs=tinysrgb&crop=");
	color: #ffffff;
}
</style>

<?php
if(isset($_POST['submit'])){

	$name = $_POST['name'];
	$email =  $_POST['email'];
	$subject =  $_POST['subject'];
	$message =  $_POST['message'];

?>

<center>
<div class="form" style="width:800px; height:600px; padding:20px; text-align:center; border: 10px solid #787878">
<div style="width:750px; height:550px; padding:20px; text-align:center; border: 5px solid #787878">
       <span style="font-size:50px; font-weight:bold">Certificate of Completion</span>
       <br><br>
       <span style="font-size:25px"><i>This is to certify that</i></span>
       <br><br>
       <span style="font-size:30px"><b><?php echo $name; ?></b></span><br/><br/>
       <span style="font-size:25px"><i>Email addresss:</i></span> <br/><br/>
       <span style="font-size:30px"><?php echo $email; ?></span> <br/><br/>
       <span style="font-size:20px">Has completed the course: <b> <?php echo $subject; ?> </b></span> <br/><br/><br/><br/>
       <span style="font-size:25px"><i>On:</i></span><br>
       <span style="font-size:25px"><i id="dat">
       		<script>
				var today = new Date();
				var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
				document.getElementById('dat').innerHTML = date;
       		</script>
       </i></span><br>
<table style="margin-top:40px;float:left;color: #e27887;">
<tr>
<td><span><b><?php echo $name; ?></b></td>
</tr>
<tr>
<td style="width:200px;float:left;border:0;border-bottom:1px solid #000;"></td>
</tr>
<tr>
<td style="text-align:center"><span><b>Signature</b></td>
</tr>
</table>
<table style="margin-top:40px;float:right;color: #e27887;">
<tr>
<td><span><b> Dr. John Doe</b></td>
</tr>
<tr>
<td style="width:200px;float:right;border:0;border-bottom:1px solid #000;"></td>
</tr>
<tr>
<td style="text-align:center"><span><b>Signature</b></td>
</tr>
</table>
</div>
</div>
</center>


<?php };
?>