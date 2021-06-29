<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Role extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
				'null'			=> false,
			],
			'description' => [
				'type'       => 'VARCHAR',
				'constraint' => '200',
			],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('role');
	}

	public function down()
	{
		$this->forge->dropTable('role');
	}
}
