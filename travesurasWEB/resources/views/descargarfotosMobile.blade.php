@extends('layouts.layoutTravesuraMobil')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="row">
                <!-- left column -->
                <div class="col-xs-10 col-sm-10 col-lg-10">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Ingrese el codigo</h3>
                        </div>
                        <div class="container">
                            <div id="buscar">
                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success alert-block">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @endif

                                <div class="row">
                                    <div class="col-md-5">
                                        <br>
                                        <input type="text" id="codigo" class="form-control" placeholder="Ingrese el codigo que le llego en el correo">
                                    </div>
                                    <div class="col-md-2">
                                        <br/>
                                        <button id="btnMostra" class="btn btn-success">Mostrar Fotos</button>
                                    </div>
                                </div>
                            </div>



                        </div> <!-- container / end -->

                    </div>
                </div>
            </div>
        </section>
    </div>


@endsection
@section('script')
    <script src="{{ asset('') }}js/fotosMobile.js"></script>
    {{--<script>
        $(function(){
            $(document).bind("contextmenu",function(e){
                return false;
            });
        });
    </script>--}}
@endsection