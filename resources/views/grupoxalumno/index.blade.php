@extends('layouts.tutor')
@section('main-content')
    
    <div class="container">

        <form class="form-inline my-4 my-lg-0">
            <select name="search" class="form-control">
                @foreach($grupos as $grupo)
                    <option value="{{$grupo->idgrupo}}"> {{$grupo->nomgrupo}} </option>
                @endforeach
            </select>
            <button class="btn btn-secondary" type="submit" name="ver">
                <i class="fa fa-search"></i>
            </button>
        </form>

        <br><br>
        <div class="row">              
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Grupos por alumnos</div>
                    <div class="card-body">                     
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Grupo</th><th>Matricula</th><th>Alumno</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <?php if(isset($_GET['ver'])){ ?>
                                    <tbody>
                                    @foreach($grupoxalumno as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->nomgrupo }}</td><td>{{$item->matricula}}</td><td>{{ $item->nomalumno }}</td>
                                            <td>
                                                <a href="{{ url('tutorias/grupoxalumno/alumno/'.$item->idalumno) }}" title="View Grupoxalumno"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Info</button></a>                                                
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                <?php } ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>       
    </div>
@endsection
