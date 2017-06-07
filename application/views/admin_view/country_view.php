<?php
//print_r($edit_countries);
if(!isset($edit_countries)){
  ?>
  <!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <title>Add Country</title>
  </head>
  <body>
    <form action="<?php echo base_url('Admin_controller/Admin/mange_country/add');?>" method="post">
      <input type="text" name="txt_country_code" placeholder="country codes" />
      <br>
      <input type="text" name="txt_country_name" placeholder="country name" />
      <br>
      <input type="submit" name="btn_submit" value="submit">
    </form>
  </body>
  </html>
  <?php
}
else{
  foreach ($edit_countries->result() as $edit_row) {

  }
  ?>
  <!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <title>edit Country</title>
  </head>
  <body>
    <h1> edit </h1>
    <form action="<?php echo base_url('Admin_controller/Admin/mange_country/do_update/').$edit_row->country_id;?>" method="post">
      <input type="text" name="txt_country_code" value="<?php echo $edit_row->country_code; ?>" placeholder="country codess" />
      <br>
      <input type="text" name="txt_country_name" value="<?php echo $edit_row->country_name; ?>" placeholder="country name" />
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
        <th> Country Id </th>
        <th> Country Code </th>
        <th> Country Name </th>
        <th>delete</th>
        <th>Update</th>

      </tr>
      <?php
      foreach ($countries->result() as $row) {
        ?>
        <tr>
          <td><?php echo $row->country_id; ?></td>
          <td><?php echo $row->country_code; ?></td>
          <td><?php echo $row->country_name; ?></td>
          <td><a href="<?php echo base_url('Admin_controller/Admin/mange_country/delete/').$row->country_id; ?>"> delete</a></td>
          <td><a href="<?php echo base_url('Admin_controller/Admin/mange_country/edit/').$row->country_id; ?>"> edit</a></td>
        </tr>


        <?php
      }

      ?>



    </table>
  </center>
