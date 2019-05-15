@extends('Admin.AdminLayouts.index')
@section('content')
    {{Form::open(array('method' => 'POST','files' => false, 'url'=>URL::route('user.postItem',['id'=>$data['id']])))}}
    <div class="card shadow mb-4">
        <div class="collapse show">
            <div class="card-body row">
                <button type="submit" class="btn btn-success">{{__('edit')}}</button>
            </div>
        </div>
    </div>
    <div class="card shadow mb-4">
        <!-- Card Header - Accordion -->
        <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
            <h6 class="m-0 font-weight-bold text-primary">{{__('user_information')}}</h6>
        </a>
        <!-- Card Content - Collapse -->
        <div class="collapse show" id="collapseCardExample">
            <div class="card-body row">
                <div class="col-sm-6 table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <tr>
                            <td class="align-items-center"><span>{{__('full_name')}}</span></td>
                            <td>@if(isset($data['full_name']))<input type="text" name="full_name" class="width100percent form-control" value="{{$data['full_name']}}">@endif</td>
                        </tr>
                        <tr>
                            <td><span>{{__('birthday')}}</span></td>
                            <td>@if(isset($data['birthday']))<input type="date" name="birthday" class="width100percent form-control" value="{{date('Y-m-d',strtotime($data['birthday']))}}">@endif</td>
                        </tr>
                        <tr>
                            <td><span>{{__('phone')}}</span></td>
                            <td>@if(isset($data['phone']))<input type="text" name="phone" class="width100percent form-control" value="{{$data['phone']}}">@endif</td>
                        </tr>
                        <tr>
                            <td><span>{{__('address')}}</span></td>
                            <td>@if(isset($data['address']))<input type="text" name="address" class="width100percent form-control" value="{{$data['address']}}">@endif</td>
                        </tr>
                    </table>
                </div>
                <div class="col-sm-6">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <tr>
                            <td><span>{{__('Ngày tạo')}}</span></td>
                            <td>@if(isset($data['created_at']))<input type="date" class="width100percent form-control" value="{{date('Y-m-d',strtotime($data['created_at']))}}" readonly>@endif</td>
                        </tr>
                        <tr>
                            <td><span>{{__('Mô tả')}}</span></td>
                            <td>@if(isset($data['description']))<textarea name="description" class="width100percent form-control">{{$data['description']}}</textarea>@endif</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    {{Form::close()}}
@endsection