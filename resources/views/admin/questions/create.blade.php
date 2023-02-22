@extends('layouts.admin',['title' => 'Question '.(($edit == 'yes') ? 'Edit' : 'Create')])
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
            <form method="post" action="{{ route('admin.question.update',['id' => $question->id]) }}" enctype="multipart/form-data">
          @else
            <form method="post" action="{{ route('admin.question.store') }}" enctype="multipart/form-data">
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
                        value="{{$question->title ?? ''}}"
                        />
                        @error('title')
                        <span class="invalid-feedback">{{ $errors->first('title') }}</span>
                        @endif
                    </div>
                    <div class="form-group mt-3">
                        <label>Question For</label>
                        <select
                        type="text"
                        class="form-control"
                        name="type"
                        title="Selected for"
                        />
                        <option @if(($question->type ?? 0) == 0) selected @endif value="0">Games</option>
                        <option @if(($question->type ?? 0) == 1) selected @endif value="1">Manga</option>
                        <option @if(($question->type ?? 0) == 2) selected @endif value="2">Anime</option>
                        </select>
                        @error('type')
                        <span class="invalid-feedback">{{ $errors->first('type') }}</span>
                        @endif
                    </div>
                    <div class="form-group mt-3">
                      <label>Description</label>
                      <!-- <div id="editor"></div> -->
                      <textarea name="description" class="form-control" id="summernote">{{$question->description ?? ''}}</textarea>
                      @error('description')
                      <span class="invalid-feedback">{{ $errors->first('description') }}</span>
                      @endif
                    </div>
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
      })
        // var quill = new Quill("#editor", {
        //     theme: "snow",
        //     update:function(){
        //       console.log(this);
        //     }
        // });
        // quill.setText('Hello\nWorld!');

        // quill.on('text-change', function(delta, oldDelta, source) {
        //   // console.log(source,delta);
        //   // if (source == 'api') {
        //   //   console.log("An API call triggered this change.");
        //   // } else if (source == 'user') {
        //   //   console.log("A user action triggered this change.");
        //   // }
        //   console.log(quill)
        // });

        // quill.on('selection-change', function(range, oldRange, source) {
        //   if (range) {
        //     if (range.length == 0) {
        //       console.log('User cursor is on', range.index);
        //     } else {
        //       var text = quill.getText(range.index, range.length);
        //       console.log('User has highlighted', text);
        //     }
        //   } else {
        //     console.log('Cursor not in the editor');
        //   }
        // });
        // window.onLoad(function(){
        //     loader('s')
        // })
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