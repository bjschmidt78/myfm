<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        DB::table('categories')->insert([
            'name' => 'HVAC',        
        ]);
        
        DB::table('categories')->insert([
            'name' => 'Electrical',        
        ]);
        
        DB::table('categories')->insert([
            'name' => 'Plumbing',        
        ]);
        
        DB::table('categories')->insert([
            'name' => 'Furniture',        
        ]);


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
}
