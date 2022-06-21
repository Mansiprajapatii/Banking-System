<?php
include("customer.php");
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>
  <h2 class=" fs-2 mt-5 ">CUSTOMER'S DETAILS</h2>
<div class="container">
 <div class="row">
   <div class="col-sm-8">
    <?php echo $deleteMsg??''; ?>
    <div class="table-responsive mx-auto ">
      <table class="table  table-hover mt-5">
       <thead class="thead-dark"><tr><th>S.N</th>

         <th >Account_no.</th>
         <th>First Name</th>
         <th>Last Name</th>
         <th>Balance</th>
    </thead>
    <tbody>
  <?php
      if(is_array($fetchData)){      
      $sn=1;
      foreach($fetchData as $data){
    ?>
      <tr>
      <td class="table-danger table-bordered shadow-lg p-3 mb-5 bg-body rounded"><?php echo $sn; ?></td>
      <td class="table-danger table-bordered shadow-lg p-3 mb-5 bg-body rounded"><?php echo $data['acc_no']??''; ?></td>
      <td class="table-danger table-bordered shadow-lg p-3 mb-5 bg-body rounded"><?php echo $data['fname']??''; ?></td>
      <td class="table-danger table-bordered shadow-lg p-3 mb-5 bg-body rounded"><?php echo $data['lname']??''; ?></td>
      <td class="table-danger table-bordered shadow-lg p-3 mb-5 bg-body rounded"><?php echo $data['balance']??''; ?></td> 
     </tr>
     <?php
      $sn++;}}else{ ?>
      <tr>
        <td colspan="8">
    <?php echo $fetchData; ?>
  </td>
    <tr>
    <?php
    }?>
    </tbody>
     </table>
   </div>
</div>
</div>
</div>
</body>
</html>