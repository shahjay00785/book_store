<script language="javascript" type="text/javascript">
function getXMLHTTP() { //fuction to return the xml http object
	var xmlhttp=false;
	try{
		xmlhttp=new XMLHttpRequest();
	}
	catch(e)	{
		try{
			xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
		}
		catch(e){
			try{
				xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
			}
			catch(e){
				xmlhttp=false;
			}
		}
	}

	return xmlhttp;
}



function getcolleges(city_id)
{
	//var searchdata=document.getElementById('txt_google').value;
	var strURL="<?php echo base_url('Ajax_controller/Ajax_controller/getcolleges/'); ?>"+city_id;
	alert(strURL);
	var req = getXMLHTTP();

	if (req) {

		req.onreadystatechange = function() {
			if (req.readyState == 4) {
				// only if "OK"
				if (req.status == 200) {
					document.getElementById('cmb_college').innerHTML=req.responseText;
				} else {
					alert("There was a problem while using XMLHTTP:\n" + req.statusText);
				}
			}
		}
		req.open("GET", strURL, true);
		req.send(null);

	}
}
function getbooks(college_id)
{
	//var searchdata=document.getElementById('txt_google').value;
	var strURL="<?php echo base_url('Ajax_controller/Ajax_controller/getbooks/'); ?>"+college_id;
	var req = getXMLHTTP();
	alert(strURL);

	if (req) {

		req.onreadystatechange = function() {
			if (req.readyState == 4) {
				// only if "OK"
				if (req.status == 200) {
					document.getElementById('product_div').innerHTML=req.responseText;
				} else {
					alert("There was a problem while using XMLHTTP:\n" + req.statusText);
				}
			}
		}
		req.open("GET", strURL, true);
		req.send(null);

	}
}



function getcategory(cat_id)
{
	//var searchdata=document.getElementById('txt_google').value;
	var strURL="<?php echo base_url('Ajax_controller/Ajax_controller/getcat/'); ?>"+cat_id;
	var req = getXMLHTTP();
	alert(strURL);

	if (req) {

		req.onreadystatechange = function() {
			if (req.readyState == 4) {
				// only if "OK"
				if (req.status == 200) {
					document.getElementById('product_div').innerHTML=req.responseText;
				} else {
					alert("There was a problem while using XMLHTTP:\n" + req.statusText);
				}
			}
		}
		req.open("GET", strURL, true);
		req.send(null);

	}
}


</script>

<div class="sub-cate">
	<div class=" top-nav rsidebar span_1_of_left">
		<h3 class="cate">Select By College</h3>

		<div class="col-lg-14">
			<b>city</b>
			<select class="form-control"id="select" onchange="getcolleges(this.value);">
				<option value="">------------select city---------------------</option>
				<?php
				$cities=$this->db->get("tbl_city");
				foreach($cities->result() as $city_row)
				{
					echo "<option value='".$city_row->city_id."'>".$city_row->city_name."</option>";
				}
				?>
			</select>




		</div>
		<div class="col-lg-14">
			<b>college</b>
			<select class="form-control" id="cmb_college" name="cmb_college" onchange="getbooks(this.value)">
				<option value="">------------select college---------------------</option>

			</select>




		</div>

	</div>
	<div class=" top-nav rsidebar span_1_of_left">
		<h3 class="cate">Select By College</h3>

		<div class="col-lg-14">
			<b>Category</b>
			<select class="form-control"id="select" onchange="getcategory(this.value);">
				<option value="">------------select category---------------------</option>
				<?php
				$category=$this->db->get_where("tbl_category",array('cat_parent_id'=>0));
				foreach($category->result() as $category_row)
				{
					echo "<option value='".$category_row->cat_id."'>".$category_row->cat_name."</option>";
				}
				?>
			</select>




		</div>
		<div class="col-lg-14">
			Subcategory
			<select class="form-control"id="select">
				<option value="">------------select college---------------------</option>
				<option value="">------------select college---------------------</option>
				<option value="">------------select college---------------------</option>

			</select>




		</div>
		<div class="col-lg-14">
			Publisher
			<select class="form-control"id="select">
				<option value="">------------select college---------------------</option>
				<option value="">------------select college---------------------</option>
				<option value="">------------select college---------------------</option>

			</select>




		</div>
		<div class="col-lg-14">
			Semseter
			<select class="form-control"id="select">
				<option value="">------------select college---------------------</option>
				<option value="">------------select college---------------------</option>
				<option value="">------------select college---------------------</option>

			</select>




		</div>
		<div class="col-lg-14">
			Author
			<select class="form-control"id="select">
				<option value="">------------select college---------------------</option>
				<option value="">------------select college---------------------</option>
				<option value="">------------select college---------------------</option>

			</select>




		</div>

	</div>


</div>
</div>
<!--initiate javascript for menu-->
<script type="text/javascript">
$(function() {
	var menu_ul = $('.menu > li > ul'),
	menu_a  = $('.menu > li > a');
	menu_ul.hide();
	menu_a.click(function(e) {
		e.preventDefault();
		if(!$(this).hasClass('active')) {
			menu_a.removeClass('active');
			menu_ul.filter(':visible').slideUp('normal');
			$(this).addClass('active').next().stop(true,true).slideDown('normal');
		} else {
			$(this).removeClass('active');
			$(this).next().stop(true,true).slideUp('normal');
		}
	});

});
</script>
<!--endof javascript men-->

</div>
<!--end menu-->
<div class="clearfix"> </div>
</div>
