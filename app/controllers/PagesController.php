<?php
class PagesController{
    public function tasks ()
    {
        require view('tasks');
    }

    public function people()
    {
        require view('people');
    }

    public function lessons()
    {
        require view('lessons');
    }

    public function about()
    {
        require view('about');
    }

    public function contact()
    {
        require view('contact');
    }


    //CRUD -> CREATE RETRIEVE UPDATE DELETE
}