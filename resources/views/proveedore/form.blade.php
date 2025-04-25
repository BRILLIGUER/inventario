
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('nombre_comercial') }}</label>
    <div>
        {{ Form::text('nombre_comercial', $proveedore->nombre_comercial, ['class' => 'form-control' .
        ($errors->has('nombre_comercial') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Comercial']) }}
        {!! $errors->first('nombre_comercial', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">proveedore <b>nombre_comercial</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('razon_social') }}</label>
    <div>
        {{ Form::text('razon_social', $proveedore->razon_social, ['class' => 'form-control' .
        ($errors->has('razon_social') ? ' is-invalid' : ''), 'placeholder' => 'Razon Social']) }}
        {!! $errors->first('razon_social', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">proveedore <b>razon_social</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('nit') }}</label>
    <div>
        {{ Form::text('nit', $proveedore->nit, ['class' => 'form-control' .
        ($errors->has('nit') ? ' is-invalid' : ''), 'placeholder' => 'Nit']) }}
        {!! $errors->first('nit', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">proveedore <b>nit</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('direccion') }}</label>
    <div>
        {{ Form::text('direccion', $proveedore->direccion, ['class' => 'form-control' .
        ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
        {!! $errors->first('direccion', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">proveedore <b>direccion</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('telefono') }}</label>
    <div>
        {{ Form::text('telefono', $proveedore->telefono, ['class' => 'form-control' .
        ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
        {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">proveedore <b>telefono</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('correo_electronico') }}</label>
    <div>
        {{ Form::text('correo_electronico', $proveedore->correo_electronico, ['class' => 'form-control' .
        ($errors->has('correo_electronico') ? ' is-invalid' : ''), 'placeholder' => 'Correo Electronico']) }}
        {!! $errors->first('correo_electronico', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">proveedore <b>correo_electronico</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('descripcion') }}</label>
    <div>
        {{ Form::text('descripcion', $proveedore->descripcion, ['class' => 'form-control' .
        ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
        {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">proveedore <b>descripcion</b> instruction.</small>
    </div>
</div>

    <div class="form-footer">
        <div class="text-end">
            <div class="d-flex">
                <a href="#" class="btn btn-danger">Cancel</a>
                <button type="submit" class="btn btn-primary ms-auto ajax-submit">Submit</button>
            </div>
        </div>
    </div>
