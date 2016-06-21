@if (Session::has('success'))
<div class="success flashmessage animated slideInRight">
	<strong>
      <i class="fa fa-check-circle fa-lg fa-fw"></i> Success.  
    </strong>
	{{ Session::get('success') }}
</div>
@endif

@if (count($errors) > 0)
<div class="error flashmessage animated slideInRight">
	<div>
		<strong>{{ Lang::get('auth.whoops') }}</strong> {{ Lang::get('auth.someProblems') }}<br /><br />
		<ul>
			@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
</div>
@endif