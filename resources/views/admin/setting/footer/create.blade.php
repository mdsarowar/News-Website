@extends('admin.master')
@section('title')
    Create Footer
@endsection

@section('body')

    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3>Add Footer</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{isset($footer)? route('update_footer',$footer->id):route('new_footer')}}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row mt-5">
                                <label for="" class="col-md-4 col-form-label">Secretary Name</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="sompadok_name">
                                </div>
                            </div>
                            <div class="form-group row mt-5">
                                <label for="" class="col-md-4 col-form-label">Publisher Name</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="prokasok_name">
                                </div>
                            </div>
                            <div class="form-group row mt-5">
                                <label for="" class="col-md-4 col-form-label">footer Image</label>
                                <div class="col-md-8">
                                    <input type="file" class="form-control-file" name="footer_image">
                                </div>
                            </div>
                            <div class="form-group row mt-5">
                                <label for="" class="col-md-4 col-form-label">Image Title</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="image_title">
                                </div>
                            </div>
                            <div class="form-group row mt-5">
                                <label for="" class="col-md-4 col-form-label">Address</label>
                                <div class="col-md-8">
                                    <textarea name="content" id="editor" cols="30" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="form-group row mt-5">

                                <div class="col-md-8">
                                    <input type="submit" class="btn btn-outline-success btn-block" value="Add footer">
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
