<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Section\Entities\Section;
return new class extends Migration {
    public function up() {
        Schema::create('sections', function (Blueprint $table) {
            $table->id();
            //$table->uuid('uuid')->unique();
            $table->string('name', 100);
            $table->longText('notes')->nullable();
            $table->boolean('status')->default(false);
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('sections');
    }
};
