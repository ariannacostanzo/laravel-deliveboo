<?php

use App\Models\Restaurant;
use App\Models\Type;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('restaurant_type', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Restaurant::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Type::class)->constrained()->cascadeOnDelete();
            
           // $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('restaurant_type');
    }
};