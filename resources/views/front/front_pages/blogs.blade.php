@extends('front.layout_pages.app')


@section('meta_title')
    {{ __('Blogs') }}
@endsection
@section('meta_tags')
    {{ __('Blogs, proschimneyclening') }}
@endsection
@section('meta_description')
    {{ __('Pros Chimney Cleaning is committed to quality customer service and practical, repeatable results in chimney sweeping, air duct cleaning.') }}
@endsection

@section('content')
    <!-- Start Bottom Header -->
    <div class="breadcrumb-wrapper bg-cover"
        style="background-image: url('{{ asset('front/asset2/img/breadcrumb-bg.jpg') }}');">
        <div class="shape-image float-bob-y">
            <img src="{{ asset('front/asset2/img/vector.png') }}" alt="img">
        </div>
        <div class="container">
            <div class="breadcrumb-wrapper-items">
                <div class="page-heading">
                    <div class="breadcrumb-sub-title">
                        <h1 class="wow fadeInUp" data-wow-delay=".3s">Blogs</h1>
                    </div>
                    <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                        <li>
                            <a href="{{ route('home') }}">
                                Home
                            </a>
                        </li>
                        <li>
                            <i class="fa-sharp fa-solid fa-slash-forward"></i>
                        </li>
                        <li>
                            All Blogs
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- END Header -->
    <!--Blog Area Start-->
    <section class="news-section fix section-padding">
        <div class="container">
            <div class="row g-4">
                @foreach ($blogs as $item)
                    @if ($item->status == 1)
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                            <div class="news-box-items">
                                <div class="news-image">
                                    <img src="{{ $item->image ?? asset('front/asset2/img/news/04.jpg') }}" alt="img">
                                    <img src="{{ $item->image ?? asset('front/asset2/img/news/04.jpg') }}" alt="img">
                                </div>
                                <div class="news-content">
                                    <ul class="post-list">
                                        <li>{{ $item->category ?? '' }}</li>
                                        <li>{{ $item->created_at ? $item->created_at->format('d F, Y') : '' }}</li>
                                    </ul>
                                    <h4><a href="{{ route('blog_detail', $item->slug) }}">{{ $item->title ?? '' }}</a>
                                    </h4>
                                    <div class="author-items">
                                        <div class="author-info">
                                            <div class="content">
                                                <h6>Admin</h6>
                                            </div>
                                        </div>
                                        <a href="{{ route('blog_detail', $item->slug) }}" class="link-btn">Read More <i
                                                class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>

    <!--End of Blog Area-->
@endsection
