<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_base extends CI_Migration {

	public function up()
	{
		## Create Table Produto
		$this->dbforge->add_field("`id` int(11) NOT NULL AUTO_INCREMENT");
		$this->dbforge->add_key("id", TRUE);
		$this->dbforge->add_field("`nome` varchar(45) NOT NULL");
		$this->dbforge->add_field("`slug` varchar(45) NOT NULL");
		$this->dbforge->create_table("produto", TRUE);

		## Create Table Itens_produto
		$this->dbforge->add_field("`id` int(11) NOT NULL AUTO_INCREMENT");
		$this->dbforge->add_key("id", TRUE);
		$this->dbforge->add_field("`produto_id` int(11) NOT NULL");
		$this->dbforge->add_field("`nome` varchar(45) NOT NULL");
		$this->dbforge->add_field("CONSTRAINT FOREIGN KEY (produto_id) REFERENCES produto(id) ON DELETE CASCADE ON UPDATE CASCADE");
		$this->dbforge->create_table("itens_produto", TRUE);

		## Create Table Contato
		$this->dbforge->add_field("`id` int(11) NOT NULL AUTO_INCREMENT");
		$this->dbforge->add_key("id", TRUE);
		$this->dbforge->add_field("`nome` varchar(255) NULL");
		$this->dbforge->add_field("`email` varchar(255) NULL");
		$this->dbforge->add_field("`mensagem` text NULL");
		$this->dbforge->add_field("`data` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'");
		$this->dbforge->create_table("contato", TRUE);

		## popular a base de dados
		$this->create_data();
	 }

	public function down()	{
		### Drop Table Contato ##
		$this->dbforge->drop_table("contato", TRUE);
		
		### Drop Table Itens_Produto ##
		$this->dbforge->drop_table("itens_produto", TRUE);

		### Drop Table Produto ##
		$this->dbforge->drop_table("produto", TRUE);
	}


	protected function create_data()
	{
		//INSERT DATA PRODUTO
		$dataProduto = array(
			//id = 1
			array(
				'nome' => 'PHP',
				'slug' => 'php'
			),
			//id = 2
			array(
				'nome' => 'JAVASCRIPT',
				'slug' => 'javasctipt'
			),
			//id = 3
			array(
				'nome' => 'CSS',
				'slug' => 'css'
			),
			//id = 4
			array(
				'nome' => 'HTML',
				'slug' => 'html'
			),
		);

		$this->db->insert_batch('produto', $dataProduto);


		// INSERT DATA ITENS PRODUTO
		$dataItensProduto = array(
			//id = 1
			array(
				'produto_id' => 1,
				'nome' 		 => 'CodeIgniter'
			),
			//id = 2
			array(
				'produto_id' => 1,
				'nome' 		 => 'Symphony'
			),
			//id = 3
			array(
				'produto_id' => 1,
				'nome' 		 => 'Cake PHP'
			),
			//id = 4
			array(
				'produto_id' => 1,
				'nome' 		 => 'Respect'
			),
			//id = 5
			array(
				'produto_id' => 2,
				'nome' 		 => 'jQuery'
			),
			//id = 6
			array(
				'produto_id' => 2,
				'nome' 		 => 'Prototype'
			),
			//id = 7
			array(
				'produto_id' => 2,
				'nome' 		 => 'Mootools'
			),
			//id = 8
			array(
				'produto_id' => 3,
				'nome' 		 => 'Bootstrap'
			),
			//id = 9
			array(
				'produto_id' => 3,
				'nome' 		 => '960gs'
			),
		);

		$this->db->insert_batch('itens_produto', $dataItensProduto);
	}

}


