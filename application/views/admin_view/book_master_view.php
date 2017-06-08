
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Add Book Master</title>
</head>
<body>
  <form action="<?php echo base_url('Admin_controller/Admin/mange_book_master/add') ?>" method="post">
    book category
    <?php $categories=$this->db->get('tbl_category'); ?>
    <select name="select_category">
      <option value="select_category">---select catgory---</option>
      <?php foreach ($categories->result() as $category_row): ?>
        <option value="<?php echo $category_row->cat_id; ?>"><?php echo $category_row->cat_name; ?> </option>
      <?php  endforeach; ?>
    </select>
  </br>
  book name
  <input type="text" name="txt_book_master_name" placeholder="book category">
</br>
book isbn
<input type="text" name="txt_book_master_isbn" placeholder="book isbn">
</br>
book  img
<input type="file" name="txt_book_master_img" >
</br>

book author
<?php $authors=$this->db->get('tbl_author'); ?>
<select name="select_author">
  <option value="select_author">---select author---</option>
  <?php foreach ($authors->result() as $author_row): ?>
    <option value="<?php echo $author_row->author_id; ?>"><?php echo $author_row->author_name; ?> </option>
  <?php  endforeach; ?>
</select>
</br>
book publisher
<?php $publishers=$this->db->get('tbl_publisher'); ?>
<select name="select_publisher">
  <option value="select_publisher">---select publisher---</option>
  <?php foreach ($publishers->result() as $publisher_row): ?>
    <option value="<?php echo $publisher_row->pub_id; ?>"><?php echo $publisher_row->pub_name; ?> </option>
  <?php  endforeach; ?>
</select>
</br>
book price
<input type="text" name="txt_book_master_price" placeholder="book price">
</br>
book desc
<input type="text" name="txt_book_master_des" placeholder="book desc">
</br>
book status
<?php $statuses=$this->db->get('tbl_book_status'); ?>
<select name="select_status">
  <option value="select_status">---select status---</option>
  <?php foreach ($statuses->result() as $status_row): ?>
    <option value="<?php echo $status_row->book_status_id; ?>"><?php echo $status_row->book_status_name; ?> </option>
  <?php  endforeach; ?>
</select>
</br>
<input type="submit" name="btn_submit" value="submit"/>



</form>

</body>
</html>
(`book_master_id`, `cat_id`, `book_master_name`, `book_master_img`,
`author_id`, `pub_id`, `book_master_isbn`, `book_status_id`, `book_master_desc`,
`book_org_price`)


<center>
  <table border="1">
    <tr>
      <th> Book master id </th>
      <th> Book master name </th>
      <th> Book master category </th>
      <th> Book master  img</th>
      <th> Book Price</th>
      <th> Book Author</th>
      <th> Book Publication</th>
      <th> Book ISBN</th>
      <th> Book Status</th>
      <th> Book Desc</th>
      <th> delete</th>
      <th> update</th>
    </tr>

    <?php

    foreach ($state->result() as $row):
      ?>

      <tr>
        <td> <?php echo $row->book_master_id; ?></td>
        <td><?php echo $row->book_master_name; ?></td>
        <td> <?php echo $row->cat_id; ?></td>
        <td>img</td>
        <td><?php echo $row->book_org_price; ?></td>
        <td><?php echo $row->author_id; ?></td>
        <td><?php echo $row->pub_id; ?></td>
        <td><?php echo $row->book_master_isbn;?></td>
        <td><<?php echo $row->book_status_id; ?></td>
        <td><<?php echo $row->book_master_desc; ?></td>
        <td><a href="<?php echo base_url('Admin_controller/Admin/mange_book_master/delete/').$row->book_master_id; ?>"> delete </a> </td>
        <td><a href="<?php echo base_url('Admin_controller/Admin/mange_book_master/edit/').$row->book_master_id; ?>"> edit </a> </td>

      </tr>
      <?php
    endforeach;
    ?>
  </table>
</center>
