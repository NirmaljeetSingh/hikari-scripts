<section class="mt-4">
    <div class="container">
        <div class="row">
            <div
            class="col-12 d-flex align-items-center justify-content-between mb-3 pb-4 outer-card"
            >
            <h2 class="title-anime title-sec mb-0">{{ $sectionTitle }}</h2>
            <a href="blogs.html" class="btn btn-primary-soft text-uppercase"
                >Explore</a>
            </div>
        </div>
        <div class="row gx-lg-3">
            <div
                class="col-12 col-lg-7 aos-init aos-animate outer-card pb-4"
                data-aos="fade-right"
                data-aos-offset="50"
                data-aos-easing="ease-in-sine">
                <div class="large-card article">
                    <a href="{{ route('blog.show',[base64_encode($data->first()->id),$data->first()->title]) }}" class="card-link"></a>
                    <div class="article-img mb-2">
                    {{-- <img src="{{ $data->first()->images->first()->image }}" alt="" class="img-fluid" /> --}}
                    <x-Image src="{{ $data->first()->images->first()->image }}" alt="" error="/assets/img/01.jpg"  class="img-fluid" />
                    </div>
                    <div class="article-detail">
                    <div class="d-inline-block badge bg-listicle mb-0 fw-normal">
                        {{ $data->first()->type }}
                    </div>
                    <h4 class="m-0">
                        <a href="{{ route('blog.show',[base64_encode($data->first()->id),$data->first()->title]) }}" class="btn-link">
                            {{ $data->first()->title }}
                            
                        </a>
                        <small>
                            {{-- 12 JUL. 2022 --}}
                            {{ $data->first()->created_at->format('d M, Y') }}
                        </small>
                    </h4>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-5 outer-card pb-0">
                <div class="row">
                    @foreach($data as $blog)
                    <div
                        class="col-md-6 col-lg-12 aos-init aos-animate"
                        data-aos="fade-up"
                        data-aos-delay="100">
                        <div class="card mb-5 border-0">
                            <a href="{{ route('blog.show',[base64_encode($blog->id),$blog->title]) }}" class="card-link"></a>
                            <div class="row g-3">
                            <div class="col-5">
                                <div class="article-thumb me-2 article-img">
                                    <x-Image src="{{ $blog->images->first()->image }}" alt="" error="/assets/img/01.jpg"  class="img-fluid" />
                                </div>
                            </div>
                            <div class="col-7">
                                <div class="article-detail article-detail-thumb">
                                <h5 class="mb-0">
                                    <a href="{{ route('blog.show',[base64_encode($blog->id),$blog->title]) }}" class="btn-link"
                                    >{{ $blog->title }}</a
                                    >
                                </h5>
                                <small>{{ $blog->created_at->format('d M, Y') }}</small>
                                <div
                                    class="d-inline-block badge bg-listicle mb-0 fw-normal"
                                >
                                    {{ $blog->type }}
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{-- <div
                        class="col-md-6 col-lg-12 aos-init aos-animate"
                        data-aos="fade-up"
                        data-aos-delay="150" >
                        <div class="card mb-5 border-0">
                            <a href="#" class="card-link"></a>
                            <div class="row g-3">
                            <div class="col-5">
                                <div class="article-thumb me-2 article-img">
                                <img src="assets/img/01.jpg" alt="" class="img-fluid" />
                                </div>
                            </div>
                            <div class="col-7">
                                <div class="article-detail article-detail-thumb">
                                <h5 class="mb-0">
                                    <a href="#" class="btn-link"
                                    >Lorem ipsum dolor sit amet</a
                                    >
                                </h5>
                                <small>12 JUL. 2022</small>
                                <div
                                    class="d-inline-block badge bg-game mb-0 fw-normal"
                                >
                                    Game
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-md-6 col-lg-12 aos-init aos-animate"
                        data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="card mb-5 border-0">
                            <a href="#" class="card-link"></a>
                            <div class="row g-3">
                            <div class="col-5">
                                <div class="article-thumb me-2 article-img">
                                <img src="assets/img/01.jpg" alt="" class="img-fluid" />
                                </div>
                            </div>
                            <div class="col-7">
                                <div class="article-detail article-detail-thumb">
                                <h5 class="mb-0">
                                    <a href="#" class="btn-link"
                                    >Lorem ipsum dolor sit amet</a
                                    >
                                </h5>
                                <small>12 JUL. 2022</small>
                                <div
                                    class="d-inline-block badge bg-news mb-0 fw-normal"
                                >
                                    News
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mt-4">
    <div class="container">
    <div class="row">
        <div class="col-md-12">
        <hr />
        </div>
    </div>
    </div>
</section>