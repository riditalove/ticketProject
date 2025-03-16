<?php
if (empty($label)) {
    $label = 'Department';
}
if (empty($fld)) {
    $fld = 'department_id';
}

if (isset($required)) {
    echo $this->Form->input($model . '.' . $fld, array('label' => $label, 'empty' => 'Please select', 'type' => 'select', 'options' => $departments, 'default' => $department_id, 'required' => true));
} else {
    echo $this->Form->input($model . '.' . $fld, array('label' => $label, 'empty' => 'Please select', 'type' => 'select', 'options' => $departments, 'default' => $department_id, 'required' => false));
}
?>
<script type="text/javascript">
    $(document).ready(function () {
        $("select").select2();
        $('#UserDepartmentId').change(function () {
            ajax_getsection_by_department($('#UserDepartmentId').val());
            ajax_getdesignation_by_department($('#UserDepartmentId').val());
            ajax_getcard_no($('#UserCompanyId').val(), $('#UserDepartmentId').val(), $('#UserSectionId').val(), $('#UserDesignationId').val());
        });
        $('#UsertransferDepartmentId').change(function () {
            ajax_getsection_by_department($('#UsertransferDepartmentId').val());
            ajax_getdesignation_by_department($('#UsertransferDepartmentId').val());
        });
        $('#AppraisalkraDepartmentId').change(function () {
            ajax_getdept_weight($('#AppraisalkraDepartmentId').val());
        });
        $('#SrcDepartmentId').change(function () {
            ajax_getdesignation_by_department($('#SrcDepartmentId').val());
        });
        $('#AppraisalkraweightDepartmentId').change(function () {
            ajax_getdesignation_by_department2($('#AppraisalkraweightDepartmentId').val());
        });
    });
</script>