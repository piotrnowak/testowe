<?PHP
    $link = mysql_connect("localhost", "ziccoss", "nowak69") 
or die ("Nie mo�na po��czy� si� z baz�");
    mysql_select_db("ziccoss") 
or die('Nie mo�na wybra� bazy danych: ' . mysql_error());
?>

<?PHP
    $zapytanie="select * FROM filmy";
    $wynik = mysql_query($zapytanie);
?>
<?PHP
if(isset($_GET["film"]))
{
$kasuj="DELETE FROM filmy WHERE ID =".$_GET["film"];
mysql_query($kasuj);
   echo "Usuni�to film o id: "."<b>".$_GET["film"]."</b>";
}
?>
<table border="1" width="100%">
<tr>
<td><b>ID</b> </td>
<td width="140"><b>tytul:</b> </td>
<td width="140"><b>gatunek:</b> </td>
<td width="180"><b>produkcja:</b> </td>
<td><b>nr:</b> </td>
<td>Usu�:</td>
</tr>
<?PHP
         while ($line = mysql_fetch_array($wynik))
          {
             echo "<tr>
                   <td align=\"center\">".$line['id']."</td>
                   <td align=\"center\">".$line['tytul']."</td>
                   <td align=\"center\">".$line['gatunek']."</td>
                   <td align=\"center\">".$line['produkcja']."</td>
                   <td align=\"center\">".$line['nr']."</td>                                     
                   <td align=\"center\"><a href=\"index.php?page=5
				&film=".$line['id']."\">Usu�</a></td>
                   </tr>";
          }
?>
</table>
<b></b>
