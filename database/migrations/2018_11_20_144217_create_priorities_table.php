<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrioritiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('priorities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('time_due')->default(0);
            $table->integer('time_reminder')->default(0);
            $table->timestamps();
        });
        

        DB::table('priorities')->insert([
            'name' => 'None',        
        ]);

        DB::table('priorities')->insert([
            'name' => 'Low',        
        ]);

        DB::table('priorities')->insert([
            'name' => 'Medium',        
        ]);

        DB::table('priorities')->insert([
            'name' => 'High',        
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('priorities');
    }
}
