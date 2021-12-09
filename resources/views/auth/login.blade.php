
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
                      
                      <span toggle="#password-field" class="toggle-password"></span>
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
		         
		        </div>


                
		      </div>









                </div>
               
                <div class="col-md-9 col-lg-5">
                    <div class="wrap x">
                    <div class="login-wrap p-4 p-md-5">
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
                        
                        
                            
                            <div class="form-group mt-4">
                                
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
                       
                        
                        <span toggle="#password-field" class=" toggle-password"></span>
                     
        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    
                            
                            </div>
    
    
    
                            
                            <div class="form-group mt-3">
                                
                                <input  id="password-confirm" type="password" class="form-control " name="password_confirmation" required autocomplete="new-password">
                                <label class="form-control-placeholder" for="password"> Repetir Contraseña</label>
                       {{-- con eso aparece el ojo... para implementar despues --}}
                                {{-- fa fa-fw fa-eye field-icon  --}}
                        <span toggle="#password-field" class="toggle-password"></span>
     
    
                            
                            </div>
    
    
       
                            <div class="form-group mt-3">
                                
    <label class="tete">Elija una foto para su perfil <small>(Opcional)</small></label>
                            
    <input   class=" form-control" type="file" name="foto" id="foto">
    
    
                            </div>
    
                            
    
                      <div class="form-group d-md-flex">
                        
                                      <div class="w-50 text-md tete">
                                          <a  data-toggle="modal" data-target="#terminosModal" href="#">Términos y condiciones.</a>
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



<style>
    
    
.bl{ color: black; }
.bl h2{color: black;}
.bl h3{color: black;}
</style>


<div class="modal fade" id="terminosModal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Términos y condiciones de Luzmaya</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
               <div class="bl">

                <h2>Términos y condiciones</h2>
                <p class="small">Última modificación : noviembre, 2021</p>
                <h2>Bienvenido a LuzMaya</h2>
                <p>Por favor leer los terminos y condiciones antes de hacer uso de la página. Al continuar con el uso de ésta, usted confirma que leyó y aceptó nuestros términos y condiciones</p>
                <!--<h2>Introducción</h2>-->
                <p>En esta sección se estipula todo lo que usted estará aceptando al hacer uso de Luzmaya.com.</p>
                <h3>¿Quién puede usar nuestra página web y qué requisitos debe cumplir una persona para hacer uso de esta pagina web?</h3>
                <p>Para usar nuestro página web y / o recibir nuestros servicios, debes tener al menos 16 años de edad, No tienes permitido utilizar esta página web y / o recibir servicios si hacerlo está prohibido en tu país o en virtud de cualquier ley o regulación aplicable a tu caso.</p>
                <h3>Términos comerciales y responsabilidades de nuestros servicios</h3>
                <p> luzmaya.com no cobra ninguna comisión o cuota, para que las personas de todo el mundo puedan acceder a nuestros servicios, sin enbargo no nos hacemos responsables del uso malintencionado de las herramientas que se proporcionan, ni de los temas conversados dentro de nuestra plataforma. Quienes participan de las reuniones dentro de luzmaya son los únicos responsables de lo que en éstas se habla o hace. Toda la información que los usuarios generen pertenece a luzmaya.com, por lo que en caso de detectar cualquier anomalía en la información, podemos eliminarla en cualquier momento.</p>
                <!--<h3>Retención del derecho a cambiar de oferta</h3>-->
                <!--<p>Podemos, sin aviso previo, cambiar los servicios; dejar de proporcionarlos o -->
                <!--    cualquier acto respecto a los servicios que ofrecemos de ser necesario, -->
                <!--    por algún tema que supere nuesta jurisdicción;-->
                <!-- Podemos  suspender de manera permanente o temporal el acceso a los servicios sin previo aviso ni responsabilidad por cualquier motivo.</p>-->
                <h3>Derecho a cambiar y modificar los Términos</h3>
                <p> Nos reservamos el derecho de modificar estos términos a nuestra entera discreción. Por lo tanto, debes revisar estas páginas periódicamente. Cuando cambiemos los Términos de una manera material, te notificaremos que se han realizado cambios importantes en los Términos. El uso continuado de la página web o nuestro servicio después de dicho cambio constituye tu aceptación de los nuevos Términos. Si no aceptas alguno de estos términos o cualquier versión futura de los Términos, no uses o  accedas (o continúes accediendo) a la página web o al servicio.</p>
                <h3>Emails de notificaciones, promociones y contenido</h3>
                <p>Aceptas recibir de vez en cuando nuestros mensajes de notificación y materiales de promoción, por correo electrónico o cualquier otro formulario de contacto que nos proporciones (incluido tu número de teléfono para llamadas o mensajes de texto).</p>
                <h3>¿De qué no somos responsables?</h3>
                <p>No somos responsables de ninguna acción malintencionada de alguno de nuestros usuarios, haciendo uso de nuestras herramientas.
                    No somos responsables de ningún tema hablado en alguna reunión realizada con nuestros servicios.
                    No somos responsables de ningún tema político, ni participamos en alguno.
                    No somos responsables de malinterpretaciones en la información que en nuestros servicios se ve.
                    No somos responsables de la comercialización que puede haber dentro de nuestra plataforma, no manipulamos el dinero de nuestros usuarios por lo que no ofrecemos ningún tipo de reembolso, esto es responsabildad del usuario y el uso que le de a nuestra plataforma.
                
                </p>
                <h3>¿Qué no está permitido dentro de nuestra página web?</h3>
                <p> No está permitido modificar nuestro código para beneficios propios o para desprestigio de nuestra web.
                    No está permitido acumular las reuniones de nuestros sacerdotes mayas dejando al resto de nuestros usuarios sin la posibilidad de reservar una. 
                </p>
                
                <p>Estos términos y condiciones están totalmente sujetos a cambios.</p>
</div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    </div>
        </div>
    </div>
</div>





    </div>

    @endsection('layouts.app')