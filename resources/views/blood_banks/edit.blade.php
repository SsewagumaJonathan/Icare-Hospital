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
                   {!! Form::model($bloodBank, ['route' => ['bloodBanks.update', $bloodBank->id], 'method' => 'patch']) !!}

                        @include('blood_banks.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection