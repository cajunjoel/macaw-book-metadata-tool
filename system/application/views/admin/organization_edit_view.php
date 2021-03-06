<form action="<?php echo $this->config->item('base_url'); ?>admin/organization_save/" method="post">
<input type="hidden" name="li_token" value="<?php echo($token); ?>">
<?php if ($new) { ?>
<input type="hidden" name="new" value="1">
<?php } else { ?>
<input type="hidden" name="id" value="<?php echo($id); ?>">
<?php }?>
<table border="0" cellspacing="5" cellpadding="5">
	<tr>
		<td>Contributor ID:</td>
		<td><?php echo($id) ?></td>
	</tr>
	<tr>
		<td>Contributor Name:</td>
		<td><input type="text" name="name" value="<?php echo($name) ?>" size="25"> (req.)</td>
	</tr>
	<tr>
		<td>Contact Person:</td>
		<td><input type="text" name="person" value="<?php echo($person) ?>" size="25"></td>
	</tr>
	<tr>
		<td>Contact Email:</td>
		<td><input type="text" name="email" value="<?php echo($email) ?>" size="25"></td>
	</tr>
	<tr>
		<td>Contact Phone:</td>
		<td><input type="text" name="phone" value="<?php echo($phone) ?>" size="25"></td>
	</tr>
	<tr>
		<td>Address:</td>
		<td>
			<input type="text" name="address" value="<?php echo($address) ?>" size="25"><br>
			<input type="text" name="address2" value="<?php echo($address2) ?>" size="25">
		</td>
	</tr>
	<tr>
		<td>City:</td>
		<td><input type="text" name="city" value="<?php echo($city) ?>" size="25"></td>
	</tr>
	<tr>
		<td>State/Province:</td>
		<td><input type="text" name="state" value="<?php echo($state) ?>" size="25"></td>
	</tr>
	<tr>
		<td>ZIP/Postal Code:</td>
		<td><input type="text" name="postal" value="<?php echo($postal) ?>" size="25"></td>
	</tr>
	<tr>
		<td>Country:</td>
		<td><input type="text" name="country" value="<?php echo($country) ?>" size="25"></td>
	</tr>
	<?php if ($show_api_keys) { ?>
	<tr>
		<td colspan="2">Internet Archive API Keys (optional):</td>
	</tr>
	<tr>
		<td>API Key:</td>
		<td><input type="password" name="api_key" autocomplete="false" value="<?php echo($api_key) ?>" size="25" maxlength="64"> (max: 64 chars)</td>
	</tr>
	<tr>
		<td>Secret Key:</td>
		<td><input type="password" name="secret_key" autocomplete="false" value="<?php echo($secret_key) ?>" size="25" maxlength="64"> (max: 64 chars)</td>
	</tr>
	<?php } ?>
</table>

</form>
