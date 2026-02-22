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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained()->cascadeOnDelete();
            $table->string('message', 10000);
            $table->timestamps();
        });

        $user = \App\Models\User::create([
            'name' => 'Ram Swami',
            'email' => 'example@exe.com',
            'password' => bcrypt('admin123')
        ]);

        $blog = $user->blogs()->create([
            'message' => 'So Eloquent is making amazing thing, it is second thing that i don\'t know how to use it'
        ]);

        // DB::table('blogs')->insert([
        //     [
        //         'author' => 'Ram Swami',
        //         'message' => 'This Message is Default from App.'
        //     ],
        //     [
        //         'author' => 'Shyam Swami',
        //         'message' => 'This Message is also default from App.'
        //     ]
        // ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
