@extends('layout')

@section('content')

<div class="hero">
	<div class="container">
		<h1>Style your markdown!</h1>
		<p>Markedstyle is a collection of CSS files for styling the <a href="http://marked2app.com/">Marked</a> markdown preview app.</p>
		<p><a href="/styles" class="button button--primary button--large" role="button">Browse Styles &raquo;</a></p>
	</div>
</div>
	
<div class="container">
	<div class="row">
		<div class="col-third">
			<h2>What is Markedstyle?</h2>
			<p>Markedstyle is a collection of CSS files for styling content in Marked.</p>
			<p><a class="button button--default" href="/styles" role="button">View styles &raquo;</a></p>
		</div>
		<div class="col-third">
			<h2>What is Marked?</h2>
			<p>Marked is a Mac app for live previewing Markdown as you write it.</p>
			<p><a class="button button--default" href="http://markedapp.com/" role="button">Try Marked &raquo;</a></p>
		</div>
		<div class="col-third">
			<h2>What is Markdown?</h2>
			<p>Markdown is a simple plaintext syntax for writing rich text documents.</p>
			<p><a class="button button--default" href="http://daringfireball.net/projects/markdown/" role="button">Learn more &raquo;</a></p>
		</div>
	</div>
</div>
@stop
