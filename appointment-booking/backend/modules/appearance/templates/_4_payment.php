<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>
<div class="ab-booking-form">
    <!-- Progress Tracker-->
    <?php $step = 4; include '_progress_tracker.php'; ?>
    <!-- payment -->
    <div class="ab-payment">
        <!--   Coupons   -->
        <div class="ab-row-fluid">
            <span data-inputclass="input-xxlarge" data-default="<?php echo esc_attr( get_option( 'ab_appearance_text_info_coupon' ) ) ?>" data-notes="<?php echo esc_attr( __( '<b>[[SERVICE_PRICE]]</b> - price of service, <b>[[TOTAL_PRICE]]</b> - total price of booking,', 'ab' ) ) ?> <br> <?php echo esc_attr( __( '<b>[[NUMBER_OF_PERSONS]]</b> - number of persons.', 'ab' ) ) ?>" class="ab-text-info-coupon-preview ab-row-fluid ab_editable" id="ab-text-info-coupon" data-type="textarea" data-pk="1"><?php echo esc_html( get_option( 'ab_appearance_text_info_coupon' ) ) ?></span>
        </div>

        <div style="margin-bottom: 15px">
            <span data-default="<?php echo esc_attr( get_option( 'ab_appearance_text_label_coupon' ) ) ?>" class="ab_editable editable editable-click inline-block" id="ab-text-label-coupon" data-type="text" data-pk="1"><?php echo esc_html( get_option( 'ab_appearance_text_label_coupon' ) ) ?></span>
            <div class="ab-inline-block">
                <input class="ab-user-coupon ab-inline-block" maxlength="40" type="text" value="" />
                <button class="ab-btn ladda-button orange ab-inline-block"><?php _e( 'Apply' , 'ab' ) ?></button>
            </div>
        </div>
        <div class="ab-clear"></div>

        <div class="ab-row-fluid">
            <span data-inputclass="input-xxlarge" data-default="<?php echo esc_attr( get_option( 'ab_appearance_text_info_fourth_step' ) ) ?>" class="ab-text-info-fourth-preview ab-row-fluid ab_editable" id="ab-text-info-fourth" data-type="textarea" data-pk="1"><?php echo esc_html( get_option( 'ab_appearance_text_info_fourth_step' ) ) ?></span>
        </div>

        <!-- label -->
        <div class="ab-row-fluid">
            <label>
                <input type="radio" name="payment" class="ab-local-payment" checked="checked" value="local"/>
                <span id="ab-text-label-pay-locally" class="ab_editable" data-default="<?php echo esc_attr( get_option( 'ab_appearance_text_label_pay_locally' ) ) ?>"><?php echo esc_html( get_option( 'ab_appearance_text_label_pay_locally' ) ) ?></span>
            </label>
        </div>
        <div class="ab-row-fluid">
            <label>
                <input type="radio" name="payment" class="ab-paypal-payment" value="paypal" />
                <?php _e( 'I will pay now with PayPal', 'ab' ) ?>
                <img src="<?php echo plugins_url( 'frontend/resources/images/paypal.png', AB_PATH . '/main.php' ) ?>" style="margin-left: 10px;" alt="paypal" />
            </label>
        </div>
        <!--div class="ab-row-fluid">
            <label>
                <input type="radio" name="payment" class="ab-authorizenet-payment" value="authorizenet"/>
                <?php _e( 'I will pay now with Credit Card', 'ab' ) ?>
                <img src="<?php echo plugins_url( 'frontend/resources/images/cards.png', AB_PATH . '/main.php' ) ?>" style="margin-left: 10px;" alt="cards" />
            </label>
            <form class="ab-authorizenet ab-clearBottom" style="display: none; margin-top: 15px;">
                <?php include "_card_payment.php" ?>
            </form>
        </div-->
        <div class="ab-row-fluid">
            <label>
                <input type="radio" name="payment" class="ab-stripe-payment" value="stripe"/>
                <?php _e( 'I will pay now with Credit Card', 'ab' ) ?>
                <img style="margin-left: 10px;" src="<?php echo plugins_url( 'frontend/resources/images/cards.png', AB_PATH . '/main.php' ) ?>" alt="cards" />
            </label>
            <form class="ab-stripe ab-clearBottom" style="margin-top:15px;display: none;">
                <?php include "_card_payment.php" ?>
            </form>
        </div>

        <!-- buttons -->
        <div class="ab-local-pay-button ab-row-fluid ab-nav-steps last-row">
            <button class="ab-left ab-to-third-step ab-btn ladda-button">
                <span><?php _e( 'Back', 'ab' ) ?></span>
            </button>
            <button class="ab-right ab-final-step ab-btn ladda-button">
                <span><?php _e( 'Next', 'ab' ) ?></span>
            </button>
        </div>
    </div>
</div>