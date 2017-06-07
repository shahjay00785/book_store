<?php
if(!isset($edit_publications)){

  ?>

  <!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <title>Add publication</title>
  </head>
  <body>
    <form method="post" action="<?php echo base_url('Admin_controller/Admin/mange_publication/add');?>">
      publication name
      <input type="text" name="txt_publication_name" placeholder="publication name"/>
      <br>
      publication Email
      <input type="email" name="txt_publication_email" placeholder="valid email address"/>
      <br>
      publication Contact number
      <input type="txt" name="txt_publication_contactnum" value="contact number"/>
      <br>
      publication website
      <input type="url" name="txt_publication_website" /> Male
      <br>
      publication desc
      <input type="textarea" name="txt_publication_desc" placeholder="publication desc"/>
      <br>
      publication Status
      <input type="text" name="txt_publication_status" placeholder="publication status"/>
      <br>
      <input type="submit" name="btn_submit" value="submit" />
    </form>
  </body>
  </html>

  <?php

}
else{
  foreach ($edit_publications->result() as $edit_row ){

  }


  ?>
  <!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <title>Edit publication</title>
  </head>
  <body>
    <h1> edit </h1>
    <form method="post" action="<?php echo base_url('Admin_controller/Admin/mange_publication/do_update/').$edit_row->pub_id;?>">
      publication name
      <input type="text" name="txt_publication_name" value="<?php echo $edit_row->pub_name;?>" placeholder="publication name"/>
      <br>
      publication Email
      <input type="email" name="txt_publication_email"  value="<?php echo $edit_row->pub_email;?>"placeholder="valid email address"/>
      <br>
      publication Contact number
      <input type="txt" name="txt_publication_contactnum"  value="<?php echo $edit_row->pub_contactnum;?>"placeholder="contact number"/>
      <br>
      publication website
      <input type="url" name="txt_publication_website" value="<?php echo $edit_row->pub_status;?>" />
      <br>
      publication desc
      <input type="textarea" name="txt_publication_desc" value="<?php echo $edit_row->pub_desc;?>" placeholder="publication desc"/>
      <br>
      publication Status
      <input type="text" name="txt_publication_status" value="<?php echo $edit_row->pub_status;?>"placeholder="publication status"/>
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
      <th>publication id </th>
      <th>publication Name </th>

      <th>publication email </th>
      <th>publication contact </th>
      <th>publication Website </th>
      <th>publication desc</th>
      <th>publication status</th>
      <th> delete </th>
      <th> update </th>
    </tr>
    <?php
    if(isset($publications)){
      foreach ($publications->result() as $row) {

        ?>

        <tr>
          <td> <?php echo $row->pub_id; ?> </td>
          <td> <?php echo $row->pub_name; ?></td>
          <td> <?php echo $row->pub_email; ?> </td>
          <td> <?php echo $row->pub_contactnum; ?></td>
          <td> <?php echo $row->pub_website; ?></td>
          <td> <?php echo $row->pub_desc; ?></td>
          <td> <?php echo $row->pub_status; ?></td>

          <td><a href="<?php echo base_url('Admin_controller/Admin/mange_publication/delete/').$row->pub_id;?>"> delete</a> </td>
          <td><a href="<?php echo base_url('Admin_controller/Admin/mange_publication/edit/').$row->pub_id;?>"> edit</a> </td>
        </tr>
        <?php
      } }
      ?>


    </table>
  </center>
