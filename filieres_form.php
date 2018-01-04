Liste des filieres:

<form method='post' action=''>
<select name='fid'>
<?php
	$SQL = "SELECT * FROM filieres";
	$res = mysql_query($SQL);
	while($row=mysql_fetch_array($res))
	{
	echo "<option value='$row[fid]'>$row[nom]</option>";
	}
?>
<input type="submit" value="Voir" />
</select>
</form>
