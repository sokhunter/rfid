<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Person extends Migration
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
			'name' => [
				'type'       => 'VARCHAR',
				'constraint' => '200',
				'NULL' => false,
			],
			'lastname' => [
				'type'       => 'VARCHAR',
				'constraint' => '200',
				'NULL' => false,
			],
			'document_type_id' => [
				'type'       => 'INT',
				'constraint' => 11,
				'unsigned'       => true,
				'null'			=> false,
			],
			'document' => [
				'type'       => 'VARCHAR',
				'constraint' => '20',
				'unique' => true,
				'NULL' => false,
			],
			'address' => [
				'type'       => 'TEXT',
				'NULL' => false,
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
			'updateed_at' => [
				'type'       => 'DATETIME',
				'NULL' => true,
			],
		]);
		$this->forge->addKey('id', true);
		$this->forge->addForeignKey('document_type_id', 'document_type', 'id', 'CASCADER', 'RESTRICT');
		$this->forge->addForeignKey('district_id', 'district', 'id', 'CASCADER', 'RESTRICT');
		$this->forge->createTable('person');
	}

	public function down()
	{
		$this->forge->dropTable('person');
	}
}
