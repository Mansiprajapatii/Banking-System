<?php 

include("data.php");
$dbb = $conn;

$sql = 'UPDATE `customer` SET `balance` = (`balance` - '.$_POST['amt'].') WHERE `acc_no` = '.$_POST['facc'].' ;
        UPDATE `customer` SET `balance` = (`balance` + '.$_POST['amt'].') WHERE `acc_no` = '.$_POST['tacc'].' ;
        INSERT INTO `t_history` (`f_acc` , `t_acc` , `amount`) values('.$_POST['facc'].' , '.$_POST['tacc'].', '.$_POST['amt'].') ';

if($dbb->multi_query($sql)===TRUE){
    echo "Transaction successfully";
}else {
    echo "Transaction Failed!" ;
}

$conn->close();

?>