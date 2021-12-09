@extends('layouts.app')
@section('content')
{{-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css">
<script language="javascript" type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>  --}}
{{-- <link href="{{ asset('css/wordfind.css') }}" rel="stylesheet"> --}}




    <div class="container ">

        

<div class="col-md-12">
    <div class="box">
<form action="" class="mb-5" method="" enctype="multipart/form-data">
<div class="row">


  

    <div class="col-md-7 form-group ">   

        <h2 id="ds">Sopa de letras Maya!</h2>
		{{-- <h2 id = "instructions"></h2> --}}
		<h5 id = "themeIntro">Temática: <span id = "wordTheme"></span></h5>
		
		
		<div id = "wordboard"></div>
	
		
    </div>
    <div class="col-md-5 form-group ">   

	
        <button class="btn btn-danger" id = "solveButton" type = "button">Resolver todo</button>

		<button class="btn btn-warning" id = "newGameButton" type = "button">Nuevo Juego</button>
	
		<div id = "wordlist"></div>

<h3 class="info topinfo" id="info">  </h3>
<img src="" alt="" id="imgpalabra" width="150" style="float:left;">
<h6 id="def" name="def"></h6>

    </div>
{{-- aqui va la parte de la info --}}
</div> 
</form>
    </div>

</div>


		<link rel = "stylesheet" type="text/css" href = "{{ asset('css/wordsearch.css') }}">

		<script src = https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js></script>


        <script src="{{ asset('js/wordpaths.js') }}"></script>
        <script src="{{ asset('js/wordsearchcontroller.js') }}"></script>
        <script src="{{ asset('js/wordsearchlogic.js') }}"></script>
        <script src="{{ asset('js/wordsearchview.js') }}"></script>
	

		<script>	
			$(document).ready( function() {
				new WordSearchController("#wordboard", "#wordlist", "#solveButton", "#newGameButton", "#instructions", 
					"#wordTheme");
			})
		</script>
{{--  
<script>
    var words = ['Develoteca','cursos','ayuda','Videos','Tutoriales','Plugins'];
    var gamePuzzle = wordfindgame.create(words, '#juego', '#Palabras'); 
        
    var puzzle = wordfind.newPuzzle(words,{height: 18, width:18, fillBlanks: false});
    wordfind.print(puzzle);   
        
    $('#solve').click( function() {wordfindgame.solve(gamePuzzle, words);});
        
    </script> --}}

    </div>
  
    @endsection('layouts.app') 
    