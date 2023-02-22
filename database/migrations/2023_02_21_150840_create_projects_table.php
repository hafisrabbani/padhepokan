<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('expired_at');
            $table->integer('duration'); // in months
            $table->string('thumbnail');
            $table->enum('jenis', ['kontrak', 'non-kontrak']);
            $table->enum('status', ['aktif', 'non-aktif'])->default('aktif');
            $table->bigInteger('biaya'); // rupiah
            $table->text('deskripsi');
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('gmaps')->nullable();
            $table->foreignId('user_winner_id')->references('id')->on('users')->onDelete('cascade')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
};
