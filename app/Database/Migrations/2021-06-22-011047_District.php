<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class District extends Migration
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
		$this->forge->createTable('district');
	}

	public function down()
	{
		$this->forge->dropTable('district');
	}
}
