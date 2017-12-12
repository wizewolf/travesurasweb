@extends('layouts.layoutTravesura')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Descarga tus Fotos</h3>
                        </div>
                        <div class="container">
                            <form action="" class="form-image-upload" method="POST">

                                {!! csrf_field() !!}

                                @if (count($errors) > 0)
                                    <div class="alert alert-danger">
                                        <strong>Cuidado!</strong> Debe rellenar todos los campos.<br><br>
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success alert-block">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @endif

                                <div class="row">
                                    <div class="col-md-5">
                                        <strong>Codigo:</strong>
                                        <input type="text" name="title" class="form-control" placeholder="Ingrese el codigo que le llego en el correo">
                                    </div>
                                    <div class="col-md-2">
                                        <br/>
                                        <button type="submit" class="btn btn-success">Descarga</button>
                                    </div>
                                </div>
                                <input type="hidden" name="iduser" value="{{$client->id}}">
                            </form>

                            <div class="row">
                                <div class='list-group gallery'>

                                    @if($images->count())
                                        @foreach($images as $image)
                                            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                                                <a class="thumbnail fancybox" rel="ligthbox">
                                                    <img class="img-responsive" alt="" src="/images/{{ $image->image }}" />
                                                    <div class='text-center'>
                                                        <small class='text-muted'>{{ $image->title }}</small>
                                                    </div> <!-- text-center / end -->
                                                </a>
                                            </div> <!-- col-6 / end -->
                                        @endforeach
                                    @endif

                                </div> <!-- list-group / end -->
                            </div> <!-- row / end -->
                        </div> <!-- container / end -->

                    </div>
                </div>
            </div>
        </section>
    </div>


@endsection