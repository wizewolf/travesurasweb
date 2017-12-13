@extends('layouts.layoutTravesura')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <section class="content">
            <div class="row">
                <!-- left column -->
                <div class="col-xs-10 col-sm-6 col-lg-8">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Subir Imagen</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                            <div class="box-body">
                                <label for="exampleInputEmail1">DNI del cliente</label>
                                <input id="dni" type="number" class="form-control" id="exampleInputEmail1" placeholder="Ingrese el dni del cliente">
                            </div>
                            <div class="box-footer">
                                <button id="btnbuscar" class="btn btn-primary">Buscar</button>
                            </div>

                    </div>
                </div>
            </div>

        </section>
    </div>
    <!-- /.content-wrapper -->
@endsection
@section('script')
    <script src="{{ asset('') }}js/cliente.js"></script>
@endsection