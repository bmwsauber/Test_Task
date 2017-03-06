<?php$installer = $this;
$installer->startSetup();$installer->run("
	CREATE TABLE `".$this->getTable('test_multiple_order_log')."` (
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	`store_id` TINYINT UNSIGNED NOT NULL DEFAULT '0',
	`order_id` INT UNSIGNED NULL DEFAULT NULL,
	`multyplies_grand_total` DOUBLE UNSIGNED NULL DEFAULT NULL,
	PRIMARY KEY (`id`),
	CONSTRAINT `FK__sales_flat_order` FOREIGN KEY (`order_id`) REFERENCES `sales_flat_order` (`entity_id`) ON UPDATE CASCADE ON DELETE CASCADE
    )
    COLLATE='utf8_general_ci'
    ENGINE=InnoDB
    ;
");

$installer->endSetup();
