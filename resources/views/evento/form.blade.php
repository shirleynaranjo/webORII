<div class="form-group">
    <label for="tituloEvento" class="col-lg-3 control-label required">Titulo del Evento</label>

    <div class="col-lg-8">
        <input type="text" name="tituloEvento" id="tituloEvento" class="form-control"
            value="{{old('tituloEvento',$data->tituloEvento ?? '')}}" required>
    </div>
</div>

<div class="form-group">
    <label for="lugarEvento" class="col-lg-3 control-label requerido">Lugar del Evento</label>

    <div class="col-lg-8">
        <input type="text" name="lugarEvento" id="lugarEvento" class="form-control"
            value="{{old('lugarEvento',$data->lugarEvento ?? '')}}" required>
    </div>
</div>

<div class="form-group">
    <label for="fechaEvento" class="col-lg-3 control-label requerido">Fecha del Evento:</label>

    <div class="col-lg-8">
        <div class="input-group date">
            <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
            </div>
            <input type="text" name="fechaEvento" class="form-control pull-right" id="datepicker">
        </div>
    </div>
</div>

<div class="form-group">
    <label for="horaEvento" class="col-lg-3 control-label requerido">Hora del Evento</label>

    <div class="col-lg-8">
        <div class="input-group">
            <div class="input-group-addon">
                <i class="fa fa-clock-o"></i>
            </div>
            <input type="text" name="horaEvento" class="form-control timepicker">
        </div>
    </div>
</div>

<div class="form-group">
    <label for="descripcion" class="col-lg-3 control-label requerido">Descripción</label>
    <textarea id="editor1" name="descripcion" rows="10" cols="80">
    This is my textarea to be replaced with CKEdito
</textarea>
</div>


{{-- 'tituloEvento','lugarEvento','fechaEvento','horaEvento','descripcion','informacionP','informacionI','miniatura' --}}