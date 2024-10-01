@extends('front.layout_pages.app')


@section('meta_title')
    {{ __('Projects') }}
@endsection
@section('meta_tags')
    {{ __('Projects, proschimneyclening') }}
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
                        <h1 class="wow fadeInUp" data-wow-delay=".3s">Projects</h1>
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
                            All Projects
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- END Header -->

    <!-- Project Section Start -->
    <section class="project-section section-padding fix">
        <div class="container">
            <div class="row g-4">
                @foreach ($projects as $item)
                    @if ($item->status == 1)
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                            <div class="project-card-items">
                                <div class="project-image">
                                    <img src="{{ $item->image ?? asset('front/asset2/img/xtra/01.jpg') }}" alt="img">
                                    <img src="{{ $item->image ?? asset('front/asset2/img/xtra/01.jpg') }}" alt="img">
                                </div>
                                <div class="project-content">
                                    <h3><a href="{{ route('project_detail', $item->slug) }}">{{ $item->title ?? '' }}</a>
                                    </h3>
                                    <p>
                                        {{ $item->category ?? '' }}
                                    </p>
                                </div>
                                <div class="shape-img">
                                    <img src="{{ asset('front/asset2/img/project/shape.png') }}" alt="img">
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
    <!-- Project Section End -->
@endsection
