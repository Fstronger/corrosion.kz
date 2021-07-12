@extends('site.templates.pages')

@section('content')
    <section class="company company-page bg-ellipse max-container">
        <div class="company__block container">
            @if (!empty($text))
                <div class="company__info">
                    <div class="company__title">{{ $section->name }}</div>
                   {!! $text !!}
                </div>
                <div class="company__img company__img-block">
                    @foreach($images as $image)
                        <img src="/{{ $image->link }}" class="company__img-page company__img-page-{{ $loop->iteration }}" alt="">
                    @endforeach
                </div>
            @else
                @include('site.blocks.snippets.filling')
            @endif
        </div>
    </section>
    <section class="company company-page bg-ellipse max-container">
        {!! getPage('nasha-zadacha-blok-2') !!}
    </section>


    <section class="study">
      {!! getPage('izuchenie-problem-korrozii-v-promyshlennom-i-neftegazovom-sektore') !!}
    </section>

    {!! getLinks('clients-block', null, true) !!}


    {!! getLinks('nam-doveryayut-block', null, true) !!}
@endsection
