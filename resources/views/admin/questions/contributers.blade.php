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
                    <h3>Contributers</h3>
                </div>
                <div class="col-md-2 mt-3 mb-3">
                </div>
            </div>
            <div class="row">
                <!-- Column -->
                <div class="col-md-12">
                    <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">User Name</th>
                        <th scope="col">State</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($question->contributors as $k => $blog)
                        <tr>
                            <th scope="row">{{ ++$blog->iterration }}</th>
                            <td>{{ $blog->user->name ?? 'N/A' }}</td>
                            <td>
                              <form action="{{ route('admin.question.contributerStatus',['id' => $question->id,'cid' => $blog->id]) }}" id="status-form-{{$blog->id}}">
                                <select name="status" onchange="document.getElementById('status-form-{{$blog->id}}').submit()" class="form-c">
                                  <option value="0" @if($blog->status == 0) selected @endif>Pending</option>
                                  <option value="1" @if($blog->status == 1) selected @endif>Approved</option>
                                  <option value="2" @if($blog->status == 2) selected @endif>Reject</option>
                                  <option value="3" @if($blog->status == 3) selected @endif>Try With Better Content</option>
                                </select>
                              </form>
                            </td>
                            <td>
                                <a href="{{ route('admin.question.contributerView',['id' => $question->id,'cid' => $blog->id]) }}" target="_blank"> <i class="fa fa-eye"></i> </a>
                                <!-- <a href="{{ route('admin.question.delete',['id' => $blog->id]) }}" onclick="return confirm('are you sure')"> <i class="fa fa-trash"></i> </a> -->
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