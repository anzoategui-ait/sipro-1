@extends('layouts.app')

@section('template_title')
    {{ $tipossgp->name ?? 'Show Tipossgp' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Tipossgp</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tipossgps.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Denominacion:</strong>
                            {{ $tipossgp->denominacion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
