<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Exercise 1</title>
<style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }
    
    td, th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }
    
    tr:nth-child(even) {
      background-color: #dddddd;
    }
    
</style>
</head>
<body>
<h1>Exercise 1: Multiplication Table.</h1>
<?php
     $TotalRows=100;
     $TotalColumns=100;
     $tbl="<table border='1'><tbody>";
     for ($row = 0; $row <=$TotalRows; $row++) 
     {
         //if row ==0 print header row
         
        for ($col = 0; $col <=$TotalColumns; $col++) 
        {
            //if row ==0 print header row
            if ($row==0)
            {
                if ($col==0)
                {
                    $tbl=$tbl."<tr><td><b></b></td>";
                } else
                {
                    $tbl=$tbl."<td><b>".$col."</b></td>";
                }
            } else
            {
                //row>0
                if ($col==0)
                {
                    $tbl=$tbl."<tr><td><b>".$row."</b></td>";
                } else
                {
                    $tbl=$tbl."<td>".($row*$col)."</td>";
                }
            } 
         
        } //for end col
        $tbl=$tbl."</tr>";
      } //for end row
      $tbl = $tbl . "</tbody></table>";
      echo $tbl
?>  

</body>
</html>
