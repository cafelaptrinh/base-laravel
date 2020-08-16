@extends('admin.layout')
@section('breadcrumb')
<div class="page-header card">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="feather icon-home bg-c-blue"></i>
                <div class="d-inline">
                    <h5>Quản Lý Danh Mục</h5>
                    <span>Quản lý các danh mục trong trang web</span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="page-header-breadcrumb">
                <ul class=" breadcrumb breadcrumb-title">
                    <li class="breadcrumb-item">
                        <a href="{{cproute('index')}}"><i class="feather icon-home"></i></a>
                    </li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Quản lý danh mục</a> </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <table class="table table-hover bg-white table-responsive">
                    <thead>
                        <tr>
                            <th class="text-center">STT</th>
                            <th>Tên Danh Mục</th>
                            <th>Slug</th>
                            <th>Danh Mục Cha</th>
                            <th class="text-center">Tình Trạng</th>
                            <th class="text-center">Thao Tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($categories as $category)
                            <tr>
                                <td class="text-center">{{$category->orderBy}}</td>
                                <td>{{$category->name}}</td>
                                <td>{{$category->slug}}</td>
                                <td>{{$category->pCate->name??'Danh Mục Gốc'}}</td>
                                <td class="text-center">
                                    @if ($category->status)
                                    <a href="{{cproute('cate.status',$category->id)}}" class="btn waves-effect waves-light btn-success btn-icon">
                                        <i class="fas fa-check"></i></a>
                                    @else
                                    <a href="{{cproute('cate.status',$category->id)}}" class="btn waves-effect waves-light btn-danger btn-icon">
                                        <i class="fas fa-times"></i></a>
                                    @endif
                                </td>
                                <td class="text-center">
                                    <a href="{{cproute('cate.edit',$category->id)}}" class="btn btn-warning btn-icon">
                                    <i class="fas fa-edit"></i></a>
                                    <button type="button" data-toggle="modal" data-target="#delete-cate" data-id="{{$category->id}}" class="btn btn-danger btn-icon delete-cate">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">
                                    Không có danh mục nào !
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                    <tfoot>
                        <tr>
                            <th class="text-center">STT</th>
                            <th>Tên Danh Mục</th>
                            <th>Slug</th>
                            <th>Danh Mục Cha</th>
                            <th class="text-center">Tình Trạng</th>
                            <th class="text-center">Thao Tác</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="col-md-4">
                <form class="card" action="{{cproute('cate.store')}}" method="POST">
                    @csrf
                    <div class="card-header font-weight-bolder">
                        Thêm Danh Mục
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="cate_name">Tên danh mục :</label>
                            <input name="name" id="cate_name" type="text" class="form-control changeToSlug" required placeholder="Tên danh mục...">
                        </div>
                        <div class="form-group">
                            <label for="cate_slug">Slug định danh :</label>
                            <input name="slug" id="cate_slug" type="text" class="form-control contentSlug" required placeholder="Slug định danh...">
                        </div>
                        <div class="form-group">
                            <label for="cate_pid">Danh mục cha :</label>
                            <select name="pid" id="cate_pid" class="custom-select">
                                <option value="0">Danh Mục Gốc</option>
                                @foreach ($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                    @if ($category->subCate)
                                        @foreach($category->subCate as $subCate)
                                        <option value="{{$subCate->id}}">-- {{$subCate->name}}</option>
                                        @endforeach
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="cate_status">Tình Trạng :</label>
                                    <select name="status" id="cate_status" class="custom-select">
                                        <option value="1">Hiện</option>
                                        <option value="0">Ẩn</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="cate_orderBy">Sắp xếp :</label>
                                    <input min="0" name="orderBy" type="number" class="form-control" value="0">
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-sm btn-primary rounded"><i class="fas fa-save mr-2"></i>Lưu</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="delete-cate" tabindex="-1" role="dialog" aria-labelledby="delete-cate-label" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="delete-cate-label">Cảnh Báo</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              Khi bạn xóa danh mục thì đồng nghĩa với việc xóa các bài viết trong danh mục đó !
              <br><span class="text-danger">Bạn chắc chắn chứ ?</span>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Không</button>
              <a href="{{cproute('cate.delete','')}}" id="delete-cate-link" class="btn btn-danger">Đồng Ý</a>
            </div>
          </div>
        </div>
      </div>
    <script>
        $('.delete-cate').click(function(){
            var id=$(this).data('id');
            var href="{{cproute('cate.delete','')}}";
            $('#delete-cate-link').attr('href',href+'/'+id);
        })
    </script>
@endsection