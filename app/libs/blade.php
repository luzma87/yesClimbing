<?php
Blade::extend(function ($view) {
    $pattern = '/@title\(\s?[\'\"](.*)[\'\"]\s?\)/';
    $replacement = "<?php \$__env->startSection('title');?>$1<?php \$__env->stopSection();?>";
    return preg_replace($pattern, $replacement, $view);
});