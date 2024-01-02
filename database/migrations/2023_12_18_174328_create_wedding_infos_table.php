<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeddingInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wedding_infos', function (Blueprint $table) {
            $table->id();
            $table->uuid('uid');
            $table->string('qr_code_img');
            $table->enum('from_side', ['GROOM', 'BRIDE'])->nullable();
            $table->string('sample_teamplate')->nullable();
            $table->string('background_img')->nullable();
            $table->string('welcome_text')->nullable();
            $table->string('wedding_tag_line')->nullable();

            $table->string('groom_full_name')->nullable();
            $table->string('bride_full_name')->nullable();
            $table->string('groom_family_info_with_address')->nullable();
            $table->string('bride_family_info_with_address')->nullable();

            $table->string('groom_img')->nullable();
            $table->string('bride_img')->nullable();

            $table->string('meeting_title_first')->nullable();
            $table->date('meeting_first_date')->nullable();
            $table->string('meeting_first_description')->nullable();
            $table->string('meeting_first_img')->nullable();
            $table->string('meeting_title_second')->nullable();
            $table->date('meeting_second_date')->nullable();
            $table->string('meeting_second_description')->nullable();
            $table->string('meeting_second_img')->nullable();

            $table->string('groom_fathar_full_name')->nullable();
            $table->string('groom_fathar_img')->nullable();
            $table->string('grrom_mother_full_name')->nullable();
            $table->string('grrom_mother_img')->nullable();

            $table->string('bride_fathar_full_name')->nullable();
            $table->string('bride_fathar_img')->nullable();
            $table->string('bride_mother_full_name')->nullable();
            $table->string('bride_mother_img')->nullable();

            $table->string('bride_cousin_first_name')->nullable();
            $table->string('bride_cousin_second_name')->nullable();
            $table->string('bride_cousin_third_name')->nullable();
            $table->string('bride_cousin_fourth_name')->nullable();
            $table->string('bride_cousin_fifth_name')->nullable();

            $table->string('bride_cousin_first_img')->nullable();
            $table->string('bride_cousin_second_img')->nullable();
            $table->string('bride_cousin_third_img')->nullable();
            $table->string('bride_cousin_fourth_img')->nullable();
            $table->string('bride_cousin_fifth_img')->nullable();

            $table->string('prewedding_img_1')->nullable();
            $table->string('prewedding_img_2')->nullable();
            $table->string('prewedding_img_3')->nullable();
            $table->string('prewedding_img_4')->nullable();
            $table->string('prewedding_img_5')->nullable();
            $table->string('prewedding_img_6')->nullable();
            $table->string('prewedding_img_7')->nullable();
            $table->string('prewedding_img_8')->nullable();
            $table->string('prewedding_video_link')->nullable();

            $table->date('haldi_address')->nullable();
            $table->date('haldi_date')->nullable();
            $table->date('wedding_date')->nullable();
            $table->date('add_start_date')->nullable();
            $table->date('add_end_date')->nullable();
            $table->date('wedding_address')->nullable();
            $table->date('google_map_link')->nullable();
            $table->enum('status', ['ACTIVE', 'INACTIVE'])->default('ACTIVE');
            $table->enum('lang', ['ENGLISH', 'MARATHI'])->default('MARATHI');
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
        Schema::dropIfExists('wedding_infos');
    }
}
