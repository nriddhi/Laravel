<!DOCTYPE html>
<html>
<head>
	<title>All userinfo</title>
<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>
<body>

<div class="container">
    <div class="row col-md-6 col-md-offset-2 custyle">
    
    <table class="table table-striped custab">
    <thead>
    <a href="userinfo/create" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new categories</a>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Age</th>
            <th>Hometown</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>

    @foreach($alldata as $data)

            <tr>
                <td>{{ $data -> id }}</td>
                <td>{{ $data -> name }}</td>
                <td>{{ $data -> email }}</td>
                <td>{{ $data -> age }}</td>
                <td>{{ $data -> hometown }}</td>
                
                <td class="text-center"><a class='btn btn-info btn-xs' style="margin-bottom:5px" href="{{route('userinfo.edit',$data->id)}}"><span class="glyphicon glyphicon-edit"></span> Edit</a> 
                
                
{!!Form::open(array('route' => ['userinfo.destroy',$data->id], 'method' => 'delete')) !!}

{!!Form::hidden('id', $data-> id) !!}

{!!Form::submit('Delete', ['class' => 'btn btn-danger glyphicon glyphicon-edit']) !!}


{!!Form::close()!!}




            </tr>

           @endforeach
            
    </table>

  {!! $alldata -> render(); !!}

    </div>
</div>

</body>
</html>