<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>
<div class="wrap">
<h1 id="add-whitelist-hostname">
Obfuscate Admin <sup>by JW</sup></h1>
<p>Obfoscate wordpress admin url and prevent casual discovery. Returns 404 status from direct requests to /wp-admin on non-whitelisted host</p>
<form method="post"  id="hostname" class="validate" novalidate="novalidate">
<input name="action" type="hidden" value="hostname">
<?php wp_nonce_field( 'hostname_action', 'nonce_field' ); 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
if (  
    !isset( $_POST['hostname'] )
	|| !isset( $_POST['nonce_field'] ) 
    || ! wp_verify_nonce( $_POST['nonce_field'], 'hostname_action' ) 
) {
   //hostname or nonce missing
   print 'Sorry, your nonce did not verify.';
   exit;
} else {
	//update whitelist
	update_option('oa-whitelist-hostname', sanitize_text_field($_POST['hostname']), true);
}
} else {
	// not a post
}
?>
	<table class="form-table">
	<tbody><tr class="form-field form-required">
		<th scope="row"><label for="hostname">Whitelist Hostname <span class="description">(required)</span></label></th>
		<td><input name="hostname" type="text" id="hostname" value="<?php echo sanitize_text_field(get_option( 'oa-whitelist-hostname' ))  ?>" aria-required="true" autocapitalize="none" autocorrect="off" maxlength="60"></td>
	</tr>
	</tbody>
	</table>
	<p class="submit"><input type="submit" name="addhostname" id="addhostname" class="button button-primary" value="Update Hostname"></p>
</form>
</div>