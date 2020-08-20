@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Bed Allotment
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($bedAllotment, ['route' => ['bedAllotments.update', $bedAllotment->id], 'method' => 'patch']) !!}

                        @include('bed_allotments.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection