<?php
function fetchCustomerInfo($query) {
    if (!empty($_POST['input'])) {
        if (($row = mysqli_fetch_array($query)) && (sizeof($row)!=0)) { ?>
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
        <?php } else { ?>
            <table>
                <thead>
                <tr>
                    <span class="errorMsg";>Invoice Number "</span>
                    <span class="errorInvoice";><strong><?php echo $_POST['input'] ?></strong></span>
                    <span class="errorMsg";>" Did not return any Results</span>
                </tr>
                </thead>
                    <tr>
                        <td><i>Make sure you have the right invoice number</i></td>
                    </tr>
            </table>
        <?php }
    }
}
    ?>