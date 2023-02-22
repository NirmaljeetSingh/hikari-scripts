@extends('layouts.admin',['title' => 'Blog '.(($edit == 'yes') ? 'Edit' : 'Create')])
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
            <form method="post" action="{{ route('admin.blog.update',['id' => $blog->id]) }}" enctype="multipart/form-data">
          @else
            <form method="post" action="{{ route('admin.blog.store') }}" enctype="multipart/form-data">
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
                        value="{{$blog->title ?? ''}}"
                        />
                        @error('title')
                        <span class="invalid-feedback">{{ $errors->first('title') }}</span>
                        @endif
                    </div>
                    <div class="form-group mt-3 d-none">
                        <label>Blog Type</label>
                        <select
                        type="text"
                        class="form-control"
                        name="blog_type"
                        title="Selected for"
                        onchange="hideShowTabs()"
                        />
                        <option @if(($blog->blog_type ?? 0) == 1) selected @endif value="1">Text And Image</option>
                        <option @if(($blog->blog_type ?? 0) == 2) selected @endif value="2">Mutilple Tabs</option>
                        </select>
                        @error('blog_type')
                        <span class="invalid-feedback">{{ $errors->first('type') }}</span>
                        @endif
                    </div>
                    <div class="form-group mt-3">
                        <label>Blog For</label>
                        <select
                        type="text"
                        class="form-control"
                        name="type"
                        title="Selected for"
                        />
                        <option @if(($blog->type ?? 'games') == 'games') selected @endif value="games">Games</option>
                        <option @if(($blog->type ?? 'game') == 'manga') selected @endif value="manga">Manga</option>
                        <option @if(($blog->type ?? 'game') == 'anime') selected @endif value="anime">Anime</option>
                        <option @if(($blog->type ?? 'game') == 'writers pen') selected @endif value="writers pen">Writer's Pen</option>
                        </select>
                        @error('type')
                        <span class="invalid-feedback">{{ $errors->first('type') }}</span>
                        @endif
                    </div>
                    <div class="form-group mt-3">
                        <label>image</label>
                        <input
                        type="file"
                        class="form-control"
                        name="images[]"
                        accept="image/*"
                        multiple
                        placeholder="Enter Image"
                        />
                        @error('images')
                        <span class="invalid-feedback">{{ $errors->first('images') }}</span>
                        @endif
                    </div>
                    <div class="form-group mt-3" id="description-blog">
                      <label>Description</label>
                      <!-- <div id="editor"></div> -->
                      <textarea name="description" id="summernote">{{$blog->description ?? ''}}</textarea>
                      @error('description')
                      <span class="invalid-feedback">{{ $errors->first('description') }}</span>
                      @endif
                    </div>
                </div>
                <div class="row" id="multiple-summernote">
                  <div class="form-group mt-3" data-id="1">
                    <button class="btn btn-primary" type="button" onclick="multipleSummer()">Add Tab</button>
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
        $('#summernote').summernote({
          height: 200,
        });
        $('.summernote').summernote({
          height: 200,
        });
      })
      function multipleSummer()
      {
        var id_count = $('#multiple-summernote').find('ns-summer').length;
        if(id_count == 0)
        {
        }
        else
        {
          var id_count = $('#multiple-summernote').find('ns-summer:last').data('id');
        }
        id_count ++;
        var html = '<div class="form-group mt-3 ns-summer" data-id="'+id_count+'">'
                    +'<label>Tab Name</label>'
                    +'<input type="text" class="form-control " name="tab['+id_count+']" placeholder="Enter Tab Name" value="" />'
                  +'</div>'
                  +'<div class="form-group mt-3" data-id="'+id_count+'">'
                    +'<label>Description</label>'
                    +'<textarea name="description['+id_count+']" class="summernote"></textarea>'
                  +'</div>';
        $('#multiple-summernote').append(html);
        $('.summernote').summernote();
      }
      function hideShowTabs()
      {
        var v = $("select[name='blog_type']").val();
        if(v == 2)
        {
          $('#multiple-summernote').show();
          $('#description-blog').hide()
          return false;
        }
        $('#description-blog').show()
        $('#multiple-summernote').hide();
      }
      hideShowTabs()
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