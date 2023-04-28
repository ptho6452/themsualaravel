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
        Schema::create('sinhviens', function (Blueprint $table) {
            $table->id();
            $table->string('maSV')->nullable();
            $table->string('hoten')->nullable();
            $table->date('ngaysinh')->nullable();
            $table->string('gioitinh')->nullable();
            $table->string('diachi')->nullable();
            $table->string('sdt')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sinhviens');
    }
};
