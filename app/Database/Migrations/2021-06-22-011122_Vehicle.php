<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Vehicle extends Migration
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
			'license_plate' => [
				'type'       => 'VARCHAR',
				'constraint' => '7',
				'NULL' => false,
			],
			'year' => [
				'type'       => 'YEAR',
				'NULL' => true,
			],
			'branch_id' => [
				'type'       => 'INT',
				'constraint' => 11,
				'unsigned'       => true,
				'null'			=> false,
			],
			'color_id' => [
				'type'       => 'INT',
				'constraint' => 11,
				'unsigned'       => true,
				'null'			=> false,
			],
			'person_id' => [
				'type'       => 'INT',
				'constraint' => 11,
				'unsigned'       => true,
				'null'			=> false,
			],
			'created_at' => [
				'type'       => 'DATETIME',
				'NULL' => false,
			],
			'updateed_at' => [
				'type'       => 'DATETIME',
				'NULL' => true,
			],
			'stolen' => [
				'type'       => 'TINYINT',
				'constraint' => '1',
				'default' => '0',
				'NULL' => false,
			],
		]);
		$this->forge->addKey('id', true);
		// $this->forge->addForeignKey('branch_id', 'branch', 'id', 'CASCADER', 'SET NULL');
		// $this->forge->addForeignKey('color_id', 'color', 'id', 'CASCADER', 'SET NULL');
		$this->forge->addForeignKey('person_id', 'person', 'id', 'CASCADER', 'RESTRICT');
		$this->forge->createTable('vehicle');
	}

	public function down()
	{
		$this->forge->dropTable('vehicle');
	}
}
