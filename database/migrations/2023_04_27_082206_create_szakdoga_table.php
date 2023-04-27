<?php

use App\Models\Szakdoga;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('szakdoga', function (Blueprint $table) {
            $table->id();
            $table->string("szakdoga_nev");
            $table->string("githublink");
            $table->string("oldalink");
            $table->string("tagokneve");
            $table->timestamps();
        });

        Szakdoga::create(["szakdoga_nev"=>"webáruház", "githublink"=>"www.github.com", "oldalink"=> "oldallink", "tagokneve"=>"Máté, Bence, Peti"]);
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('szakdoga');
    }
};
