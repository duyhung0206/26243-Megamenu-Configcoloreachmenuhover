<?php

$installer = $this;

$installer->startSetup();
$installer->getConnection()->addColumn($installer->getTable('megamenu/megamenu'), 'tab_color', 'varchar(255) default "1D475E"');
$installer->endSetup();