<?php

use App\Enums\MaintainedBy;
use App\Enums\MaintenanceType;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PhpOffice\PhpSpreadsheet\Calculation\TextData\Format;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('complaints', function (Blueprint $table) {
            $table->increments('id');
            $table->string("department");
            $table->string('problem');
            $table->enum("types_of_maintenance", [MaintenanceType::REPAIR, MaintenanceType::NEW]);
            $table->date("complaint_date");
            $table->string("complaint_by");
            $table->string("maintenance_require");
            $table->string("edp_maintenance_supervisor")->default("JaysukhBhai");
            $table->enum("maintained_by", [MaintainedBy::JAYSUKHBHAI,MaintainedBy::VISHAL,MaintainedBy::JAYESH,MaintainedBy::BHAVESH,MaintainedBy::SAPNA,MaintainedBy::JANKI]);
            $table->date("completed_at");
            $table->string("remark");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('complaints');
    }
};
