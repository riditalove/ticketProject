<?php
/**
 * Prints a stack trace for an exception
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Elements
 * @since         CakePHP(tm) v 1.3
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
App::uses('Debugger', 'Utility');
?>
<h3>Stack Trace</h3>
<ul class="cake-stack-trace">
    <?php foreach ($error->getTrace() as $i => $stack): ?>
        <li><?php
            $excerpt = $arguments = '';
            $params = array();

            if (isset($stack['file']) && isset($stack['line'])):
                printf(
                        '<a href="#" onclick="traceToggle(event, \'file-excerpt-%s\')">%s line %s</a>',
                        $i,
                        Debugger::trimPath($stack['file']),
                        $stack['line']
                );
                $excerpt = sprintf('<div id="file-excerpt-%s" class="cake-code-dump" style="display:none;"><pre>', $i);
                $excerpt .= implode("\n", Debugger::excerpt($stack['file'], $stack['line'] - 1, 2));
                $excerpt .= '</pre></div> ';
            else:
                echo '<a href="#">[internal function]</a>';
            endif;
            echo ' &rarr; ';
            if ($stack['function']):
                $args = array();
                if (!empty($stack['args'])):
                    foreach ((array) $stack['args'] as $arg):
                        $args[] = Debugger::getType($arg);
                        $params[] = Debugger::exportVar($arg, 4);
                    endforeach;
                endif;

                $called = isset($stack['class']) ? $stack['class'] . $stack['type'] . $stack['function'] : $stack['function'];

                printf(
                        '<a href="#" onclick="traceToggle(event, \'trace-args-%s\')">%s(%s)</a> ',
                        $i,
                        $called,
                        h(implode(', ', $args))
                );
                $arguments = sprintf('<div id="trace-args-%s" class="cake-code-dump" style="display: none;"><pre>', $i);
                $arguments .= h(implode("\n", $params));
                $arguments .= '</pre></div>';
            endif;
            echo $excerpt;
            echo $arguments;
            ?></li>
    <?php endforeach; ?>
</ul>
<script type="text/javascript">
    function traceToggle(event, id) {
        var el = document.getElementById(id);
        el.style.display = (el.style.display === 'block') ? 'none' : 'block';
        event.preventDefault();
        return false;
    }
</script>
