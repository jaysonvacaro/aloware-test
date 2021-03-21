<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class CommentsTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic feature test example.
     *
     * @return void
     */

    /** @test */
    public function can_fetch_all_comments()
    {
        $response = $this->get('/');
        $response = $this->getJson(route('comments.list', 1));
        $response->assertStatus(200);
    }

    /** @test */
    public function can_add_comment()
    {
        $this->withoutExceptionHandling();

        $commentData = [
            'parent_id' => 1,
            'username' => 'jaysonvacaro',
            'body' => 'New Comment 1'
        ];

        $response = $this->postJson(route('comment.store', 1), $commentData);
        $this->assertDatabaseHas('comments', $commentData);
    }
}
