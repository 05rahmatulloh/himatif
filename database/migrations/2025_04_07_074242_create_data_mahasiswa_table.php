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
          Schema::create('data_mahasiswa', function (Blueprint $table) {
          $table->id(); // Primary key
          $table->unsignedBigInteger('user_id'); // Foreign key ke users.id
          $table->string('no_kamar');
          $table->string('nama_mabna');
$table->string('link_ktmm')->nullable();
 $table->timestamps();

          // Foreign key constraint
          $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
          });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_mahasiswa');
    }
};
