<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSitesTable extends Migration
{
  /**
   * 站点
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('sites', function (Blueprint $table) {
      $table->bigIncrements('id');
      //默认模块
      table_foreign($table, 'modules', 'module_id');
      $table->string('name')->unique()->comment('站点名称');
      $table->string('domain')->unique()->comment('域名');
      $table->string('keyword', 100)->nullable()->comment('关键字');
      $table->string('description', 100)->nullable()->comment('站点描述');
      $table->string('logo')->nullable()->comment('LOGO');
      $table->string('icp', 100)->nullable()->comment('ICP');
      $table->string('tel', 30)->nullable()->comment('电话');
      $table->string('email')->nullable()->comment('邮箱');
      $table->string('counter')->nullable()->comment('统计代码');
      $table->mediumText('config')->nullable()->comment('配置');
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
    Schema::dropIfExists('sites');
  }
}
