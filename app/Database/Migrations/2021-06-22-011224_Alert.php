<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Alert extends Migration
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
			'lat' => [
				'type'       => 'VARCHAR',
				'constraint' => '50',
			],
			'long' => [
				'type'       => 'VARCHAR',
				'constraint' => '50',
			],
			'created_at' => [
				'type'       => 'DATETIME',
				'NULL' => false,
			],
			'managed_at' => [
				'type'       => 'DATETIME',
				'NULL' => true,
			],
			'vehicle_id' => [
				'type'       => 'INT',
				'constraint' => 11,
				'unsigned'       => true,
				'null'			=> false,
			],
			'infraction_id' => [
				'type'       => 'INT',
				'constraint' => 11,
				'unsigned'       => true,
				'null'			=> false,
			],
		]);
		$this->forge->addKey('id', true);
		$this->forge->addForeignKey('vehicle_id', 'vehicle', 'id', 'CASCADER', 'RESTRICT');
		$this->forge->addForeignKey('infraction_id', 'infraction', 'id', 'CASCADER', 'RESTRICT');
		$this->forge->createTable('alert');
	}

	public function down()
	{
		$this->forge->dropTable('alert');
	}
}
