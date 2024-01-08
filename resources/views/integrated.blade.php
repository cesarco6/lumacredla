<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"> 
    <title>Luma Capital - Credenciales</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/swal/sweetalert2.min.css')}}" />
</head>

<body>
    <div class="wrapper wizard d-flex clearfix multisteps-form h-100 position-relative" style="margin-top: 10px;">
        <div class="steps order-2 h-100 w-25" >
            <div class="multisteps-form__progress">
                <span class="multisteps-form__progress-btn js-active" title="Instrucciones"><img src="{{ asset('assets/img/instrucciones.svg')}}" width="50px"><span>Instrucciones</span></span>
                <span class="multisteps-form__progress-btn" title="Información de pago"><img src="{{ asset('assets/img/informacion-pago.svg')}}" width="50px"><span>Información de pago</span></span>
                <span class="multisteps-form__progress-btn" title="Datos de la empresa"><img src="{{ asset('assets/img/datos-empresa.svg')}}" width="50px"><span>Datos de la empresa</span></span>
                <span class="multisteps-form__progress-btn" title="Datos identificaciones"><img src="{{ asset('assets/img/datos-identificaciones.svg')}}" width="50px"><span>Datos identificaciones</span></span>
                <span class="multisteps-form__progress-btn" title="Confirmación"><img src="{{ asset('assets/img/confirmacion.svg')}}" width="50px"><span>Confirmación</span></span>
            </div>  
            <footer class="footer-desktop bg-white shadow-top">
                <div class="row h-100 align-items-center">
                    <div class="col-sm-5 col-md-5 col-lg-6">
                        <p class="pb-2"><a href="tel:5544886736"><img src="{{ asset('assets/img/telefono.svg')}}" alt="" width="20px" class="pr-1">554 488 6736</a></p>
                        <p class="pt-2"><a href="https://miw.mx/" target="_blank"><img src="{{ asset('assets/img/sitio_web.svg')}}" alt="" width="20px" class="pr-1">miw.mx</a></p>
                    </div> 
                    <div class="col-sm-7 col-md-7 col-lg-6 text-center">
                        <img src="{{ asset('assets/img/miw-logo.svg')}}" alt="MIW" width="300px">
                    </div>                                   
                </div>
            </footer>          
        </div>
        <div class="multisteps-form__form w-75 order-1 position-relative h-100" action="#" id="wizard"> 
            <div class="pb-3 wizard-title bg-white p-5 shadow sticky-top">
                <div class="row">
                    <div class="col-md-3 text-center"><img src="{{ asset('assets/img/identificaciones-logo.svg')}}" alt="" width="150px"></div>
                    <div class="col-md-9 d-flex flex-column justify-content-around">
                        <h3>Formulario de solicitud de Identificaciones en PVC</h3>
                        <p>Proceso de alta de Identificaciones de Luma Capital.</p>
                    </div>
                </div>
            </div>
            <div class="form-area position-relative">
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
                                                <img src="{{ asset('assets/img/recibo-de-pago.svg')}}" class="img-fluid rounded-start" alt="..." style="height: 60px;">
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
                                                <li><button class="js-btn-next siguienteuno" title="Siguiente">Siguiente <i class="fa fa-chevron-right pl-3 js-btn-next"></i></button></li>
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
                <!-- div 2 -->
                <div class="multisteps-form__panel bg-gray" data-animation="slideHorz">
                    <div class="wizard-forms pb-0">
                        <div class="inner clearfix">
                            <div class="wizard-form-field mb-5">
                                <h4 class="color-red">Comprobante de pago</h4>
                            </div>
                            <div class="wizard-form-field mb-85">
                                <div class="row datos">
                                    <!-- @csrf -->
                                    <div class="col-md-12">
                                        <div class="wizard-form-input wizard-document-upload">   
                                            <label class="mt-0">Comprobante de pago</label>                                          
                                            <div class="custom-file">
                                                <label for="file-upload" id="labelComprobante" class="custom-file-label w-100 mt-0">.JPG o PDF no mayor a 2mb.</label>
                                                <input type="file" class="custom-file-input w-100" id="fileComprobantePago" name="file-name" capture="document">                                        
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="col-md-12">
                                        <div class="wizard-form-input w-100">
                                            <label>Fecha de pago</label>
                                            <input type="date" id="dateFechaPago" class="w-100" placeholder="Seleccionar la fecha del depósito.">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-check form-switch d-flex align-items-center justify-content-end">
                                            <label class="form-check-label" for="add_factura" style="margin-right: 60px;">¿Requieres factura?</label>
                                            <input class="form-check-input switch" type="checkbox" id="add_factura">                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="display:none" id="info-factura">
                                    <div class="col-md-12">
                                        <h4 class="color-red mb-3">Información de Facturación</h4>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="wizard-form-input">                                            
                                            <div class="w-100">
                                                <label for="input-rfc" class="form-label mb-2 text-left w-100">RFC</label>
                                                <input type="text" id="txtRfc" class="form-control w-100" id="input-rfc">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="wizard-form-input">                                            
                                            <div class="w-100">
                                                <label for="input-nombre-empresa" class="form-label mb-2 text-left w-100">Nombre de la empresa (s)</label>
                                                <input type="text" id="txtNombreEmpresaFactura" name="text" class="form-control w-100" id="input-nombre-empresa">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="wizard-form-input">                                            
                                            <div class="w-100">
                                                <label for="input-direccion" class="form-label mb-2 text-left w-100">Dirección</label>
                                                <input type="text" id="txtDireccion" name="text" class="form-control w-100" id="input-direccion">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="wizard-form-input">                                            
                                            <div class="w-100">
                                                <label for="input-colonia" class="form-label mb-2 text-left w-100">Colonia</label>
                                                <input type="text" id="txtColonia" name="text" class="form-control w-100" id="input-colonia">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="wizard-form-input">                                            
                                            <div class="w-100">
                                                <label for="input-codigo-postal" class="form-label mb-2 text-left w-100">Código Postal</label>
                                                <input type="number" id="noCp" name="codigo" min="1" max="6" step="1" class="form-control w-100" id="input-codigo-postal">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="wizard-form-input">                                            
                                            <div class="w-100">
                                                <label for="select-cfdi" class="form-label mb-2 text-left w-100">Uso de CFDI</label>                                                
                                                <select id="selectCfdi">
                                                    <option></option>
                                                    <option>G01 - Adquisición de mercancías</option>
                                                    <option>G02 - Devoluciones, descuentos o bonificaciones</option>
                                                    <option>G03 - Gastos en general</option>
                                                    <option>I04 - Equipo de cómputo y accesorios</option>
                                                    <option>P01 - Por definir</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-85 mt-5 pt-5">
                                    <div class="col-md-12">
                                        <div class="actions">
                                            <ul>
                                                <li><button class="js-btn-prev" title="Regresar"><i class="fa fa-chevron-left pr-3 js-btn-prev"></i> Regresar </button></li>
                                                <li><button class="js-btn-next" title="Siguiente">Siguiente <i class="fa fa-chevron-right pl-3 js-btn-next"></i></button></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>     
                            <div class="wizard-v3-progress">
                                <span>Paso 2 de 5</span>
                                <h3>25% Completado</h3>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 25%">
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
                <!-- div 3 -->
                <div class="multisteps-form__panel bg-gray" data-animation="slideHorz">
                    <div class="wizard-forms pb-0">
                        <div class="inner clearfix">
                            <div class="wizard-form-field mb-5">
                                <h4 class="color-red">Información de la empresa</h4>
                            </div>
                            <div class="wizard-form-field mb-85">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="wizard-form-input">                                            
                                            <div class="w-100">
                                                <label for="input-empresa" class="form-label mb-2 text-left w-100">Nombre de la empresa</label>
                                                <input type="text" value="MADE IN WEB" id="txtNombreEmpresa" class="form-control w-100" id="input-empresa">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="wizard-form-input">                                            
                                            <div class="w-100">
                                                <label for="input-num-oficina" class="form-label mb-2 text-left w-100">No. Oficina</label>
                                                <input type="number" value="360" id="noOficina" min="1" max="1000" step="1" class="form-control w-100" id="input-num-oficina">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="wizard-form-input">                                            
                                            <div class="w-100">
                                                <label for="input-num-credenciales" class="form-label mb-2 text-left w-100">No. de credenciales</label>
                                                <input type="number" value="10" id="noCredenciales" min="1" max="1000" step="1" class="form-control w-100" id="input-num-credenciales">
                                            </div>
                                        </div>
                                    </div>    
                                    <div class="col-md-12">
                                        <p>* El logotipo no es obligatorio, si no es agregado la credencial no incluirá el logotipo de la empresa.</p>
                                    </div>
                                    <div class="col-md-12 logo">
                                        <div class="wizard-form-input wizard-document-upload mt-5">   
                                            <label class="mt-0">Logotipo de la Empresa</label>                                          
                                            <div class="custom-file">
                                                <label for="file-upload" id="labelLogo" class="custom-file-label w-100 mt-0">.PNG, PDF o .SVG no mayor a 5mb.</label>
                                                <input type="file" class="custom-file-input w-100" id="fileLogotipoEmpresa" name="file-name" capture="document">      
                                                <p class="mt-2">*El archivo a adjuntar debe de estar preferente en curvas.(Vectorial)</p>                                  
                                            </div>
                                        </div>
                                    </div>  
                                    <div class="col-md-12 mt-5 pt-5">
                                        <div class="actions">
                                            <ul>
                                                <li><button class="js-btn-prev" title="Regresar"><i class="fa fa-chevron-left pr-3 js-btn-prev"></i> Regresar </button></li>
                                                <li><button class="js-btn-next" title="Siguiente">Siguiente <i class="fa fa-chevron-right pl-3 js-btn-next"></i></button></li>
                                            </ul>
                                        </div>
                                    </div>                           
                                </div>
                            </div>
                            <div class="wizard-v3-progress">
                                <span>Paso 3 de 5</span>
                                <h3>50% Completado</h3>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 50%">
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
                <!-- div 4 -->
                <div class="multisteps-form__panel cuatro" data-animation="slideHorz" id="">
                    <div class="wizard-forms pb-0">
                        <div class="inner clearfix">
                           
                            <div class="wizard-photo-area">
                                <div class="wizard-photo-upload position-relative">                                    
                                    <div class="display-img text-center">
                                        <img id="profile-image" src="{{ asset('assets/img/foto.jpg')}}" alt="Foto">
                                    </div>
                                </div>
                                <div class="photo-upload-text">Se recomienda que las fotografías sean lo más parecido al ejemplo.</div>
                            </div>
                            <div class="wizard-form-field mb-85">
                                <div class="row">
                                    <div class="col-md-12"><h4 class="color-red">Credencial 2</h4></div>
                                    <div class="col-12 col-md-6">
                                        <div class="wizard-form-input">                                            
                                            <div class="w-100">
                                                <label for="input-persona" class="form-label mb-2 text-left w-100">Nombre y primer apellido</label>
                                                <input type="text" value="" id="txtNombre" class="form-control w-100" id="input-persona">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="wizard-form-input">                                            
                                            <div class="w-100">
                                                <label for="input-puesto" class="form-label mb-2 text-left w-100">Puesto <small>(Opcional)</small></label>
                                                <input type="number" value="" id="puesto" min="1" max="1000" step="1" class="form-control w-100" id="input-puesto">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row wizard-form-input wizard-document-upload m-0">
                                            <label class="col-md-12 mt-0 text-left" style="padding: 8px 0px;">Fotografía Credendial 1</label>
                                            <div class="col-md-12 custom-file mb-4 p-0">
                                                <label for="file-upload" class="custom-file-label w-100 mt-0">.JPG o PDF no mayor a 5mb.</label>
                                                <input type="file" class="custom-file-input w-100 credencialinfo" id="fileFotografia" name="file-name" capture="document">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12"><hr></div>
                                <div class="row">
                                    <div class="col-md-12"><h4 class="color-red">Credencial 1</h4></div>
                                    <div class="col-12 col-md-6">
                                        <div class="wizard-form-input">                                            
                                            <div class="w-100">
                                                <label for="input-persona" class="form-label mb-2 text-left w-100">Nombre y primer apellido</label>
                                                <input type="text" value="" id="txtNombre" class="form-control w-100" id="input-persona">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="wizard-form-input">                                            
                                            <div class="w-100">
                                                <label for="input-puesto" class="form-label mb-2 text-left w-100">Puesto <small>(Opcional)</small></label>
                                                <input type="number" value="" id="puesto" min="1" max="1000" step="1" class="form-control w-100" id="input-puesto">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row wizard-form-input wizard-document-upload m-0">
                                            <label class="col-md-12 mt-0 text-left" style="padding: 8px 0px;">Fotografía Credendial 2</label>
                                            <div class="col-md-12 custom-file mb-4 p-0">
                                                <label for="file-upload" class="custom-file-label w-100 mt-0">.JPG o PDF no mayor a 5mb.</label>
                                                <input type="file" class="custom-file-input w-100 credencialinfo" id="fileFotografia" name="file-name" capture="document">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12"><hr></div>
                                <div class="row">
                                    <div class="col-md-12"><h4 class="color-red">Credencial 3</h4></div>
                                    <div class="col-12 col-md-6">
                                        <div class="wizard-form-input">                                            
                                            <div class="w-100">
                                                <label for="input-persona" class="form-label mb-2 text-left w-100">Nombre y primer apellido</label>
                                                <input type="text" value="" id="txtNombre" class="form-control w-100" id="input-persona">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="wizard-form-input">                                            
                                            <div class="w-100">
                                                <label for="input-puesto" class="form-label mb-2 text-left w-100">Puesto <small>(Opcional)</small></label>
                                                <input type="number" value="" id="puesto" min="1" max="1000" step="1" class="form-control w-100" id="input-puesto">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row wizard-form-input wizard-document-upload m-0">
                                            <label class="col-md-12 mt-0 text-left" style="padding: 8px 0px;">Fotografía Credendial 3</label>
                                            <div class="col-md-12 custom-file mb-4 p-0">
                                                <label for="file-upload" class="custom-file-label w-100 mt-0">.JPG o PDF no mayor a 5mb.</label>
                                                <input type="file" class="custom-file-input w-100 credencialinfo" id="fileFotografia" name="file-name" capture="document">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-5 pt-5">
                                        <div class="actions">
                                            <ul>
                                                <li><button class="js-btn-prev" title="Regresar"><i class="fa fa-chevron-left pr-3 js-btn-prev "></i> Regresar </button></li>
                                                <li><button class="js-btn-next" title="Siguiente">Siguiente <i class="fa fa-chevron-right pl-3 js-btn-next"></i></button></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wizard-v3-progress">
                                <span>Paso 4 de 5</span>
                                <h3>75% Completado</h3>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 75%">
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
                <!-- div 5 -->
                <div class="multisteps-form__panel" data-animation="slideHorz">
                    <div class="wizard-forms pb-0">
                        <div class="inner clearfix">
                            <div class="wizard-form-field mb-5 datos-fin">
                                <h4 class="color-red">Confirmar pedido</h4>
                                <p class="mt-4">Se realizará el montaje e impresión de las credenciales de la empresa <strong class="color-blue"><label id="nombreEmpresaLabel"></label></strong>.</p>
                                <ul class="mt-4" id="aquivanNombreCredenciales"></ul>
                                <p class="mt-4">El tiempo de impresión es de 7 a 10 días hábiles, haciendo entrega directamente al personal administrativo de Luma Capital.</p>
                                <p class="mt-4">Gracias.</p>
                            </div>
                            <div class="wizard-form-field mb-85">
                                <div class="row">
                                    <div class="col-md-12 mt-5 pt-5">
                                        <div class="actions">
                                            <ul>
                                                <li><button class="js-btn-prev" title="Regresar"><i class="fa fa-chevron-left pr-3 js-btn-prev"></i> Regresar </button></li>
                                                <li><button class="js-btn-next" id="recargarPagina" title="Siguiente" >Finalizar pedido <i class="fa fa-chevron-right pl-3 js-btn-next"></i></button></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wizard-v3-progress">
                                <span>Paso 5 de 5</span>
                                <h3>100% Completado</h3>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 100%">
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
            </div>
        </div>
    </div>
   
    <script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/slick.min.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
    <script src="{{asset('assets/swal/sweetalert2.min.js')}}"></script>
    
    <script>

        /*$('.wizard > .steps li a').click(function() {
            $(this).parent().addClass('checked');
            $(this).parent().prevAll().addClass('checked');
            $(this).parent().nextAll().removeClass('checked');
        });*/

        $('#add_factura').click(function() {
            if ($(this).is(':checked')) {
                $('#info-factura').show();
            } else {
                $('#info-factura').hide();
            }
        });

        $('#recargarPagina').click(function() {
            location.reload();
        });

        /*$('.forward').click(function() {
            $("#wizard").steps('next');
        });

        $('.backward').click(function() {
            $("#wizard").steps('previous');
        });*/

        $("button.js-btn-prev").click(function () {
            $("html, body").animate({scrollTop: 0}, 600);
        });

        $("button.js-btn-next").click(function () {
            $('html, body').animate({
                scrollTop: $("html").offset().top
            }, 600);
        });

   </script>

</body>

</html>
