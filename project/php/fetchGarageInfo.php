<?php
function fetchGarageInfo($query) {
    if (!empty($_POST['input'])){
        if ($row = mysqli_fetch_array($query)) ?>
            <table>
            <thead>
            <th>Technician Name</th>
            <th>Inspection Time/Date</th>
            <th>Branch Name</th>
            <th>Branch Phone</th>
            <th>Branch Email</th>
            <th>Branch Address</th>
            <th>Branch GST Registration</th>
            <th>Branch Fax</th>
            </thead>
            <tr>
            <td data-label="Technician Name"><?php echo $row['TECHNICIAN NAME'];?></td>
        <td data-label="Inspection Time/Date"><?php echo $row['INSPECTION TIME/DATE'];?></td>
        <td data-label="Branch Name"><?php echo $row['BRANCH NAME'];?></td>
        <td data-label="Branch Phone"><?php echo $row['BRANCH PHONE'];?></td>
        <td data-label="Branch Email"><?php echo $row['BRANCH EMAIL'];?></td>
        <td data-label="Branch Address"><?php echo $row['BRANCH ADDRESS'];?></td>
        <td data-label="Branch GST Registration"><?php echo $row['BRANCH GST REGISTRATION'];?></td>
        <td data-label="Branch Fax"><?php echo $row['BRANCH FAX'];?></td>
        </tr>
        </table>
    <?php }
}
?>