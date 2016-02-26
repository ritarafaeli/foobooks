<?php
namespace Foobooks\Http\Controllers;
use Foobooks\Http\Controllers\Controller;
class BookController extends Controller {

    public function getIndex() {
        return 'Show a list of all books';
    }

    public function getShow($id) {
        return 'Show an individual book: '.$id;
    }

    public function getCreate() {
        $view  = '<form method="POST" action="/book/create">';
        $view .= csrf_field();
        $view .= 'Book title: <input type="text" name="title">';
        $view .= '<input type="submit">';
        $view .= '</form>';
        return $view;
    }

    public function postCreate() {
        return 'Add the book: '.$_POST['title'];
    }
} # eoc