<div
    class="
    auth-wrapper
    d-flex
    no-block
    justify-content-center
    align-items-center
    "
    style="background: url(img/bg.jpg)no-repeat center center;background-size: cover;"
    >
    <div class="auth-box p-4 bg-white rounded">
        <div id="loginform">
            <?php echo $this->Html->image('logo/1.png', array('alt' => 'homepage', 'class' => 'light-logo', 'style' => 'width:100%')); ?>
            <div><hr /></div>
            <div class="logo">
                <h3 class="box-title mb-3">Sign In</h3>
            </div>
            <!-- Form -->
            <div class="row">
                <div class="col-12">
                    <?php echo $this->Form->create('User', array('class' => 'form-horizontal mt-3 form-material')); ?>

                    <div class="form-group mb-3">
                        <div class="">
                            <?php echo $this->Form->input('username', array('type' => 'text', 'placeholder' => 'Username', 'label' => FALSE, 'div' => FALSE)); ?>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <div class="">
                            <?php echo $this->Form->input('password', array('type' => 'password', 'placeholder' => 'Password', 'label' => FALSE, 'div' => FALSE)); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="d-flex">
                            <div class="checkbox checkbox-info pt-0">
                                <input id="checkbox-signup" type="checkbox" name="data[User][rememberme]" value="forever" class="material-inputs chk-col-indigo">
                                <label for="checkbox-signup"> Remember me </label>
                            </div>
                            <div class="ms-auto">
                                <a
                                    href="javascript:void(0)"
                                    id="to-recover"
                                    class="link font-weight-medium"
                                    ><i class="fa fa-lock me-1"></i> Forgot password?</a
                                >
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-center mt-4 mb-3">
                        <div class="col-xs-12">
                            <button
                                class="
                                btn btn-info
                                d-block
                                w-100
                                waves-effect waves-light
                                "
                                type="submit"
                                >
                                Log In
                            </button>
                        </div>
                    </div>

                    <?php echo $this->Form->end(); ?>
                </div>
            </div>
        </div>
        <div id="recoverform">
            <?php echo $this->Html->image('logo/1.png', array('alt' => 'homepage', 'class' => 'light-logo', 'style' => 'width:100%')); ?>
            <div><hr /></div>
            <div class="logo">
                <h3 class="font-weight-medium mb-3">Recover Password</h3>
                <span class="text-muted">Enter your Username and get instructions!</span>
            </div>
            <div class="row mt-3 form-material">
                <!-- Form -->
                <?php echo $this->Form->create('User', array('class' => 'col-12', 'url' => 'fp')); ?>
                <!-- email -->
                <div class="form-group row">
                    <div class="col-12">
                        <?php echo $this->Form->input('username_re', array('type' => 'text', 'placeholder' => 'Username', 'label' => FALSE, 'div' => FALSE)); ?>
                    </div>
                </div>
                <!-- pwd -->
                <div class="row mt-3">
                    <div class="col-12">
                        <button
                            class="btn d-block w-100 btn-primary text-uppercase"
                            type="submit"
                            name="action"
                            >
                            Reset
                        </button>
                    </div>
                </div>
                <div class="form-group">
                    <div class="d-flex">
                        <div class="ms-auto">
                            <br />
                            <a
                                href="javascript:void(0)"
                                id="to-login"
                                class="link font-weight-medium"
                                ><i class="fa fa-unlock me-1"></i> Back</a
                            >
                        </div>
                    </div>
                </div>
                <?php echo $this->Form->end(); ?>
            </div>
        </div>
    </div>
</div>
