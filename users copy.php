<?php


function JB_get_data_from_table($table_name, $limit){


// Perform query SELECT JSON_ARRAYAGG(JSON_OBJECT('LastName', LastName, 'Email', Email)) from users
//if ($result = $mysqli -> query("SELECT 'FirstName', FirstName, 'LastName', LastName, 'Username', Username, 'Email', Email FROM users Limit 1")) {
  //echo "We have " . $result -> num_rows." registered Users";
  // Free result set
  //echo "########################################################################";
//   if ($result) {echo '[';};
//   for ($i=0 ; $i<mysqli_num_rows($result) ; $i++) {
//     echo ($i>0?',':'').json_encode(mysqli_fetch_object($result));
//   }
//   if ($result) {echo ']';};
//   $result -> free_result();
// }

// this works: $statement = $mysqli->prepare("select FirstName, LastName, Username, Email, SignupDate, login_count from users limit 8");


$statement = $mysqli->prepare("select * from $table_name limit $limit");
$statement->execute(); // Execute the statement.
$result = $statement->get_result(); // Binds the last executed statement as a result.
if ($result) {echo '[';};
for ($i=0 ; $i<mysqli_num_rows($result) ; $i++) {
  echo ($i>0?',':'').json_encode(mysqli_fetch_object($result));
  }
if ($result) {echo ']';};
}
$mysqli -> close();
?>