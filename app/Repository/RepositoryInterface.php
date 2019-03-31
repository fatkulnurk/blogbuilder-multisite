<?php
/**
 * Created by PhpStorm.
 * User: Rudi
 * Date: 3/26/2019
 * Time: 6:46 AM
 * Email: fatkulnurk@gmail.com
 */

namespace App\Repository;

use Illuminate\Http\Request;


interface RepositoryInterface
{

    public static function getInstance($blogid);

    public function indexAll(Request $request);
    public function index($status, Request $request);
    public function indexTrash(Request $request);
    public function create(Request $request, $blogId);
    public function update(Request $request, $blogId, $id);
    public function findOrFailAll($id);
    public function toTrash($id);
    public function toDelete($id);
}