@extends('layouts.layoutTravesura')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <section class="content">
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Subir Imagen</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->


                        <form role="form" method="post" action="/cliente">
                            {{cd}}
                            <div class="box-body">
                                <label for="exampleInputEmail1">DNI del cliente</label>
                                <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Ingrese el dni del cliente">
                            </div>
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </section>
    </div>
    <!-- /.content-wrapper -->
@endsection