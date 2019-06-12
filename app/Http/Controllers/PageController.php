<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class PageController extends Controller
{
    public $page;

    public function __construct(Page $page)
    {
        $this->page = $page;
    }

    public function index()
    {
        $pages=$this->page->all();

        return view('admin.pages.index',compact('pages'));
    }

    public function create()
    {
        return view('admin.pages.create');
    }

    public function store(Request $request)
    {
        $pages = $this->page->create($request->all());

        return back()->with('success',trans('alerts.success'));
    }

    public function show($slug)
    {
        $page = $this->page->whereSlug($slug)->first();

        return view('admin.pages.show',compact('page'));
    }

    public function edit($id)
    {
        $page = $this->page->find($id);

        return view('admin.pages.edit',compact('page'));
    }

    public function update(Request $request,$id)
    {
        $this->page->find($id)->update($request->all());

        return back()->with('success',trans('alerts.success'));
    }

    public function destroy($id)
    {
        $this->page->find($id)->delete();

        return back()->with('success',trans('alerts.success'));
    }
}
