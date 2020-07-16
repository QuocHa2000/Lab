<?php
$conn = mysqli_connect("localhost:3308", "root", "", "web");
mysqli_set_charset($conn, "utf8");

$results_per_page = 4;

$monhoc = "JAVASCRIPT";
if (isset($_GET['subject'])) {
    $monhoc = $_GET['subject'];
}
$sql='SELECT * FROM document ';
$result = mysqli_query($conn, $sql);
$number_of_results = mysqli_num_rows($result);

$number_of_pages = ceil($number_of_results/$results_per_page);

if (!isset($_GET['page'])) {
    $page = 1;
  } else {
    $page = $_GET['page'];
  }
  
  // determine the sql LIMIT starting number for the results on the displaying page
  $this_page_first_result = ($page-1)*$results_per_page;
  
  // retrieve selected results from database and display them on page
  $sql='SELECT * FROM document  LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
  $result = mysqli_query($conn, $sql);
  
  while($row = mysqli_fetch_array($result)) {
    echo $row['MaMH'] . ' ' . $row['MaLevel']. '<br>';
  }

for ($page=1;$page<=$number_of_pages;$page++) {
    echo '<a href="../controllers/doc.php?page=' . $page . '">' . $page . '</a> ';
  }


?>