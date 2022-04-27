<?php
$output = '<div class=\'container\'>';
while($row = mysqli_fetch_assoc($query)){
    $hobbies = [];
    $sql2 = "SELECT * from hobbiestable LEFT JOIN availablehobbiestable ON hobbiestable.InterestID = availablehobbiestable.InterestID WHERE unique_id = {$row['unique_id']};";
    $query2 = mysqli_query($conn, $sql2);
    while($row2 = mysqli_fetch_assoc($query2)) {
        array_push($hobbies,$row2['Name']);
    }
}
for($x = 0; $x < count($hobbies); $x++) {
    $output .= '<p>' . $hobbies[$x] . '</p>';
}
$output .= '</div>'
?>
