@extends('layouts.admin')
@section('main')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Gallery</h4>
            <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                <!-- <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                    Library
                    </li>
                </ol> -->
                </nav>
            </div>
            </div>
        </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- Column -->
            <div class="col-md-10 mt-3 mb-3">
            </div>
            <div class="col-md-2 mt-3 mb-3">
                <a href="{{ route('admin.gallery.create') }}"><button class="btn btn-primary">Add Images</button></a>
            </div>
        </div>
        <div class="row el-element-overlay">
            @foreach($gallery as $g => $gal)
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="el-card-item">
                    <div class="el-card-avatar el-overlay-1">
                        <img src="{{ asset($gal->image) }}" alt="user" />
                        <div class="el-overlay">
                        <ul class="list-style-none el-info">
                            <li class="el-item">
                            <a
                                class="
                                btn
                                default
                                btn-outline
                                image-popup-vertical-fit
                                el-link
                                "
                                href="{{ asset($gal->image) }}"
                                ><i class="mdi mdi-magnify-plus"></i
                            ></a>
                            </li>
                            <li class="el-item">
                            <a
                                class="btn default btn-outline el-link"
                                onclick="return confirm('Are you sure?')"
                                href="{{ route('admin.gallery.delete',['id' => $gal->id]) }}"
                                ><i class="fa fa-trash"></i
                            ></a>
                            </li>
                            <li class="el-item">
                            <a
                                class="btn default btn-outline el-link"
                                href="{{ route('admin.gallery.edit',['id' => $gal->id]) }}"
                                ><i class="fa fa-edit"></i
                            ></a>
                            </li>
                        </ul>
                        </div>
                    </div>
                    <div class="el-card-content">
                        <h4 class="mb-0">{{ $gal->title}}</h4>
                        <span class="text-muted">{{ $gal->description}}</span>
                    </div>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="el-card-item">
                    <div class="el-card-avatar el-overlay-1">
                        <img src="../assets/images/big/img2.jpg" alt="user" />
                        <div class="el-overlay">
                        <ul class="list-style-none el-info">
                            <li class="el-item">
                            <a
                                class="
                                btn
                                default
                                btn-outline
                                image-popup-vertical-fit
                                el-link
                                "
                                href="../assets/images/big/img2.jpg"
                                ><i class="mdi mdi-magnify-plus"></i
                            ></a>
                            </li>
                            <li class="el-item">
                            <a
                                class="btn default btn-outline el-link"
                                href="javascript:void(0);"
                                ><i class="mdi mdi-link"></i
                            ></a>
                            </li>
                        </ul>
                        </div>
                    </div>
                    <div class="el-card-content">
                        <h4 class="mb-0">Project title</h4>
                        <span class="text-muted">subtitle of project</span>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="el-card-item">
                <div class="el-card-avatar el-overlay-1">
                    <img src="../assets/images/big/img3.jpg" alt="user" />
                    <div class="el-overlay">
                    <ul class="list-style-none el-info">
                        <li class="el-item">
                        <a
                            class="
                            btn
                            default
                            btn-outline
                            image-popup-vertical-fit
                            el-link
                            "
                            href="../assets/images/big/img3.jpg"
                            ><i class="mdi mdi-magnify-plus"></i
                        ></a>
                        </li>
                        <li class="el-item">
                        <a
                            class="btn default btn-outline el-link"
                            href="javascript:void(0);"
                            ><i class="mdi mdi-link"></i
                        ></a>
                        </li>
                    </ul>
                    </div>
                </div>
                <div class="el-card-content">
                    <h4 class="mb-0">Project title</h4>
                    <span class="text-muted">subtitle of project</span>
                </div>
                </div>
            </div>
            </div>
            <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="el-card-item">
                <div class="el-card-avatar el-overlay-1">
                    <img src="../assets/images/big/img4.jpg" alt="user" />
                    <div class="el-overlay">
                    <ul class="list-style-none el-info">
                        <li class="el-item">
                        <a
                            class="
                            btn
                            default
                            btn-outline
                            image-popup-vertical-fit
                            el-link
                            "
                            href="../assets/images/big/img4.jpg"
                            ><i class="mdi mdi-magnify-plus"></i
                        ></a>
                        </li>
                        <li class="el-item">
                        <a
                            class="btn default btn-outline el-link"
                            href="javascript:void(0);"
                            ><i class="mdi mdi-link"></i
                        ></a>
                        </li>
                    </ul>
                    </div>
                </div>
                <div class="el-card-content">
                    <h4 class="mb-0">Project title</h4>
                    <span class="text-muted">subtitle of project</span>
                </div>
                </div>
            </div>
            </div>
            <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="el-card-item">
                <div class="el-card-avatar el-overlay-1">
                    <img src="../assets/images/big/img3.jpg" alt="user" />
                    <div class="el-overlay">
                    <ul class="list-style-none el-info">
                        <li class="el-item">
                        <a
                            class="
                            btn
                            default
                            btn-outline
                            image-popup-vertical-fit
                            el-link
                            "
                            href="../assets/images/big/img3.jpg"
                            ><i class="mdi mdi-magnify-plus"></i
                        ></a>
                        </li>
                        <li class="el-item">
                        <a
                            class="btn default btn-outline el-link"
                            href="javascript:void(0);"
                            ><i class="mdi mdi-link"></i
                        ></a>
                        </li>
                    </ul>
                    </div>
                </div>
                <div class="el-card-content">
                    <h4 class="mb-0">Project title</h4>
                    <span class="text-muted">subtitle of project</span>
                </div>
                </div>
            </div>
            </div>
            <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="el-card-item">
                <div class="el-card-avatar el-overlay-1">
                    <img src="../assets/images/big/img5.jpg" alt="user" />
                    <div class="el-overlay">
                    <ul class="list-style-none el-info">
                        <li class="el-item">
                        <a
                            class="
                            btn
                            default
                            btn-outline
                            image-popup-vertical-fit
                            el-link
                            "
                            href="../assets/images/big/img5.jpg"
                            ><i class="mdi mdi-magnify-plus"></i
                        ></a>
                        </li>
                        <li class="el-item">
                        <a
                            class="btn default btn-outline el-link"
                            href="javascript:void(0);"
                            ><i class="mdi mdi-link"></i
                        ></a>
                        </li>
                    </ul>
                    </div>
                </div>
                <div class="el-card-content">
                    <h4 class="mb-0">Project title</h4>
                    <span class="text-muted">subtitle of project</span>
                </div>
                </div>
            </div>
            </div>
            <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="el-card-item">
                <div class="el-card-avatar el-overlay-1">
                    <img src="../assets/images/big/img6.jpg" alt="user" />
                    <div class="el-overlay">
                    <ul class="list-style-none el-info">
                        <li class="el-item">
                        <a
                            class="
                            btn
                            default
                            btn-outline
                            image-popup-vertical-fit
                            el-link
                            "
                            href="../assets/images/big/img6.jpg"
                            ><i class="mdi mdi-magnify-plus"></i
                        ></a>
                        </li>
                        <li class="el-item">
                        <a
                            class="btn default btn-outline el-link"
                            href="javascript:void(0);"
                            ><i class="mdi mdi-link"></i
                        ></a>
                        </li>
                    </ul>
                    </div>
                </div>
                <div class="el-card-content">
                    <h4 class="mb-0">Project title</h4>
                    <span class="text-muted">subtitle of project</span>
                </div>
                </div>
            </div>
            </div>
            <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="el-card-item">
                <div class="el-card-avatar el-overlay-1">
                    <img src="../assets/images/big/img1.jpg" alt="user" />
                    <div class="el-overlay">
                    <ul class="list-style-none el-info">
                        <li class="el-item">
                        <a
                            class="
                            btn
                            default
                            btn-outline
                            image-popup-vertical-fit
                            el-link
                            "
                            href="../assets/images/big/img1.jpg"
                            ><i class="mdi mdi-magnify-plus"></i
                        ></a>
                        </li>
                        <li class="el-item">
                        <a
                            class="btn default btn-outline el-link"
                            href="javascript:void(0);"
                            ><i class="mdi mdi-link"></i
                        ></a>
                        </li>
                    </ul>
                    </div>
                </div>
                <div class="el-card-content">
                    <h4 class="mb-0">Project title</h4>
                    <span class="text-muted">subtitle of project</span>
                </div>
                </div>
            </div>
            </div>
            <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="el-card-item">
                <div class="el-card-avatar el-overlay-1">
                    <img src="../assets/images/big/img1.jpg" alt="user" />
                    <div class="el-overlay">
                    <ul class="list-style-none el-info">
                        <li class="el-item">
                        <a
                            class="
                            btn
                            default
                            btn-outline
                            image-popup-vertical-fit
                            el-link
                            "
                            href="../assets/images/big/img1.jpg"
                            ><i class="mdi mdi-magnify-plus"></i
                        ></a>
                        </li>
                        <li class="el-item">
                        <a
                            class="btn default btn-outline el-link"
                            href="javascript:void(0);"
                            ><i class="mdi mdi-link"></i
                        ></a>
                        </li>
                    </ul>
                    </div>
                </div>
                <div class="el-card-content">
                    <h4 class="mb-0">Project title</h4>
                    <span class="text-muted">subtitle of project</span>
                </div>
                </div>
            </div>
            </div>
            <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="el-card-item">
                <div class="el-card-avatar el-overlay-1">
                    <img src="../assets/images/big/img2.jpg" alt="user" />
                    <div class="el-overlay">
                    <ul class="list-style-none el-info">
                        <li class="el-item">
                        <a
                            class="
                            btn
                            default
                            btn-outline
                            image-popup-vertical-fit
                            el-link
                            "
                            href="../assets/images/big/img2.jpg"
                            ><i class="mdi mdi-magnify-plus"></i
                        ></a>
                        </li>
                        <li class="el-item">
                        <a
                            class="btn default btn-outline el-link"
                            href="javascript:void(0);"
                            ><i class="mdi mdi-link"></i
                        ></a>
                        </li>
                    </ul>
                    </div>
                </div>
                <div class="el-card-content">
                    <h4 class="mb-0">Project title</h4>
                    <span class="text-muted">subtitle of project</span>
                </div>
                </div>
            </div>
            </div>
            <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="el-card-item">
                <div class="el-card-avatar el-overlay-1">
                    <img src="../assets/images/big/img3.jpg" alt="user" />
                    <div class="el-overlay">
                    <ul class="list-style-none el-info">
                        <li class="el-item">
                        <a
                            class="
                            btn
                            default
                            btn-outline
                            image-popup-vertical-fit
                            el-link
                            "
                            href="../assets/images/big/img3.jpg"
                            ><i class="mdi mdi-magnify-plus"></i
                        ></a>
                        </li>
                        <li class="el-item">
                        <a
                            class="btn default btn-outline el-link"
                            href="javascript:void(0);"
                            ><i class="mdi mdi-link"></i
                        ></a>
                        </li>
                    </ul>
                    </div>
                </div>
                <div class="el-card-content">
                    <h4 class="mb-0">Project title</h4>
                    <span class="text-muted">subtitle of project</span>
                </div>
                </div>
            </div>
            </div>
            <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="el-card-item">
                <div class="el-card-avatar el-overlay-1">
                    <img src="../assets/images/big/img4.jpg" alt="user" />
                    <div class="el-overlay">
                    <ul class="list-style-none el-info">
                        <li class="el-item">
                        <a
                            class="
                            btn
                            default
                            btn-outline
                            image-popup-vertical-fit
                            el-link
                            "
                            href="../assets/images/big/img4.jpg"
                            ><i class="mdi mdi-magnify-plus"></i
                        ></a>
                        </li>
                        <li class="el-item">
                        <a
                            class="btn default btn-outline el-link"
                            href="javascript:void(0);"
                            ><i class="mdi mdi-link"></i
                        ></a>
                        </li>
                    </ul>
                    </div>
                </div>
                <div class="el-card-content">
                    <h4 class="mb-0">Project title</h4>
                    <span class="text-muted">subtitle of project</span>
                </div>
                </div>
            </div>
            </div> -->
        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer text-center">
        All Rights Reserved by Matrix-admin. Designed and Developed by
        <a href="https://www.wrappixel.com">WrapPixel</a>.
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
@endSection