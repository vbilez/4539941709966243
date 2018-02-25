<?php

namespace liberty\widgets;

use Exception;

/**
 * Class SocialButtons
 * Inserts an unordered list with predefined social buttons and respective links.
 * Enables control over all social links on the website
 * @package liberty\widgets
 */

class SocialButtons {

    /**
     * Returns true if param is a valid associative array
     * @param array $array
     * The array being evaluated
     * @return bool
     */
    private function is_assoc($array)
    {
        foreach(array_keys($array) as $key)
            if (!is_int($key)) return true;
        return false;
    }

    /**
     * If error occurs, redirects to a page with a fine readable current error message
     * @param string $msg
     * The current error message
     */
    private function on_error($msg)
    {
        $_SESSION['custom-error'] = new Exception($msg); ?>
        <script language="javascript">window.location = '/error';</script>
        <?php die();
    }

    /**
     * Outputs html unordered list with social buttons
     * @param associative array $args
     * <ul> tag html attributes and values specified respectively as array keys and values
     * @return string
     */
    public static function renderItems($args = [])
    {
        $htmlAttrs = "";
        if (!empty($args)) {
            if (is_array($args) && self::is_assoc($args)) {
                foreach ($args as $key => $val) {
                    $htmlAttrs .= " {$key}=\"{$val}\"";
                }
            } else self::on_error("parameter must be an associative array");
        };

        return <<<EOT
                <ul{$htmlAttrs}>
                    <li><a href="#"><i class="liberty-icon-vimeo"></i></a></li>
                    <li><a href="#"><i class="liberty-icon-facebook"></i></a></li>
                    <li><a href="#"><i class="liberty-icon-youtube"></i></a></li>
                    <li><a href="#"><i class="liberty-icon-instagram"></i></a></li>
               </ul>
EOT;
    }
}


