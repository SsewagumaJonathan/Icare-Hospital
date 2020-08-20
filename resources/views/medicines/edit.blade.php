@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Medicine
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($medicine, ['route' => ['medicines.update', $medicine->id], 'method' => 'patch']) !!}

                        @include('medicines.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection