<?php

declare(strict_types=1);

namespace Engelsystem\Migrations;

use Engelsystem\Database\Migration\Migration;
use Illuminate\Database\Schema\Blueprint;

class ChangePlannedDatesToDatetime extends Migration
{
    /**
     * Run the migration
     */
    public function up(): void
    {
        $this->schema->table('users_personal_data', function (Blueprint $table): void {
            $table->dateTime('planned_arrival_date')->nullable()->change();
            $table->dateTime('planned_departure_date')->nullable()->change();
        });
    }

    /**
     * Reverse the migration
     */
    public function down(): void
    {
        $this->schema->table('users_personal_data', function (Blueprint $table): void {
            $table->date('planned_arrival_date')->nullable()->change();
            $table->date('planned_departure_date')->nullable()->change();
        });
    }
}
