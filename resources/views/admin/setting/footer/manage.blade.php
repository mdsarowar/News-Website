@extends('admin.master')
@section('title')
    Manage-footer
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h3>Manage Footer</h3>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Secretary Name</th>
                                    <th>Publisher Name</th>
                                    <th>Image</th>
                                    <th>Image Title</th>
                                    <th>Address</th>
{{--                                    <th>Status</th>--}}
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($footers as $footer)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                       <td>{{$footer->sompadok_name}}</td>
                                       <td>{{$footer->prokasok_name}}</td>
                                        <td>
                                            <img src="{{asset($footer->footer_image)}}" style="height: 100px;width: 100px" alt="">
                                        </td>
                                        <td>{{$footer->image_title}}</td>
                                        <td>{!! $footer->content !!}</td>
{{--                                        <td>{{$footer->status == 0 ? 'unpublished':'published'}}</td>--}}
                                        <td>
{{--                                            <a href="{{route('news_status_change',['id'=>$footer->id])}}"  class="btn-{{$footer->status== 0 ? 'primary':'secondery'}}">status</a>--}}
                                            <a href="{{route('edit_footer',['id'=>$footer->id])}}" class="btn-secondary">Update Footer</a>
{{--                                            <a href="{{route('delete_footer',['id'=>$footer->id])}}" onclick="return confirm('ary you sure ?')" class="btn-danger">del</a>--}}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


