<?php

namespace App\Http\Controllers;

use App\Book;
use App\Util\FireIce;
use Illuminate\Http\Request;

class BookController extends Controller
{

    protected $fireIce;
    public function __construct(FireIce $fireIce)
    {
        $this->fireIce = $fireIce;
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'isbn' => 'required|string',
            'authors' => 'required|array',
            'country' => 'required|string',
            'number_of_pages' => 'required|numeric',
            'publisher' => 'required|string',
            'release_date' => 'required|string',
        ]);

        //instantiate book model and save
        $book = new Book($request->all());
        $book->save();
        return $this->fireIce->responseHandlerBook($book, 201, 'created');
    }

    public function allBooks()
    {
        $books = Book::get();
        return $this->fireIce->responseHandlerBook($books, 200, 'success');
    }

    public function updateBook(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'isbn' => 'required|string',
            'authors' => 'required|array',
            'country' => 'required|string',
            'number_of_pages' => 'required|numeric',
            'publisher' => 'required|string',
            'release_date' => 'required|string',
        ]);


        $book = Book::whereId($id)->first();
        if ($book){
            $book->name = $request->name;
            $book->isbn = $request->isbn;
            $book->authors = $request->authors;
            $book->country = $request->country;
            $book->number_of_pages = $request->number_of_pages;
            $book->publisher = $request->publisher;
            $book->release_date = $request->release_date;
            $book->update();
            $status = "success";
            $message = "The book $request->name was updated successfully";
            $responseType = 200;
        }else{
            $status = "failure";
            $message = "The resource you are looking for could not be found!";
            $responseType = 401;
        }

        return $this->fireIce->responseHandlerBook([$status, $message], $responseType, $status);
    }

    public function singleBook($id)
    {
        $book = Book::where('id', $id)->first();
        if ($book){
            $status = "success";
            $responseType = 200;
            $data = $book;
        }else{
            $status = "failure";
            $responseType = 401;
            $data = [];
        }
        return $this->fireIce->responseHandlerBook($data, $responseType, $status);
    }

    public function deleteBook($id)
    {
        $book = Book::where('id', $id)->first();
        if ($book){
            $data = $book->delete();
                if($data){
                    $status = "success";
                    $message = "The book $book->name was deleted successfully";
                    $responseType = 204;
                }

        }else{
            $status = "failure";
            $responseType = 401;
            $message = "The resource you are looking for could not be found!";
        }
        return $this->fireIce->responseHandlerBook($message, $responseType,$status);
    }
}
