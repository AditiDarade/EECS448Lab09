<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Exercise 3</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<script src="./formChecker.js"></script>
<h1>Exercise 3: Web Store.</h1>
<div id="customerFront" style="display:<?php if(!isset($_POST['submit'])) echo 'true'; else echo 'none';  ?>">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" onsubmit="return FormCheckerFunction()">
    <table  style="width:60%" border="1">
        <tbody id="TotalItems" name="TotalItems" value="10">
            <tr>
                <th style="width:20%"><b></b></th>
                <th style="width:15%"><b>Cost per item</b></th>
                <th style="width:5%"><b>Buy</b></th>
                <th style="width:5%"><b>Quantity</b></th>
            </tr>
            <tr>
                <td>Web Cam<input  type="hidden" name="itemNm1" value="Web Cam"></td>
                <td>$10</td>
                <td><input type="checkbox" id="itemCost1" name="itemCost1" value="10"></td>
                <td><input type="text" id="itemQty1" name="itemQty1"  maxlength="4" size="4"></td>
            </tr>
            <tr>
                <td>SSD<input  type="hidden" name="itemNm2" value="SSD"></td>
                <td>$100</td>
                <td><input type="checkbox" id="itemCost2" name="itemCost2" value="100"></td>
                <td><input type="text" id="itemQty2" name="itemQty2"  maxlength="4" size="4"></td>
            </tr>
            <tr>
                <td>keyboard<input  type="hidden" name="itemNm3" value="keyboard"></td>
                <td>$7</td>
                <td><input type="checkbox" id="itemCost3" name="itemCost3" value="7"></td>
                <td><input type="text" id="itemQty3" name="itemQty3" maxlength="4" size="4"></td>
            </tr>
            <tr>
                <td>mouse<input  type="hidden" name="itemNm4" value="mouse"></td>
                <td>$5</td>
                <td><input type="checkbox" id="itemCost4" name="itemCost4" value="5"></td>
                <td><input type="text" id="itemQty4" name="itemQty4" maxlength="4" size="4"></td>
            </tr>
            <tr>
                <td>pen drive<input  type="hidden" name="itemNm5" value="pen drive"></td>
                <td>$9</td>
                <td><input type="checkbox" id="itemCost5" name="itemCost5" value="9"></td>
                <td><input type="text" id="itemQty5" name="itemQty5"  maxlength="4" size="4"></td>
            </tr>
            <tr>
                <td>speakers<input  type="hidden" name="itemNm6" value="speakers"></td>
                <td>$25</td>
                <td><input type="checkbox" id="itemCost6" name="itemCost6" value="25"></td>
                <td><input type="text" id="itemQty6" name="itemQty6" maxlength="4" size="4"></td>
            </tr>
            <tr>
                <td>monitor<input  type="hidden" name="itemNm7" value="monitor"></td>
                <td>$109</td>
                <td><input type="checkbox" id="itemCost7" name="itemCost7" value="109"></td>
                <td><input type="text" id="itemQty7" name="itemQty7" maxlength="4" size="4"></td>
            </tr>
            <tr>
                <td>CPU<input  type="hidden" name="itemNm8" value="CPU"></td>
                <td>$599</td>
                <td><input type="checkbox" id="itemCost8" name="itemCost8" value="599"></td>
                <td><input type="text" id="itemQty8" name="itemQty8" maxlength="4" size="4"></td>
            </tr>
            <tr>
                <td>headphone<input  type="hidden" name="itemNm9" value="headphone"></td>
                <td>$99</td>
                <td><input type="checkbox" id="itemCost9" name="itemCost9" value="99"></td>
                <td><input type="text" id="itemQty9" name="itemQty9" maxlength="4" size="4"></td>
            </tr>
            <tr>
                <td>Ext Hard Disk<input  type="hidden" name="itemNm10" value="Ext Hard Disk"></td>
                <td>$120</td>
                <td><input type="checkbox" id="itemCost10" name="itemCost10" value="120"></td>
                <td><input type="text" id="itemQty10" name="itemQty10" maxlength="4" size="4"></td>
            </tr>
            <tr>
                <td>User Name(as emailID):</td>
                <td><input type="text" id="userID" name="userID"></td>
                <td>Password:</td>
                <td><input type="password" id="UserPassword" name="UserPassword"></td>
            </tr>
            <tr>
                <td>Shipping:</td>
                <td><input type="radio" id=ship1" name="shipM" value="0"> Free 7 day</td>
                <td><input type="radio" id=ship2" name="shipM" value="5"> $5.00 three day</td>
                <td><input type="radio" id=ship3" name="shipM" value="50"> $50.00 over night</td>
            </tr>
            <tr>
                <td><input type="reset" value="Reset"></td>
                <td><input type="submit"  name="submit" value="Submit"></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
</form>
</div>

<div id="customerBackend" style="display:<?php if(!isset($_POST['submit'])) echo 'none'; else echo 'true';  ?>">

<h2>Thanks for the purchase order.</h2>
<b>your userId is:<?php echo $_POST["userID"]; ?></b><br>
<b>your password is:<?php echo $_POST["UserPassword"]; ?></b><br>

<?php 
$tbl="<table style='width:60%'' border='1'>
    <tbody id='TotalPItems' name='TotalPItems'>
    <tr>
        <th style='width:20%'><b></b></th>
        <th style='width:10%'><b>Quantity</b></th>
        <th style='width:15%'><b>Cost per item</b></th>
        <th style='width:15%'><b>Sub Total</b></th>
    </tr>";
     $totalCost=0;   
    for ($x = 1; $x <= 10; $x++) 
    {
        $itemCost=$_POST["itemCost".$x];
        if($itemCost!=null)
        {
            //echo $itemCost."<br />";
            $itemQty=$_POST["itemQty".$x];
            //echo $itemQty."<br />";
            $itemNm=$_POST["itemNm".$x];
            //echo $itemNm."<br />";
            $tbl=$tbl."<tr><td>".$itemNm."</td>";
            $tbl=$tbl."<td>".$itemQty."</td>";
            $tbl=$tbl."<td>$".$itemCost."</td>";
            $tbl=$tbl."<td>$".($itemQty*$itemCost)."</td></tr>";
            $totalCost=$totalCost+($itemQty*$itemCost);
        }
    }
    $shipM=$_POST["shipM"];
    $shipTyp="over night";
    if($shipM==0)
    {
        $shipTyp="Free 7 day";
    } 
    else if ($shipM==0)
    {
        $shipTyp="three day";
    }

    $tbl=$tbl."<tr>
        <td>Shipping</td>
        <td>".$shipTyp."</td>
        <td><b></b></td>
        <td>$".$shipM."</td></tr>";
    $tbl=$tbl."<tr>
        <td></td>
        <td></td>
        <td><b>Total Cost</b></td>
        <td>$".($totalCost+$shipM)."</td></tr>";

    $tbl=$tbl."</tbody></table>";
    echo $tbl;
?>

</div>


</body>
</html>
