@extends('layouts.layoutTravesuraMobil')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="row">
                <!-- left column -->
                <div class="col-xs-10 col-sm-10 col-lg-10 col-centered">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Descarga tus Fotos</h3>
                        </div>
                        <div class="container">
                            <div class="row">
                                <br>
                                <div class='list-group gallery'>



                                    @if($images->count())
                                        @foreach($images as $image)
                                            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                                                <a class="thumbnail fancybox" rel="ligthbox" href="/images/{{ $image->image }}">
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