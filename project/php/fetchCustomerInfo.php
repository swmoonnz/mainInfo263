<?php
function fetchCustomerInfo($query) {
    if (!empty($_POST['input'])){
        if ($row = mysqli_fetch_array($query)) ?>
            <table>
            <thead>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            </thead>
            <tr>
            <td data-label="Name"><?php echo $row['NAME']; ?></td>
        <td data-label="Email"><?php echo $row['EMAIL']; ?></td>
        <td data-label="Phone"><?php echo $row['PHONE']; ?></td>
        </tr>
        </table>
    <?php }
}
    ?>