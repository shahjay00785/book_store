<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Ajax Search</title>
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
		var strURL="<?php echo base_url('Ajax_controller/ajax_controller/') ?>"+searchdata;
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
</head>
<body>

  <form action="" method="post">
    <input type="text" id="txt_google" name="txt_google" onkeyup="getdata();" />
    <div id="mydiv">123</div>

  </br>
</form>

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

</body>
</html>
