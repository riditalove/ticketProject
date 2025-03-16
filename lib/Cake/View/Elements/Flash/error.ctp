<script type="text/javascript">
    $(document).ready(function () {
        Swal.fire({
            type: "error",
            title: "Error...",
            text: "<?php echo h($message) ?>",
            footer: "<a href='javascript:;'>Something is might be wrong. Please check.</a>",
        });
    });
</script>