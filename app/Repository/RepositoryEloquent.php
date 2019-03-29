<?php
/**
 * Created by PhpStorm.
 * User: Rudi
 * Date: 3/28/2019
 * Time: 3:23 AM
 * Email: fatkulnurk@gmail.com
 */

namespace App\Repository;

class RepositoryEloquent implements RepositoryInterface
{
    private $model;
    private $blogid;
    private static $instance = null;

    public function __construct($blogid)
    {
        $this->blogid = $blogid;
        $this->model = new Post();
    }

    public static function getInstance($blogid)
    {
        if (self::$instance == null) {
            self::$instance = new PostRepository($blogid);
        }

        return self::$instance;
    }

    public function findOrFailAll($id)
    {
        // TODO: Implement findOrFailAll() method.
    }

}