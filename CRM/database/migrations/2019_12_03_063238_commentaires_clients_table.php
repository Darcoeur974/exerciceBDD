<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CommentairesClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commentaires_clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('commentaire');
            $table->unsignedBigInteger('id_client');
            $table->unsignedBigInteger('id_type_commentaires');
        });
        Schema::table('commentaires_clients', function (Blueprint $table) {
            $table->foreign('id_client')->references('id')->on('clients');
            $table->foreign('id_type_commentaires')->references('id')->on('type_commentaires_clients');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commentaires_clients');
        Schema::table('commentaires_clients', function (Blueprint $table) {
            Schema::disableForeignKeyConstraints();
            $table->dropForeign(['id_client']);
            $table->dropForeign(['id_type_commentaires']);
        });
    }
}