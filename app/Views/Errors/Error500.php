<?php $this->layout('Errors/TemplateError'); ?>

<?= $this->start('error_code') ?>
    500
<?= $this->end() ?>

<?= $this->start('message') ?>
    <?= $this->e($message) ?>
<?= $this->end() ?>