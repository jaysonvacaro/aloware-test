<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\CommentResource;
use App\Repositories\CommentRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    protected $repository;

    public function __construct(CommentRepository $repository)
    {
        $this->repository = $repository;
    }

    public function list($id)
    {
        return CommentResource::collection($this->repository->getComments($id)->all());
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $comment = $this->repository->createComment($data);

        return new CommentResource($comment);
    }
}
