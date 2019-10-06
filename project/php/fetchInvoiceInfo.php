<?php
function fetchInvoiceInfo($query) {
    if (!empty($_POST['input'])){
        if ($row = mysqli_fetch_array($query)) ?>
            <table>
            <thead>
            <th>Tax Invoice Number</th>
            <th>Service Description</th>
            <th>Quantity</th>
            <th>Unit Price</th>
            <th>Amount</th>
            <th>Subtotal</th>
            <th>GST</th>
            <th>Total</th>
            <th>Paid</th>
            <th>Date</th>
            <th>Due Date</th>
            </thead>

            <tr>

            <td data-label="Tax Invoice Number"><?php echo $row['TAX INVOICE NUMBER'];?></td>
            <td data-label="Service Description"><?php echo $row['SERVICE DESCRIPTION'];?></td>
            <td data-label="Quantity"><?php echo $row['QUANTITY'];?></td>
            <td data-label="Unit Price"><?php echo '$' . $row['UNIT PRICE'];?></td>
            <td data-label="Amount"><?php echo '$' . $row['AMOUNT'];?></td>
            <td data-label="Subtotal"><?php echo '$' . $row['SUBTOTAL'];?></td>
            <td data-label="GST"><?php echo '$' . $row['GST'];?></td>
            <td data-label="Total"><?php echo '$' . $row['TOTAL'];?></td>
            <td data-label="Paid"><?php echo '$' . $row['PAID'];?></td>
            <td data-label="Date"><?php echo $row['DATE'];?></td>
            <td data-label="Due Date"><?php echo $row['DUE DATE'];?></td>

            </tr>
            </table>
    <?php }
}
?>