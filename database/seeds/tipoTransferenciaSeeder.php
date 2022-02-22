<?php

use Illuminate\Database\Seeder;
use App\TipoTransferencia;

class tipoTransferenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipos = ["Pago Servicio","Pago Produto", "Pago Plan", "Otro Pago","Pago de App","Otro"];
        foreach ($tipos as $key) {
            TipoTransferencia::create([
                "tipo" => $key,
            ]);
        }
    }
}
