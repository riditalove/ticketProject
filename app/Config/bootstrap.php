<?php

/**
 * This file is loaded automatically by the app/webroot/index.php file after core.php
 *
 * This file should load/create any application wide configuration settings, such as
 * Caching, Logging, loading additional configuration files.
 *
 * You should also use this file to include any files that provide global functions/constants
 * that your application uses.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.10.8.2117
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
// Setup a 'default' cache configuration for use in the application.
Cache::config('default', array('engine' => 'File'));

/**
 * The settings below can be used to set additional paths to models, views and controllers.
 *
 * App::build(array(
 *     'Model'                     => array('/path/to/models/', '/next/path/to/models/'),
 *     'Model/Behavior'            => array('/path/to/behaviors/', '/next/path/to/behaviors/'),
 *     'Model/Datasource'          => array('/path/to/datasources/', '/next/path/to/datasources/'),
 *     'Model/Datasource/Database' => array('/path/to/databases/', '/next/path/to/database/'),
 *     'Model/Datasource/Session'  => array('/path/to/sessions/', '/next/path/to/sessions/'),
 *     'Controller'                => array('/path/to/controllers/', '/next/path/to/controllers/'),
 *     'Controller/Component'      => array('/path/to/components/', '/next/path/to/components/'),
 *     'Controller/Component/Auth' => array('/path/to/auths/', '/next/path/to/auths/'),
 *     'Controller/Component/Acl'  => array('/path/to/acls/', '/next/path/to/acls/'),
 *     'View'                      => array('/path/to/views/', '/next/path/to/views/'),
 *     'View/Helper'               => array('/path/to/helpers/', '/next/path/to/helpers/'),
 *     'Console'                   => array('/path/to/consoles/', '/next/path/to/consoles/'),
 *     'Console/Command'           => array('/path/to/commands/', '/next/path/to/commands/'),
 *     'Console/Command/Task'      => array('/path/to/tasks/', '/next/path/to/tasks/'),
 *     'Lib'                       => array('/path/to/libs/', '/next/path/to/libs/'),
 *     'Locale'                    => array('/path/to/locales/', '/next/path/to/locales/'),
 *     'Vendor'                    => array('/path/to/vendors/', '/next/path/to/vendors/'),
 *     'Plugin'                    => array('/path/to/plugins/', '/next/path/to/plugins/'),
 * ));
 *
 */
/**
 * Custom Inflector rules can be set to correctly pluralize or singularize table, model, controller names or whatever other
 * string is passed to the inflection functions
 *
 * Inflector::rules('singular', array('rules' => array(), 'irregular' => array(), 'uninflected' => array()));
 * Inflector::rules('plural', array('rules' => array(), 'irregular' => array(), 'uninflected' => array()));
 *
 */
/**
 * Plugins need to be loaded manually, you can either load them one by one or all of them in a single call
 * Uncomment one of the lines below, as you need. Make sure you read the documentation on CakePlugin to use more
 * advanced ways of loading plugins
 *
 * CakePlugin::loadAll(); // Loads all plugins at once
 * CakePlugin::load('DebugKit'); //Loads a single plugin named DebugKit
 *
 */
CakePlugin::load('DebugKit');


/**
 * To prefer app translation over plugin translation, you can set
 *
 * Configure::write('I18n.preferApp', true);
 */
/**
 * You can attach event listeners to the request lifecycle as Dispatcher Filter. By default CakePHP bundles two filters:
 *
 * - AssetDispatcher filter will serve your asset files (css, images, js, etc) from your themes and plugins
 * - CacheDispatcher filter will read the Cache.check configure variable and try to serve cached content generated from controllers
 *
 * Feel free to remove or add filters as you see fit for your application. A few examples:
 *
 * Configure::write('Dispatcher.filters', array(
 * 		'MyCacheFilter', //  will use MyCacheFilter class from the Routing/Filter package in your app.
 * 		'MyCacheFilter' => array('prefix' => 'my_cache_'), //  will use MyCacheFilter class from the Routing/Filter package in your app with settings array.
 * 		'MyPlugin.MyFilter', // will use MyFilter class from the Routing/Filter package in MyPlugin plugin.
 * 		array('callable' => $aFunction, 'on' => 'before', 'priority' => 9), // A valid PHP callback type to be called on beforeDispatch
 * 		array('callable' => $anotherMethod, 'on' => 'after'), // A valid PHP callback type to be called on afterDispatch
 *
 * ));
 */
