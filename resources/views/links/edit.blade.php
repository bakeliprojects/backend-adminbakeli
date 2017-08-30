@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Links
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($links, ['route' => ['links.update', $links->id], 'method' => 'patch']) !!}

                        @include('links.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection