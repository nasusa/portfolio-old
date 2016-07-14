<section class="sidebar box">
<h2>Search ?</h2>
		<h1>Categories</h1>
		<ul>
			@foreach($categories as $category)
				<li>
					@if($category->parent_id > 0)
						&nbsp;&nbsp;&nbsp;--
					@endif
					<a href="/categories/{{ $category->slug }}">{{ $category->name }}</a>
				</li>
			@endforeach
		</ul>
		<h1>Tags</h1>
		<ul>
			@foreach($tags as $tag)
				<li>
					<a href="/tags/{{ $tag->slug }}">{{ $tag->name }}</a>
				</li>
			@endforeach
		</ul>
		<h1>Hottest Articles</h1>
			@foreach($tags as $tag)
				<li>
					<a href="/tags/{{ $tag->slug }}">{{ $tag->name }}</a>
				</li>
			@endforeach
		{{--
	<div class="sidebar-module sidebar-module-inset">
		<h1>Hot</h1>
		<ol class="list-unstyled">
			@foreach($hottestArticles as $article)
				<li><a href="/{{ $article->slug }}">{{ $article->title }}</a></li>
			@endforeach
		</ol>
	</div>
	<div class="sidebar-module sidebar-module-inset">
		<h1>New</h1>
		<ol class="list-unstyled">
			@foreach($NewestArticles as $article)
				<li><a href="/{{ $article->slug }}">{{ $article->title }}</a></li>
			@endforeach
		</ol>
	</div>--}}
</section>