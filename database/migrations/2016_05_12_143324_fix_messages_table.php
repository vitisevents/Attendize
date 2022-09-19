<?php

use App\Models\Message;
use Illuminate\Database\Migrations\Migration;

class FixMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('messages', function ($table) {
            $table->string('recipients')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Message::where('recipients', null)->delete();
        Schema::table('messages', function ($table) {
            $table->string('recipients')->nullable(false)->change();
        });
    }
}
