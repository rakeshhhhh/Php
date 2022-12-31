<?php
$cricketers=array();
$cricketers=
array("a"=>"SACHIN TENDULKAR",
"b"=>"M S DHONI",
"c"=>"VIRAT KOHLI",
"d"=>"YUVRAJ SINGH",
"e"=>"SURYAKUMAR YADAV",
"f"=>"ROHITH SHARMA",
"g"=>"SANJU SAMSON");
?>
<html>
<body bgcolor="dodgerblue">
<center>
<table border="2" width="500" height="500" align="center">
<tr bgcolor="orange">
<th>Name of cricketers</th>
</tr>
<tr>
<td align="center"><?php echo $cricketers["a"]; ?></td>
</tr>
<tr>
<td align="center"><?php echo $cricketers["b"]; ?></td>
</tr>
<tr>
<td align="center"><?php echo $cricketers["c"]; ?></td>
</tr>
<tr>
<td align="center"><?php echo $cricketers["d"]; ?></td>
</tr>
<tr>
<td align="center"><?php echo $cricketers["e"]; ?></td>
</tr>
<tr>
<td align="center"><?php echo $cricketers["f"]; ?></td>
</tr>
<tr>
<td align="center"><?php echo $cricketers["g"]; ?></td>
</tr>
</table>
</center>
</body>
</html> 