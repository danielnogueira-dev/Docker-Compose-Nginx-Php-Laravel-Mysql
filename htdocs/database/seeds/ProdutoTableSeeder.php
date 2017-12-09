<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("insert into produtos (nome, quantidade, valor, descricao)
		                          values (?, ?, ?, ?)"
		                          ,array ('Geladeira', 2, 5900.00, 'Side by Side com gelo na porta')
				  );

		DB::insert("insert into produtos (nome, quantidade, valor, descricao)
		                          values (?, ?, ?, ?)"
		                          ,array (utf8_encode('Fogão'), 5, 950.00, utf8_encode('Painel automático e forno elétrico'))
				  );

		DB::insert("insert into produtos (nome, quantidade, valor, descricao)
		                          values (?, ?, ?, ?)"
		                          ,array ('Microondas', 1, 1520.00, 'Manda SMS quando termina de esquentar')
				  );
    }
}
