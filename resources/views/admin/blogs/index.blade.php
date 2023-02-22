@extends('layouts.admin',['title' => 'Blogs'])
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
            <div class="row">
                <!-- Column -->
                <div class="col-md-10 mt-3 mb-3">
                </div>
                <div class="col-md-2 mt-3 mb-3">
                    <a href="{{ route('admin.blog.create') }}"><button class="btn btn-primary">Add New Blog</button></a>
                </div>
            </div>
            <div class="row">
                <!-- Column -->
                <div class="col-md-12">
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Title</th>
                          <th scope="col">Author</th>
                          <th scope="col">For</th>
                          <th scope="col">Featured</th>
                          <th scope="col">Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($blogs as $k => $blog)
                        <tr>
                            <th scope="row">{{ $blog->iterration }}</th>
                            <td>{{ $blog->title }}</td>
                            <td>{{ ($blog->user_id == 0) ? $blog->admin->name : $blog->user->name  }}</td>
                            <td>{{ ucfirst($blog->type) }}</td>
                            <td>
                              <a href="{{ route('admin.blog.featured',['id' => $blog->id]) }}" class="hre">
                                <i @class(['fas','fa-toggle-on', 'd-none' => ($blog->featured == 'no')])></i>
                                <i @class(['fas','fa-toggle-off', 'd-none' => ($blog->featured == 'yes')])></i>
                              </a>
                            </td>
                            <td>
                                <a href="{{ route('admin.blog.edit',['id' => $blog->id]) }}"> <i class="fa fa-edit"></i> </a>
                                <a href="{{ route('admin.blog.delete',['id' => $blog->id]) }}" onclick="return confirm('are you sure')"> <i class="fa fa-trash"></i> </a>
                            </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                </div>
            </div>
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