@extends('admin.master')
@section('title')
    Create News
@endsection

@section('body')

    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3>Logo</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('new_imageurl')}}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row mt-5">
                                <label for="" class="col-md-4 col-form-label">Image</label>
                                <div class="col-md-8">
                                    <input type="file" class="form-control-file" name="news_image">
{{--                                        <img src="{{asset($logo->news_image)}}"style="height: 100px;width: 100px" alt="">--}}
                                </div>
                            </div>
                            <div class="form-group row mt-5">
                                <div class="col-md-8">
                                    <input type="submit" class="btn btn-outline-success btn-block" value="Add logo">
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h3>Image Url</h3>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(isset($imageurls))
                                @foreach($imageurls as $images)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>
                                            <img src="{{asset($images->news_image)}}" style="height: 100px;width: 100px" alt="">
                                        </td>
                                        <td>{{$images->imageurl}}</td>
                                        <td>
                                            <a href="{{route('delete_imageurl',['id'=>$images->id])}}" onclick="return confirm('ary you sure ?')" class="btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                                @endif
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
