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
        Schema::create('barangs', function (Blueprint $table) {
            $table->id(); // Otomatis bertipe bigInteger dan primary key
            $table->string('KodeBarang', 50)->unique(); // Tipe data string biasanya digunakan untuk teks singkat
            $table->string('NamaBarang',100); // Tipe data string untuk nama barang
            $table->string('Satuan',10); // Tipe data string, misalnya 'kg', 'liter', dll.
            $table->decimal('HargaSatuan', 8, 2); // Tipe data decimal, angka 8 adalah presisi total, dan 2 adalah jumlah angka desimal
            $table->integer('Stok'); // Tipe data integer untuk stok dan unsigned untuk mencegah nilai negatif
            $table->timestamps(); // Kolom created_at dan updated_at, Laravel mengurus tipe datanya
        });
    }

    /**a
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barangs');
    }
};
