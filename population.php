<?php
$connection = mysql_connect('127.0.0.1', 'root', '');
mysql_select_db('day_4_database');
//$ cityArray = mysql_query('SELECT city_name, population FROM population')
// mysql_connect(‘SQLdata.com’, ‘Jones’, ‘un1c0rn’, ‘my_database’);

// Check connection
if (!$connection) {
  die('Unable to connect: ' . mysql_errno());
}


#
?>
<h1>Welcome to Population Data Online</h1>
<?
//$cities = array(
 // 'Philadelphia' => 1548000,
 // 'New York' => 8337000,
 // 'Los Angeles' => 3858000,
 // 'Seattle' => 634535,
 // 'Boston' => 636479,
//);
if ($connection) {
if(!isset($_GET['city'])){
print 'No city fount';
}
else{
$city = $_GET['city'];
print $city;
$result = mysql_query('SELECT city_name, population FROM population WHERE city_name = "'.$city.'"');
while($row = mysql_fetch_array($result)){

print'<p> the population is'  . $row['city_name'] .'and '.$row['population'];
//$result = mysql_query('SELECT city_name, population FROM population where city_name = '.$city);
//  print '<p>The population of <strong>' . $row['city_name'] . '</strong> is <strong>' . $row['population'] . '</strong></p>';
}
}
}
?>
<h2>Our Cities</h2>
<ul>
<?php
$result = mysql_query('SELECT city_name, population FROM population');
if($connection){
//$row = mysql_fetch_array($result)
  while ($row = mysql_fetch_array($result)) {
    print '<li><a href="/day-4-exercises/population.php?city=' . $row['city_name']  . '">' . $row['city_name']
    . '</a></li>';
  }
}
?>
</ul>
