<?php

/**
 * Application level View Helper
 *
 * This file is application-wide helper file. You can put all
 * application-wide helper-related methods here.
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
 * @package       app.View.Helper
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses('Helper', 'View');

/**
 * Application helper
 *
 * Add your application-wide methods in the class below, your helpers
 * will inherit them.
 *
 * @package       app.View.Helper
 */
class AppHelper extends Helper {

    public function timeCalc($pit, $pot, $typ) {
        if (is_numeric($pit)) {
            $init = $pit;
        } else {
            $it = strtotime($pit);
            $ot = strtotime($pot);
            $init = ($ot - $it);
        }
        $hours = floor($init / 3600);
        $minutes = floor(($init / 60) % 60);
        $seconds = $init % 60;

        $str = ($hours == 0) ? '' : "$hours h";
        if ($minutes > 0) {
            if ($str == '') {
                $str = "$minutes m";
            } else {
                $str .= ", $minutes m";
            }
        }
        if ($seconds > 0) {
            if ($str == '') {
                $str = "$seconds s";
            } else {
                $str .= ", $seconds s";
            }
        }

        if ($typ == 'l') {
            return "In at: $pot (Late: $str)";
        } elseif ($typ == 'e') {
            return "Out at: $pit (Early: $str)";
        } elseif ($typ == 'n') {
            return "($str)";
        } elseif ($typ == 'd') {
            $ys = 0;
            while (strtotime('+1 year', $it) < $ot) {
                $ys++;
                $it = strtotime('+1 year', $it);
            }
            $str = ($ys == 0) ? '' : "$ys y";

            $ms = 0;
            while (strtotime('+1 month', $it) < $ot) {
                $ms++;
                $it = strtotime('+1 month', $it);
            }
            if ($ms > 0) {
                if ($str == '') {
                    $str = "$ms m";
                } else {
                    $str .= ", $ms m";
                }
            }
            if ($str == '') {
                $str = floor(($ot - $it) / (60 * 60 * 24)) . " d";
            } else {
                $str .= ", " . floor(($ot - $it) / (60 * 60 * 24)) . " d";
            }
            return "($str)";
        } elseif ($typ == 'al') {
            return "(Late: $str)";
        } elseif ($typ == 'ae') {
            return "(Early: $str)";
        } else {
            return $hours . '.' . $minutes;
        }
    }

    public function timeShow($pit, $typ) {
        $it = strtotime($pit);
        if ($typ == 's') {
            return date('H:i', $it);
        } if ($typ == 'ap') {
            return date('H:i:s A', $it);
        } else {
            return date('H:i:s', $it);
        }
    }

    public function getCurrency($number) {
        $arr = explode('.', $number);
        $no = $arr[0];
        //$decimal = substr($arr[1], 0, 2);
        $hundred = null;
        $digits_length = strlen($no);
        $i = 0;
        $str = array();
        $words = array(0 => '', 1 => 'one', 2 => 'two',
            3 => 'three', 4 => 'four', 5 => 'five', 6 => 'six',
            7 => 'seven', 8 => 'eight', 9 => 'nine',
            10 => 'ten', 11 => 'eleven', 12 => 'twelve',
            13 => 'thirteen', 14 => 'fourteen', 15 => 'fifteen',
            16 => 'sixteen', 17 => 'seventeen', 18 => 'eighteen',
            19 => 'nineteen', 20 => 'twenty', 30 => 'thirty',
            40 => 'forty', 50 => 'fifty', 60 => 'sixty',
            70 => 'seventy', 80 => 'eighty', 90 => 'ninety');
        $digits = array('', 'hundred', 'thousand', 'lac', 'crore', 'billion');
        while ($i < $digits_length) {
            $divider = ($i == 2) ? 10 : 100;
            $number = floor($no % $divider);
            $no = floor($no / $divider);
            $i += $divider == 10 ? 1 : 2;
            if ($number) {
                //$plural = (($counter = count($str)) && $number > 9) ? null : null;
                $counter = count($str);
                $hundred = ($counter == 1 && $str[0]) ? ' and ' : null;

                if ($number < 21) {
//                    pr($words[$number]);
//                    pr($digits[$counter]);
//                    pr($hundred);
                    $str [] = $words[$number] . ' ' . $digits[$counter] . ' ' . $hundred;
                } else {
                    $str [] = $words[floor($number / 10) * 10] . ' ' . $words[$number % 10] . ' ' . $digits[$counter] . ' ' . $hundred;
                }

                //$str [] = ($number < 21) ? $words[$number] . ' ' . $digits[$counter] . $plural . ' ' . $hundred : $words[floor($number / 10) * 10] . ' ' . $words[$number % 10] . ' ' . $digits[$counter] . $plural . ' ' . $hundred;
            } else {
                $str[] = null;
            }
        }
        //pr($str);
        $taka = implode('', array_reverse($str));
        //$paisa = ($decimal > 0) ? " and " . ($words[(int) ($decimal / 10) * 10] . " " . $words[$decimal % 10]) . ' paisa' : '';
        //return ($taka ? $taka . 'taka ' : '') . $paisa;
        return ($taka ? ucfirst($taka) . 'taka ' : '0') . ' only.';
    }

}
