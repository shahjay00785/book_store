<?php
    if(!isset($edit_colleges)){
?>
  <!DOCTYPE html>
    <html>
    <head>
      <meta charset="utf-8">
      <title>Add college</title>
    </head>
    <body>
      <form method="post" action="<?php echo base_url('Admin_controller/Admin/mange_college/add');?>">
        college name
        <input type="text" name="txt_college_name" placeholder="college name"/>
        <br>
        college Adress
        <input type="text" name="txt_college_address" placeholder="address"/>
        <br>
        college Contact number
        <input type="text" name="txt_college_contactnum" placeholder="contact number"/>
        <br>
        college Website
        <input type="text" name="txt_college_website" placeholder="Website"/>
        <br>
        college desc
        <input type="textarea" name="txt_college_desc" placeholder="college desc"/>
        <br>
        city Name
        <?php $cities=$this->db->get('tbl_city'); ?>
        <select name="select_city">
          <?php foreach ($cities->result() as $city_row): ?>
            <option value="<?php echo $city_row->city_id; ?>"><?php echo $city_row->city_name; ?></option>
          <?php endforeach; ?>
        </select>
        <input type="submit" name="btn_submit" value="submit" />
      </form>
    </body>
    </html>

<?php

    }
    else{
      foreach ($edit_colleges->result() as $edit_row ){

}


    ?>
    <meta charset="utf-8">
    <!DOCTYPE html>
    <html>
    <head>
      <title>Edit college</title>
    </head>
    <body>
      <h1> edit </h1>
      <form method="post" action="<?php echo base_url('Admin_controller/Admin/mange_college/do_update/').$edit_row->college_id;?>">
        college name
        <input type="text" name="txt_college_name" value="<?php echo $edit_row->college_name;?>" placeholder="college name"/>
        <br>

        college address
        <input type="address" name="txt_college_address"  value="<?php echo $edit_row->college_address;?>"placeholder="valid address address"/>
        <br>
        college Contact number
        <input type="txt" name="txt_college_contactnum"  value="<?php echo $edit_row->college_contactnum;?>"placeholder="contact number"/>
        <br>
        college Website
        <input type="text" name="txt_college_website"  value="<?php echo $edit_row->college_website;?>"placeholder="website"/>
        <br>
        college desc
        <input type="textarea" name="txt_college_desc" value="<?php echo $edit_row->college_desc;?>"placeholder="college desc"/>
        <br>
        college city
        <select name="select_city">
          <option value="select_city">---- Select city---- </option>
          <?php $city=$this->db->get('tbl_city'); ?>
          <?php foreach ($city->result() as $row) {?>
            <?php
            if($edit_row->city_id==$row->city_id)
            {
              ?>
              <option value="<?php echo $row->city_id; ?>" selected="selected"><?php echo $row->city_name; ?></option>

              <?php
            }
            else
            {
              ?>
              <option value="<?php echo $row->city_id; ?>"><?php echo $row->city_name; ?></option>
              <?php
            }
            ?>


          <?php }  ?>
          </select>

        <input type="submit" name="btn_submit" value="submit" />
        <br>
      </form>
    </body>
    </html>

    <?php
     }


 ?>


<center>
  <table border="1">
    <tr>
      <th>college id </th>
      <th>college Name </th>
      <th>college address </th>
      <th>college contact </th>
      <th>college Website </th>

      <th>college desc</th>
        <th>college city </th>

      <th> delete </th>
      <th> update </th>
    </tr>
    <?php
    if(isset($colleges)){
      foreach ($colleges->result() as $row) {

        ?>

        <tr>
          <td> <?php echo $row->college_id; ?> </td>
          <td> <?php echo $row->college_name; ?></td>
          <td> <?php echo $row->college_address; ?> </td>
          <td> <?php echo $row->college_contactnum; ?></td>
          <td> <?php echo $row->college_website; ?></td>
          <td> <?php echo $row->college_desc; ?></td>
          <td> <?php echo $row->city_id; ?></td>


          <td><a href="<?php echo base_url('Admin_controller/Admin/mange_college/delete/').$row->college_id;?>"> delete</a> </td>
            <td><a href="<?php echo base_url('Admin_controller/Admin/mange_college/edit/').$row->college_id;?>"> edit</a> </td>
        </tr>
        <?php
      } }
      ?>


    </table>
  </center>
