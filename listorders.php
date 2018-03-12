<?php include("headeradmin.php");?>
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
        $view="SELECT order_id, fname .lname, contact_no, email, order_status FROM customer_order 
        JOIN customer ON order_id = customer_id";
        $run=mysqli_query($db,$view);

        while($row=mysqli_fetch_array($run))
        {
            $order_id=$row[0];
            $complete_name=$row[1];
            $contact_no=$row[2];
            $email=$row[3];
            $status=$row[4];
          
         
        ?>

        <tr>
            <td><?php echo $order_id;  ?></td>
            <td><?php echo $complete_name;  ?></td>
            <td><?php echo $contact_no;  ?></td>
            <td><?php echo $email;  ?></td>
            <td><?php echo $status; ?></td>
    

            <td><a class="btn btn-danger" href="approveorder_handler.php?del=<?php echo $item_id ?>">Approve Order</a></td> 
        </tr>
      <?php } ?> 
    </table>
        </div>
</div>
</form>
</div>

<?php include("footer.php");?>