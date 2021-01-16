<?php
include("includes/dbcon.php");
include("includes/script.php");
if(isset($_POST['payed']))

{
    mysqli_query($con,"delete from payment");
    header('location:pay.php');


}




?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body class="bg-light text-dark">
<nav class="navbar navbar-dark bg-dark">
    <span class="navbar-brand mb-0 h1">ESHOP</span>
</nav>
<?php
$payment="select * from payment";
$pay=mysqli_query($con,$payment);

 if(mysqli_num_rows($pay)>0)
{
while($bill=mysqli_fetch_array($pay))
{?>

<div class="container-fluid" style="margin-top:10px" >
    <table class="table table-sm">
    <tbody>
    <td>Item_name</td>
    <td><?php echo $bill['product_name']?></td>
    </tr>
    <tr>
    <td>Total</td>
    <td><?php echo $bill['Total']?></td>
    </tr>
    <tr>
    <td>Total_Qty</td>
    <td><?php echo $bill['Total_qty']?></td>
    </tr>
    
    </tbody>
    </table>
    </div>
    </form>
    <?php
}

}
?>
<form action="" method="post">
<tbody>
    

<tr>
<td></td>
<td><button type="submit" name="payed" class="btn btn-primary">Bill Pay</button></td>
</tr>
</tbody>
</form>
</body>
</html>