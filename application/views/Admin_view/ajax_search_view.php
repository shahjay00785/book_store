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

function getdata()
{

  var searchdata=document.getElementById('txt_google').value;
  var strURL="<?php echo base_url('Ajax_controller/search_controller/databook/') ?>"+searchdata;
  alert(strURL);
  var req = getXMLHTTP();

  if (req) {

    req.onreadystatechange = function() {
      if (req.readyState == 4) {
        // only if "OK"
        if (req.status == 200) {
          document.getElementById('mydiv').innerHTML=req.responseText;
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



  <form action="" method="post">
    <input type="text" id="txt_google" name="txt_google" onkeyup="getdata();" />
    <div id="mydiv"></div>

  </br>
</form>








</br>

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

	function getstate(country_id)
	{
		alert(country_id);
		//var searchdata=document.getElementById('txt_google').value;
		var strURL="<?php echo base_url('Ajax_controller/Ajax_controller/getstate/'); ?>"+country_id;
		alert(strURL);
		var req = getXMLHTTP();

		if (req) {

			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {
						document.getElementById('cmb_state').innerHTML=req.responseText;
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}
			}
			req.open("GET", strURL, true);
			req.send(null);

		}
	}

	function getcity(state_id)
	{
		alert(state_id);
		//var searchdata=document.getElementById('txt_google').value;
		var strURL="<?php echo base_url('Ajax_controller/Ajax_controller/getcity/'); ?>"+state_id;
		alert(strURL);
		var req = getXMLHTTP();

		if (req) {

			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {
						document.getElementById('cmb_city').innerHTML=req.responseText;
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

<select id="cmb_country" name="cmb_country" onchange="getstate(this.value)">
<option>--select country--</option>
	<?php
  $countriew=$this->db->where('tbl_country');
	 foreach ($countries->result() as $row_country) {
		echo "<option value=".$row_country->country_id.">".$row_country->country_name."</option>";
	}
	?>
</select>

<select id="cmb_state" name="cmb_state"  onchange="getcity(this.value)">
	<option>--select any state--</option>
</select>


<select id="cmb_city" name="cmb_city">
	<option>--select any city--</option>
</select>



<table align="center">
  <tr>
    <td>#</td>
    <td>Book Name</td>
    <td>Author Name</td>
    <td>Book price</td>
    <td>Book isbn</td>
    <td>Publisher Name</td>
  </tr>
</table>
