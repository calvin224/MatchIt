<?php
$output = '<table class="findtable">
                   <thead>
                   <tr>
                   <th> </th>
                   <th>Name</th>
                   <th>Email</th>
                   <th>UserID</th>
                   <th>IsProfileCompleted</th>
                   </tr>
                   </thead>
            <tbody>';
while ($row = mysqli_fetch_assoc($query)) {
    if ($row['Completed'] == 1) {
        $completed = "YES";
    } else {
        $completed = "NO";
    }
    $output .= '<tr onclick="location.href = \'AdminViewProfile.php?user_id=' . $row['unique_id'] . '\';">
                    <td><img src="php/images/' . $row['img'] . '" alt=""></td>
                    <td>' . $row['fname'] . " " . $row['lname'] . '</td>
                    <td>' . $row['email'] . '</td>
                    <td>' . $row['unique_id'] . '</td>
                    <td>' . $completed . '</td>
                </tr>';
}
$output .= '</tbody>  
            </table>'
?>
