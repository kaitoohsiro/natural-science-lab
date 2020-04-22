<?php
namespace App\Repositories;

use App\Model\Posts;
use App\Model\Category;

class ReadRepository
{
    private $modelName;
    private $table;
    private $model;

    public function __construct()
    {
        $this->modelName = 'posts';
        $this->model = new Posts();
        $this->table = $this->model->getTable();
    }

    public function getMathList()
    {
        $keyWord = 'Math';
        $category = new Category();
        $key = $category::where('name', '=', $keyWord)
            ->first();
        $mathList = $this->model::where('category_id', '=', $key->id)
            ->paginate(5);
        return $mathList;
    }

    public function getBrainList()
    {
        $keyWord = 'Brain';
        $category = new Category();
        $key = $category::where('name', '=', $keyWord)
            ->first();
        $brainList = $this->model::where('category_id', '=', $key->id)
            ->paginate(5);
        return $brainList;
    }

    public function getPhysicsList()
    {
        $keyWord = 'Physics';
        $category = new Category();
        $key = $category::where('name', '=', $keyWord)
            ->first();
        $physicsList = $this->model::where('category_id', '=', $key->id)
            ->paginate(5);
        return $physicsList;
    }


    public function getDetailPost($postId)
    {
        $detailPost = $this->model::where('id', '=', $postId)
            ->first();
        $detailPost['body'] = strip_tags($detailPost['body']);
        return $detailPost;
    }
}