define('PRESENT', 1);
define('ABSENT', 1);
define('STARTDAY', 'saturday');

function calculate($param1 = 0, $param2 = 0, $op = '')
{
    if (extension_loaded('bcmath')) {
        switch ($op) {
            case '+':
                return bcadd($param1, $param2, 2);
                break;
            case '-':
                return bcsub($param1, $param2, 2);
                break;
            case '==':
                if (bccomp($param1, $param2, 2) == 0) {
                    return TRUE;
                } else {
                    return FALSE;
                }
                break;
            case '!=':
                if (bccomp($param1, $param2, 2) == 0) {
                    return FALSE;
                } else {
                    return TRUE;
                }
                break;
            case '<':
                if (bccomp($param1, $param2, 2) == -1) {
                    return TRUE;
                } else {
                    return FALSE;
                }
                break;
            case '>':
                if (bccomp($param1, $param2, 2) == 1) {
                    return TRUE;
                } else {
                    return FALSE;
                }
                break;
            case '>=':
                $temp = bccomp($param1, $param2, 2);
                if ($temp == 1 || $temp == 0) {
                    return TRUE;
                } else {
                    return FALSE;
                }
                break;
            case 'n':
                return bcmul($param1, -1, 2);
                break;
            default:
                die();
                break;
        }
    } else {
        $result = 0;
        $param1 = $param1 * 100;
        $param2 = $param2 * 100;
        $param1 = (int) round($param1, 0);
        $param2 = (int) round($param2, 0);
        switch ($op) {
            case '+':
                $result = $param1 + $param2;
                break;
            case '-':
                $result = $param1 - $param2;
                break;
            case '==':
                if ($param1 == $param2) {
                    return TRUE;
                } else {
                    return FALSE;
                }
                break;
            case '!=':
                if ($param1 != $param2) {
                    return TRUE;
                } else {
                    return FALSE;
                }
                break;
            case '<':
                if ($param1 < $param2) {
                    return TRUE;
                } else {
                    return FALSE;
                }
                break;
            case '>':
                if ($param1 > $param2) {
                    return TRUE;
                } else {
                    return FALSE;
                }
                break;
            case '>=':
                if ($param1 >= $param2) {
                    return TRUE;
                } else {
                    return FALSE;
                }
                break;
            case 'n':
                $result = -$param1;
                break;
            default:
                die();
                break;
        }
        $result = $result / 100;
        return $result;
    }
}

function calculate_withdc($param1, $param1_dc, $param2, $param2_dc)
{
    $result = 0;
    $result_dc = 'D';

    if ($param1_dc == 'D' && $param2_dc == 'D') {
        $result = calculate($param1, $param2, '+');
        $result_dc = 'D';
    } else if ($param1_dc == 'C' && $param2_dc == 'C') {
        $result = calculate($param1, $param2, '+');
        $result_dc = 'C';
    } else {
        if (calculate($param1, $param2, '>')) {
            $result = calculate($param1, $param2, '-');
            $result_dc = $param1_dc;
        } else {
            $result = calculate($param2, $param1, '-');
            $result_dc = $param2_dc;
        }
    }

    return array('amount' => $result, 'dc' => $result_dc);
}

function toCurrency($dc, $amount)
{
    if (calculate($amount, 0, '==')) {
        return number_format(0, 2, '.', '');
    }

    if ($dc == 'D') {
        if (calculate($amount, 0, '>')) {
            return '' . number_format($amount, 2, '.', '');
        } else {
            return '' . number_format(calculate($amount, 0, 'n'), 2, '.', '');
        }
    } else if ($dc == 'C') {
        if (calculate($amount, 0, '>')) {
            return '' . number_format($amount, 2, '.', '');
        } else {
            return '' . number_format(calculate($amount, 0, 'n'), 2, '.', '');
        }
    } else if ($dc == 'X') {
        /* Dr for positive and Cr for negative value */
        if (calculate($amount, 0, '>')) {
            return '' . number_format($amount, 2, '.', '');
        } else {
            return '' . number_format(calculate($amount, 0, 'n'), 2, '.', '');
        }
    } else {
        return number_format($amount, 2, '.', '');
    }
    return __d('INDESORE', 'toCurrency ERROR');
}

