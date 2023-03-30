<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneralInfosTable extends Migration
{

    public function up()
    {
        Schema::create('general_infos', function (Blueprint $table) {
            $table->id();
            $table->string('nu_code')->nullable();
            $table->string('mpo_code')->nullable();
            $table->string('institute_name_bn')->nullable();
            $table->string('institute_name_en')->nullable();
            $table->string('village_holding')->nullable();
            $table->string('post_office')->nullable();
            $table->string('post_code')->nullable();
            $table->string('union')->nullable();
            $table->string('upazila')->nullable();
            $table->string('district')->nullable();
            $table->string('division')->nullable();
            $table->string('phone')->nullable();
            $table->string('mobile')->nullable();
            $table->string('fax')->nullable()->nullable();
            $table->string('email')->nullable();
            $table->string('website')->nullable();
            $table->string('election_area')->nullable();
            $table->string('election_area_no')->nullable();
            $table->date('foundation_date')->nullable();
            $table->enum('institute_level',['Higher Secondary', 'Graduate', 'Bachelor degree', 'Post graduate'])->nullable();
            $table->enum('minimum_level', ['Higher Secondary', 'Graduate', 'Bachelor degree'])->nullable();
            $table->enum('management_type',['Government','Non-Government', 'Others'])->nullable();
            $table->enum('institute_type',['Male','Female', 'Co-education'])->nullable();
            $table->string('geo_location')->nullable();
            $table->enum('educational_level',['Higher Secondary', 'Graduate', 'Bachelor degree'])->nullable();
            $table->enum('inst_recognize',['Recognized', 'Permitted', 'None of them'])->nullable();
            $table->date('permission_date')->nullable();
            $table->date('recognition_date')->nullable();
            $table->date('recognition_expire_date')->nullable();
            $table->enum('is_mpo',['Yes', 'No', 'Not Applicable'])->nullable();
            $table->enum('mpo_level',['Higher Secondary', 'Graduate', 'Bachelor degree', 'Post graduate'])->nullable();
            $table->date('mpo_date')->nullable();
            $table->enum('near_administrative_unit',['Upazila', 'District', 'Division', 'Post graduate'])->nullable();
            $table->double('administrative_unit_distance')->nullable();
            $table->double('same_institute_distance')->nullable();
            $table->enum('institute_location',['Rural','Union','Upazila','Non-Municipality', 'Municipality', 'District', 'City Corporation', 'Post graduate', 'Metropolitan', 'Division', 'Others'])->nullable();
            $table->text('near_institute_one')->nullable();
            $table->text('near_institute_two')->nullable();
            $table->enum('governing_body_type', ['Regular', 'Ad Hoc', 'In Process'])->nullable();
            $table->date('governing_body_recognition_date')->nullable();
            $table->date('governing_body_recognition_expire_date')->nullable();
            $table->integer('total_member')->nullable();
            $table->integer('total_female_member')->nullable();
            $table->integer('last_year_meeting')->nullable();
            $table->string('member_attachment')->nullable();
            $table->integer('total_founder_member')->nullable();
            $table->tinyInteger('status')->default(1)->comment('1 - Active, 0 - Inactive');
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->integer('deleted_by')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('general_infos');
    }
}
