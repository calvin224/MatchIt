<?php
$output = '<div class=\'container\'>';
while($row = mysqli_fetch_assoc($query)){
    $characteristics = [];
    $sql2 = "SELECT * from abouttable LEFT JOIN availableabouttable ON abouttable.AboutID = availableabouttable.AboutID WHERE unique_id = {$row['unique_id']};";
    $query2 = mysqli_query($conn, $sql2);
    while($row2 = mysqli_fetch_assoc($query2)) {
        array_push($characteristics,$row2['Name']);
    }
}
for($x = 0; $x < count($characteristics); $x++) {
    $output .= '<p>' . $characteristics[$x] . '</p>';
}
$output .= '</div>'
?>