function toCurrencys($dc, $amount)
{
    if (calculate($amount, 0, '==')) {
        return number_format(0, 2, '.', '');
    }

    if ($dc == 'D') {
        if (calculate($amount, 0, '>')) {
            return 'Dr ' . number_format($amount, 2, '.', '');
        } else {
            return 'Cr ' . number_format(calculate($amount, 0, 'n'), 2, '.', '');
        }
    } else if ($dc == 'C') {
        if (calculate($amount, 0, '>')) {
            return 'Cr ' . number_format($amount, 2, '.', '');
        } else {
            return 'Dr ' . number_format(calculate($amount, 0, 'n'), 2, '.', '');
        }
    } else if ($dc == 'X') {
        /* Dr for positive and Cr for negative value */
        if (calculate($amount, 0, '>')) {
            return 'Dr ' . number_format($amount, 2, '.', '');
        } else {
            return 'Cr ' . number_format(calculate($amount, 0, 'n'), 2, '.', '');
        }
    } else {
        return number_format($amount, 2, '.', '');
    }
    return __d('INDESORE', 'toCurrencys ERROR');
}

function dateToSql($indate)
{
    $unixTimestamp = strtotime($indate . ' 00:00:00');
    if (!$unixTimestamp) {
        return false;
    }
    return date("Y-m-d", $unixTimestamp);
}

function getStartAndEndDate($week, $year)
{
    $dto = new DateTime();
    $dto->setISODate($year, $week);
    $dto->modify('-1 days');
    $ret['week_start'] = $dto->format('Y-m-d');
    $dto->modify('+6 days');
    $ret['week_end'] = $dto->format('Y-m-d');
    return $ret;
}

function getCurrentWeek()
{
    $date_string = date('Y-m-d', strtotime('+2 days'));
    $cweek = (int) date("W", strtotime($date_string));
    return $cweek;
}

function getLastWeek()
{
    $week = date('Y-12-31', strtotime('last saturday'));
    $cweek = (int) date("W", strtotime($week));
    return $cweek;
}

function dateFromSql($sqldate)
{
    $unixTimestamp = strtotime($sqldate . ' 00:00:00');
    if (!$unixTimestamp) {
        return false;
    }
    return date(Configure::read('Account.dateformatPHP'), $unixTimestamp);
}

function toEntryNumber($number, $entrytype_id)
{
    if (Configure::read('Account.ET.' . $entrytype_id . '.zero_padding') > 0) {
        return Configure::read('Account.ET.' . $entrytype_id . '.prefix') .
            str_pad($number, Configure::read('Account.ET.' . $entrytype_id . '.zero_padding'), '0', STR_PAD_LEFT) .
            Configure::read('Account.ET.' . $entrytype_id . '.suffix');
    } else {
        return Configure::read('Account.ET.' . $entrytype_id . '.prefix') .
            $number .
            Configure::read('Account.ET.' . $entrytype_id . '.suffix');
    }
}

function convertNumberToWord($num = false)
{
    $num = str_replace(array(',', ' '), '', trim($num));
    if (!$num) {
        return false;
    }
    $num = (int) $num;
    $words = array();
    $list1 = array(
        '',
        'one',
        'two',
        'three',
        'four',
        'five',
        'six',
        'seven',
        'eight',
        'nine',
        'ten',
        'eleven',
        'twelve',
        'thirteen',
        'fourteen',
        'fifteen',
        'sixteen',
        'seventeen',
        'eighteen',
        'nineteen'
    );
    $list2 = array('', 'ten', 'twenty', 'thirty', 'forty', 'fifty', 'sixty', 'seventy', 'eighty', 'ninety', 'hundred');
    $list3 = array(
        '',
        'thousand',
        'million',
        'billion',
        'trillion',
        'quadrillion',
        'quintillion',
        'sextillion',
        'septillion',
        'octillion',
        'nonillion',
        'decillion',
        'undecillion',
        'duodecillion',
        'tredecillion',
        'quattuordecillion',
        'quindecillion',
        'sexdecillion',
        'septendecillion',
        'octodecillion',
        'novemdecillion',
        'vigintillion'
    );
    $num_length = strlen($num);
    $levels = (int) (($num_length + 2) / 3);
    $max_length = $levels * 3;
    $num = substr('00' . $num, -$max_length);
    $num_levels = str_split($num, 3);
    for ($i = 0; $i < count($num_levels); $i++) {
        $levels--;
        $hundreds = (int) ($num_levels[$i] / 100);
        $hundreds = ($hundreds ? ' ' . $list1[$hundreds] . ' hundred' . ($hundreds == 1 ? '' : 's') . ' ' : '');
        $tens = (int) ($num_levels[$i] % 100);
        $singles = '';
        if ($tens < 20) {
            $tens = ($tens ? ' ' . $list1[$tens] . ' ' : '');
        } else {
            $tens = (int) ($tens / 10);
            $tens = ' ' . $list2[$tens] . ' ';
            $singles = (int) ($num_levels[$i] % 10);
            $singles = ' ' . $list1[$singles] . ' ';
        }
        $words[] = $hundreds . $tens . $singles . (($levels && (int) ($num_levels[$i])) ? ' ' . $list3[$levels] . ' ' : '');
    } //end for loop
    $commas = count($words);
    if ($commas > 1) {
        $commas = $commas - 1;
    }
    return implode(' ', $words);
}

