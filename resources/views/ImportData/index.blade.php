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
                            <div class="col-md-6 mt-3">
                                <input type="text" id="selectTable" name="table_search" class="form-control" placeholder="Buscar">
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