@extends('layouts.landing')

@section('title', 'Luma Capital - Credenciales')

@section('content')
    <!-- div 1 -->
    <div class="multisteps-form__panel js-active bg-gray" data-animation="slideHorz">
                    <div class="wizard-forms pb-0">
                        <div class="inner clearfix">
                            <div class="wizard-form-field mb-5">
                                <h4 class="color-red">Comencémos con el proceso</h4>
                                <p class="mt-4">Necesitarás los siguiente requisitos para realizar tu solicitud de identificaciones.</p>
                            </div>
                            <div class="wizard-form-field mb-85">                                
                                <div class="row elemt-cards">
                                    <div class="col-md-4">
                                        <div class="card mb-3 bg-blue pl-4 pr-4 pt-3">
                                            <div class="row g-0 m-0 p-0">
                                              <div class="col-sm-6 col-md-12 d-flex align-items-center justify-content-center p-0">
                                                <img src="{{ asset('assets/img/recibo-de-pago.svg') }}" class="img-fluid rounded-start" alt="..." style="height: 60px;">
                                              </div>
                                              <div class="col-sm-6 col-md-12 p-0">
                                                <div class="card-body">
                                                  <h5 class="card-title text-white text-center mb-0">Recibo de <sup class="color-red sup-desk">1</sup>  pago <sup class="color-red sup-mobile">1</sup></h5>                                       
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card mb-3 bg-blue pl-4 pr-4 pt-3">
                                            <div class="row g-0 m-0 p-0">
                                              <div class="col-sm-6 col-md-12 d-flex align-items-center justify-content-center p-0">
                                                <img src="{{ asset('assets/img/logotipo.svg')}}" class="img-fluid rounded-start" alt="..." style="height: 60px;">
                                              </div>
                                              <div class="col-sm-6 col-md-12 p-0">
                                                <div class="card-body">
                                                  <h5 class="card-title text-white text-center mb-0">Logotipo <sup class="color-red sup-desk">2</sup> </br> empresa <sup class="color-red sup-mobile">2</sup></h5>                                       
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card mb-3 bg-blue pl-4 pr-4 pt-3">
                                            <div class="row g-0 m-0 p-0">
                                              <div class="col-sm-6 col-md-12 d-flex align-items-center justify-content-center p-0">
                                                <img src="{{ asset('assets/img/fotografias_individuales.svg')}}" class="img-fluid rounded-start" alt="..." style="height: 60px;">
                                              </div>
                                              <div class="col-sm-6 col-md-12 p-0">
                                                <div class="card-body">
                                                  <h5 class="card-title text-white text-center mb-0">Fotografías <sup class="color-red sup-desk">3</sup> </br> individuales <sup class="color-red sup-mobile">3</sup></h5>                                       
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-2">
                                        <p><span class="color-red">1</span> El comprobante de pago puede ser la imagen de transferencia o fotografía del ticket de depósito.</p>
                                        <p><span class="color-red">2</span> El archivo debe estar en formato .png, .jpg o PDF, con un peso menor a 2mb.</p>
                                        <p><span class="color-red">3</span> Cada fotografía debe tener el nombre de quién es la credencial, el peso no debe ser mayor a 2mb.</p>
                                    </div>
                                    <div class="col-md-12 mt-5">
                                        <div class="wizard-form-field mb-3 m-0">
                                            <h4 class="color-red">Información de pago</h4>
                                            <p class="mt-4">Agrega tu correo electrónico y enviaremos la información de pago.</p>
                                        </div>                                       
                                    </div>
                                    <div class="col-md-12 correo">
                                        <div class="wizard-form-input">                                            
                                            <div class="w-100">
                                                <label for="input-email" class="form-label mb-2 text-left w-100">Correo Electrónico</label>
                                                <input type="email" name="email" class="form-control w-100" id="input-email">
                                            </div>
                                        </div>
                                        <div class="w-100 text-right">
                                            <button type="button" class="btn btn-danger"><img src="{{ asset('assets/img/solicitar-informacion.svg')}}" alt="Información" width="40px" class="pr-2"> Solicitar información</button>
                                        </div>
                                    </div>  
                                    <div class="col-md-12 mt-5 pt-5">
                                        <div class="actions">
                                            <ul class="justify-content-end">
                                                <!--<li><button class="js-btn-next siguienteuno" title="Siguiente">Siguiente <i class="fa fa-chevron-right pl-3 js-btn-next"></i></button></li> -->
                                                <li><a class="js-btn-next siguienteuno" href="{{ route('comprobante')}}" role="button" title="Siguiente"><i class="fa fa-chevron-right pl-3 js-btn-next"></i></li>                                               
                                            </ul>
                                        </div>
                                    </div>                                 
                                </div>                                
                            </div>
                            <div class="wizard-v3-progress">
                                <span>Paso 1 de 5</span>
                                <h3>0% Completado</h3>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 0%">
                                    </div>
                                </div>
                            </div>                            
                        </div>                                   
                    </div>
                    <footer class="footer-mobile bg-white shadow-top">
                        <div class="row h-100 align-items-center">                            
                            <div class="col-sm-7 col-md-7 text-center">
                                <img src="{{ asset('assets/img/miw-logo.svg')}}" alt="MIW" width="300px">
                            </div>  
                            <div class="col-sm-5 col-md-5">
                                <p class="pb-2"><a href="tel:5544886736"><img src="{{ asset('assets/img/telefono.svg')}}" alt="" width="20px" class="pr-1">554 488 6736</a></p>
                                <p class="pt-2"><a href="https://miw.mx/" target="_blank"><img src="{{ asset('assets/img/sitio_web.svg')}}" alt="" width="20px" class="pr-1">miw.mx</a></p>
                            </div>                                 
                        </div>
                    </footer>  
    </div>
@endsection