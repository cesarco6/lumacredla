@extends('layouts.landing')

@section('title', 'Luma Capital - Comprobante')

@section('content')
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
@endsection