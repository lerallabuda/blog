
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('post_tag_new', function (Blueprint $table) {
            $table->foreignId('post_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignId('tag_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->unique(['post_id', 'tag_id']);
        });

        Schema::drop('post_tag');

        Schema::rename('post_tag_new', 'post_tag');
    }

    public function down(): void
    {
        Schema::dropIfExists('post_tag');
    }
};
