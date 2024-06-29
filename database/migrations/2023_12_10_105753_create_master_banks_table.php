<?php

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
        Schema::create('bank_masters', function (Blueprint $table) {
            $table->unsignedbiginteger('id');
            $table->unsignedbiginteger('bank_id')->nullable();
            $table->unsignedbiginteger('status_id')->nullable();
            $table->string('bank_code')->nullable();
            $table->string('name')->nullable();
            $table->string('lang')->default('en');
            $table->unsignedbiginteger('lang_id')->nullable();
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('master_banks');
    }
};
