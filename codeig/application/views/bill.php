<?php
error_reporting(0);
?>
<html>
<head>
<title>Bill payment </title>
</head>
<body>
 <form method="post" action="<?php echo base_url(); ?>bill/<?php echo isset($modify)?"update_bill ":"add_bill";?>">
  <input type="hidden" name="hid" value="<?php echo $modify['id']; ?>">
  <table>
  <tr>
  <td>Customer Name</td>
  <td><input value="<?php echo $modify['customer_name']; ?>"
  type="text" name="custName" placeholder="Customer name"></td>
  </tr>
  <tr>
  <td>Customer Number</td>
  <td><input value="<?php echo $modify['customer_no']; ?>" 
  type="text" name="custNumber" placeholder="Customer Number"></td>
  </tr>
  <tr>
  <td>Mobile</td>
  <td><input value="<?php echo $modify['mobile']; ?>"
  type="number" name="custMobile" placeholder="Contact Number"></td>
  </tr>
  <tr>
  <td>Amount</td>
  <td><input value="<?php echo $modify['amount']; ?>"
  type="number" name="billAmount" placeholder="Amount"></td>
  </tr>
  <tr>
  <td>Date</td>
  <td><input value="<?php echo $modify['date']; ?>"
  type="date" name="billDate" value="<?php echo date('Y-m-d'); ?>"></td>
  </tr>
  <tr>
  <td><input type="submit" value="Save Bill details"></td>
  </tr>
  </table>
</form>
<table cellspacing="5px" cellpadding="5px">
    <thead>
        <tr>
         <th>Sr. No</th>
         <th>Customer Name </th>
         <th>Customer Number</th>
         <th>Bill Amount</th>
         <th>Bill Date</th>
         <th>Contact No.</th>
         <th>Action</th>
         </tr>
    </thead>
    <tbody>

    <tbody>


<?php 
$no=1;
 foreach($bill as $billdata)
 { ?>
  <tr>
   <td><?php echo $no++; ?></td>
      <td><?php echo $billdata['customer_name'] ?></td>
   <td><?php echo $billdata['customer_no']; ?></td>
   <td><?php echo $billdata['mobile']; ?></td>
   <td><?php echo $billdata['amount']; ?></td>
   <td><?php echo $billdata['date']; ?></td>
<td>
 <a href="<?php echo base_url();?>bill/modify/<?php echo $billdata['id'];?>">Modify</a>

 <a href="<?php echo base_url();?>bill/remove/<?php echo $billdata['id'];?>">Remove</a>
</td>
   </tr>
   <?php } ?>
   </body>
 </table>
 
</html>