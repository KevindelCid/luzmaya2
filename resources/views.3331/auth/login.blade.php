
@extends('layouts.app')
@section('content')




<script src="{{ asset('js/l.js') }}" defer></script>

<link href="{{ asset('css/l.css') }}" rel="stylesheet">

    <div class="container">


        <section class="ftco-section">
            <div class="row justify-content-center">




                




				<div class="col-md-9 col-lg-5">


                    <div class="wrap">
						{{-- <img class="c" style="text-align:center;" src="{{ asset('storage/luzmaya.png') }}"> --}}
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Iniciar Sesión</h3>
			      		</div>
								<div class="w-100">
									<p class="social-media d-flex justify-content-end">
															</p>
								</div>
			      	</div>






                      <form class="signin-form" method="POST" action="{{ route('login') }}">
                        @csrf


                      
			      		<div class="form-group mt-4">
			      			<input id="email  user_login" type="email"  class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
			      			<label class="form-control-placeholder" for="username">Correo Electrónico</label>
                                 @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

			      		</div>
		            <div class="form-group">
		              <input  id="password user_pass" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
		              <label class="form-control-placeholder" for="password">Contraseña</label>
		              
                      
                      @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                      
                      <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
		            </div>
		            <div class="form-group">
		            	<button type="submit" class="form-control btn btn-primary rounded submit px-3">Ingresar</button>
		            </div>
		            <div class="form-group d-md-flex">
		            	{{-- <div class="w-50 text-left">
			            	<label class="checkbox-wrap checkbox-primary mb-0">Recordar
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
										</label>
									</div> --}}
									
										<a href="{{ route('password.request') }}">¿Olvidó su contraseña?</a>
								
		            </div>
		          </form>
		          <p class="text-center">o puedes <a data-toggle="tab" onclick="selectedRegister();" href="#signup">Crear una nueva cuenta</a></p>
		        </div>


                
		      </div>









                </div>
                <br>
                <div class="col-md-9 col-lg-6">
                    <div class="wrap x">
                    <div class="login-wrap p-6 p-md-5">
                        <div class="d-flex">
                            <div class="w-100">
                                <h3 class="mb-4">Cree una nueva cuenta</h3>
                            </div>
                                  <div class="w-100">
                                      <p class="social-media d-flex justify-content-end">
                                                     </p>
                                  </div>
                        </div>
    
                        <form class="signin-form" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                            @csrf
                        
                        
                            
                            <div class="form-group mt-3">
                                
                                <input  id="name" type="text" class="form-control  @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name">
                                <label class="form-control-placeholder" for="username">Nombre</label>
                            
        @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    
                            
                            </div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
                            <div class="form-group mt-3">
                                
                                <input  id="email" type="email" class="form-control  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                <label class="form-control-placeholder" for="email">Correo Electrónico</label>
                            
        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    
                            
                            </div>
    
    
    
    
    
    
                            <div class="form-group mt-3">
                                
                                <input  id="password" type="password" class="form-control  @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                <label class="form-control-placeholder" for="password">Contraseña</label>
                       
                        
                        <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                     
        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    
                            
                            </div>
    
    
    
                            
                            <div class="form-group mt-3">
                                
                                <input  id="password-confirm" type="password" class="form-control " name="password_confirmation" required autocomplete="new-password">
                                <label class="form-control-placeholder" for="password"> Repetir Contraseña</label>
                       
                        
                        <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
     
    
                            
                            </div>
    
    
       
                            <div class="form-group mt-3">
                                
    <label class="tete">Elija una foto para su perfil</label>
                            
    <input   class=" form-control" type="file" name="foto" id="foto">
    
    
                            </div>
    
                            
    
                      <div class="form-group d-md-flex">
                        
                                      <div class="w-50 text-md tete">
                                          <a href="#">Terminos y condiciones.</a>
                                      </div>
                      </div>
    
    
                      <div class="form-group">
                        <button type="submit" class="form-control btn btn-primary rounded submit px-3">Crear cuenta</button>
                    </div>
    
                    </form>
                   
                  </div>
                </div>
    
                </div>

                


	
            </div>

        </section>








    </div>

    @endsection('layouts.app')