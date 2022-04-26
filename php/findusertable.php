<?php
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
while($row = mysqli_fetch_assoc($query)){
    $hobbies = [];
    $sql2 = "SELECT * from hobbiestable LEFT JOIN availablehobbiestable ON hobbiestable.InterestID = availablehobbiestable.InterestID WHERE unique_id = {$row['unique_id']};";
    $query2 = mysqli_query($conn, $sql2);
    while($row2 = mysqli_fetch_assoc($query2)) {
        array_push($hobbies,$row2['Name']);
    }
    $output .= '<tr onclick="location.href = \'OutMatchprofile.php?user_id='. $row['unique_id'] .'\';">
                    <td><img src="php/images/'. $row['img'] .'" alt=""></td>
                    <td>'. $row['fname']. " " . $row['lname'] .'</td>
                    <td>'. $row['Age'] .'</td>
                    <td>'. implode(",",$hobbies) .'</td>
                    <td>'. $row['Location'] .'</td>
                </tr>';
}
$output .= '</tbody>  
            </table>'
?>