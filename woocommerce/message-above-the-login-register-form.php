<?php
add_action( 'woocommerce_before_customer_login_form', 'login_message' );
function login_message() {
    if ( get_option( 'woocommerce_enable_myaccount_registration' ) == 'yes' ) {
	?>
		<div class="woocommerce-info">
			<p><?php _e( 'Returning customers login. New users register for next time so you can:' ); ?></p>
			<ul>
				<li><?php _e( 'View your order history' ); ?></li>
				<li><?php _e( 'Check on your orders' ); ?></li>
				<li><?php _e( 'Edit your addresses' ); ?></li>
				<li><?php _e( 'Change your password' ); ?></li>
			</ul>
		</div>
	<?php
	}
}