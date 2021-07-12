@extends('site.templates.pages')

@section('content')
<section class="projects">
    <div class="projects__block container">
        <div class="projects__title">{{ $section->name }}</div>
        @if ($records->count() > 0)
            @foreach($records as $record)
                @php
                    $images = $record->media()->where('good', 1)
                                ->where('switch_' . app()->getLocale(), true)
                                ->orderBy('main', 'DESC')
                                ->orderBy('sind', 'DESC')
                                ->get();
                @endphp
                @if($loop->iteration & 1 )
                    <div class="projects__content">
                        <div class="projects__info">
                            <h3>{{ $record->title }}</h3>
                            {{--                        <p>{{ str_limit(strip_tags($record->short), 500) }}</p>--}}
                            <p>{{ strip_tags($record->short) }}</p>
                        </div>
                        <div class="projects__slider projects__slider-1">
                            @foreach($images as $image)
                                <div class="projects__item" >
                                    <img src="/{{$image->link}}" id="active-img-{{ $image->id }}" alt="">
                                </div>
                            @endforeach
                        </div>
                        @foreach($images as $image)
                            <div id="active-img-id-{{ $image->id }}" class="wraper">
                                <div class="background">
                                    <img src="/{{$image->link}}" class="animate__animated animate__bounce" alt="">
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="projects__content projects__content-2">
                        <div class="projects__slider projects__slider-2">
                            @foreach($images as $image)
                                <div class="projects__item" >
                                    <img src="/{{$image->link}}" id="active-img-{{ $image->id }}" alt="">
                                </div>
                            @endforeach
                        </div>
                        @foreach($images as $image)
                            <div id="active-img-id-{{ $image->id }}" class="wraper">
                                <div class="background">
                                    <img src="/{{$image->link}}" class="animate__animated animate__bounce" alt="">
                                </div>
                            </div>
                        @endforeach
                        <div class="projects__info">
                            <h3>{{ $record->title }}</h3>
                            <p>{{ strip_tags($record->short) }}</p>
                        </div>
                    </div>
                @endif

            @endforeach
        @else
            @include('site.blocks.snippets.filling')
        @endif
    </div>
</section>
@endsection