function sectom($seconds)
{
    $dm = $seconds % (60 * 60);
    $minitues = floor($seconds / 60);
    $ds = $dm % 60;
    $s = ceil($ds);
    if ($minitues < 10) {
        $minitues = "0$minitues";
    }
    return $minitues . ':' . $s;
}

Configure::write('Dispatcher.filters', array(
    'AssetDispatcher',
    'CacheDispatcher'
));

/**
 * Configures default file logging options
 */
App::uses('CakeLog', 'Log');
CakeLog::config('debug', array(
    'engine' => 'File',
    'types' => array('notice', 'info', 'debug'),
    'file' => 'debug',
));
CakeLog::config('error', array(
    'engine' => 'File',
    'types' => array('warning', 'error', 'critical', 'alert', 'emergency'),
    'file' => 'error',
));


//added by Hadi

function NumberintoWords(float $number)
{
    $number_after_decimal = round($number - ($num = floor($number)), 2) * 100;

    // Check if there is any number after decimal
    $amt_hundred = null;
    $count_length = strlen($num);
    $x = 0;
    $string = array();
    $change_words = array(
        0 => 'Zero',
        1 => 'One',
        2 => 'Two',
        3 => 'Three',
        4 => 'Four',
        5 => 'Five',
        6 => 'Six',
        7 => 'Seven',
        8 => 'Eight',
        9 => 'Nine',
        10 => 'Ten',
        11 => 'Eleven',
        12 => 'Twelve',
        13 => 'Thirteen',
        14 => 'Fourteen',
        15 => 'Fifteen',
        16 => 'Sixteen',
        17 => 'Seventeen',
        18 => 'Eighteen',
        19 => 'Nineteen',
        20 => 'Twenty',
        30 => 'Thirty',
        40 => 'Fourty',
        50 => 'Fifty',
        60 => 'Sixty',
        70 => 'Seventy',
        80 => 'Eighty',
        90 => 'Ninety'
    );
    $here_digits = array('', 'Hundred', 'Thousand', 'Lakh', 'Crore');
    while ($x < $count_length) {
        $get_divider = ($x == 2) ? 10 : 100;
        $number = floor($num % $get_divider);
        $num = floor($num / $get_divider);
        $x += $get_divider == 10 ? 1 : 2;
        if ($number) {
            $add_plural = (($counter = count($string)) && $number > 9) ? 's' : null;
            $amt_hundred = ($counter == 1 && $string[0]) ? ' and ' : null;
            $string[] = ($number < 21) ? $change_words[$number] . ' ' . $here_digits[$counter] . $add_plural . '
       ' . $amt_hundred : $change_words[floor($number / 10) * 10] . ' ' . $change_words[$number % 10] . '
       ' . $here_digits[$counter] . $add_plural . ' ' . $amt_hundred;
        } else $string[] = null;
    }
    $implode_to_Words = implode('', array_reverse($string));
    $get_word_after_point = ($number_after_decimal > 0) ? "Point " . ($change_words[$number_after_decimal / 10] . "
        " . $change_words[$number_after_decimal % 10]) : '';
    return ($implode_to_Words ? $implode_to_Words : ' ') . $get_word_after_point;
}
//added by Hadi
