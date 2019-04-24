@extends('Admin.AdminLayouts.index')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>{{__('id')}}</th>
                        <th>{{__('user_name')}}</th>
                        <th>{{__('full_name')}}</th>
                        <th>{{__('created_at')}}</th>
                        <th>{{__('updated_at')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                        @if(isset($allUser) && $allUser->count() > 0)
                            @foreach($allUser as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->user_name}}</td>
                                    <td>{{$item->full_name}}</td>
                                    <td>{{$item->created_at}}</td>
                                    <td>{{$item->updated_at}}</td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection