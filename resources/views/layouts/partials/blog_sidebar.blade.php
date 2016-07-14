<section class="sidebar box">
<h2>Search ?</h2>
		<h1>Categories</h1>
		<ul>
			@foreach($categories as $category)
				<li>
					@if($category->parent_id > 0)
						&nbsp;&nbsp;&nbsp;--
					@endif{{----}}
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
</section>