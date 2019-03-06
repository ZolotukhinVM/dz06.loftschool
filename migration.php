<?php

require './vendor/autoload.php';
require 'config.php';

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Capsule\Manager as Capsule;

Capsule::schema()->dropIfExists('goods_tbl');
Capsule::schema()->create('goods_tbl', function (Blueprint $table) {
    $table->increments('id');
    $table->integer('cat_id')->unsigned();
    $table->string('name');
    $table->timestamps();
});

Capsule::schema()->table('goods_tbl', function (Blueprint $table) {
    $table->text('info');
});

Capsule::schema()->dropIfExists('category_tbl');
Capsule::schema()->create('category_tbl', function (Blueprint $table) {
    $table->increments('id');
    $table->string('name', 50);
    $table->string('content');
    $table->timestamps();
});
