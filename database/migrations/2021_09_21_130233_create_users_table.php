<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();

            $table->boolean("admin")->default(0); // 관리자여부
            $table->string("name")->nullable(); // 이름
            $table->string("contact")->nullable(); // 연락처

            $table->integer("point")->default(0); // 적립금

            $table->timestamp('verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string("social_id")->nullable();
            $table->string("social_platform")->nullable();
            $table->unique(["social_id", "social_platform"]);

            $table->boolean("agree_ad")->default(false);

            $table->text("reason_leave_out")->nullable(); // 탈퇴사유

            $table->string("account")->nullable(); // 환급계좌 계좌번호
            $table->string("bank")->nullable(); // 환급계좌 은행명
            $table->string("owner")->nullable(); // 환급계좌 예금주

            $table->string("recommend_contact")->nullable(); // 추천인 아이디
            $table->date("birth"); // 생일
            $table->boolean("marriage")->default(true); // 결혼여부
            $table->boolean("men")->default(true); // 남자여부
            $table->text("location")->nullable(); // 지역

            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
