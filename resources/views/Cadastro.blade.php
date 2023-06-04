<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cadastro</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
       <link rel="StyleSheet" href = "{{ asset('css/app.css') }}">
       <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    </head>
    <body class="antialiased">
    <nav class="main">  
		<a href="https://ucarecdn.com/27b3a907-7a7b-4749-8f2f-0c659411c7a3/" class="brand nav-block">
			<span>Times Idiomas</span>
		</a>

        <div class="search nav-block">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" enable-background="new 0 0 16 16" xml:space="preserve">
<defs>
</defs>
<g>
	<g>
		<path fill="#A1A1A1" d="M5.8,11.7c-1.6,0-3-0.6-4.1-1.7S0,7.4,0,5.8s0.6-3,1.7-4.1C2.8,0.6,4.3,0,5.8,0s3,0.6,4.1,1.7
			c2.3,2.3,2.3,6,0,8.3C8.9,11.1,7.4,11.7,5.8,11.7z M5.8,1C4.5,1,3.3,1.5,2.4,2.4C1.5,3.3,1,4.5,1,5.8s0.5,2.5,1.4,3.4
			c0.9,0.9,2.1,1.4,3.4,1.4s2.5-0.5,3.4-1.4c1.9-1.9,1.9-5,0-6.9C8.4,1.5,7.1,1,5.8,1z"></path>
	</g>
	<g>
		<path fill="#A1A1A1" d="M15.5,16c-0.1,0-0.3,0-0.3-0.1L9.3,10c-0.2-0.2-0.2-0.5,0-0.7s0.5-0.2,0.7,0l5.9,5.9
			c0.2,0.2,0.2,0.5,0,0.7C15.8,16,15.6,16,15.5,16z"></path>
	</g>
</g>
</svg>

            <span class="twitter-typeahead" style="position: relative; display: inline-block; direction: ltr;"><input placeholder="search" type="text" id="search-input" class="tt-input" autocomplete="off" spellcheck="false" dir="auto" style="position: relative; vertical-align: top;"><pre aria-hidden="true" style="position: absolute; visibility: hidden; white-space: pre; font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; word-spacing: 0px; letter-spacing: 0px; text-indent: 0px; text-rendering: auto; text-transform: none;"></pre><span class="tt-dropdown-menu" style="position: absolute; top: 100%; left: 0px; z-index: 100; display: none; right: auto;"><div class="tt-dataset-0"></div></span></span>
        </div>

		<ul class="main-nav">
			<li class="nav-docs"><a href="{{ asset('consulta')}}">Consulta</a></li>
		</ul>
		
        <div class="responsive-sidebar-nav">
			<a href="#" class="toggle-slide menu-link btn">☰</a>
		</div>
	</nav>
<nav id="slide-menu" class="slide-menu" role="navigation">
<div class="brand">
<a href="/">
<img src="navbarpic.png" width="80px" height="50px">
</a>
</div>
<ul class="slide-main-nav">
	</ul>
</nav>

<div class="container">  
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

</head>

<body>

<div class="container">

<div class="row">

<div class="panel panel-default">

<div class="panel-heading">

<h3>Clients</h3>

</div>

<div class="panel-body">
<div class="form-group">
</div>

<table class="table table-bordered table-hover">

<thead>

<tr>

<th>ID</th>

<th>Nome</th>

<th>Telefone</th>

<th>Placa</th>

<th>Marca</th>

<th>Cor</th>

</tr>

</thead>

<tbody>

</tbody>

</table>

</div>

</div>

</div>

</div>

<script type="text/javascript">

$('#search').on('keyup',function(){

$value=$(this).val();

$.ajax({

type : 'get',

url : '{{URL::to('search')}}',

data:{'search':$value},

success:function(data){

$('tbody').html(data);

}

});



})

</script>

<script type="text/javascript">

$.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });

</script> 


<script src = "{{ asset('js/app.js') }}"></script>
</div>
    </body>
</html>
