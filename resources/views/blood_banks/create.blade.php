@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Blood Bank
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'bloodBanks.store']) !!}

                        @include('blood_banks.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
