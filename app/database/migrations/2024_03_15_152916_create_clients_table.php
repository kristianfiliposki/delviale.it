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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            /* user id  */
            $table->unsignedBigInteger("user_id")->nullable()->unique();
            $table->foreign("user_id")->references("id")->on("users")->nullOnDelete();
            /* foreign key referencing the id column in the roles table */
            $table->unsignedBigInteger('role_id')->default(2)->nullable();
            $table->foreign("role_id")->references("id")->on("roles")->nullOnDelete();

            $table->string('name');
            $table->bigInteger('telefono');
            $table->string('email');
            $table->integer('punti');
            $table->string('img_url');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
