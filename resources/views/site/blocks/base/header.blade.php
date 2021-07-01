<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google" content="notranslate">
    <meta name="description" content="{{ strip_tags($settings['description']) }}">
    <meta name="author" content="">
    <meta name="keyword" content="{{ strip_tags($settings['keywords']) }}">
    <meta name="_token" content="{{ csrf_token() }}">
    @php
        $sectionTitle = '';

        if (isset($section)) {
            if ($section->type == 'news') {
                if (isset($data)) {
                    $sectionTitle .= $data->title . ' | ';
                }
            }
            $sectionTitle .= $section->name . ' | ';
        }
    @endphp
    <title>{{ $sectionTitle . strip_tags($settings['title']) }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
    <link rel="stylesheet" href="/site/css/style.css">
</head>

<body>
