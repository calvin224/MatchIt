<?php
session_start();
include_once "config.php";
$outgoing_id = $_SESSION['unique_id'];
$searchTerm = mysqli_real_escape_string($conn, $_POST['searchTerm']);
$true = 1;
$output = '<table class="findtable">
            <thead>
            <tr>
                <th> </th>
                <th>Name</th>
                <th>Age</th>
                <th>Interests</th>
                <th>Location</th>
            </tr>
            </thead>
            <tbody>';
if($searchTerm != ""){
$search = explode(",",$searchTerm);
$sql3 = mysqli_query($conn, "SELECT * FROM profiletable WHERE unique_id = {$outgoing_id}");
if (mysqli_num_rows($sql3) > 0) {
    $row3 = mysqli_fetch_assoc($sql3);
}
$sql = "SELECT * from users LEFT JOIN profiletable ON profiletable.unique_id=users.unique_id WHERE Completed = {$true} AND profiletable.Gender = '{$row3['Seeking']}' AND NOT users.unique_id = {$outgoing_id} ORDER BY user_id DESC;";
$query = mysqli_query($conn, $sql);
if(mysqli_num_rows($query) > 0){
    while($row = mysqli_fetch_assoc($query)){
        $hobbies = [];
        $sql2 = "SELECT * from hobbiestable LEFT JOIN availablehobbiestable ON hobbiestable.InterestID = availablehobbiestable.InterestID WHERE unique_id = {$row['unique_id']};";
        $query2 = mysqli_query($conn, $sql2);
        while($row2 = mysqli_fetch_assoc($query2)) {
            array_push($hobbies,$row2['Name']);
        }
        if (count(array_intersect($hobbies, $search)) === 0) {

        } else {
            $output .= '<tr onclick="location.href = \'OutMatchprofile.php?user_id='. $row['unique_id'] .'\';">
                    <td><img src="php/images/'. $row['img'] .'" alt=""></td>
                    <td>'. $row['fname']. " " . $row['lname'] .'</td>
                    <td>'. $row['Age'] .'</td>
                    <td>'. implode(",",$hobbies) .'</td>
                    <td>'. $row['Location'] .'</td>
                </tr>';
        }
    }
}else{
    $output .= 'No user found related to your search term';
}
} else {
        $sql3 = mysqli_query($conn, "SELECT * FROM profiletable WHERE unique_id = {$outgoing_id}");
        if (mysqli_num_rows($sql3) > 0) {
            $row3 = mysqli_fetch_assoc($sql3);
        }
        $sql = "SELECT * from users LEFT JOIN profiletable ON profiletable.unique_id=users.unique_id WHERE Completed = {$true}
                                                          AND profiletable.Gender = '{$row3['Seeking']}'                                
                                                          AND NOT users.unique_id = {$outgoing_id}
                                                          ORDER BY user_id DESC;";
        $query = mysqli_query($conn, $sql);
        if(mysqli_num_rows($query) > 0){
            include_once "findusertable.php";
        }
}
$output .= '</tbody>  
            </table>';
echo $output;
?>

