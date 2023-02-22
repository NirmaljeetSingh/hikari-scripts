@extends('layouts.admin',['title' => 'Question'])
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
                    <a href="{{ route('admin.question.create') }}"><button class="btn btn-primary">Add New Question</button></a>
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
                        <th scope="col">Description</th>
                        <th scope="col">For</th>
                        <th scope="col">Status</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($questions as $k => $blog)
                        <tr>
                            <th scope="row">{{ ++$blog->iterration }}</th>
                            <td>{{ $blog->title }}</td>
                            <td>{{ $blog->description }}</td>
                            <td><?php 
                                if($blog->type == 0)
                                {
                                    echo 'Games';
                                }
                                elseif($blog->type == 1)
                                {
                                    echo 'Manga';
                                }
                                else
                                {
                                    echo 'Anime';
                                }
                            ?>
                            </td>
                            <td>
                              <form action="{{ route('admin.question.status',['id' => $blog->id]) }}" id="status-form-{{$blog->id}}">
                                <select name="status" onchange="document.getElementById('status-form-{{$blog->id}}').submit()" class="form-c">
                                  <option value="0" @if($blog->status == 0) selected @endif>Deactive</option>
                                  <option value="1" @if($blog->status == 1) selected @endif>Active</option>
                                </select>
                              </form>
                            </td>
                            <td>
                                <a href="{{ route('admin.question.contributers',['id' => $blog->id]) }}"> <i class="fa fa-eye"></i> </a>
                                <a href="{{ route('admin.question.edit',['id' => $blog->id]) }}"> <i class="fa fa-edit"></i> </a>
                                <a href="{{ route('admin.question.delete',['id' => $blog->id]) }}" onclick="return confirm('are you sure')"> <i class="fa fa-trash"></i> </a>
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