<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?></li>
                <li class="breadcrumb-item active">Edit Config</li>
            </ol>
        </div>
        <div class="col-md-6 col-4 align-self-center">
            <?php echo $this->Html->link("<i class='fa fa-list-ul'></i> Config List", array('action' => 'index'), array('class' => 'btn pull-right btn-success', 'escape' => false)); ?>

        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card card-body">
                <h3 class="box-title font-weight-medium text-uppercase m-b-0">Edit Config</h3>
                <p class="text-muted m-b-30 font-13"> </p>
                <?php echo $this->Form->create('Config', array('class' => 'form-horizontal', 'type' => 'file')); ?>

                <div class="form-group row">
                    <label class="col-sm-3 text-right control-label col-form-label">COMPANY NAME</label>
                    <div class="col-sm-9">
                        <?php echo $this->Form->input('COMPANY_NAME', array('required' => false, 'value' => COMPANY_NAME, 'label' => FALSE)); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 text-right control-label col-form-label">COMPANY WEB</label>
                    <div class="col-sm-9">
                        <?php echo $this->Form->input('COMPANY_WEB', array('required' => false, 'value' => COMPANY_WEB, 'label' => FALSE)); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 text-right control-label col-form-label">COMPANY EMAIL</label>
                    <div class="col-sm-9">
                        <?php echo $this->Form->input('COMPANY_EMAIL', array('required' => false, 'value' => COMPANY_EMAIL, 'label' => FALSE)); ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 text-right control-label col-form-label">PHONE</label>
                    <div class="col-sm-9">
                        <?php echo $this->Form->input('PHONE', array('required' => false, 'value' => PHONE, 'label' => FALSE)); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 text-right control-label col-form-label">FAX</label>
                    <div class="col-sm-9">
                        <?php echo $this->Form->input('FAX', array('required' => false, 'value' => FAX, 'label' => FALSE)); ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 text-right control-label col-form-label">EXPIRY LIMIT</label>
                    <div class="col-sm-9">
                        <?php echo $this->Form->input('EXPIRY_LIMIT', array('required' => false, 'value' => EXPIRY_LIMIT, 'label' => FALSE)); ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 text-right control-label col-form-label">PROFORMA MAIL</label>
                    <div class="col-sm-9">
                        <?php echo $this->Form->input('PROFORMA_MAIL', array('required' => false, 'value' => PROFORMA_MAIL, 'label' => FALSE)); ?>
                    </div>
                </div>


                <div class="form-group m-b-0">
                    <div class="offset-sm-3 col-sm-9">
                        <br> <br>
                        <?php echo $this->Form->end(__('Submit')); ?>

                    </div>
                </div>

            </div>
        </div>

    </div>

</div>


<?php echo $this->Html->css(array('dropify.min')); ?>
<?php echo $this->Html->script(array('dropify.min')); ?>
<script type="text/javascript">
    $(document).ready(function() {
        $('#dropify').dropify();
    });
</script>
<?php echo $this->Html->css(array('asColorPicker')); ?>
<?php echo $this->Html->script(array('jquery-asColor', 'jquery-asGradient', 'asColorPicker')); ?>
<script type="text/javascript">
    $(document).ready(function() {
        $(".gradient-colorpicker").asColorPicker({
            mode: 'gradient'
        });
    });
</script>

<?php
echo $this->Html->css(array('jquery-ui'));
echo $this->Html->script(array('jquery-ui.min'));
?>
<script type="text/javascript">
    var jArrf = <?php echo $users; ?>;
    var jArrd = <?php echo $desigs; ?>;

    $(document).ready(function() {
        function split(val) {
            return val.split(/,\s*/);
        }

        function extractLast(term) {
            return split(term).pop();
        }

        $("#ConfigITEMNOTIFYEMPLOYEES")
            .on("keydown", function(event) {
                if (event.keyCode === $.ui.keyCode.TAB && $(this).autocomplete("instance").menu.active) {
                    event.preventDefault();
                }
            })
            .autocomplete({
                minLength: 0,
                source: function(request, response) {
                    // delegate back to autocomplete, but extract the last term
                    response($.ui.autocomplete.filter(jArrf, extractLast(request.term)));
                },
                focus: function() {
                    // prevent value inserted on focus
                    return false;
                },
                select: function(event, ui) {
                    var terms = split(this.value);
                    // remove the current input
                    terms.pop();
                    // add the selected item
                    terms.push(ui.item.username);
                    // add placeholder to get the comma-and-space at the end
                    terms.push("");
                    this.value = terms.join(",");
                    return false;
                }
            });

        $("#ConfigPROFORMAMAIL")
            .on("keydown", function(event) {
                if (event.keyCode === $.ui.keyCode.TAB && $(this).autocomplete("instance").menu.active) {
                    event.preventDefault();
                }
            })
            .autocomplete({
                minLength: 0,
                source: function(request, response) {
                    // delegate back to autocomplete, but extract the last term
                    response($.ui.autocomplete.filter(jArrf, extractLast(request.term)));
                },
                focus: function() {
                    // prevent value inserted on focus
                    return false;
                },
                select: function(event, ui) {
                    var terms = split(this.value);
                    // remove the current input
                    terms.pop();
                    // add the selected item
                    terms.push(ui.item.id);
                    // add placeholder to get the comma-and-space at the end
                    terms.push("");
                    this.value = terms.join(",");
                    return false;
                }
            });

    });
</script>