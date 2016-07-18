<?php 
	$db_host= "dbhome.cs.nctu.edu.tw";
	$db_name= "scyuan1221_cs";
	$db_user= "scyuan1221_cs";
	$db_password= "09931221";
	$dsn= "mysql:host=$db_host;dbname=$db_name";
	$db= new PDO($dsn, $db_user, $db_password);
?>
<table id="myTable" border="1" cellspacing="2">
	<tr>
		<td>Account</td>
		<td>Access_Token</td>
		<td>Refresh</td>
	</tr>
	<?php 
		$sql01="SELECT * FROM `np_final_user_list`";
		$sth01=$db->prepare($sql01);
		$sth01->execute();
		while($result01=$sth01->fetchObject()){?>
			<tr>
				<td><?php echo $result01->account;?></td>
				<td><?php echo $result01->access_token;?></td>
				<td>
					<button>Refresh</button>
				</td>
			</tr>
		<?php 
		}?>
</table>
<form action="quickstart.html">
	</p><button type="submit">Back</button></p>
</form>