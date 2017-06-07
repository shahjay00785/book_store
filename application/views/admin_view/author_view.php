<?php
    if(!isset($edit_authors)){

    ?>

    <!DOCTYPE html>
    <html>
    <head>
      <meta charset="utf-8">
      <title>Add Author</title>
    </head>
    <body>
      <form method="post" action="<?php echo base_url('Admin_controller/Admin/mange_author/add');?>">
        Author name
        <input type="text" name="txt_author_name" placeholder="author name"/>
        <br>
        Author Gender
        <input type="radio" name="radio_sex" value="male"/> Male
        <input type="radio" name="radio_sex" value="female"/> Female
        <br>
        Author Email
        <input type="email" name="txt_author_email" placeholder="valid email address"/>
        <br>
        Author Contact number
        <input type="txt" name="txt_author_contactnum" value="contact number"/>
        <br>
        Author desc
        <input type="textarea" name="txt_author_desc" placeholder="author desc"/>
        <br>
        Author Status
        <input type="text" name="txt_author_status" placeholder="author status"/>
        <br>
        <input type="submit" name="btn_submit" value="submit" />
      </form>
    </body>
    </html>

<?php

    }
    else{
      foreach ($edit_authors->result() as $edit_row ){

}


    ?>
    <!DOCTYPE html>
    <html>
    <head>
      <meta charset="utf-8">
      <title>Edit author</title>
    </head>
    <body>
      <h1> edit </h1>
      <form method="post" action="<?php echo base_url('Admin_controller/Admin/mange_author/do_update/').$edit_row->author_id;?>">
        author name
        <input type="text" name="txt_author_name" value="<?php echo $edit_row->author_name;?>" placeholder="author name"/>
        <br>
        Author Gender
        <input type="radio" name="radio_sex" value="male"
        <?php echo ($edit_row->author_gender=='male')?'checked':'' ?> /> Male
        <input type="radio" name="radio_sex" value="female"
        <?php echo ($edit_row->author_gender=='female')?'checked':'' ?>/> Female
        <br>
        Author Email
        <input type="email" name="txt_author_email"  value="<?php echo $edit_row->author_email;?>"placeholder="valid email address"/>
        <br>
        Author Contact number
        <input type="txt" name="txt_author_contactnum"  value="<?php echo $edit_row->author_contactnum;?>"placeholder="contact number"/>
        <br>
        author desc
        <input type="textarea" name="txt_author_desc" value="<?php echo $edit_row->author_desc;?>"placeholder="author desc"/>
        <br>
        author Status
        <input type="text" name="txt_author_status" value="<?php echo $edit_row->author_status;?>"placeholder="author status"/>
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
      <th>author id </th>
      <th>author Name </th>
      <th>author gender </th>
      <th>author email </th>
      <th>author contact </th>
      <th>author desc</th>
      <th>author status</th>
      <th> delete </th>
      <th> update </th>
    </tr>
    <?php
    if(isset($authors)){
      foreach ($authors->result() as $row) {

        ?>

        <tr>
          <td> <?php echo $row->author_id; ?> </td>
          <td> <?php echo $row->author_name; ?></td>
          <td> <?php echo $row->author_gender; ?> </td>
          <td> <?php echo $row->author_email; ?> </td>
            <td> <?php echo $row->author_contactnum; ?></td>
          <td> <?php echo $row->author_desc; ?></td>
            <td> <?php echo $row->author_status; ?></td>

          <td><a href="<?php echo base_url('Admin_controller/Admin/mange_author/delete/').$row->author_id;?>"> delete</a> </td>
            <td><a href="<?php echo base_url('Admin_controller/Admin/mange_author/edit/').$row->author_id;?>"> edit</a> </td>
        </tr>
        <?php
      } }
      ?>


    </table>
  </center>
