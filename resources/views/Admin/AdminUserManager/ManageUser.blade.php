@extends('Admin.AdminLayouts.index')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>{{__('id')}}</th>
                        <th>{{__('full_name')}}</th>
                        <th>{{__('birthday')}}</th>
                        <th>{{__('address')}}</th>
                        <th>{{__('created_at')}}</th>
                        <th>{{__('updated_at')}}</th>
                        <th>{{__('Thao tác')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                        @if(isset($allUser) && $allUser->count() > 0)
                            @foreach($allUser as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->full_name}}</td>
                                    <td>{{date('d-m-Y',strtotime($item->birthday))}}</td>
                                    <td>{{$item->address}}</td>
                                    <td>{{$item->created_at}}</td>
                                    <td>{{$item->updated_at}}</td>
                                    <td class="text-center"><a href="{{route('user.getItem',['id'=>$item->id])}}" class="btn btn-danger">{{__('edit')}}</a></td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="float-right">

        {{ $allUser->links() }}
    </div>
@endsection