1<?php include("headeradmin.php");?>
<div class="jumbotron">

<form>
  <h2 style="text-align: center;"> Registered Accounts</h2>
  <hr />
  <div class="container">
    <div class="table-responsive">
    <table class="table table-bordered table-hover table-striped" style="table-layout: relative">
        <thead>

        <tr>
            <th>Account Id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Address</th>
            <th>E-mail Address</th>
            <th>Password</th>
            <th>Delete User</th>
        </tr>
        </thead>

<?php
        include("connect.php");
        $view_users="SELECT * from customer";
        $run=mysqli_query($db,$view_users);

        while($row=mysqli_fetch_array($run))
        {
            $customer_id=$row[0];
            $fname=$row[1];
            $lname=$row[2];
            $address=$row[3];
            $email=$row[4];
            $password=$row[5];
            
        ?>

        <tr>
            <td><?php echo $customer_id;  ?></td>
            <td><?php echo $fname;  ?></td>
            <td><?php echo $lname;  ?></td>
            <td><?php echo $address;  ?></td>
            <td><?php echo $email;  ?></td>
            <td><?php echo $password;  ?></td>
  

            <td><a class="btn btn-danger" href="deleteuser_handler.php?del=<?php echo $customer_id ?>">Delete</a></td> 
        </tr>
      <?php } ?> 
    </table>
        </div>
</div>
</form>
</div>

<?php include("footer.php");?>