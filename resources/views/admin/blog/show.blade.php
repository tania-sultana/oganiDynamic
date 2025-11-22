@extends('admin.layouts.app')

@section('content')
    <div class="card-header py-3">
        <h4 class="card-title">Blog Details</h4>
    </div>

    <div class="card p-3">
        <div class="d-flex justify-content-around">

            <div class="tab-content" id="nav-tabContent-first">
                <div class="tab-pane fade show active" id="nav-first-thumbnail" role="tabpanel" aria-labelledby="nav-first-tab">
                    <img class="img-fluid rounded" src="{{ $blog->firstThumbnail }}" alt="First Thumbnail"
                        style="width: 15rem; height:15rem;">
                </div>
            </div>

            <div class="tab-content" id="nav-tabContent-second">
                <div class="tab-pane fade show active" id="nav-second-thumbnail" role="tabpanel"
                    aria-labelledby="nav-second-tab">
                    <img class="img-fluid rounded" src="{{ $blog->secondThumbnail }}" alt="Second Thumbnail"
                        style="width: 15rem; height:15rem;">
                </div>
            </div>

        </div>


        <div class="blog-detail-content mt-3">
            <h6>{{ __('First Title') }}</h6>
            <div>
                {!! $blog->first_title !!}
            </div>
        </div>

        <div class="blog-detail-content mt-3">
            <h6>{{ __('Second Title') }}</h6>
            <div>
                {!! $blog->second_title !!}
            </div>
        </div>

        <div class="blog-detail-content mt-3">
            <h6>{{ __('Name') }}</h6>
            <div>
                {!! $blog->name !!}
            </div>
        </div>

        <div class="blog-detail-content mt-3">
            <h6>{{ __('Designation') }}</h6>
            <div>
                {!! $blog->designation !!}
            </div>
        </div>

        <div class="blog-detail-content mt-3">
            <h6>{{ __('Short Description') }}</h6>
            <div>
                {!! $blog->short_description !!}
            </div>
        </div>

        <div class="blog-detail-content mt-3">
            <h6>{{ __('Description') }}</h6>
            <div>
                {!! $blog->description !!}
            </div>
        </div>

        <div class="blog-detail-content mt-3">
            <h6>{{ __('Category') }}</h6>
            <div>
                {!! $blog->category !!}
            </div>
        </div>

        <div class="blog-detail-content mt-3">
            <h6>{{ __('Tags') }}</h6>
            <div>
                {!! $blog->tags !!}
            </div>
        </div>
    </div>


    <div class="d-flex gap-3 justify-content-end align-items-center my-3">
        <a href="{{ route('admin.blog.socialLink.index', $blog->id) }}" class="btn btn-lg btn-info rounded px-4">
            {{ __('Social Link') }}
        </a>

        <a href="{{ route('admin.blog.index') }}" class="btn btn-lg btn-primary rounded px-5">Reset</a>


    </div>
@endsection
