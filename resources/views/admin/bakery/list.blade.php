@extends('layouts.master', ['currentPage' => 'bakery-list'])
@section('page-title', 'List Bakery - Admin Page')
@section('content')
    <div class="card">
        <div class="card-body">
            <h3 class="card-title float-left">
                {{__('message.list_product')}}
                <small class="text-muted">{{__('message.show_all_bakery')}}</small>
            </h3>
            <a href="/admin/bakery/create" class="btn float-right"><i class="fas fa-plus-circle"></i> {{__('message.create_new')}}</a>
            <div class="clearfix"></div>
            <div class="alert alert-success d-none" role="alert" id="messageSuccess"></div>
            <div class="alert alert-danger d-none" role="alert" id="messageError"></div>
            @if(count($bakeries_in_view)>0)
            <div class="row m-1">
                <form action="/admin/bakery/list" method="GET" class="form-inline" name="category-form">
                    <div class="form-group">
                        <label>Choose a category: </label>
                        <select name="categoryId" class="form-control m-3">
                            <option value="0">All</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}" {{$category->id==$choosedCategoryId?'selected':''}}>{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </form>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr class="row">
                        <th class="col-md-1"></th>
                        <th class="col-md-1">{{__('message.id')}}</th>
                        <th class="col-md-2">{{__('message.thumbnail')}}</th>
                        <th class="col-md-2">{{__('message.name')}}</th>
                        <th class="col-md-2">{{__('message.description')}}</th>
                        <th class="col-md-1">{{__('message.price')}}</th>
                        <th class="col-md-3">{{__('message.action')}}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bakeries_in_view as $item)
                    <tr class="row" id="row-item-{{$item->id}}">
                        <td class="col-md-1 text-center">
                            <input type="checkbox" class="check-item">
                        </td>
                        <td class="col-md-1">{{$item->id}}</td>
                        <td class="col-md-2">
                            <div class="card"
                                 style="background-image: url('{{$item->images}}'); background-size: cover; width: 60px; height: 60px;">
                            </div>
                        </td>
                        <td class="col-md-2">{{$item->name}}</td>
                        <td class="col-md-2">{{$item->description}}</td>
                        <td class="col-md-1">{{$item->price}}</td>
                        <td class="col-md-3">
                            <a href="#" class="btn btn-link btn-quick-edit">{{__('message.quick_edit')}}</a>&nbsp;&nbsp;
                            <a href="/admin/bakery/edit/{{$item -> id}}" class="btn btn-link btn-edit">{{__('message.edit')}}</a>&nbsp;&nbsp;
                            <a href="#" id="{{$item-> id}}" class="btn btn-link btn-delete">{{__('message.delete')}}</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="row">
                <div class="col-md-8 form-inline">
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" value="" id="check-all">
                        <label class="form-check-label" for="defaultCheck1">
                            {{__('message.check_all')}}
                        </label>
                    </div>
                    <div class="form-group mx-sm-3 mb-2">
                        <select id="select-action" class="form-control">
                            <option selected value="0">--{{__('message.select_action')}}--</option>
                            <option value="1">{{__('message.delete_all_checked')}}</option>
                            <option value="2">{{__('message.another_action')}}</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary mb-2" id="btn-apply">{{__('message.apply')}}</button>
                </div>
                <div class="col-md-4">
                    <div class="float-right">
                        {{ $bakeries_in_view -> appends($_GET) -> links() }}
                    </div>
                </div>
            </div>
            @else
                <div class="alert alert-info" role="alert">
                    {!! __('message.tip_create_bakery') !!}
                </div>
            @endif
        </div>
    </div>

    <!-- Modal Edit BAkery-->
    <div class="modal fade" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">{{__('message.quick_edit')}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" name="edit-bakery-form">
                        <input type="hidden" name="id">
                        <div class="form-group">
                            <label>{{__('message.name')}}</label>
                            <input type="text" name="name" class="form-control w-50">
                        </div>
                        <div class="form-group">
                            <label>{{__('message.price')}}</label>
                            <input type="number" name="price" class="form-control w-25">
                        </div>
                        <div class="form-group">
                            <label>{{__('message.thumbnail')}}</label>
                            <input type="text" name="images" class="form-control">
                            <img src="" alt="" class="img-thumbnail mt-2" style="width: 100px">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('message.close')}}</button>
                    <button type="button" class="btn btn-primary" id="btn-update-bakery">{{__('message.save_change')}}</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        var listDeleteButton = document.getElementsByClassName('btn-delete');
        for (var i = 0; i < listDeleteButton.length; i++) {
            listDeleteButton[i].onclick = function () {
                if(confirm('Are you sure ?')){
                    var params = '_token={{csrf_token()}}';
                    var currentId = this.id;
                    var xhttp = new XMLHttpRequest();
                    xhttp.open("POST", "/admin/bakery/destroy/" + currentId, true);
                    xhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            alert('Delete success!');
                        }
                    };
                    xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                    xhttp.send(params);
                }
            }
        }
    </script>
    <script src="{{asset('js/myscript.js')}}"></script>
@endsection