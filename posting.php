<?php 
$user = $_SESSION['user'];
 ?>

 <table border="1">
 	<tr align="center">
 		<td width="100px" height="30px">Status</td>
 		<td>Gambar</td>
 	</tr>
 	<tr valign="left" align="center">
 		<td style="padding: 5px;"><?php echo $user['status']; ?></td>
 		<td style="padding: 5px;">
 			<img src="<?php echo $user["file"]; ?>">
 		</td>
 	</tr>
 </table>