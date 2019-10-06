<?php
function fetchAlignmentInfo($query) {
if (!empty($_POST['input'])){
    if ($row = mysqli_fetch_array($query)) ?>
        <table class="alignment">
            <thead>
            <th class="maxwidth-title">Camber</th>
            <th>&nbsp;</th>
            <th>Before</th>
            <th>Target</th>
            <th>Actual</th>
            </thead>
            <tbody class="alignment-graph">
            <tr class="alignment-graph">
                <td data-label="Camber" class="table-no-underline background noPad">&nbsp;</td>
                <td class="table-column-head orientations">Left</td>
                <td data-label="Before"><?php echo $row['1'];?></td>
                <td data-label="Target" class="table-no-underline target">-0°40'   +/-0°30'</td>
                <td data-label="Actual"><?php echo $row['2'];?></td>
            </tr>
            <tr>
                <td class="table-no-underline noShow">&nbsp;</td>
                <td class="table-column-head">Right</td>
                <td data-label="Before"><?php echo $row['3'];?></td>
                <td class="noShow target"></td>
                <td data-label="Actual"><?php echo $row['4'];?></td>
            </tr>
            <tr>
                <td class="table-no-underline noShow">&nbsp;</td>
                <td class="table-column-head">Cross</td>
                <td data-label="Before"><?php echo $row['5'];?></td>
                <td data-label="Target" class="target">0°00' +/-0°30'</td>
                <td class="underPadding bottomTD" data-label="Actual"><?php echo $row['6'];?></td>
            </tr>
            </tbody>
        </table>

        <table class="alignment">
            <thead>
            <th class="maxwidth-title">Toe</th>
            <th>&nbsp;</th>
            <th>Before</th>
            <th>Target</th>
            <th>Actual</th>
            </thead>
            <tbody class="alignment-graph">
            <tr class="alignment-graph">
                <td data-label="Toe"class="table-no-underline background">&nbsp;</td>
                <td class="table-column-head orientations">Left</td>
                <td data-label="Before"><?php echo $row['7'];?></td>
                <td data-label="Target" class="table-no-underline target">1.5mm +/-1.00</td>
                <td data-label="Actual"><?php echo $row['8'];?></td>
            </tr>
            <tr>
                <td class="table-no-underline noShow">&nbsp;</td>
                <td class="table-column-head orientations">Right</td>
                <td data-label="Before"><?php echo $row['9'];?></td>
                <td class="noShow target"></td>
                <td data-label="Actual"><?php echo $row['10'];?></td>
            </tr>
            <tr>
                <td class="table-no-underline noShow">&nbsp;</td>
                <td class="table-column-head orientations">Total</td>
                <td data-label="Before"><?php echo $row['11'];?></td>
                <td data-label="Target" class="target">3mm +/-2.0mm</td>
                <td class="underPadding bottomTD" data-label="Actual"><?php echo $row['12'];?></td>
            </tr>
            </tbody>
        </table>
        <table class="alignment">
            <thead>
            <th class="maxwidth-title">Geometrical driving axis</th>
            <th>&nbsp;</th>
            <th>Before</th>
            <th>Target</th>
            <th>Actual</th>
            </thead>
            <tbody class="alignment-graph">
            <tr class="alignment-graph">
                <td data-label="Geometrical Driving Axis" class="table-no-underline noRightBorder background">&nbsp;</td>
                <td class="table-column-head noRightBorder maxwidth-empty-second orientations noShow">&nbsp;</td>
                <td data-label="Before"><?php echo $row['13'];?></td>
                <td data-label="Target" class="target">0°00'</td>
                <td data-label="Actual"><?php echo $row['14'];?></td>
            </tbody>
        </table>
        <header>Front Axle</header>
        <table class="alignment">
            <thead>
            <th class="maxwidth-title">Camber</th>
            <th>&nbsp;</th>
            <th>Before</th>
            <th>Target</th>
            <th>Actual</th>
            </thead>
            <tbody class="alignment-graph">
            <tr class="alignment-graph">
                <td data-label="Camber" class="table-no-underline background">&nbsp;</td>
                <td class="table-column-head orientations">Left</td>
                <td data-label="Before"><?php echo $row['15'];?></td>
                <td data-label="Target" class="table-no-underline target">0°00' +/-0°30'</td>
                <td data-label="Actual"><?php echo $row['16'];?></td>
            </tr>
            <tr>
                <td class="table-no-underline noShow">&nbsp;</td>
                <td class="table-column-head orientations">Right</td>
                <td data-label="Before"><?php echo $row['17'];?></td>
                <td class="noShow target"></td>
                <td data-label="Actual"><?php echo $row['18'];?></td>
            </tr>
            <tr>
                <td class="table-no-underline noShow">&nbsp;</td>
                <td class="table-column-head orientations">Cross</td>
                <td data-label="Before"><?php echo $row['19'];?></td>
                <td data-label="Target" class="target">0°00' +/-0°30'</td>
                <td class="underPadding bottomTD" data-label="Actual"><?php echo $row['20'];?></td>
            </tr>
            </tbody>
        </table>
        <table class="alignment">
            <thead>
            <th class="maxwidth-title">Caster</th>
            <th>&nbsp;</th>
            <th>Before</th>
            <th>Target</th>
            <th>Actual</th>
            </thead>
            <tbody class="alignment-graph">
            <tr class="alignment-graph">
                <td data-label="Caster" class="table-no-underline background">&nbsp;</td>
                <td class="table-column-head orientations">Left</td>
                <td data-label="Before"><?php echo $row['21'];?></td>
                <td data-label="Target" class="table-no-underline target">2°35' +/-0°30'</td>
                <td data-label="Actual"><?php echo $row['22'];?></td>
            </tr>
            <tr>
                <td class="table-no-underline noShow">&nbsp;</td>
                <td class="table-column-head orientations">Right</td>
                <td data-label="Before"><?php echo $row['23'];?></td>
                <td class="noShow target"></td>
                <td data-label="Actual"><?php echo $row['24'];?></td>
            </tr>
            <tr>
                <td class="table-no-underline noShow">&nbsp;</td>
                <td class="table-column-head orientations">Cross</td>
                <td data-label="Before"><?php echo $row['25'];?></td>
                <td data-label="Target" class="target">0°00' +/-0°30'</td>
                <td class="underPadding bottomTD" data-label="Actual"><?php echo $row['26'];?></td>
            </tr>
            </tbody>
        </table>
        <table class="alignment">
            <thead>
            <th class="maxwidth-title">SAI</th>
            <th>&nbsp;</th>
            <th>Before</th>
            <th>Target</th>
            <th>Actual</th>
            </thead>
            <tbody class="alignment-graph">
            <tr class="alignment-graph">
                <td data-label="SAI" class="table-no-underline background">&nbsp;</td>
                <td class="table-column-head orientations">Left</td>
                <td data-label="Before"><?php echo $row['27'];?></td>
                <td data-label="Target" class="table-no-underline target">12°40' +/-0°45</td>
                <td data-label="Actual"><?php echo $row['28'];?></td>
            </tr>
            <tr>
                <td class="table-no-underline noShow">&nbsp;</td>
                <td class="table-column-head orientations">Right</td>
                <td data-label="Before"><?php echo $row['29'];?></td>
                <td class="noShow target"></td>
                <td data-label="Actual"><?php echo $row['30'];?></td>
            </tr>
            <tr>
                <td class="table-no-underline noShow">&nbsp;</td>
                <td class="table-column-head orientations">Cross</td>
                <td data-label="Before"><?php echo $row['31'];?></td>
                <td data-label="Target" class="target">0°00'</td>
                <td class="underPadding bottomTD" data-label="Actual"><?php echo $row['32'];?></td>
            </tr>
            </tbody>
        </table>
        <table class="alignment">
            <thead>
            <th class="maxwidth-title">Track differential angle</th>
            <th>&nbsp;</th>
            <th>Before</th>
            <th>Target</th>
            <th>Actual</th>
            </thead>
            <tbody class="alignment-graph">
            <tr class="alignment-graph">
                <td data-label="Track Differential Angle" class="table-no-underline background">&nbsp;</td>
                <td class="table-column-head orientations">Left</td>
                <td data-label="Before"><?php echo $row['33'];?></td>
                <td class="table-no-underline noShow target"></td>
                <td data-label="Actual"><?php echo $row['34'];?></td>
            </tr>
            <tr>
                <td class="table-no-underline noShow">&nbsp;</td>
                <td class="table-column-head orientations">Right</td>
                <td data-label="Before"><?php echo $row['35'];?></td>
                <td class="noShow target"></td>
                <td class="underPadding bottomTD" data-label="Actual"><?php echo $row['36'];?></td>
            </tr>
            </tbody>
        </table>
        <table class="alignment">
            <thead>
            <th class="maxwidth-title">Toe</th>
            <th>&nbsp;</th>
            <th>Before</th>
            <th>Target</th>
            <th>Actual</th>
            </thead>
            <tbody class="alignment-graph">
            <tr class="alignment-graph">
                <td data-label="Toe" class="table-no-underline background">&nbsp;</td>
                <td class="table-column-head orientations">Left</td>
                <td data-label="Before"><?php echo $row['37'];?></td>
                <td data-label="Target" class="table-no-underline target">0.5mm +/-1.0mm</td>
                <td data-label="Actual"><?php echo $row['38'];?></td>
            </tr>
            <tr>
                <td class="table-no-underline noShow">&nbsp;</td>
                <td class="table-column-head orientations">Right</td>
                <td data-label="Before"><?php echo $row['39'];?></td>
                <td class="noShow target"></td>
                <td data-label="Actual"><?php echo $row['40'];?></td>
            </tr>
            <tr>
                <td class="table-no-underline noShow">&nbsp;</td>
                <td class="table-column-head orientations">Cross</td>
                <td data-label="Before"><?php echo $row['41'];?></td>
                <td data-label="Target">1mm +/-2.0mm</td>
                <td class="underPadding bottomTD" data-label="Actual"><?php echo $row['42'];?></td>
            </tr>
            </tbody>
        </table>
        <table class="alignment">
            <thead>
            <th class="maxwidth-title">Setback</th>
            <th>&nbsp;</th>
            <th>Before</th>
            <th>Target</th>
            <th>Actual</th>
            </thead>
            <tbody class="alignment-graph">
            <tr class="alignment-graph">
                <td data-label="Setback" class="table-no-underline noRightBorder background">&nbsp;</td>
                <td class="table-column-head noRightBorder maxwidth-empty-second noShow orientations">&nbsp;</td>
                <td data-label="Before"><?php echo $row['43'];?></td>
                <td data-label="Target" class="target">0°00'</td>
                <td  class="underPadding bottomTD" data-label="Actual"><?php echo $row['44'];?></td>
            </tbody>
        </table>
        <table class="alignment">
            <thead>
            <th class="maxwidth-title">Max steering lock</th>
            <th>&nbsp;</th>
            <th>Before</th>
            <th>Target</th>
            <th>Actual</th>
            </thead>
            <tbody class="alignment-graph">
            <tr class="alignment-graph">
                <td data-label="Max Steering Lock" class="table-no-underline background">Left Steer</td>
                <!--<td data-label="Left Steer" class="bigNoShow"></td>-->
                <td class="table-column-head orientations">Left</td>
                <td data-label="Before"><?php echo $row['45'];?></td>
                <td data-label="Target" class="table-no-underline target">-41°00' +/-1°30'</td>
                <td data-label="Actual"><?php echo $row['46'];?></td>
            </tr>
            <tr>
                <td class="table-no-underline noShow">&nbsp;</td>
                <td class="table-column-head orientations">Right</td>
                <td data-label="Before"><?php echo $row['47'];?></td>
                <td data-label="Target" class="target">33°00' +/-1°30'</td>
                <td data-label="Actual"><?php echo $row['48'];?></td>
            </tr>
            <tr class="alignment-graph">
                <td class="table-no-underline background">Right Steer</td>
                <td class="table-column-head orientations">Left</td>
                <td data-label="Before"><?php echo $row['49'];?></td>
                <td data-label="Target" class="table-no-underline target noShow">-41°00' +/-1°30'</td>
                <td data-label="Actual"><?php echo $row['50'];?></td>
            </tr>
            <tr>
                <td class="table-no-underline noShow">&nbsp;</td>
                <td class="table-column-head orientations">Right</td>
                <td data-label="Before"><?php echo $row['51'];?></td>
                <td class="noShow target">33°00' +/-1°30'</td>
                <td class="underPadding bottomTD" data-label="Actual"><?php echo $row['52'];?></td>
            </tr>
            </tbody>
        </table>
<?php }
}
?>



