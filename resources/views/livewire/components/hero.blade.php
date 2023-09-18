<div>
    <!-- Start Banner Area -->
    <div class="rbt-banner-area rbt-banner-1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 pb--120 pt--70">
                    <div class="content">
                        <div class="inner">
                            <div class="rbt-new-badge rbt-new-badge-one">
                                <span class="rbt-new-badge-icon">🏆</span> The Leader in Online Learning
                            </div>

                            <h1 class="title">
                                Let's Kick <br> Some Ass !
                            </h1>
                            <p class="description">
                                Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.
                                <strong>Velit
                                    officia consequat.</strong>
                            </p>
                            <div class="slider-btn">
                                <a class="rbt-btn btn-gradient hover-icon-reverse" href="#">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">View Course</span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="shape-wrapper" id="scene">
                            <img src="{{ asset('course/assets/images/banner/content2.jpg') }}" alt="Hero Image">
                            <div class="hero-bg-shape-1 layer" data-depth="0.4">
                                <img src="{{ asset('course/assets/images/shape/shape-01.png') }}"
                                    alt="Hero Image Background Shape">
                            </div>
                            <div class="hero-bg-shape-2 layer" data-depth="0.4">
                                <img src="{{ asset('course/assets/images/shape/shape-02.png') }}"
                                    alt="Hero Image Background Shape">
                            </div>
                        </div>

                        <div class="banner-card pb--60 mb--50 swiper rbt-dot-bottom-center banner-swiper-active">
                            <div class="swiper-wrapper">

                                @forelse ($courses as $course)
                                    <!-- Start Single Card  -->
                                    <div class="swiper-slide">
                                        <div class="rbt-card variation-01 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a href="course-details.html">
                                                    <img src="{{ asset('course/assets/images/banner/content2.jpg') }}"
                                                        alt="Card image">
                                                    @if ($course->price == 0)
                                                    @else
                                                        <div class="rbt-badge-3 bg-white">
                                                            <span>Premium</span>
                                                        </div>
                                                    @endif
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>
                                                        {{-- count chapter --}}
                                                        {{ $course->chapters->count() }} Chapters
                                                    </li>
                                                    {{-- get syntax php to foreach lessons --}}
                                                    @php
                                                        $totalVideo = 0;
                                                        foreach ($course->chapters as $chapter) {
                                                            $totalVideo += $chapter->lessons->count();
                                                        }
                                                    @endphp

                                                    <li><i class="feather-video">
                                                            {{ $totalVideo }} Video
                                                        </i>
                                                    </li>
                                                    <li><i class="feather-clock"></i>
                                                        {{-- get syntax php to foreach lessons --}}
                                                        @php
                                                            $totalDuration = 0;
                                                            foreach ($course->chapters as $chapter) {
                                                                foreach ($chapter->lessons as $lesson) {
                                                                    $totalDuration += $lesson->duration;
                                                                }
                                                            }
                                                        @endphp
                                                        {{-- convert second to hour --}}
                                                        {{ gmdate('H:i:s', $totalDuration) }}
                                                    </li>

                                                </ul>
                                                <ul class="rbt-meta">
                                                    <li>
                                                        <i class="feather-users"> Mentoring</i>
                                                    </li>
                                                    @if ($course->certificate)
                                                        <li>
                                                            <i class="feather-check-circle"> Certificate</i>
                                                        </li>
                                                    @else
                                                        <li>
                                                            <i class="feather-x-circle"> No Certificate</i>
                                                        </li>
                                                    @endif
                                                    {{-- level --}}
                                                    <li>
                                                        <i class="feather-star"> {{ $course->level }}</i>
                                                    </li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a
                                                        href="course-details.html">{{ $course->name }}</a>
                                                </h4>
                                                <p class="rbt-card-text">
                                                    {{ Str::limit($course->description, 90) }}
                                                </p>
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        @php
                                                            $rating = $course->reviews()->avg('rating');
                                                            $maxRating = 5;
                                                            $limitedRating = min($rating, $maxRating);
                                                        @endphp

                                                        @for ($i = 0; $i < floor($limitedRating); $i++)
                                                            <i class="fas fa-star"></i>
                                                        @endfor

                                                        @if ($limitedRating - floor($limitedRating) >= 0.1)
                                                            <i class="fas fa-star-half-alt"></i>
                                                        @endif
                                                    </div>
                                                    <span class="rating-count">
                                                        {{ number_format($course->reviews()->avg('rating'), 1) }}
                                                        ({{ $course->reviews()->count() }}
                                                        Reviews)
                                                    </span>
                                                </div>
                                                <div class="rbt-card-bottom">
                                                    <div class="rbt-price">
                                                        <span class="current-price">
                                                            @if ($course->price == 0)
                                                                Free
                                                            @else
                                                                IDR {{ number_format($course->price, 0, ',', '.') }}
                                                            @endif
                                                        </span>
                                                        {{-- <span class="off-price">$120</span> --}}
                                                    </div>
                                                    <a class="rbt-btn-link" href="course-details.html">Learn More<i
                                                            class="feather-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Card  -->
                                @empty
                                @endforelse

                            </div>
                            <div class="rbt-swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner Area -->
</div>
