<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Setting; // Import model Setting

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->string('label');
            $table->string('value')->nullable();
            $table->string('type');
            $table->timestamps();
        });

        // Buat data awal di tabel settings
        Setting::create([
            'key' => '_site_name',
            'label' => 'Judul Situs',
            'value' => 'Website Sederhana',
            'type' => 'text',
        ]);

        Setting::create([
            'key' => '_site_description',
            'label' => 'Deskripsi Situs',
            'value' => 'Website Sederhana, dengan admin filamen, untuk halal life style',
            'type' => 'text',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
}