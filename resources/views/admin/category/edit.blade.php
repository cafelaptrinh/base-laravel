@extends('admin.layout')
@section('breadcrumb')
<div class="page-header card">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="feather icon-home bg-c-blue"></i>
                <div class="d-inline">
                    <h5>Chỉnh Sửa Danh Mục</h5>
                    <span>Chỉnh sửa {{$category->name}}</span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="page-header-breadcrumb">
                <ul class=" breadcrumb breadcrumb-title">
                    <li class="breadcrumb-item">
                        <a href="{{cproute('index')}}"><i class="feather icon-home"></i></a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{url()->previous()}}">Quản lý danh mục</a> </li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">{{$category->name}}</a> </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
@section('content')
    <div class="mb-2">
        <a href="{{url()->previous()}}" class="btn btn-info btn-sm"><i class="fas fa-chevron-left mr-2"></i>Quay lại</a>
    </div>
    <form action="{{cproute('cate.update',$category->id)}}" class="card" method="post">
    @csrf
    <div class="card-header">
        <h4 class="font-weight-bolder m-0">
            {{$category->name}}
        </h4>
    </div>
        <hr>
    <div class="card-body">
        <div class="form-group">
            <label for="cate_name">Tên danh mục :</label>
            <input id="cate_name" name="name" value="{{$category->name}}" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="cate_slug">Slug định danh :</label>
            <input id="cate_slug" name="slug" value="{{$category->slug}}" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="cate_pid">Danh mục cha :</label>
            <select name="pid" id="cate_pid" class="custom-select">
                <option value="0" @if($category->pid==0){{'selected'}}@endif>Danh Mục Gốc</option>
                @foreach ($categories as $item)
                    <option value="{{$item->id}}" @if($category->pid==$item->id){{'selected'}}@endif>{{$item->name}}</option>
                    @if ($item->subCate)
                        @foreach($item->subCate as $subCate)
                        <option value="{{$subCate->id}}" @if($category->pid==$item->id){{'selected'}}@endif>-- {{$subCate->name}}</option>
                        @endforeach
                    @endif
                @endforeach
            </select>
        </div>
        <div class="form-row">
            <div class="col-6 form-group">
                <label for="cate_status">Trạng Thái :</label>
                <select name="status" id="cate_status" class="custom-select">
                    <option value="1">Hiện</option>
                    <option value="0">Ẩn</option>
                </select>
            </div>
            <div class="col-6 form-group">
                <label for="cate_order">Sắp Xếp :</label>
                <input value="0" min="0" type="number" id="cate_order" name="orderBy" class="form-control">
            </div>
        </div>
        <button class="btn btn-primary rounded">
            <i class="ti-reload mr-2"></i>Cập Nhật
        </button>
    </div>
    </form>
@endsection