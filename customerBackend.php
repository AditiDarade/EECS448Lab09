<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Exercise 3</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Thanks for the purchase order.</h2>
<b>your userId is:<?php echo $_POST["userID"] ?? null; ?></b><br>
<b>your password is:<?php echo $_POST["UserPassword"] ?? null; ?></b><br>

<div id="customerBackend" style="display:true">

<?php 
$tbl="<table style='display:true' border='1'>
    <tbody id='TotalPItems' name='TotalPItems'>
    <tr>
        <td><b></b></td>
        <td><b>Quantity</b></td>
        <td><b>Cost per item</b></td>
        <td><b>Sub Total</b></td>
    </tr>";
     $totalCost=0;   
    for ($x = 1; $x <= 10; $x++) 
    {
        $itemCost=$_POST["itemCost".$x] ?? null;
        if($itemCost!=null)
        {
            //echo $itemCost."<br />";
            $itemQty=$_POST["itemQty".$x] ?? null;
            //echo $itemQty."<br />";
            $itemNm=$_POST["itemNm".$x] ?? null;
            //echo $itemNm."<br />";
            $tbl=$tbl."<tr><td>".$itemNm."</td>";
            $tbl=$tbl."<td>".$itemQty."</td>";
            $tbl=$tbl."<td>$".$itemCost."</td>";
            $tbl=$tbl."<td>$".($itemQty*$itemCost)."</td></tr>";
            $totalCost=$totalCost+($itemQty*$itemCost);
        }
    }
    $shipM=$_POST["shipM"] ?? null;
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
    //$items=$_POST["itemCost"];
    //$N = count($items);
    //$indx=0;
    //$items=$_POST["itemCost"];
    //foreach ($items as $itemCost )
    //{ 
        //echo $itemCost."<br />";
    //}
?>

</div>
</body>
</html>
