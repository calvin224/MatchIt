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
    $output .= '<tr onclick="location.href = \'OutMatchprofile.php?user_id='. $row['unique_id'] .'\';">
                    <td><img src="php/images/'. $row['img'] .'" alt=""></td>
                    <td>'. $row['fname']. " " . $row['lname'] .'</td>
                    <td>'. $row['Age'] .'</td>
                    <td>'. $row['Description'] .'</td>
                    <td>'. $row['Location'] .'</td>
                </tr>';
}
$output .= '</tbody>  
            </table>'
?>