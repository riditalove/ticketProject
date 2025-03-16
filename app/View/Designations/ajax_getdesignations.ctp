<?php
if (empty($label)) {
    $label = 'Designation';
}
if (isset($required)) {
    echo $this->Form->input($model . '.designation_id', array('label' => $label, 'empty' => 'Please select', 'value' => $designation_id, 'required' => true));
} else {
    echo $this->Form->input($model . '.designation_id', array('label' => $label, 'empty' => 'Please select', 'value' => $designation_id, 'required' => false));
}
?>
<script type="text/javascript">
    $(document).ready(function () {
        $("select").select2();
        $('#UserDesignationId').change(function () {
            ajax_getcard_no($('#UserCompanyId').val(), $('#UserDepartmentId').val(), $('#UserSectionId').val(), $('#UserDesignationId').val());
        });
    });
</script>