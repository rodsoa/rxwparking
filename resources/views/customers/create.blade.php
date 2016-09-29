@extends("layouts.base")

@section('content')
<form>
    <div class="row">
        <div class="col-sm-2 col-md-2">
            <div class="form-group">
                <label for="status">Status</label>
                <select id="status" name="status" class="form-control">
                    <option value="True">ATIVO</option>
                    <option value="False">INATIVO</option>
                </select>
            </div>
        </div>
        <div class="col-sm-2 col-md-2">
            <div class="form-group">
                <label for="category">Categoria</label>
                <select id="category" name="category" class="form-control">
                    <option value="FREE">LIVRE</option>
                    <option value="REGISTERED">REGISTRADO</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-7 col-md-7">
            <div class="form-group">
                <label for="name">Nome do Cliente</label>
                <input id="name" name="name" class="form-control"/>
            </div>
        </div>
        <div class="col-sm-2">
            <label for="vehicle">Tipo de Veículo</label>
            <select id="vehicle" name="vehicle" class="form-control">
                <option value="AUTOMOBILE">AUTOMÓVEL</option>
                <option value="MOTORCYCLE">MOTOCICLETA</option>
            </select>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <label for="license_plate">Nº da Placa</label>
                <input id="license_plate" name="license_plate" class="form-control"/>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-7 col-md-7">
            <div class="form-group">
                <label for="name">Nome do Cliente</label>
                <input id="name" name="name" class="form-control"/>
            </div>
        </div>
        <div class="col-sm-2">
            <label for="vehicle">Tipo de Veículo</label>
            <select id="vehicle" name="vehicle" class="form-control">
                <option value="AUTOMOBILE">AUTOMÓVEL</option>
                <option value="MOTORCYCLE">MOTOCICLETA</option>
            </select>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <label for="license_plate">Nº da Placa</label>
                <input id="license_plate" name="license_plate" class="form-control"/>
            </div>
        </div>
    </div>
</form>


@endsection
