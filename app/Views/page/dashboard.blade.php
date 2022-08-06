@extends('layouts.plain')
@section('content')
    <ol class="breadcrumb">

        {{-- <li><a href="#"></a></li> --}}
        <li class="active"><a href="#">Dashboard</a></li>

    </ol>
    <div class="container-fluid">
        <div data-widget-group="group1">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="panel-ctrls"></div>
                        </div>
                        <div class="panel-body">
                            <button class="btn btn-primary btn-lg">
                                Jumlah Siswa <br>
                                {{ count($dsiswa) }}
                            </button>
                            <button class="btn btn-primary btn-lg">
                                Jumlah Angkatan <br>
                                {{ count($dangkatan) }}
                            </button>
                            <button class="btn btn-primary btn-lg">
                                Jumlah Kelas <br>
                                {{ count($dkelas) }}
                            </button>
                            <button class="btn btn-primary btn-lg">
                                Jumlah User <br>
                                {{ count($duser) }}
                            </button>
                        </div>
                        <div class="panel-footer"></div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- .container-fluid -->
@endsection
