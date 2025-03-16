<?php

class LedgerTree {

    var $id = 0;
    var $name = '';
    var $children_groups = array();
    var $children_ledgers = array();
    var $counter = 0;
    var $current_id = -1;
    var $restriction_bankcash = 1;
    var $Group = null;
    var $Ledger = null;

    /**
     * Initializer
     */
    function LedgerTree() {
        return;
    }

    /**
     * Setup which group id to start from
     */
    function build($id) {
        if ($id == 0) {
            $this->id = NULL;
            $this->name = "None";
        } else {
            $group = $this->Group->find('first', array('conditions' => array('Group.id' => $id)));
            $this->id = $group['Group']['id'];
            $this->name = $group['Group']['name'];
        }

        $this->add_sub_ledgers();
        $this->add_sub_groups();
    }

    /**
     * Find and add subgroups as objects
     */
    function add_sub_groups() {
        $conditions = array('Group.parent_id' => $this->id);
        $child_group_q = $this->Group->find('all', array('conditions' => $conditions));
        $counter = 0;
        foreach ($child_group_q as $row) {
            /* Create new AccountList object */
            $this->children_groups[$counter] = new LedgerTree();

            /* Initial setup */
            $this->children_groups[$counter]->Group = &$this->Group;
            $this->children_groups[$counter]->Ledger = &$this->Ledger;
            $this->children_groups[$counter]->current_id = $this->current_id;

            $this->children_groups[$counter]->build($row['Group']['id']);

            $counter++;
        }
    }

    /**
     * Find and add subledgers as array items
     */
    function add_sub_ledgers() {
        $child_ledger_q = $this->Ledger->find('all', array('conditions' => array('Ledger.group_id' => $this->id)));
        $counter = 0;
        foreach ($child_ledger_q as $row) {
            $this->children_ledgers[$counter]['id'] = $row['Ledger']['id'];
            $this->children_ledgers[$counter]['name'] = $row['Ledger']['name'];
            $this->children_ledgers[$counter]['type'] = $row['Ledger']['type'];
            $counter++;
        }
    }

    var $ledgerList = array();

    /* Convert ledger tree to a list */

    public function toList($tree, $c = 0) {
        /* Add group name to list */
        if ($tree->id != 0) {
            /* Set the group id to negative value since we want to disable it */
            $this->ledgerList[-$tree->id] = $this->space($c) . h($tree->name);
        } else {
            $this->ledgerList[0] = __d('Softwareend', 'Please select...');
        }

        /* Add child ledgers */
        if (count($tree->children_ledgers) > 0) {
            $c++;
            foreach ($tree->children_ledgers as $id => $data) {
                /* Add ledgers as per restrictions */
                if ($this->restriction_bankcash == 1 ||
                        $this->restriction_bankcash == 2 ||
                        $this->restriction_bankcash == 3) {
                    /* All ledgers */
                    $this->ledgerList[$data['id']] = $this->space($c) . h($data['name']);
                } else if ($this->restriction_bankcash == 4) {
                    /* Only bank or cash ledgers */
                    if ($data['type'] == 1) {
                        $this->ledgerList[$data['id']] = $this->space($c) . h($data['name']);
                    }
                } else if ($this->restriction_bankcash == 5) {
                    /* Only NON bank or cash ledgers */
                    if ($data['type'] == 0) {
                        $this->ledgerList[$data['id']] = $this->space($c) . h($data['name']);
                    }
                }
            }
            $c--;
        }

        /* Process child groups recursively */
        foreach ($tree->children_groups as $id => $data) {
            $c++;
            $this->toList($data, $c);
            $c--;
        }
    }

    function space($count) {
        $str = '';
        for ($i = 1; $i <= $count; $i++) {
            $str .= '&nbsp;&nbsp;&nbsp;';
        }
        return $str;
    }

}
