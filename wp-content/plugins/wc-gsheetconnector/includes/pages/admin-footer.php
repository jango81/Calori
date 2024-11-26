<!-- plugin promotion footer-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php
function remove_footer_admin () 
{
    echo '<p id="footer-left" class="alignleft">
		Please rate <strong>WC GSheetConnector</strong> <a href="https://wordpress.org/support/plugin/wc-gsheetconnector/reviews/?filter=5#new-post" target="_blank" rel="noopener noreferrer">★★★★★</a> on <a href="https://wordpress.org/support/plugin/wc-gsheetconnector/reviews/?filter=5#new-post" target="_blank" rel="noopener">WordPress.org</a> to help us spread the word.	</p>';
}
add_filter('admin_footer_text', 'remove_footer_admin');

 ?>
<div class="gsheetconnect-footer-promotion">
  <p><?php echo esc_html( __( 'Made with ♥ by the GSheetConnector Team', 'wc-gsheetconnector' ) ); ?></p>
  <ul class="wpforms-footer-promotion-links">
    <li> <a href="https://www.gsheetconnector.com/docs/woocommerce-google-sheet-connector-pro" target="_blank"><?php echo esc_html( __( 'Support', 'wc-gsheetconnector' ) ); ?></a> </li>
    <li> <a href="https://www.gsheetconnector.com/docs/woocommerce-google-sheet-connector-pro" target="_blank"><?php echo esc_html( __( 'Docs', 'wc-gsheetconnector' ) ); ?></a> </li>
    <li> <a href="https://www.facebook.com/gsheetconnectorofficial" target="_blank"><?php echo esc_html( __( 'VIP Circle', 'wc-gsheetconnector' ) ); ?></a> </li>
    <li> <a href="https://profiles.wordpress.org/westerndeal/#content-plugins"><?php echo esc_html( __( 'Free Plugins', 'wc-gsheetconnector' ) ); ?></a> </li>
  </ul>
  <ul class="wpforms-footer-promotion-social">
    <li> <a href="https://www.facebook.com/gsheetconnectorofficial" target="_blank"> <i class="fa fa-facebook-square" aria-hidden="true"></i> </a> </li>
    <li> <a href="https://www.instagram.com/gsheetconnector/" target="_blank"> <i class="fa fa-instagram" aria-hidden="true"></i> </a> </li>
    <li> <a href="https://www.linkedin.com/in/abdullah17/" target="_blank"> <i class="fa fa-linkedin-square" aria-hidden="true"></i> </a> </li>
    <li> <a href="https://twitter.com/gsheetconnector?lang=en" target="_blank"> <i class="fa fa-twitter-square" aria-hidden="true"></i> </a> </li>
    <li> <a href="https://www.youtube.com/@GSheetConnector" target="_blank"> <i class="fa fa-youtube-square" aria-hidden="true"></i> </a> </li>
  </ul>
</div>
