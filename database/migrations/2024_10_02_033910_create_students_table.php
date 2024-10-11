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
        Schema::create('students', function (Blueprint $table) {
            $table->id(); // Integer, Khóa chính, Tự động tăng
            $table->string('name'); // String, Tên
            $table->string('email')->unique(); // String, Email duy nhất
            $table->string('password'); // String, Mật khẩu
            $table->unsignedInteger('student_code')->unique(); // Integer, MSSV, không để trống, 8 kí tự
            $table->string('class'); // String, Lớp
            $table->string('faculty'); // String, Khoa
            $table->rememberToken(); // Cho phép nhớ đăng nhập
            $table->timestamps(); // Thời gian tạo và cập nhật
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
