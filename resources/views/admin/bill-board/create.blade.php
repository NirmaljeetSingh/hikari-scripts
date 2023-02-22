@extends('layouts.admin',['title' => 'Gallery '.(($edit == 'yes') ? 'Edit' : 'Create')])
@section('main')
    
      <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- <div class="page-breadcrumb">
          <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
              <h4 class="page-title">Dashboard</h4>
              <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Library
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div> commented by ns --> 
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        
        <div class="container-fluid">
          @if($edit == 'yes')
            <form method="post" action="{{ route('admin.bill.update',['id' => $bill->id]) }}" enctype="multipart/form-data">
          @else
            <form method="post" action="{{ route('admin.bill.store') }}" enctype="multipart/form-data">
          @endif
                @csrf
                <div class="row">
                    <!-- Column -->
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-11">
                              
                              <center>{{ \Session::get('fatal') }}</center>
                              
                            </div>
                            <div class="col-md-1">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <label>Title</label>
                        <input
                        type="text"
                        class="form-control "
                        name="title"
                        placeholder="Enter Title"
                        value="{{$bill->title ?? ''}}"
                        required="true"
                        />
                        @error('title')
                        <span class="invalid-feedback">{{ $errors->first('title') }}</span>
                        @endif
                    </div>
                    <div class="form-group mt-3">
                        <label>Image</label>
                        <input
                        type="file"
                        class="form-control "
                        name="image"
                        placeholder="Enter Title"
                        value="{{$bill->title ?? ''}}"
                        required="true"
                        />
                        @error('image')
                        <span class="invalid-feedback">{{ $errors->first('image') }}</span>
                        @endif
                    </div>
                    <div class="form-group mt-3">
                        <label>Gallery For</label>
                        <select
                        type="text"
                        class="form-control"
                        name="type"
                        title="Selected for"
                        required="true"
                        />
                        <option @if(($bill->type ?? 0) == 0) selected @endif value="0">Games</option>
                        <option @if(($bill->type ?? 0) == 1) selected @endif value="1">Manga</option>
                        <option @if(($bill->type ?? 0) == 2) selected @endif value="2">Anime</option>
                        </select>
                        @error('type')
                        <span class="invalid-feedback">{{ $errors->first('type') }}</span>
                        @endif
                    </div>
                    <div class="form-group mt-3">
                      <label>Description</label>
                      <!-- <div id="editor"></div> -->
                      <textarea name="description" class="form-control" id="summernote">{{$bill->description ?? ''}}</textarea>
                      @error('description')
                      <span class="invalid-feedback">{{ $errors->first('description') }}</span>
                      @endif
                    </div>
                    <div class="form-group mt-3">
                      <label>Start</label>
                      <!-- <div id="editor"></div> -->
                      <input type="date"  name="start" class="form-control" required="true">
                    </div>
                    <div class="form-group mt-3">
                      <label>End</label>
                      <!-- <div id="editor"></div> -->
                      <input type="date" name="end"  class="form-control" required="true">
                    </div>
                    <div class="form-group mt-3 no-rm" >
                      <button type="button" class="btn btn-primary" id="new-add-sub-ns">Add sub</button>
                    </div>
                </div>
                <div id="sub-divs-ns">
                </div>
            </form>
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        @include('admin.footer')
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
      </div>
@endSection
@section('e-script')
    <script>
      $(document).ready(function(){
        // $('#summernote').summernote();
        $('#new-add-sub-ns').click(function(){
          var i = 0;
          if($('#sub-divs-ns').find('.ns-sub').length >= 1)
          {
            i = $('#sub-divs-ns').find('.ns-sub:last').data('count') + 1;
          }
          $.ajax({
            url:"{{ route('admin.bill.sub.html') }}",
            data:{i:i},
            success : function(rs){
              $('#sub-divs-ns').append(rs);
            },
            error : function(er){
              console.log(er);
            }
          })
        })
        @if($edit != 'yes')
        $('#new-add-sub-ns').trigger('click');
        @endif
      })
    </script>
    @error('created')
    <script>
        Toast.fire({
            icon: 'success',
            title: 'Blog Saved !'
        })
    </script>
    @endif
@endSection