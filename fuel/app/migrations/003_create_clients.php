<?php

namespace Fuel\Migrations;

class Create_clients
{
	public function up()
	{
		\DBUtil::create_table('clients', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'site' => array('constraint' => 255, 'type' => 'varchar'),
			'web_address' => array('constraint' => 255, 'type' => 'varchar'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('clients');
	}
}