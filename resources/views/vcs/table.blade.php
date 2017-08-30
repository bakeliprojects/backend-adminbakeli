<table class="table table-responsive" id="vcs-table">
    <thead>
        <th>Image</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Disponiblite</th>
        <th>Cour</th>
        <th>Education</th>
        <th>Technologie</th>
        <th>Language</th>
        <th>Motivation</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($vcs as $vc)
        <tr>

           <td> <img src="../public/images/{{$vc->image}}" alt="profile Pic" height="100" width="200"></td>

            
            <td>{!! $vc->nom !!}</td>
            <td>{!! $vc->prenom !!}</td>
            <td>{!! $vc->disponiblite !!}</td>
            <td>{!! $vc->cour !!}</td>
            <td>{!! $vc->education !!}</td>
            <td>{!! $vc->technologie !!}</td>
            <td>{!! $vc->language !!}</td>
            <td>{!! $vc->motivation !!}</td>
            <td>
                {!! Form::open(['route' => ['vcs.destroy', $vc->id], 'method' => 'delete', 'enctype' => 'multipart/form-data']) !!}
                <div class='btn-group'>
                    <a href="{!! route('vcs.show', [$vc->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>

                    <!-- <a href=route('vcs/{{$vc->id}}/edit') class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
  -->
                  <a href="{!! route('vcs.edit', [$vc->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>  


                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>