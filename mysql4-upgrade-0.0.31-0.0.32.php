<?php
$installer = $this;
$installer->startSetup();
$installer->getConnection()->addColumn($installer->getTable('sales/order_item'),'po_edit_user', 
									array(   
											'type'      => Varien_Db_Ddl_Table::TYPE_TEXT,   
											'nullable'  => false,  
											'length'    => 250,
											'default'=>'0',
											'comment'   => 'po_edit_user'
										 ));