<?php

/**
 * A function that left-padds a string with whitespaces.
 *
 * TODO: Accept the character that will be used as the padding.
 *
 * @param String $input
 * @return String returns the padded string.
 */
function padd($input) {
    //return str_pad($input, 9, ".", STR_PAD_LEFT);
    return str_replace(' ', '&nbsp;', str_pad($input, 6, ' ', STR_PAD_LEFT));
}

?>
