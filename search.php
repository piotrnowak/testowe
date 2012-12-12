<?PHP
    $link = mysql_connect("localhost", "ziccoss", "nowak69") 
or die ("Nie mo¿na po³¹czyæ siê z baz¹");
    mysql_select_db("ziccoss") 
or die('Nie mo¿na wybraæ bazy danych: ' . mysql_error());
?>

<form action="index.php?page=6" method="POST">
<b>tytul:</b> <input name="sz_tytul" />
<input type="submit" value="Szukaj" name="szukaj"/>
</form>

<?PHP
if(isset($_POST["szukaj"]))
{
   echo "<p><b>Oto lista szukanych filmow:</b></p>";
   $zapytanie="select * 
               FROM filmy 
               WHERE tytul LIKE '%".$_POST["sz_tytul"]."%'";
   $wynik = mysql_query($zapytanie);     
        
   echo "
    <table border=\"1\" width=\"100%\">
    <tr>
    <td><b>ID</b> </td>
    <td width=\"140\"><b>tytul:</b> </td>
    <td width=\"140\"><b>gatunek:</b> </td>
    <td width=\"180\"><b>produkcja:</b> </td>
    <td><b>nr:</b> </td>        
    </tr>";
     while ($line = mysql_fetch_array($wynik))
     {
         echo "<tr>
         <td align=\"center\">".$line['id']."</td>
         <td align=\"center\">".$line['tytul']."</td>
         <td align=\"center\">".$line['gatunek']."</td>
         <td align=\"center\">".$line['produkcja']."</td>
         <td align=\"center\">".$line['nr']."</td>
         </tr>";
    }
   echo "</table>";        
}
?>