<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Util\FireIce;


class ApiController extends Controller
{
    protected $fireIce;
    public function __construct(FireIce $fireIce)
    {
        $this->fireIce = $fireIce;
    }
    public function getAllBooks()
    {
        // Get all the post
        $data = $this->fireIce->all();
        return $data;
    }

    public function showBook($id)
    {
        $data = $this->fireIce->findById($id);
        return $data;
    }
}
