<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
   exit();
}

?>

<div class="wrap gs-form" id="opener">
         <div class="card" id="googlesheet">
            <div class="wrap gs-form">
               <div class="gs-woo-gs-card">
                <h2>
                  <span><?php echo __('Beta Opt-in', 'wc-gsheetconnector'); ?></span>
                  <span class="pro-ver">PRO</span>
                </h2>
                <hr/>

                <div  style="opacity: 0.8;
                  pointer-events: none;">
               <p><?php echo __('Turn on the Beta Version feature to get notified about new beta releases. The beta version will not install automatically and you always have the option to ignore it.', 'wc-gsheetconnector'); ?>
               </p>

            <label class="switch">
            <input type="checkbox" name="beta-version-setting" value="" class="beta-version-setting">
            <span class="slider round"></span>
            </label>
            <label><strong style="font-size: 16px;"><?php echo __('Enable Beta Version', 'wc-gsheetconnector'); ?></strong></label>
            <p><?php echo __('Get updates for pre-release versions', 'wc-gsheetconnector'); ?></p>
            <input type="hidden" name="gs-ajax-nonce" id="gs-ajax-nonce"
                        value="<?php echo wp_create_nonce( 'gs-ajax-nonce' ); ?>" />
            <div class="select-info" style="margin-top:10px;">
            <p class="beta-content-msg-woogsc" style="color:#479C4B;"></p>
               <input type="button" class="button button-primary button-large beta-save" name="gs_woo_beta_settings" value="<?php echo __("Save", "wc-gsheetconnector"); ?>"/>
               <span class="beta-loading-sign-woogsc">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
            </div>
              </div>
                </div>
              </div>
            </div>

        </div>
         
<!-- popup file include herre -->         
<?php include( WC_GSHEETCONNECTOR_PATH . "includes/pages/pro-popup.php" ) ;?>