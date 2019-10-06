<?php
function fetchVehicleInfo($query) {
    if (!empty($_POST['input'])){
        if ($row = mysqli_fetch_array($query)) ?>
            <table>
                <thead>
                <th>Vehicle Registration</th>
                <th>Vehicle Model</th>
                <th>Vehicle Make</th>
                <th>Year</th>
                <th>Body Type</th>
                <th>Chassis Number</th>
                <th>Odometer Reading</th>
                </thead>
                <tr>
                    <td data-label="Vehicle Registration"><?php echo $row['VEHICLE REGISTRATION']; ?></td>
                    <td data-label="Vehicle Model"><?php echo $row['VEHICLE MODEL']; ?></td>
                    <td data-label="Vehicle Make"><?php echo $row['VEHICLE MAKE']; ?></td>
                    <td data-label="Year"><?php echo $row['YEAR']; ?></td>
                    <td data-label="Body Type"><?php echo $row['BODY TYPE']; ?></td>
                    <td data-label="Chassis Number"><?php echo $row['CHASSIS NUMBER']; ?></td>
                    <td data-label="Odometer Reading"><?php echo $row['ODOMETER READING']; ?></td>
                </tr>
            </table>
    <?php }
}
?>