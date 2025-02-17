<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::table('students', function (Blueprint $table) {
            $table->string('name')->after('id');
            $table->string('email')->unique()->after('name');
            $table->integer('age')->after('email');
            $table->string('address')->after('age');
            $table->string('grade_level')->after('address');
        });
    }

    public function down() {
        Schema::table('students', function (Blueprint $table) {
            $table->dropColumn(['name', 'email', 'age', 'address', 'grade_level']);
        });
    }
};

