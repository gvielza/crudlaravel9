<div>
    @csrf
        <div class="row">
            <div class="col-sm-12">
                <label for="InputNombre" class="form-label">*Nombre de la Tarea</label>
                <input type="text" name="nombre" id="ImputNombre" class="form-control" placeholder=".." value="{{old('nombre',$tarea->nombre)}}">
            </div>
            <div class="col-sm-4">
                <div class="form-check">
                    <input type="checkbox" name="finalizada" id="InputFinalizada" class="form-check-input" value="1" @checked( old('finalizada',$tarea->finalizada) )>
                    <label for="InputFinalizada" class="form-check-label">Finalizada</label>
                </div>
            </div>
            <div class="col-sm-4">
                <label for="SelectUrgencia" class="form-label">*Urgencia</label>
                <select name="urgencia" id="SelectUrgencia" class="form-select" >
                    @for($i = 0; $i < count($urgencias); $i++)
                        <option value="{{$i}}" @selected(old('urgencia',$tarea->urgencia))>
                            {{$urgencias[$i]}}
                        </option>
                    @endfor
                </select>

            </div>
            <div class="col-sm-4">
                <label for="InputFechaLimite" class="form-label">*Fecha Limite</label>
                <input type="datetime-local" name="fecha_limite" id="InputFechaLimite"  class="form-control" value="{{old('fecha_limite',$tarea->fecha_limite)}}">
            </div>
            <div class="col-sm-12">
                <label for="TextAreaDescription" class="form-label">Descripcion</label>
                <textarea name="descripcion" id="TextAreaDescription" cols="30" rows="10" class="form-control" >{{old('descripcion',$tarea->descripcion)}}</textarea>
            </div>
            <div class="col-sm-12 text-end my-2">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>

</div>
