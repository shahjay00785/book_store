<?php
//print_r($edit_states);
if(!isset($edit_states)){
  ?>
  <!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <title>Add state</title>
  </head>
  <body>
    <form action="<?php echo base_url('Admin_controller/Admin/mange_state/add');?>" method="post">
      <input type="text" name="txt_state_name" placeholder="state name" />
      <br>
      <input type="text" name="txt_state_code" placeholder="state codes" />
      <br>
      <?php $countries=$this->db->get('tbl_country'); ?>
      <select name="select_country">
        <?php foreach ($countries->result() as $county_row): ?>
          <option value="<?php echo $county_row->country_id; ?>"><?php echo $county_row->country_name; ?></option>
        <?php endforeach; ?>
      </select>
      <input type="submit" name="btn_submit" value="submit">
    </form>
  </body>
  </html>
  <?php
}
else{
  foreach ($edit_states->result() as $edit_row) {

  }
  ?>
  <!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <title>edit state</title>
  </head>
  <body>
    <h1> edit </h1>
    <form action="<?php echo base_url('Admin_controller/Admin/mange_state/do_update/').$edit_row->state_id;?>" method="post">
      <input type="text" name="txt_state_code" value="<?php echo $edit_row->state_code; ?>" placeholder="state codess" />
      <br>
      <input type="text" name="txt_state_name" value="<?php echo $edit_row->state_name; ?>" placeholder="state name" />
      <br>
      <select name="select_country">
        <option value="select_city">---- Select Country---- </option>
        <?php $country=$this->db->get('tbl_country'); ?>
        <?php foreach ($country->result() as $row) {?>
          <?php
          if($edit_row->country_id==$row->country_id)
          {
            ?>
            <option value="<?php echo $row->country_id; ?>" selected="selected"><?php echo $row->country_name; ?></option>

            <?php
          }
          else
          {
            ?>
            <option value="<?php echo $row->country_id; ?>"><?php echo $row->country_name; ?></option>
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
        <th> state Id </th>
        <th> state Code </th>
        <th> state Name </th>
        <th> country Name </th>
        <th>delete</th>
        <th>Update</th>

      </tr>
      <?php
      foreach ($states->result() as $row) {
        ?>
        <tr>
          <td><?php echo $row->state_id; ?></td>
          <td><?php echo $row->state_code; ?></td>
          <td><?php echo $row->state_name; ?></td>
          <td><?php echo $row->country_id; ?> </td>
          <td><a href="<?php echo base_url('Admin_controller/Admin/mange_state/delete/').$row->state_id; ?>"> delete</a></td>
          <td><a href="<?php echo base_url('Admin_controller/Admin/mange_state/edit/').$row->state_id; ?>"> edit</a></td>
        </tr>


        <?php
      }

      ?>



    </table>
  </center>
