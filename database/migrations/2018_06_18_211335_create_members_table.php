<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');

            $table->string('firstname', 255);
            $table->string('surname', 255);
            $table->string('middlename', 255)->nullable();

            $table->text('address')->nullable();
            $table->string('email', 100)->unique();
            $table->string('dob')->nullable();

            $table->string('occupation', 100)->nullable();

            $table->char('gender')->nullable();
            $table->char('marital_status')->nullable();
            
            $table->integer('membership_level')->nullable();

            $table->softDeletes(); //Adds a nullable deleted_at TIMESTAMP equivalent column for soft deletes
            $table->boolean('active')->default(1);;
            $table->integer('created_by')->nullable();
            $table->integer('is_bulk')->default(0);
            $table->integer('deleted_by')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
}
