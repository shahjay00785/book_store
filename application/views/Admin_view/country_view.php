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

		//var searchdata=document.getElementById('txt_google').value;
		var strURL="getstate.php?cid="+country_id;
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

</script>
<select id="cmb_country" name="cmb_country" onchange="getstate(this.value)">
<option>--select country--</option>
	<?php
  $countriew=$this->db->where('tbl_country');
	 foreach ($countries->result() as $row_country) {
		echo "<option value=".$country_id.">".$row_country->country_name."</option>";
	}
	?>
</select>
<select id="cmb_state" name="cmb_state">
	<option>--select any state--</option>
</select>
