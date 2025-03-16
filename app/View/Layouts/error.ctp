<!DOCTYPE html>
<html lang="en">
    <head>
        <?php echo $this->Html->charset(); ?>
        <title><?php echo SITE_TITLE . ':' . $this->fetch('title'); ?></title>
        <?php
        echo $this->Html->meta('icon');
        echo $this->Html->meta('viewport');
        echo $this->Html->meta('keywords', SITE_TITLE);
        echo $this->Html->meta('description', SITE_TITLE);

        echo $this->Html->css(array('bootstrap.min', 'style'));
        echo $this->Html->css('colors/blue', array('id' => 'theme'));

        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        ?>
    </head>
    <body>

        <div id="wrapper">
            <?php echo $this->element('topmn'); ?>

            <div id="page-wrapper">
                <?php echo $this->Session->flash(); ?>

                <?php echo $this->fetch('content'); ?>

            </div>

            <footer>
                <div class="pull-left">Copyright &copy; <?php echo date('Y'); ?></div>
                <div class="pull-right">
                    Design and Developed by 
                    <?php
                    echo $this->Html->link($this->Html->image('dev.png', array('alt' => 'Dev', 'height' => '30', 'title' => 'Software End')), 'http://www.softwareend.com', array('escape' => false));
                    ?>
                </div>
            </footer>
        </div>

        <?php echo $this->Html->script(array('jquery.min', 'popper.min', 'bootstrap.min', 'custom.min')); ?>

    </body>
</html>
