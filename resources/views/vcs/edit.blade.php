@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Vc
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($vc, ['route' => ['vcs.update', $vc->id], 'method' => 'patch', 'files'=>true]) !!}

                        @include('vcs.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection

<script>
$('#blah').show();
$('#remove').hide();  
function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    $("#imgInp").change(function(){
        if( $('#imgInp').val()!="{{$vc->image}}"){
            
            $('#image').show();
            $('#blah').show('slow');
      }
        else{ $('#image').hide();$('#blah').hide('slow');}
        readURL(this);
    });
  
    $('#image').click(function(){
          $('#imgInp').val('');
          $(this).hide();
          $('#blah').hide('slow');
 $('#blah').attr('src','http://upload.wikimedia.org/wikipedia/commons/thumb/4/40/No_pub.svg/150px-No_pub.svg.png');
});
     
 </script>



