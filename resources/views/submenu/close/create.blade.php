@extends('layouts.app')

@section('content')
    <!-- APP MAIN ==========-->
    <main id="app-main" class="app-main">
        <div class="wrap">
            <section class="app-content">
                <div class="row">
                    <div class="col-md-12 col-lg-8 offset-lg-2">
                        <div class="widget">
                            <header class="widget-header">
                                <h4 class="widget-title">Cierre</h4>
                                <h4 class="widget-title">Nombre: Orlando Quispe Huanca C.I: 8361659 LP</h4>
                            </header><!-- .widget-header -->
                            <hr class="widget-separator">
                            <div class="widget-body">
                                <form method="GET" action="{{url('supervisor/menu/close')}}/{{ app('request')->input('id_wallet') }}" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="nit_number"> Selecciona fecha:</label>
                                        <input type="text" name="date_start"  class="form-control datepicker-trigger" id="date_start" data-role="date" required>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success btn-block btn-md">Buscar</button>
                                    </div>
                                </form>

                            </div><!-- .widget-body -->
                        </div><!-- .widget -->
                    </div><!-- END column -->
                </div><!-- .row -->
            </section>
        </div>
    </main>
@endsection
