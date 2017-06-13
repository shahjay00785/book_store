<style type="text/css" xml:space="preserve">
BODY, P,TD{ font-family: Arial,Verdana,Helvetica, sans-serif; font-size: 10pt }
A{font-family: Arial,Verdana,Helvetica, sans-serif;}
B {	font-family : Arial, Helvetica, sans-serif;	font-size : 12px;	font-weight : bold;}
.error_strings{ font-family:Verdana; font-size:14px; color:#660000; background-color:#ff0;}
</style>
<script language="JavaScript" src="gen_validatorv4.js"
    type="text/javascript" xml:space="preserve"></script>
<form id="myform" name="myform">
username:      <div id='myform_txt_name_errorloc' class="error_strings"></div><input type="text" id="txt_name" name="txt_name" />
<br />
Email:      <div id='myform_txt_email_errorloc' class="error_strings"></div><input type="text" id="txt_email" name="txt_email" />
<br />
Phone:      <div id='myform_txt_phone_errorloc' class="error_strings"></div><input type="text" id="txt_phone" name="txt_phone" /><br />
Country:<div id='myform_cmb_country_errorloc' class="error_strings"></div>
<select id="cmb_country" name="cmb_country">
<option value="0">--select any--</option>
<option value="1">india</option>
<option value="2">usa</option>
</select>
<br/>
Gender:
<div id='myform_rdo_gender_errorloc' class="error_strings"></div>
<input type="radio" id="rdo_gender" name="rdo_gender" value="1" />Male
<input type="radio" id="rdo_gender" name="rdo_gender" value="2" />Female
<br />
Hobbies:
<div id='myform_chk_hobbie_errorloc' class="error_strings"></div>

<input type="checkbox" id="chk_hobbie[]" name="chk_hobbie[]" value="cricket" />Cricket
<input type="checkbox" id="chk_hobbie[]" name="chk_hobbie[]" value="carrom" />Carrom
<input type="checkbox" id="chk_hobbie[]" name="chk_hobbie[]" value="volley" />Volleyball
<input type="checkbox" id="chk_hobbie[]" name="chk_hobbie[]" value="songs" />Songs
<br />
<input type="submit" id="btn_submit" name="btn_submit" />
</form>

<script language="JavaScript" type="text/javascript"
    xml:space="preserve">//<![CDATA[
//You should create the validator only after the definition of the HTML form
  var frmvalidator  = new Validator("myform");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();

    frmvalidator.addValidation("txt_name","req","Please enter your Name");
	frmvalidator.addValidation("txt_name","alpha","Please enter alphabets only");
	frmvalidator.addValidation("txt_email","email","please enter email properly");
	frmvalidator.addValidation("txt_phone","dec","please enter numeric data only");
	frmvalidator.addValidation("cmb_country","dontselect=0","please select any country");
	frmvalidator.addValidation("rdo_gender","selone","please select any gender");
	frmvalidator.addValidation("chk_hobbie[]","selmin=2","please select any two hobbie ");
	frmvalidator.addValidation("chk_hobbie[]","selmax=3","please select not more than 3 hobbie ");
	
 //]]></script>