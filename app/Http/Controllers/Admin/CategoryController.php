<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    function index(Category $cate){
        $data['categories']=$cate->all();
        return view('admin.category.index')->with($data);
    }

    function store(Request $r){
        $this->validate($r,[
            'name'=>'required|string',
            'slug'=>'required|alpha_dash|unique:categories',
            'pid'=>'required|numeric',
            'orderBy'=>'required|numeric',
            'status'=>'required|numeric',
        ]);
        Category::create($r->only(['pid','name','slug','status','orderBy']));
        return redirect()->back()->with('success','Thêm danh mục thành công !');
    }

    function status($id){
        $cate=Category::findOrFail($id);
        $cate->update([
            'status'=>$cate->status?0:1
        ]);
        return redirect()->back()->with('success','Cập nhật thành công !');
    }

    function delete($id){
        $cate=Category::findOrFail($id)->delete();
        return redirect()->back()->with('success','Xóa danh mục thành công !');
    }

    function edit($id){
        $data['category']=Category::findOrFail($id);
        $data['categories']=Category::where('id','!=',$id)->get();
        return view('admin.category.edit')->with($data);
    }
    
    function update(Request $r,$id){
        $this->validate($r,[
            'name'=>'required|string',
            'slug'=>'required|alpha_dash',
            'pid'=>'required|numeric',
            'orderBy'=>'required|numeric',
            'status'=>'required|numeric'
        ]);
        Category::findOrFail($id)->update($r->only(['pid','name','slug','orderBy','status']));
        return redirect()->route(config('admin.name').'cate.index')->with('success','Cập nhật thành công !');
    }
}
