<?php


/**
 * Author: Emmanuel Paul Mnzava
 * Twitter: @epmnzava
 * Github:https://github.com/dbrax/annoucement
 * Email: epmnzava@gmail.com
 * 
 */

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserAnnoucementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userannoucements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('annoucementid');
            $table->string('userid'); // annoucment sent to a particular user
            $table->integer("read")->default(0); // flag that checks if a notification has been read or not
            $table->timestamp("read_at");
            



             

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
        Schema::dropIfExists('userannoucements');
    }
}