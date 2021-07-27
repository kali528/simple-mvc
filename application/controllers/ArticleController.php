<?php
require_once 'MainController.php';

class ArticleController extends MainController
{
    public function index() //GET
    {
        $this->template->assign('section_name', 'Article');
        $this->template->display('article/index.tpl');
        exit;
    }

    public function create() //GET
    {
        dd('create');
    }

    public function store( $request ) //POST
    {
        dd('index');

    }

    public function show( $request ) //get
    {
        dd($request);
    }

    public function edit( $request )
    {
         dd($request);
    }
    
    public function update( $request )
    {
         dd($request);
    }

    public function destroy( $request )
    {
         dd($request);
    }
}
