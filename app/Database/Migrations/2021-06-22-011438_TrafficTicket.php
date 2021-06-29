<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TrafficTicket extends Migration
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
			'code' => [
				'type'       => 'VARCHAR',
				'constraint' => '20',
				'NULL' => false,
			],
			'evidence' =>[
				'type'       => 'VARCHAR',
				'constraint' => '200',
				'NULL' => true,
			],
			'lat' => [
				'type'       => 'VARCHAR',
				'constraint' => '50',
			],
			'long' => [
				'type'       => 'VARCHAR',
				'constraint' => '50',
			],
			'district_id' => [
				'type'       => 'INT',
				'constraint' => 11,
				'unsigned'       => true,
				'null'			=> false,
			],
			'created_at' => [
				'type'       => 'DATETIME',
				'NULL' => false,
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
		$this->forge->addForeignKey('district_id', 'district', 'id', 'CASCADER', 'RESTRICT');
		$this->forge->addForeignKey('vehicle_id', 'vehicle', 'id', 'CASCADER', 'RESTRICT');
		$this->forge->addForeignKey('infraction_id', 'infraction', 'id', 'CASCADER', 'RESTRICT');
		$this->forge->createTable('traffic_ticket');
	}

	public function down()
	{
		$this->forge->dropTable('traffic_ticket');
	}
}
