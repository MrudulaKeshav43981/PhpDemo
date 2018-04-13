<?php


$con = @mysqli_connect('localhost', 'root', '77@Jaiganpathi', 'TESTDB');

if (!$con) {
    echo "Error: " . mysqli_connect_error();
	exit();
}
echo 'Connected to MySQL';
echo nl2br("\n") ;

// Some Query
$sql 	= 'SELECT * FROM TESTDB.student';
$query 	= mysqli_query($con, $sql);
while ($row = mysqli_fetch_array($query))
{	
	echo $row['StudentName'];
	echo nl2br("\n") ;
}

// Close connection
mysqli_close ($con);



$maxcols = 8; 
$maxid = 12;
$startid = 1;

echo "<table id='table1'>\n";
for ($i = 1;$i<=ceil($maxid/$maxcols);$i++) {

    echo "<tr>\n";
    for ($j=1; $j<=$maxcols; $j++)
        if ($startid <= $maxid)
            echo "  <td class='mark'>ID".$startid++."</td>\n";
        else 
            echo "  <td> </td>\n";

    echo "</tr>\n<tr>\n";
    for ($j=1;$j<=$maxcols;$j++)
        echo "<td>Content</td>\n";

    echo "</tr>\n";
}

echo "</table>\n";

?>