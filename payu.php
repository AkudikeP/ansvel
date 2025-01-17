<?php
// Merchant key here as provided by Payu
$MERCHANT_KEY = "wn6Kz96s";
// Merchant Salt as provided by Payu
$SALT = "6pIW85iiCB";
// Change to https://secure.payu.in for LIVE mode
//$PAYU_BASE_URL = "https://test.payu.in";
$PAYU_BASE_URL = "https://secure.payu.in";
$action = '';
$posted = array();
if(!empty($_POST)) 
{
	foreach($_POST as $key => $value) {$posted[$key] = $value;}
}

$formError = 0;
if(empty($posted['txnid'])) {
// Generate random transaction id
$txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
} else {
$txnid = $posted['txnid'];
}
$hash = '';
// Hash Sequence
$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
if(empty($posted['hash']) && sizeof($posted) > 0) {
if(
empty($posted['key'])
|| empty($posted['txnid'])
|| empty($posted['amount'])
|| empty($posted['firstname'])
|| empty($posted['email'])
|| empty($posted['phone'])
|| empty($posted['productinfo'])
|| empty($posted['surl'])
|| empty($posted['furl'])
|| empty($posted['service_provider'])
) {
$formError = 1;
} else {
//$posted['productinfo'] = json_encode(json_decode('[{"name":"tutionfee","description":"","value":"500","isRequired":"false"},{"name":"developmentfee","description":"monthly tution fee","value":"1500","isRequired":"false"}]'));
$hashVarsSeq = explode('|', $hashSequence);
$hash_string = '';
foreach($hashVarsSeq as $hash_var) {
$hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
$hash_string .= '|';
}
$hash_string .= $SALT;
$hash = strtolower(hash('sha512', $hash_string));
$action = $PAYU_BASE_URL . '/_payment';
}
} elseif(!empty($posted['hash'])) {
$hash = $posted['hash'];
$action = $PAYU_BASE_URL . '/_payment';
}
?>
<html>
<head>
<script>
var hash = '<?php echo $hash ?>';
function submitForm() {
if(hash == '') {
return;
}
var payuForm = document.forms.payuForm;
payuForm.submit();
}
</script>
</head>
<body onLoad="submitForm()">
<h2>PayU Form</h2>
<br/>
<?php if($formError) { ?>
<span style="color:red">Please fill all mandatory fields.</span>
<br/>
<br/>
<?php } ?>
<form action="<?php echo $action; ?>" method="post" name="payuForm">
<input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
<input type="hidden" name="hash" value="<?php echo $hash ?>"/>
<input type="hidden" name="txnid" value="<?php echo $txnid ?>" />
<table>
<tr>
<td><b>Mandatory Parameters</b></td>
</tr>
<tr>
<td>Amount: </td>
<td><input name="amount" value="2" /></td>
<td>First Name: </td>
<td><input name="firstname" id="firstname" value="Gopal" /></td>
</tr>
<tr>
<td>Email: </td>
<td><input name="email" id="email" value="sarathegopal@gmail.com" /></td>
<td>Phone: </td>
<td><input name="phone" value="8224030184" /></td>
</tr>
<tr>
<td>Product Info: </td>
<td colspan="3"><textarea name="productinfo">mouse</textarea></td>
</tr>
<tr>
<td>Success URI: </td>
<td colspan="3"><input name="surl" value="<?php echo (empty($posted['surl'])) ? '' : $posted['surl'] ?>" size="64" /></td>
</tr>
<tr>
<td>Failure URI: </td>
<td colspan="3"><input name="furl" value="<?php echo (empty($posted['furl'])) ? '' : $posted['furl'] ?>" size="64" /></td>
</tr>
<tr>
<td colspan="3"><input type="hidden" name="service_provider" value="payu_paisa" size="64" /></td>
</tr>
<tr>
<?php if(!$hash) { ?>
<td colspan="4"><input type="submit" value="Submit" /></td>
<?php } ?>
</tr>
</table>
</form>
</body>
</html>