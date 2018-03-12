<?php include("headerdelboy.php");?>
<div class="jumbotron">

<form>
  <h2 style="text-align: center;"> LIST OF ORDERS </h2>
  <hr />
  <div class="container">
    <div class="table-responsive">
    <table class="table table-bordered table-hover table-striped" style="table-layout: relative">
        <thead>

        <tr>
            <th>Order ID</th>
            <th>Customer Name</th>
            <th>Contact Number</th>
            <th>Customer E-mail Address</th>
            <th>Status</th>
          
        </tr>
        </thead>

<?php
        include("connect.php");
        $view="SELECT * from order_details";
        $run=mysqli_query($db,$view);

        while($row=mysqli_fetch_array($run))
        {
            $item_id=$row[0];
            $item_cusname=$row[1];
            $item_contact=$row[2];
            $item_cusemail=$row[3];
         
          
         
        ?>

        <tr>
            <td><?php echo $item_id;  ?></td>
            <td><?php echo $item_cusname;  ?></td>
            <td><?php echo $item_contact;  ?></td>
            <td><?php echo $item_cusemail;  ?></td>
    

            
        </tr>
      <?php } ?> 
    </table>
        </div>
</div>
</form>
</div>

<?php include("footer.php");?>