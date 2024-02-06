<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UploadFileTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_upload_file(): void
    {
      $file = UploadedFile::fake()->create('cv.pdf', 1000);

      $response = $this->postJson('api/files', [
        'my_file' => $file
      ]);

      $response -> assertSuccessful();
    }
}
