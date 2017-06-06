<?php
    if(!isset($edit_categories)){

    ?>

    <!DOCTYPE html>
    <html>
    <head>
      <meta charset="utf-8">
      <title>Add Category</title>
    </head>
    <body>
      <form method="post" action="<?php echo base_url('Admin_controller/Admin/mange_category/add');?>">
        category name
        <input type="text" name="txt_cat_name" placeholder="category name"/>
        <br>
        category img
        <input type="file" name="txt_cat_img"/>
        <br>
        category desc
        <input type="textarea" name="txt_cat_desc" placeholder="category desc"/>
        <br>
        category Status
        <input type="text" name="txt_cat_status" placeholder="category status"/>
        <br>
        <input type="submit" name="btn_submit" value="submit" />
      </form>
    </body>
    </html>

<?php

    }
    else{
      foreach ($edit_categories->result() as $edit_row ){

}


    ?>
    <!DOCTYPE html>
    <html>
    <head>
      <meta charset="utf-8">
      <title>Edit Category</title>
    </head>
    <body>
      <h1> edit </h1>
      <form method="post" action="<?php echo base_url('Admin_controller/Admin/mange_category/do_update/').$edit_row->cat_id;?>">
        category name
        <input type="text" name="txt_cat_name" value="<?php echo $edit_row->cat_name;?>" placeholder="category name"/>
        <br>
        category img
        <input type="file" name="txt_cat_img"/>
        <br>
        category desc
        <input type="textarea" name="txt_cat_desc" value="<?php echo $edit_row->cat_desc;?>"placeholder="category desc"/>
        <br>
        category Status
        <input type="text" name="txt_cat_status" value="<?php echo $edit_row->cat_status;?>"placeholder="category status"/>
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
      <th>category id </th>
      <th>category Name </th>
      <th>category Img </th>
      <th>category status </th>
      <th>category descrtion </th>
      <th>category update date</th>
      <th> delete </th>
      <th> update </th>
    </tr>
    <?php
    if(isset($categories)){
      foreach ($categories->result() as $row) {

        ?>

        <tr>
          <td> <?php echo $row->cat_id; ?> </td>
          <td> <?php echo $row->cat_name; ?></td>
          <td> <?php echo $row->cat_img; ?> </td>
          <td> <?php echo $row->cat_status; ?> </td>
          <td> <?php echo $row->cat_desc; ?></td>
          <td><?php echo $row->cat_update_date; ?></td>
          <td><a href="<?php echo base_url('Admin_controller/Admin/mange_category/delete/').$row->cat_id;?>"> delete</a> </td>
            <td><a href="<?php echo base_url('Admin_controller/Admin/mange_category/edit/').$row->cat_id;?>"> edit</a> </td>
        </tr>
        <?php
      } }
      ?>


    </table>
  </center>
