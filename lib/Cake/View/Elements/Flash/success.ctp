<script type="text/javascript">
    $(document).ready(function () {
        Swal.fire({
            type: "success",
            title: "Success!",
            text: "<?php echo h($message) ?>",
            footer: "<a href='javascript:;'>Operation Successful.</a>",
        });
    });
</script>