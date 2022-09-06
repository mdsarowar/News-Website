@extends('admin.master')
@section('title')
    update News
@endsection

@section('body')

    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3>Update News</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('update_news',['id'=>$news->id])}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row mt-5">
                                <label for="category_id" class="col-md-4 col-form-label">Category Name</label>
                                <div class="col-md-8">
                                    <select name="category_id" class="form-control" id="category_id">
                                        <option value="{{$news->category_id}}" disabled selected>{{$news->category->category_name}}</option>
                                        @foreach($categorys as $category)
                                            <option value="{{$category->id}}">{{$category->category_name}}</option>

                                        @endforeach
                                    </select>

                                </div>
                            </div>
                            <div class="form-group row mt-5">
                                <label for="" class="col-md-4 col-form-label">News Title</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="news_title" value="{{$news->news_title}}">
                                </div>
                            </div>
                            <div class="form-group row mt-5">
                                <label for="" class="col-md-4 col-form-label">writer Name</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="writer_name" value="{{$news->writer_name}}">
                                </div>
                            </div>
                            <div class="form-group row mt-5">
                                <label for="" class="col-md-4 col-form-label">Reporter Image</label>
                                <div class="col-md-8">
                                    <input type="file" class="form-control-file" name="reporter_image">
                                    <img src="{{asset($news->reporter_image)}}"style="height: 100px;width: 100px" alt="">
                                </div>
                            </div>
                            <div class="form-group row mt-5">
                                <label for="" class="col-md-4 col-form-label">Image</label>
                                <div class="col-md-8">
                                    <input type="file" class="form-control-file" name="news_image">
                                    <img src="{{asset($news->news_image)}}"style="height: 100px;width: 100px" alt="">
                                </div>
                            </div>
                            <div class="form-group row mt-5">
                                <label for="" class="col-md-4 col-form-label">Image Title</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="image_title" value="{{$news->image_title}}" >
                                </div>
                            </div>
                            <div class="form-group row mt-5">
                                <label for="" class="col-md-4 col-form-label">News Description</label>
                                <div class="col-md-8">
                                    <textarea name="content" id="editor" cols="30" rows="5">{!! $news->content !!}</textarea>
                                </div>
                            </div>
                            <div class="form-group row mt-5">

                                <div class="col-md-8">
                                    <input type="submit" class="btn btn-outline-success btn-block" value="Add Sub Category">
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
