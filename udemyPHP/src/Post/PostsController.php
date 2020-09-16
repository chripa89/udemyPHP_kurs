<?php

namespace App\Post;

use App\Core\AbstractController;

class PostsController extends AbstractController
{

    public function __construct(
        PostsRepository $postsRepository,
        CommentsRepository $commmentsRepository
    ) {
        $this->postsRepository = $postsRepository;
        $this->commmentsRepository = $commmentsRepository;
    }



    public function index()
    {
        $posts = $this->postsRepository->all();

        $this->render("post/index", ['posts' => $posts]);
    }

    public function show()
    {
        $id = $_GET['id'];
        if (isset($_POST['content'])) {
            $content = $_POST['content'];
            $this->commmentsRepository->insertForPosts($id, $content);
        }

        $comments = $this->commmentsRepository->allByPost($id);
        $post = $this->postsRepository->find($id);


        $this->render("post/show", [
            'post' => $post,
            'comments' => $comments
        ]);
    }
}
