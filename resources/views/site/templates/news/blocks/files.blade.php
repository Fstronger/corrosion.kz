@if ($files->count() > 0)
	<div class="post-files">
        {{--<div class="post-files__title text-size-2">Список литературы:</div>--}}

		<ul class="post-files__list">
			@foreach ($files as $file)
				<li class="post-files__item">
                    {!! icon('icon--arrow-right') !!}
                    <a class="post-files__link link link--gray-2" href="/file/save/{{ $file->id }}" download>
                        {{ $file->title }} ({{ strtolower(formatFile($file->link)) }}, {{ formatFileSize(File::size(public_path($file->link))) }})
                    </a>
                    {{--<span class="text-gray-2"></span>--}}
				</li>
			@endforeach
		</ul>
	</div><!-- /.post-files -->
@endif
