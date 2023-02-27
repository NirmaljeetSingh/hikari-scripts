@extends('layouts.main')
@section('main')
    <!-- off canvas -->
    <x-canvas></x-canvas>
    
    <section
      class="inner-banner justify-content-center align-items-center d-flex"
    >
      <div class="banner-picture">
        {{-- <img src="/assets/img/banner.jpeg" alt="" /> --}}
        <x-image :src="$blog->images->first()->image" onerror="/assets/img/04.jpg" alt="" />
      </div>
      <div class="banner-content">
        <!-- <h2 class="banner-title">Questionnaire</h2>
        <p class="banner-description">
          Get the latest Hikari news, guides, ideas and thoughts on how to Be Unordinary here.
        </p>     -->
      </div>
    </section>


    <section class="py-5">
        <div class="container-small pt-5" id="articleContent">
          <div class="row">
            <div class="col-md-12 text-center px-lg-5">
              <h2 class="blog-title">
                {{ $blog->title }}
              </h2>
              <div class="blog-meta">
                <a href="" class="badge bg-game">{{ $blog->type }}</a>
                <span>•</span>
                <span>{{ $blog->created_at->format('d M, Y') }}</span>
              </div>
            </div>
          </div>
          {{-- <div class="row">
            <div class="col-md-12 blog-content-image mt-0 mt-md-5 pt-5">
              <div class="mx-auto" style="max-width: 750px">
                <x-image :src="$blog->images->first()->image" onerror="/assets/img/04.jpg" alt="" class="img-fluid" />
              </div>
            </div>
          </div> --}}
          <div class="row">
            <div class="col-md-12 mt-4 mb-4">
                {!! $blog->description !!}
            </div>
          </div>
          {{-- <div class="row">
            <div class="col-md-12 mt-4 mb-4">
              <h3 class="blog-content-title">Local co-living spaces</h3>
              <p class="blog-content">
                More often than not, you encounter properties in Singapore that
                would be perfect for you in all aspects, except that they don’t
                <u>accommodate your furpal</u>. This is a common tribulation
                pet-owners bump into while apartment hunting.
              </p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 blog-content-image mt-2 pt-2">
              <div class="mx-auto" style="max-width: 750px">
                <img src="/assets/img/04.jpg" alt="" class="img-fluid" />
              </div>
              <p class="text-center mt-3">
                Living <a href="#" class="btn-link">room in</a>
              </p>
            </div>
            <div class="col-md-12 mt-4 mb-4">
              <h3 class="blog-content-title">Local co-living spaces</h3>
              <p class="blog-content">
                More often than not, you encounter properties in Singapore that
                would be perfect for you in all aspects, except that they don’t
                <u>accommodate your furpal</u>. This is a common tribulation
                pet-owners bump into while apartment hunting.
              </p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 mt-4 mb-4">
              <h3 class="blog-content-title">
                Ohana means family, and family means nobody gets left behind. That
                includes your pets.
              </h3>
              <p class="blog-content">
                More often than not, you encounter properties in Singapore that
                would be perfect for you in all aspects, except that they don’t
                accommodate your furpal. This is a common tribulation pet-owners
                bump into while apartment hunting.
              </p>
              <p class="blog-content">
                More often than not, you encounter properties in Singapore that
                would be perfect for you in all aspects, except that they don’t
                accommodate your furpal. This is a common tribulation pet-owners
                bump into while apartment hunting.
              </p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 mt-4 mb-4">
              <h3 class="blog-content-title">
                Ohana means family, and family means nobody gets left behind. That
                includes your pets.
              </h3>
              <p class="blog-content">
                More often than not, you encounter properties in Singapore that
                would be perfect for you in all aspects, except that they don’t
                accommodate your furpal. This is a common tribulation pet-owners
                bump into while apartment hunting.
              </p>
              <p class="blog-content">
                More often than not, you encounter properties in Singapore that
                would be perfect for you in all aspects, except that they don’t
                accommodate your furpal. This is a common tribulation pet-owners
                bump into while apartment hunting.
              </p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 mt-4 mb-4">
              <h3 class="blog-content-title">
                Ohana means family, and family means nobody gets left behind. That
                includes your pets.
              </h3>
              <p class="blog-content">
                More often than not, you encounter properties in Singapore that
                would be perfect for you in all aspects, except that they don’t
                accommodate your furpal. This is a common tribulation pet-owners
                bump into while apartment hunting.
              </p>
              <p class="blog-content">
                More often than not, you encounter properties in Singapore that
                would be perfect for you in all aspects, except that they don’t
                accommodate your furpal. This is a common tribulation pet-owners
                bump into while apartment hunting.
              </p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 mt-4 mb-4">
              <h3 class="blog-content-title">
                Ohana means family, and family means nobody gets left behind. That
                includes your pets.
              </h3>
              <p class="blog-content">
                More often than not, you encounter properties in Singapore that
                would be perfect for you in all aspects, except that they don’t
                accommodate your furpal. This is a common tribulation pet-owners
                bump into while apartment hunting.
              </p>
              <p class="blog-content">
                More often than not, you encounter properties in Singapore that
                would be perfect for you in all aspects, except that they don’t
                accommodate your furpal. This is a common tribulation pet-owners
                bump into while apartment hunting.
              </p>
            </div>
          </div> --}}
          <!--  -->
          <div class="row">
            <div class="col-md-12 mt-4 mb-4">
              <h3 class="blog-content-title">Authors</h3>
              <div>
                <a href="" class="btn-link me-3 fw-bold">John Doe</a>
                <a href="" class="btn-link me-3 fw-bold">Myile</a>
                <a href="" class="btn-link me-3 fw-bold">John Doe</a>
                <a href="" class="btn-link me-3 fw-bold">Myile</a>
                <a href="" class="btn-link me-3 fw-bold">John Doe</a>
                <a href="" class="btn-link me-3 fw-bold">Myile</a>
              </div>
            </div>
          </div>
  
          {{-- opentions side --}}
          <div class="fixed-options-wrap">
            <div id="button" class="fixed-options fixed-options-details">
              <div id="top" class="fixed-option-c mt-0 scroll-top-detail">
                <div id="progressBar">
                  <i class="las la-arrow-up"></i>
                  <svg
                    class="progress-circle"
                    width="100%"
                    height="100%"
                    viewBox="0 0 100 100"
                    preserveAspectRatio="xMinYMin meet"
                    class="svg-content"
                  >
                    <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
                  </svg>
                </div>
              </div>
              <div>
                <div class="fixed-option-c" onclick="copyPageURL()">
                  <i class="las la-link"></i>
                </div>
              </div>
              <div>
                <div class="fixed-option-c">
                  {{-- <i class="lar la-heart-o"></i> --}}
                  @auth
                    <form id="like-unlike" method="POST" action="{{ route('blog.like',$blog->id) }}">
                      @csrf
                    </form>
                    <a onclick="document.getElementById('like-unlike').submit()"> <i @class([
                      "lar" => !$blog->is_liked,
                      "la" => $blog->is_liked,
                      "la-heart"
                      ])></i></a>
                  @else
                    <a href="{{ route('login') }}"> <i class="las la-heart"></i></a>
                  @endauth
                  {{-- <i class="lar la-heart"></i> --}}
                  <div class="label-count bg-danger position-relative">
                    {{ $blog->likes->count() }}
                  </div>
                </div>
              </div>
  
              <div>
                <div class="fixed-option-c">
                  <a href="#comments"> <i class="las la-comment"></i></a>
                </div>
              </div>
            </div>
          </div>
  
          <!-- Comments Area -->
          <div class="row comments-area mt-4 mb-4">
            <div class="col-12">
              <h3 class="blog-content-title" id="comments">Comments</h3>
              <link
                href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"
                rel="stylesheet"
              />
              <div class="container bootdey">
                <div class="col-md-12 bootstrap snippets">
                  <div class="panel">
                    <div class="panel-body">
                      <textarea
                        class="form-control"
                        rows="3"
                        placeholder="What are you thinking?"
                      ></textarea>
                      <div class="mar-top share-btn clearfix">
                        <button
                          class="btn btn-sm btn-primary-soft pull-right"
                          type="submit"
                        >
                          <i class="las la-feather-alt"></i> SHARE
                        </button>
                      </div>
                    </div>
                  </div>
                  <div class="panel">
                    <div class="panel-body">
                      <!-- Newsfeed Content -->
                      <!--===================================================-->
                      <div class="media-block">
                        <a class="media-left" href="#"></a>
                        <div class="media-body">
                          <div class="comment-wrapper">
                            <div class="user-comment">
                              <div class="mar-btm">
                                <a
                                  href="#"
                                  class="btn-link text-semibold media-heading box-inline"
                                  >@lisa.d</a
                                >
                                <p class="text-muted text-sm">11 min ago</p>
                              </div>
                              <p>
                                Lorem ipsum, dolor sit amet consectetur
                                adipisicing elit. Id, corrupti dolores ducimus
                                quidem facere assumenda officia ipsum eum quam
                                magni amet odio eveniet cumque cupiditate?
                                Provident possimus nisi reiciendis voluptatibus.
                              </p>
                              <div class="pad-ver">
                                <div class="btn-group">
                                  <a
                                    class="btn btn-sm btn-default btn-hover-success like-button"
                                    href="javascript:;"
                                    ><i class="las la-thumbs-up"></i
                                  ></a>
                                  <span class="tag tag-sm mx-2"
                                    ><i class="las la-heart"></i> 154 Likes</span
                                  >
                                  <a
                                    class="btn btn-sm btn-default btn-hover-danger dislike-button"
                                    href="javascript:;"
                                    ><i class="las la-thumbs-down"></i
                                  ></a>
                                </div>
                                <a
                                  class="btn btn-sm btn-default btn-hover-primary"
                                  href="javascript:;"
                                  ><i class="las la-reply"></i
                                ></a>
                              </div>
                            </div>
  
                            <div class="user-reply">
                              <div class="media-block">
                                <a class="media-left" href="#"></a>
                                <div class="media-body media-reply">
                                  <div class="mar-btm">
                                    <a
                                      href="#"
                                      class="btn-link text-semibold media-heading box-inline"
                                      >@bobby.marz</a
                                    >
                                    <p class="text-muted text-sm">7 min ago</p>
                                  </div>
                                  <p>Reply</p>
                                  <div class="pad-ver">
                                    <div class="btn-group">
                                      <a
                                        class="btn btn-sm btn-default btn-hover-success like-button"
                                        href="javascript:;"
                                        ><i class="las la-thumbs-up"></i
                                      ></a>
                                      <a
                                        class="btn btn-sm btn-default btn-hover-danger dislike-button"
                                        href="javascript:;"
                                        ><i class="las la-thumbs-down"></i
                                      ></a>
                                    </div>
                                    <a
                                      class="btn btn-sm btn-default btn-hover-primary"
                                      href="javascript:;"
                                      ><i class="las la-reply"></i
                                    ></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
  
                          <div class="comment-wrapper">
                            <div class="user-comment">
                              <div class="mar-btm">
                                <a
                                  href="#"
                                  class="btn-link text-semibold media-heading box-inline"
                                  >@lisa.d</a
                                >
                                <p class="text-muted text-sm">11 min ago</p>
                              </div>
                              <p>Comment</p>
                              <div class="pad-ver">
                                <div class="btn-group">
                                  <a
                                    class="btn btn-sm btn-default btn-hover-success like-button"
                                    href="javascript:;"
                                    ><i class="las la-thumbs-up"></i
                                  ></a>
  
                                  <a
                                    class="btn btn-sm btn-default btn-hover-danger dislike-button"
                                    href="javascript:;"
                                    ><i class="las la-thumbs-down"></i
                                  ></a>
                                </div>
                                <a
                                  class="btn btn-sm btn-default btn-hover-primary"
                                  href="javascript:;"
                                  ><i class="las la-reply"></i
                                ></a>
                              </div>
                            </div>
  
                            <div class="user-reply">
                              <div class="media-block">
                                <a class="media-left" href="#"></a>
                                <div class="media-body media-reply">
                                  <div class="mar-btm">
                                    <a
                                      href="#"
                                      class="btn-link text-semibold media-heading box-inline"
                                      >@bobby.marz</a
                                    >
                                    <p class="text-muted text-sm">7 min ago</p>
                                  </div>
                                  <p>Reply</p>
                                  <div class="pad-ver">
                                    <div class="btn-group">
                                      <a
                                        class="btn btn-sm btn-default btn-hover-success like-button"
                                        href="javascript:;"
                                        ><i class="las la-thumbs-up"></i
                                      ></a>
                                      <a
                                        class="btn btn-sm btn-default btn-hover-danger dislike-button"
                                        href="javascript:;"
                                        ><i class="las la-thumbs-down"></i
                                      ></a>
                                    </div>
                                    <a
                                      class="btn btn-sm btn-default btn-hover-primary"
                                      href="javascript:;"
                                      ><i class="las la-reply"></i
                                    ></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
  
                          <div class="comment-wrapper">
                            <div class="user-comment">
                              <div class="mar-btm">
                                <a
                                  href="#"
                                  class="btn-link text-semibold media-heading box-inline"
                                  >@lisa.d</a
                                >
                                <p class="text-muted text-sm">11 min ago</p>
                              </div>
                              <p>Comment</p>
                              <div class="pad-ver">
                                <div class="btn-group">
                                  <a
                                    class="btn btn-sm btn-default btn-hover-success like-button"
                                    href="javascript:;"
                                    ><i class="las la-thumbs-up"></i
                                  ></a>
                                  <span class="tag tag-sm mx-2"
                                    ><i class="las la-heart"></i> 154 Likes</span
                                  >
                                  <a
                                    class="btn btn-sm btn-default btn-hover-danger dislike-button"
                                    href="javascript:;"
                                    ><i class="las la-thumbs-down"></i
                                  ></a>
                                </div>
                                <a
                                  class="btn btn-sm btn-default btn-hover-primary"
                                  href="javascript:;"
                                  ><i class="las la-reply"></i
                                ></a>
                              </div>
                            </div>
  
                            <div class="user-reply">
                              <div class="media-block">
                                <a class="media-left" href="#"></a>
                                <div class="media-body media-reply">
                                  <div class="mar-btm">
                                    <a
                                      href="#"
                                      class="btn-link text-semibold media-heading box-inline"
                                      >@bobby.marz</a
                                    >
                                    <p class="text-muted text-sm">7 min ago</p>
                                  </div>
                                  <p>Reply</p>
                                  <div class="pad-ver">
                                    <div class="btn-group">
                                      <a
                                        class="btn like-button like-button"
                                        href="javascript:;"
                                        ><i class="las la-thumbs-up"></i
                                      ></a>
                                      <a
                                        class="btn btn-sm btn-default btn-hover-danger dislike-button"
                                        href="javascript:;"
                                        ><i class="las la-thumbs-down"></i
                                      ></a>
                                    </div>
                                    <a
                                      class="btn btn-sm btn-default btn-hover-primary"
                                      href="javascript:;"
                                      ><i class="las la-reply"></i
                                    ></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

@endSection

@section('script')
    <script>
        $(function () {
        var progressPath = document.querySelector("#progressBar path");
        var pathLength = progressPath.getTotalLength();
        progressPath.style.transition = progressPath.style.WebkitTransition =
          "none";
        progressPath.style.strokeDasharray = pathLength + " " + pathLength;
        progressPath.style.strokeDashoffset = pathLength;
        progressPath.getBoundingClientRect();
        progressPath.style.transition = progressPath.style.WebkitTransition =
          "stroke-dashoffset 300ms linear";

        var updateProgress = function () {
          var scroll = $(window).scrollTop();
          var height = $("#articleContent").height() - $(window).height();
          var progress = pathLength - (scroll * pathLength) / height;
          progressPath.style.strokeDashoffset = progress > 0 ? progress : 0;
        };

        updateProgress();
        $(window).scroll(updateProgress);
      });

      const copyPageURL = () => {
        navigator.clipboard.writeText(document.location.href).then(() =>
          $.notify("Page link copied!", {
            position: "bottom left",
            className: "success",
          })
        );
      };
    </script>
@endSection