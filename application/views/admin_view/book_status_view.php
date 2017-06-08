<?php
//print_r($edit_statuses);
if(!isset($edit_statuses)){
  ?>
  <!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <title>Add status</title>
  </head>
  <body>
    <form action="<?php echo base_url('Admin_controller/Admin/mange_book_status/add');?>" method="post">
      <input type="text" name="txt_status_code" placeholder="status codes" />
      <br>
      <input type="text" name="txt_status_name" placeholder="status name" />
      <br>
      <input type="submit" name="btn_submit" value="submit">
    </form>
  </body>
  </html>
  <?php
}
else{
  foreach ($edit_statuses->result() as $edit_row) {

  }
  ?>
  <!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <title>edit status</title>
  </head>
  <body>
    <h1> edit </h1>
    <form action="<?php echo base_url('Admin_controller/Admin/mange_book_status/do_update/').$edit_row->book_status_id;?>" method="post">
      <input type="text" name="txt_status_code" value="<?php echo $edit_row->book_status_code; ?>" placeholder="status codess" />
      <br>
      <input type="text" name="txt_status_name" value="<?php echo $edit_row->book_status_name; ?>" placeholder="status name" />
      <br>
      <input type="submit" name="btn_submit" value="submit">
    </form>
  </body>
  </html>
  <?php
  }
?>

  <center>
    <table border="1">
      <tr>
        <th> status Id </th>
        <th> status Code </th>
        <th> status Name </th>
        <th>delete</th>
        <th>Update</th>

      </tr>
      <?php
      foreach ($statuses->result() as $row) {
        ?>
        <tr>
          <td><?php echo $row->book_status_id; ?></td>
          <td><?php echo $row->book_status_code; ?></td>
          <td><?php echo $row->book_status_name; ?></td>
          <td><a href="<?php echo base_url('Admin_controller/Admin/mange_book_status/delete/').$row->book_status_id; ?>"> delete</a></td>
          <td><a href="<?php echo base_url('Admin_controller/Admin/mange_book_status/edit/').$row->book_status_id; ?>"> edit</a></td>
        </tr>


        <?php
      }

      ?>



    </table>
  </center>
