<?php
/**
 * Created by PhpStorm.
 * User: Rudi
 * Date: 3/31/2019
 * Time: 8:22 AM
 * Email: fatkulnurk@gmail.com
 */

namespace App\Repository;


use App\Model\CategoryPost;
use Illuminate\Http\Request;

class CategoryPostRepository implements RepositoryInterface
{
    private $model;
    private $blogid;
    private static $instance = null;

    public function __construct($blogid)
    {
        $this->blogid = $blogid;
        $this->model = new CategoryPost();
    }

    public static function getInstance($blogid)
    {
        if (self::$instance == null) {
            self::$instance = new CategoryPostRepository($blogid);
        }

        return self::$instance;
    }


    public function create(Request $request, $blogId)
    {
        // TODO: Implement create() method.
    }

    public function indexAll(Request $request)
    {
        // TODO: Implement indexAll() method.
    }

    public function index($status, Request $request)
    {
        // TODO: Implement index() method.
    }

    public function indexTrash(Request $request)
    {
        // TODO: Implement indexTrash() method.
    }

    public function update(Request $request, $blogId, $id)
    {
        // TODO: Implement update() method.
    }

    public function findOrFailAll($id)
    {
        // TODO: Implement findOrFailAll() method.
    }

    public function toTrash($id)
    {
        // TODO: Implement toTrash() method.
    }

    public function toDelete($id)
    {
//        $this->model->delete();
    }
}