<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
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
			'username' => [
				'type'       => 'VARCHAR',
				'constraint' => '200',
				'unique' => true,
				'NULL' => false,
			],
			'password' => [
				'type'       => 'VARCHAR',
				'constraint' => '200',
				'NULL' => false,
			],
			'image' => [
				'type'       => 'VARCHAR',
				'constraint' => '200',
				'NULL' => true,
			],
			'role_id' => [
				'type'       => 'INT',
				'constraint' => 11,
				'unsigned'       => true,
				'null'			=> false,
			],
			'created_at' => [
				'type'       => 'DATETIME',
				'NULL' => false,
			],
			'updated_at' => [
				'type'       => 'DATETIME',
				'NULL' => true,
			],
			'deleted_at' => [
				'type'       => 'DATETIME',
				'NULL' => true,
			],
			'log_in' => [
				'type'       => 'TINYINT',
				'constraint' => '1',
				'default' => '0',
				'NULL' => false,
			],
		]);
		$this->forge->addKey('id', true);
		$this->forge->addForeignKey('role_id', 'role', 'id', 'CASCADER', 'RESTRICT');
		$this->forge->addForeignKey('document_type_id', 'document_type', 'id', 'CASCADER', 'RESTRICT');
		$this->forge->createTable('user');
	}

	public function down()
	{
		$this->forge->dropTable('user');
	}
}
