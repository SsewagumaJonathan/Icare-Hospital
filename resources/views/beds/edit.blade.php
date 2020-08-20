@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Beds
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($beds, ['route' => ['beds.update', $beds->id], 'method' => 'patch']) !!}

                        @include('beds.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection