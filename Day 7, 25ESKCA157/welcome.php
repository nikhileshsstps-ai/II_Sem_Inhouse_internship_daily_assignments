<html>
<body>
<?php

$name = "Nikhilesh Verma";
$cgpa = "9.0";
$branch = "CSE";
$year = "date("Y")";
$month = "date("m")";
$prev_year = "$year-1";
$next_year = "$year+1";
if($month < 7){
    echo "Year $year-$next_year";
}else{
    echo "Year $prev_year - $year";
}
?>

<h1><?= $name?> </h1>
<p><?= $cgpa?> </p>
<p><?= $branch?> </p>
</body>
</html>