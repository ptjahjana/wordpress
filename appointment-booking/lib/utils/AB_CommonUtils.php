<?php

/**
 * Class AB_CommonUtils
 *
 */
class AB_CommonUtils {

    /**
     * Get e-mails of wp-admins
     *
     * @return array
     */
    public static function getAdminEmails() {
        return array_map(
            create_function( '$a', 'return $a->data->user_email;' ),
            get_users( 'role=administrator' )
        );
    } // getAdminEmails

    /**
     * Generates email's headers FROM: Sender Name < Sender E-mail >
     *
     * @return string
     */
    public static function getEmailHeaderFrom() {
        $from_name  = get_option( 'ab_settings_sender_name' );
        $from_email = get_option( 'ab_settings_sender_email' );
        $from = $from_name . ' <' . $from_email . '>';

        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $headers .= 'From: '.$from . "\r\n";

        return $headers;
    } // getEmailHeaderFrom

    /**
     * Format price based on currency settings (Settings -> Payments).
     *
     * @param  string $price
     * @return string
     */
    public static function formatPrice( $price ) {
        $result = '';
        switch (get_option('ab_paypal_currency')) {
            case 'AUD' :
                $price  = number_format_i18n( floatval($price), 2 );
                $result = 'A$' . $price;
                break;
            case 'BRL' :
                $price  = number_format_i18n( floatval($price), 2 );
                $result = 'R$ ' . $price;
                break;
            case 'CAD' :
                $price  = number_format_i18n( floatval($price), 2 );
                $result = 'C$' . $price;
                break;
            case 'CHF' :
                $price  = number_format_i18n( floatval($price), 2 );
                $result = $price . ' CHF';
                break;
            case 'CLP' :
                $price  = number_format_i18n( floatval($price), 2 );
                $result = 'CLP $' . $price;
                break;
            case 'COP' :
                $price  = number_format_i18n( floatval($price) );
                $result = '$' . $price . ' COP';
                break;
            case 'CZK' :
                $price  = number_format_i18n( floatval($price), 2 );
                $result = $price . ' Kč';
                break;
            case 'DKK' :
                $price  = number_format_i18n( floatval($price), 2 );
                $result = $price . ' kr';
                break;
            case 'EUR' :
                $price  = number_format_i18n( floatval($price), 2 );
                $result = '€' . $price;
                break;
            case 'GBP' :
                $price  = number_format_i18n( floatval($price), 2 );
                $result = '£' . $price;
                break;
            case 'GTQ' :
                $price  = number_format_i18n( floatval($price), 2 );
                $result = 'Q' . $price;
                break;
            case 'HKD' :
                $price  = number_format_i18n( floatval($price), 2 );
                $result = $price . ' $';
                break;
            case 'HUF' :
                $price  = number_format_i18n( floatval($price), 2 );
                $result = $price . ' Ft';
                break;
            case 'IDR' :
                $price  = number_format_i18n( floatval($price), 2 );
                $result = $price . ' Rp';
                break;
            case 'INR' :
                $price  = number_format_i18n( floatval($price), 2 );
                $result = $price . ' ₹';
                break;
            case 'ILS' :
                $price  = number_format_i18n( floatval($price), 2 );
                $result = $price . ' ₪';
                break;
            case 'JPY' :
                $price  = number_format_i18n( floatval($price), 2 );
                $result = '¥' . $price;
                break;
            case 'KRW' :
                $price  = number_format_i18n( floatval($price), 2 );
                $result = $price . ' ₩';
                break;
            case 'MXN' :
                $price  = number_format_i18n( floatval($price), 2 );
                $result = $price . ' $';
                break;
            case 'MYR' :
                $price  = number_format_i18n( floatval($price), 2 );
                $result = $price . ' RM';
                break;
            case 'NOK' :
                $price  = number_format_i18n( floatval($price), 2 );
                $result = $price . ' kr';
                break;
            case 'NZD' :
                $price  = number_format_i18n( floatval($price), 2 );
                $result = $price . ' $';
                break;
            case 'PHP' :
                $price  = number_format_i18n( floatval($price), 2 );
                $result = $price . ' ₱';
                break;
            case 'PLN' :
                $price  = number_format_i18n( floatval($price), 2 );
                $result = $price . ' zł';
                break;
            case 'RON' :
                $price  = number_format_i18n( floatval($price), 2 );
                $result = $price . ' lei';
                break;
            case 'RMB' :
                $price  = number_format_i18n( floatval($price), 2 );
                $result = $price . ' ¥';
                break;
            case 'RUB' :
                $price  = number_format_i18n( floatval($price), 2 );
                $result = $price . ' руб.';
                break;
            case 'SAR':
                $price  = number_format_i18n( floatval($price), 2 );
                $result = $price . ' SAR';
                break;
            case 'SEK' :
                $price  = number_format_i18n( floatval($price), 2 );
                $result = $price . ' kr';
                break;
            case 'SGD' :
                $price  = number_format_i18n( floatval($price), 2 );
                $result = $price . ' $';
                break;
            case 'THB' :
                $price  = number_format_i18n( floatval($price), 2 );
                $result = $price . ' ฿';
                break;
            case 'TRY' :
                $price  = number_format_i18n( floatval($price), 2 );
                $result = $price . ' TL';
                break;
            case 'TWD' :
                $price  = number_format_i18n( floatval($price), 2 );
                $result = $price . ' NT$';
                break;
            case 'USD' :
                $price  = number_format_i18n( floatval($price), 2 );
                $result = '$' . $price;
                break;
            case 'ZAR' :
                $price  = number_format_i18n( floatval($price), 2 );
                $result = 'R ' . $price;
                break;
        } // switch

        return $result;
    } // formatPrice

    /**
     * @return string
     */
    public static function getCurrentPageURL() {
        return ($_SERVER['REQUEST_SCHEME'] ? $_SERVER['REQUEST_SCHEME'] : 'http') . "://".$_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    }

    /**
     * @return mixed|string|void
     */
    public static function getTimezoneString() {
        // if site timezone string exists, return it
        if ( $timezone = get_option( 'timezone_string' ) ) {
            return $timezone;
        }

        // get UTC offset, if it isn't set then return UTC
        if ( 0 === ( $utc_offset = get_option( 'gmt_offset', 0 ) ) ) {
            return 'UTC';
        }

        // adjust UTC offset from hours to seconds
        $utc_offset *= 3600;

        // attempt to guess the timezone string from the UTC offset
        if ( $timezone = timezone_name_from_abbr( '', $utc_offset, 0 ) ) {
            return $timezone;
        }

        // last try, guess timezone string manually
        $is_dst = date( 'I' );

        foreach ( timezone_abbreviations_list() as $abbr ) {
            foreach ( $abbr as $city ) {
                if ( $city['dst'] == $is_dst && $city['offset'] == $utc_offset )
                    return $city['timezone_id'];
            }
        }

        // fallback to UTC
        return 'UTC';
    }

} // AB_CommonUtils