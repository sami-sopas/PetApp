<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PetTask extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pet:task';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Eliminar las mascotas con status Adoptado';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // $text = "[" . date("Y-m-d H:i:s") . "]: Hola soy un comando de prueba";
        // Storage::disk('local')->append("archivo.txt",$text);

        //Esta funcion elimina cada semana los pets que ya esten en status de adoptado
        DB::delete('delete from pets where status = 3');
    }
}
