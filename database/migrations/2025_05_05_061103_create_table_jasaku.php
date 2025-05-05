<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up(): void
    {
         // Users
         Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('address');
            $table->string('password');
            $table->timestamps();
        });

        // Roles
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // admin, vendor, user
            $table->timestamps();
        });

        // Pivot Table: role_user
        Schema::create('role_user', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('role_id')->constrained('roles')->onDelete('cascade');
            $table->primary(['user_id', 'role_id']);
        });

        // Services
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // vendor
            $table->string('category'); // langsung string tanpa tabel kategori
            $table->string('title');
            $table->text('description');
            $table->decimal('price', 10, 2);
            $table->string('location');
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');
            $table->timestamps();
        });

        // Bookings
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('vendor_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('service_id')->constrained('services')->onDelete('cascade');
            $table->date('booking_date');
            $table->time('booking_time');
            $table->string('location');
            $table->text('note')->nullable();
            $table->tinyInteger('rating')->nullable();
            $table->text('comment')->nullable();
            $table->enum('status', ['pending', 'confirmed', 'completed'])->default('pending');
            $table->timestamps();
        });

        // Payments
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('booking_id')->constrained('bookings')->onDelete('cascade');
            $table->enum('method', ['manual', 'gateway']);
            $table->decimal('amount', 10, 2);
            $table->enum('status', ['paid', 'unpaid', 'cancelled'])->default('unpaid');
            $table->timestamp('paid_at')->nullable();
            $table->timestamps();
        });
    }

   
    public function down(): void
    {
        Schema::dropIfExists('payments');
        Schema::dropIfExists('bookings');
        Schema::dropIfExists('services');
        Schema::dropIfExists('role_user');
        Schema::dropIfExists('roles');
        Schema::dropIfExists('users');
    }
};
