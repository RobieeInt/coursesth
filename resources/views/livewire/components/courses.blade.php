<div>
    <!-- Start Course Area -->
    <div class="rbt-course-area bg-color-extra2 rbt-section-gap">
        <div class="container">
            <div class="row mb--60">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <span class="subtitle bg-secondary-opacity">Top Popular Course</span>
                        <h2 class="title">Course For you <br /> Lets join us.</h2>
                    </div>
                </div>
            </div>
            <!-- Start Card Area -->
            <div class="row g-5">
                <!-- Start Single Course  -->
                @forelse ($courses as $course)
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="rbt-card variation-01 rbt-hover">
                            <div class="rbt-card-img">
                                <a href="course-details.html">
                                    <img src="{{ asset('course/assets/images/banner/content3.jpg') }}" alt="Card image">
                                    @if ($course->price == 0)
                                    @else
                                        <div class="rbt-badge-3 bg-white">
                                            <span>
                                                Premium
                                            </span>
                                        </div>
                                    @endif
                                </a>
                            </div>
                            <div class="rbt-card-body">

                                <div class="rbt-card-top">
                                    <div class="rbt-review">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <span class="rating-count"> (15 Reviews)</span>
                                    </div>
                                    <div class="rbt-bookmark-btn">
                                        <a class="rbt-round-btn" title="Bookmark" href="#"><i
                                                class="feather-bookmark"></i></a>
                                    </div>
                                </div>

                                <h4 class="rbt-card-title"><a href="course-details.html">{{ $course->name }}</a>
                                </h4>
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
                                <p class="rbt-card-text">
                                    {{-- description maximal 50 character --}}
                                    {{ Str::limit($course->description, 90) }}
                                </p>
                                <div class="rbt-author-meta mb--20">
                                    <div class="rbt-avater">
                                        <a href="#">
                                            <img src="{{ asset('course/assets/images/client/avater-01.png') }}"
                                                alt="Sophia Jaymes">
                                        </a>
                                    </div>
                                    <div class="rbt-author-info">
                                        By <a href="profile.html">{{ $course->mentor->user->name }}</a> In <a
                                            href="#">{{ $course->category->name }}</a>
                                    </div>
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
                                    <a class="rbt-btn-link" href="course-details.html">Learn
                                        More<i class="feather-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                @empty
                @endforelse
            </div>
            <!-- End Card Area -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="load-more-btn mt--60 text-center">
                        <a class="rbt-btn btn-gradient btn-lg hover-icon-reverse" href="#">
                            <span class="icon-reverse-wrapper">
                                <span class="btn-text">Load More Course (40)</span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Course Area -->
</div>
