<?php

class GenericHelper extends AppHelper {

    var $helpers = array('Html', 'Session');

    /**
     * Helper method to return the tag
     */
    function showTag($id) {

        if (empty($id)) {
            return '';
        }

        if (empty($this->_View->viewVars['allTags'])) {
            return '';
        }

        $tags = $this->_View->viewVars['allTags'];

        if (empty($tags[$id])) {
            return __d('Softwareend', 'ERROR');
        }

        $tag = $tags[$id];

        return '<span class="tag" style="color:#' . h($tag['color']) .
                '; background-color:#' . h($tag['background']) . ';">' .
                $this->Html->link($tag['title'], array(
                    'controller' => 'entries',
                    'action' => 'index',
                    'tag' => $tag['id']
                        ),
                        array('style' => 'color:#' . h($tag['color']) . ';')
                ) . '</span>';
    }

    /**
     * Show the entry ledger details
     */
    function entryLedgers($id) {
        /* Load the Entry model */
        App::import("Softwareend.Model", "Entry");
        $Entry = new Entry();
        return $Entry->entryLedgers($id);
    }

    /**
     * Add a row to excel sheet
     */
    function xlsAddRow($row) {
        $cells = "";
        foreach ($row as $k => $v) {
            $type = 'String';
            if (is_numeric($v)) {
                $type = 'Number';
            }
            $v = h($v);
            $cells .= "<Cell><Data ss:Type=\"$type\">" . $v . "</Data></Cell>\n";
        }
        return "<Row>\n" . $cells . "</Row>\n";
    }

    /**
     * Wzuser return status string
     */
    function wzuser_status($status) {
        switch ($status) {
            case '0': return __d('Softwareend', 'Disabled');
            case '1': return __d('Softwareend', 'Enabled');
            default: return __d('Softwareend', 'ERROR');
        }
    }

    /**
     * Wzuser return status options
     */
    function wzuser_status_options() {
        return array(
            '0' => __d('Softwareend', 'Disabled'),
            '1' => __d('Softwareend', 'Enabled'),
        );
    }

    /**
     * Wzuser return status string
     */
    function wzuser_role($role) {
        switch ($role) {
            case 'admin': return __d('Softwareend', 'Administrator');
            case 'manager': return __d('Softwareend', 'Manager');
            case 'accountant': return __d('Softwareend', 'Accountant');
            case 'dataentry': return __d('Softwareend', 'Data entry operator');
            case 'guest': return __d('Softwareend', 'Guest');
            default: return __d('Softwareend', 'ERROR');
        }
    }

    /**
     * Wzuser return status options
     */
    function wzuser_role_options() {
        return array(
            'admin' => __d('Softwareend', 'Administrator'),
            'manager' => __d('Softwareend', 'Manager'),
            'accountant' => __d('Softwareend', 'Accountant'),
            'dataentry' => __d('Softwareend', 'Data entry operator'),
            'guest' => __d('Softwareend', 'Guest'),
        );
    }

    /**
     * Wzaccount return database type string
     */
    function wzaccount_dbtype($dbtype) {
        switch ($dbtype) {
            case 'Database/Mysql': return __d('Softwareend', 'MySQL');
            case 'Database/Sqlserver': return __d('Softwareend', 'MS SQL Server');
            case 'Database/Postgres': return __d('Softwareend', 'Postgres SQL');
            default: return __d('Softwareend', 'ERROR');
        }
    }

    /**
     * Wzaccount return database type options
     */
    function wzaccount_dbtype_options() {
        return array(
            'Database/Mysql' => __d('Softwareend', 'MySQL'),
            'Database/Sqlserver' => __d('Softwareend', 'MS SQL Server'),
            'Database/Postgres' => __d('Softwareend', 'Postgres SQL'),
        );
    }

    /**
     * Wzsetting return row count options
     */
    function wzsetting_row_count_options() {
        return array(
            '10' => '10',
            '25' => '25',
            '50' => '50',
            '100' => '100',
            '200' => '200',
        );
    }

    /**
     * Wzsetting return drcr or toby options
     */
    function wzsetting_drcr_toby_options() {
        return array(
            'drcr' => __d('Softwareend', 'Dr / Cr'),
            'toby' => __d('Softwareend', 'To / By'),
        );
    }

    /**
     * Group return net or gross options
     */
    function group_netgross_options() {
        return array(
            1 => __d('Softwareend', 'Gross Income and Expenditure'),
            0 => __d('Softwareend', 'Net Income and Expenditure'),
        );
    }

    /**
     * Entrytype return numbering options
     */
    function entrytype_numbering_options() {
        return array(
            '1' => __d('Softwareend', 'Auto'),
            '2' => __d('Softwareend', 'Manual (required)'),
            '3' => __d('Softwareend', 'Manual (optional)'),
        );
    }

    /**
     * Entrytype return restriction options
     */
    function entrytype_restriction_options() {
        return array(
            '1' => __d('Softwareend', 'Unrestricted'),
            '2' => __d('Softwareend', 'Atleast one Bank or Cash account must be present on Debit side'),
            '3' => __d('Softwareend', 'Atleast one Bank or Cash account must be present on Credit side'),
            '4' => __d('Softwareend', 'Only Bank or Cash account can be present on both Debit and Credit side'),
            '5' => __d('Softwareend', 'Only NON Bank or Cash account can be present on both Debit and Credit side'),
        );
    }

    /**
     * Search return range options
     */
    function search_range_options() {
        return array(
            '1' => __d('Softwareend', 'Equal to'),
            '2' => __d('Softwareend', 'Less than or Equal to'),
            '3' => __d('Softwareend', 'Greater than or equal to'),
            '4' => __d('Softwareend', 'In between'),
        );
    }

    /**
     * Settings return printer orientation options
     */
    function printer_orientation_options() {
        return array(
            'P' => __d('Softwareend', 'Potrait'),
            'L' => __d('Softwareend', 'Landscape'),
        );
    }

    /**
     * Settings return printer page format options
     */
    function printer_pageformat_options() {
        return array(
            'H' => __d('Softwareend', 'HTML'),
            'T' => __d('Softwareend', 'Text'),
        );
    }

    /**
     * return mail protocol options
     */
    function mail_protocol_options() {
        return array(
            'Smtp' => __d('Softwareend', 'smtp'),
            'Mail' => __d('Softwareend', 'mail'),
        );
    }

    /**
     * return date format options
     *
     * Date format : PHP Format|Javascript Format
     */
    function dateformat_options() {
        return array(
            'd-M-Y|dd-M-yy' => __d('Softwareend', 'Day-Month-Year'),
            'M-d-Y|M-dd-yy' => __d('Softwareend', 'Month-Day-Year'),
            'Y-M-d|yy-M-dd' => __d('Softwareend', 'Year-Month-Day'),
        );
    }

}
