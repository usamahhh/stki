<table border=1 cellpadding=5 cellspacing=0>
<tr>
<td>ID</td>
<td>Judul</td>
<td>Isi</td>
<td>Url</td>

</tr>
<?php
include "index.php";
include "koneksi.php";

$query = "SELECT * FROM news";
$result = mysqli_query($koneksi,$query);
$numrows = mysqli_num_rows($result);
$no=1;
while($row = mysqli_fetch_array($result)){  
echo "<tr>";

$id1 = $row['ID'];
$judul1 = $row['Judul'];
$isi1 = $row['Isi'];
$url1 = $row['Url'];
echo "<td><font color=blue></font>" .  $id1 . "<br></td>"; 
echo "<td><font color=blue></font>" .  strtolower($judul1) . "<br></td>"; 
echo "<td><font color=blue></font>" .  strtolower($isi1) . "<br></td>"; 
echo "<td><font color=blue></font>" .  strtolower($url1) . "<br></td>"; 
echo "</tr>";
$no++;

}

?>