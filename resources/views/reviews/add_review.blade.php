@extends('layout.master')

@section('content')

<form id="myForm" method="POST"  action="{{route('review.store')}}" enctype="multipart/form-data">
@csrf
              <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="name"> Name<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="name" placeholder="" name="pat_name">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="fName">rating<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="fName" placeholder="/5" name="rating">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="adress">Comment<font style="color:red">*</font></label>
                    <textarea class="form-control" id="adress" name="description" rows="2"></textarea>
                  </div>
                <div class="form-group col-md-12">
                <button type="submit" class="btn btn-primary btn-sm" name="">Save</button>
                </div>
              </div>
            </form>


@endsection