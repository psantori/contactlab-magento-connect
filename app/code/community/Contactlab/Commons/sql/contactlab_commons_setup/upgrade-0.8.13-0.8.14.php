<?php

$installer = $this;
$installer->startSetup();

$installer->run("
ALTER TABLE {$installer->getTable("contactlab_commons/task")}
    CHANGE `task_data` `task_data` mediumtext comment 'Task internal data';
");

$installer->endSetup();
