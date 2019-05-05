<?php 
    function logout(){
        Auth::logout(); 
        return redirect()->route(url('login')); 
    }
?>
<div class="d-flex justify-content-between align-items-center border-box">
    <h3>ARRAUNAPP</h3>
    <div class="row">

        @if(Auth::user()!==null)
            <button id='cerrarSesion'  type='button' onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar Sesión</button>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        @else
            <!-- Button to trigger modal -->
            <button v-bind:title="login" id="login" class="btn btn-success btn-lg" data-toggle="modal" data-target="#modalForm">
                Login
            </button>
            <!-- Modal -->
            <div class="modal fade" id="modalForm" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">
                                <span aria-hidden="true">×</span>
                                <span class="sr-only">Close</span>
                            </button>
                        </div>
                        
                        <!-- Modal Body -->
                        <div class="modal-body">
                            <p class="statusMsg"></p>
                            <form role="form">
                                <div class="form-group">
                                    <label for="inputEmail">Email</label>
                                    <input type="text" class="form-control" id="inputEmail" placeholder="Email"/>
                                </div>
                                <div class="form-group">
                                    <label for="inputContrasena">Contraseña</label>
                                    <input type="password" class="form-control" id="inputContrasena" placeholder="Introduzca su contraseña"/>
                                </div>
                                <!-- Modal Footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary submitBtn" onclick="submitContactForm()">Enviar</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>   
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endif 
    </div>

</div>
