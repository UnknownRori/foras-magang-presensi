<?php

use App\Enums\RoleEnum;
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
        Schema::table('users', function (Blueprint $table) {
            $table->enum('role', RoleEnum::toArray())
                ->default(RoleEnum::Asisten->name);
        });

        // NOTE: first Migration the 0 is 'Magang' and 1 is 'Admin'
        DB::raw("UPDATE users SET role = (case when admin then 'Admin' else 'Magang' end);");

        Schema::table('users', function ($table) {
            $table->dropColumn('admin');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->boolean('admin')->default(0);
        });

        DB::table('users')->update(['admin' => DB::raw('role')]);

        Schema::table('users', function ($table) {
            $table->dropColumn('role');
        });
    }
};
