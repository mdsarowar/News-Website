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
                    <form action="{{isset($logo)? route('update_logo',$logo->id):route('new_logo')}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row mt-5">
                            <label for="" class="col-md-4 col-form-label">Image</label>
                            <div class="col-md-8">
                                <input type="file" class="form-control-file" name="logo_image">
                                @if(isset($logo))
                                <img src="{{asset($logo->image)}}"style="height: 100px;width: 100px" alt="">
                                @endif
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

@endsection
