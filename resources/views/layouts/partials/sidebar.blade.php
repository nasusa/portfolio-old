<section class="sidebar box">
<h2>Search ?</h2>

<h2>Category</h2>
<h2>tags</h2>
<h2>popular posts</h2>{{--
<div class="sidebar-module sidebar-module-inset">
		<h1>Categories</h1>
		<ol class="list-unstyled">
			@foreach($allCategories as $category)
				<li>
					@if($category->parent_id > 0)
						&nbsp;&nbsp;&nbsp;--
					@endif
					<a href="/categories/{{ $category->slug }}">{{ $category->name }}</a>
				</li>
			@endforeach
		</ol>
	</div>
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