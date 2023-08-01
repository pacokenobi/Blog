@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Panel de Control y Administración</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="text-center">Crear Rol</h3>


                            @if($errors->any())
                            <div class="alert alert-dark alert-dismissible fade show" role="alert">
                                    <strong>Revise los campos</strong>
                                    @foreach($errors->all() as $error)
                                        <span class="badge badge-danger">
                                            {{$error}}
                                        </span>
                                    @endforeach
                                    <button type="button" class="close" data-dismiss="alert" aria-label="close">
                                        <span aria-hidden="true">&times</span>
                            </div>
                            @endif

                            {!! Form::open(array('route'=>'roles.store', 'method'=>'POST')) !!}
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <label for="name">Nombre del Rol:</label>
                                                {!! Form::text('name', null, array('class'=>'form-control' )) !!}
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <label for="name">Permisos para este rol:</label>
                                                <br>
                                                @foreach ($permission as $value)
                                                    <label>{{Form::checkbox('permission[]', $value->id, false, array('class'=>'name')) }}
                                                    {{ $value->name}}</label>
                                                    <br>
                                                @endforeach
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                            {!! Form::close() !!}


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
