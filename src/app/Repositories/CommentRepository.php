<?php

namespace App\Repositories;

use App\Models\Comment;

class CommentRepository extends BaseRepository
{
    public function __construct(Comment $model)
    {
        $this->model = $model;
    }

    public function getComments($post_id)
    {
        return $this->where( 'post_id', $post_id)->orderBy('created_at', 'desc');
    }

    public function createComment(array $data)
    {
        $comment = $this->create($data);

        return $comment;
    }
}
