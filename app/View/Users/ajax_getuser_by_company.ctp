<?php
if (empty($label)) {
    $label = 'Employee';
}
if (isset($required)) {
    echo $this->Form->input($model . '.user_id', array('label' => $label, 'empty' => 'Please Select', 'value' => $user_id, 'required' => true));
} else {
    echo $this->Form->input($model . '.user_id', array('label' => $label, 'empty' => 'Please Select', 'value' => $user_id, 'required' => false));
}
?>
<script type="text/javascript">
    $(document).ready(function () {
        $("select").select2();
        $('#AttendanceUserId').change(function () {
            ajax_getview_by_user($('#AttendanceUserId').val());
        });
        $('#UserleaveUserId').change(function () {
            ajax_getview_by_user($('#UserleaveUserId').val());
        });
        $('#MeetingroombookingUserId').change(function () {
            ajax_getview_by_user($('#MeetingroombookingUserId').val());
        });
        $('#AppraisalUserId').change(function () {
            ajax_getappraisal_by_user($('#AppraisalUserId').val());
        });
        $('#OndutyUserId').change(function () {
            ajax_getview_by_user($('#OndutyUserId').val());
        });
    });
</script>