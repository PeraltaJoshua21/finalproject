<?php include("headersupplier.php");?>
<div class="jumbotron">

<form>
  <h2 style="text-align: center;"> LIST OF SHIRTS </h2>
  <hr />
  <div class="container">
    <div class="table-responsive">
    <table class="table table-bordered table-hover table-striped" style="table-layout: relative">
        <thead>

        <tr>
            <th>Product ID</th>
            <th>Product Name</th>
            <th>Product Image</th>
            <th>Product Price</th>
            <th>Stock</th>
            <th>Action</th>
           
          
        </tr>
        </thead>

<?php
        include("connect.php");
        $view_users="SELECT * from product WHERE prod_type='Shirts'";
        $run=mysqli_query($db,$view_users);

        while($row=mysqli_fetch_array($run))
        {
            $prod_id=$row[0];
            $prod_name=$row[2];
            $image=$row[3];
            $price=$row[4];
            $stock=$row[5];
          
         
        ?>

        <tr>
            <td><?php echo $prod_id;  ?></td>
            <td><?php echo $prod_name;  ?></td>
            <td><?php echo $image;  ?></td>
            <td><?php echo $price;  ?></td>
            <td><?php echo $stock; ?></td>

             <td><a class="btn btn-success" href="addstock.php?id=<?php echo $prod_id ?>">Add Stock</a></td> 

        </tr>
      <?php }
       ?> 
    </table>
        </div>
</div>
</form>
</div>

<?php include("footer.php");?>