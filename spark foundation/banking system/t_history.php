<?php
include("t_fatch.php");
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<h2 class=" fs-2 mt-5 ">TRANSACTION HISTORY</h2>
<div class="container">
 <div class="row">
   <div class="col-sm-8">
    <?php echo $deleteMsg??''; ?>
    <div class="table-responsive mx-auto">
      <table class="table table-bordered table-hover mt-5">
       <thead class="thead-dark"><tr>

         <th>T_Id</th>
         <th>From_acc</th>
         <th>To_acc</th>
         <th>Amount</th>
    </thead>
    <tbody>
  <?php
      if(is_array($fetchData)){      
      $sn=1;
      foreach($fetchData as $data){
    ?>
      <tr>
      <td class="table-danger table-bordered shadow-lg p-3 mb-5 bg-body rounded" ><?php echo $data['t_id']??''; ?></td>
      <td class="table-danger table-bordered shadow-lg p-3 mb-5 bg-body rounded"><?php echo $data['f_acc']??''; ?></td>
      <td class="table-danger table-bordered shadow-lg p-3 mb-5 bg-body rounded"><?php echo $data['t_acc']??''; ?></td>
      <td class="table-danger table-bordered shadow-lg p-3 mb-5 bg-body rounded"><?php echo $data['amount']??''; ?></td> 
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