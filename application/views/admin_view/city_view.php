<?php
//print_r($edit_cities);
if(!isset($edit_cities)){
  ?>
  <!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <title>Add city</title>
  </head>
  <body>
    <form action="<?php echo base_url('Admin_controller/Admin/mange_city/add');?>" method="post">
      <input type="text" name="txt_city_name" placeholder="city name" />
      <br>
      <input type="text" name="txt_city_code" placeholder="city codes" />
      <br>
      <?php $states=$this->db->get('tbl_state'); ?>
      <select name="select_state">
        <?php foreach ($states->result() as $state_row): ?>
          <option value="<?php echo $state_row->state_id; ?>"><?php echo $state_row->state_name; ?></option>
        <?php endforeach; ?>
      </select>
      <input type="submit" name="btn_submit" value="submit">
    </form>
  </body>
  </html>
  <?php
}
else{
  foreach ($edit_cities->result() as $edit_row) {

  }
  ?>
  <!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <title>edit city</title>
  </head>
  <body>
    <h1> edit </h1>
    <form action="<?php echo base_url('Admin_controller/Admin/mange_city/do_update/').$edit_row->city_id;?>" method="post">
      <input type="text" name="txt_city_code" value="<?php echo $edit_row->city_code; ?>" placeholder="city codess" />
      <br>
      <input type="text" name="txt_city_name" value="<?php echo $edit_row->city_name; ?>" placeholder="city name" />
      <br>
      <select name="select_state">
        <option value="select_city">---- Select state---- </option>
        <?php $state=$this->db->get('tbl_state'); ?>
        <?php foreach ($state->result() as $row) {?>
          <?php
          if($edit_row->state_id==$row->state_id)
          {
            ?>
            <option value="<?php echo $row->state_id; ?>" selected="selected"><?php echo $row->state_name; ?></option>

            <?php
          }
          else
          {
            ?>
            <option value="<?php echo $row->state_id; ?>"><?php echo $row->state_name; ?></option>
            <?php
          }
          ?>


        <?php }  ?>
        </select>
        </br>
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
        <th> city Id </th>
        <th> city Code </th>
        <th> city Name </th>
        <th> state Name </th>
        <th>delete</th>
        <th>Update</th>

      </tr>
      <?php
      foreach ($cities->result() as $row) {
        ?>
        <tr>
          <td><?php echo $row->city_id; ?></td>
          <td><?php echo $row->city_code; ?></td>
          <td><?php echo $row->city_name; ?></td>
          <td><?php echo $row->state_id; ?> </td>
          <td><a href="<?php echo base_url('Admin_controller/Admin/mange_city/delete/').$row->city_id; ?>"> delete</a></td>
          <td><a href="<?php echo base_url('Admin_controller/Admin/mange_city/edit/').$row->city_id; ?>"> edit</a></td>
        </tr>


        <?php
      }

      ?>



    </table>
  </center>
