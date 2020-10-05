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

$judul2 = preg_replace("/[^a-zA-Z]+/"," ",$judul1);
$isi2 = preg_replace("/[^a-zA-Z]+/"," ",$isi1);

echo "<td><font color=blue></font>" .  $id1 . "<br></td>"; 
echo "<td><font color=blue></font>" .  strtolower($judul2) . "<br></td>"; 
echo "<td><font color=blue></font>" .  strtolower($isi2) . "<br></td>"; 
echo "<td><font color=blue></font>" .  strtolower($url1) . "<br></td>"; 
echo "</tr>";
$no++;

}

?>