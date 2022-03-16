<?php

use App\Models\Category;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });
        
        $categories = [
            'Sofas', 'Sillones', 'Mesas', 'Mesas Auxiliares', 
            'Lamparas', 'Cuadros', 'Espejos', 'Librerias'
        ];
        //Manera tradicional.. NO Mass Assignment
        foreach ($categories as $category) {
            $c = new Category();
            $c->name = $category;
            $c->save();
        }
    }
    
    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
};
