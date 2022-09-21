@extends('Shared.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header bg-primary">
                    <h3 class="text-center font-weight-light my-4 text-white"> Importar archivo</h3>
                </div>
                <div class="card-body" style="margin-bottom: 10px;">
                    <form id="importForm" class="container" enctype="multipart/form-data">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <select id="selectTable" class="form-control mt-3" required>
                                    <option value="null">Selecciona una tabla</option>
                                    @foreach( $Tablas as $Tabla )
                                    <option value="{{ $Tabla->name }}">{{ $Tabla->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-6">
                                <input class="form-control mt-3" accept=".CSV" id="importFile" type="file">
                                <span class="text-secondary">.csv</span>
                            </div>

                        </div>
                        <div class="mb-2">
                            <button type="button" id="btnImport" class="btn btn-outline-primary">Importar a base de datos</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const routes = {
        ImportData: "{{ route('ImportData') }}"
    }
</script>
<script src="{{URL::asset('assets/js/import.js')}}"></script>

@endsection