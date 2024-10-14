<?php

use App\Models\User;
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
        Schema::create('pembimbing_akd', function (Blueprint $table) {
            $table->unsignedBigInteger('nip')->primary();
            $table->string('name');
            $table->string('email')->unique();
            $table->foreignIdFor(User::class, 'created_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembimbing_akd');
    }
};
