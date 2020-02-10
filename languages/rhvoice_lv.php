<?php

/**
 * Default language file for RHVoice module
 *
 */
$dictionary = array(
    'ABOUT' => 'Par',
    'SETTINGS' => 'Uzstādījumi',
    'HELP' => 'Palīdzība',
    'VOICE' => 'Balss:',
    'USE_SPD' => 'Izmantot Speech Dispatcher',
    'USE_CACHE' => 'Izmantot kešošnu',
    'RHVOICE_INSTALLATION' => 'RHVoice instalācija',
    'VOICE_ALEKSANDR' => 'Aleksandrs Krieviski',
    'VOICE_ELENA' => 'Elena Krieviski',
    'VOICE_ANNA' => 'Anna Krieviski',
    'VOICE_CLB' => 'Angļu sieviete',
    'VOICE_SLT' => 'Angļu vīrietis',

);

foreach ($dictionary as $k => $v) {
    if (!defined('LANG_' . $k)) {
        define('LANG_' . $k, $v);
    }
}
?>
