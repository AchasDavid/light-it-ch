<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    private $table = 'patients';

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create($this->table, function (Blueprint $table) {
            $table->id()->commet('Patient id');
            $table->string('name', 100)->comment("Patient's full name");
            $table->string('email', 50)->comment("Patient's email");
            $table->unsignedBigInteger('phoneNumber')->comment("Patient's phone number");
            $table->string('docPhoto', 150)->comment("Patient's document photo");
            $table->timestamps();
            $table->softDeletes('deleted_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists($this->table);
    }
};
