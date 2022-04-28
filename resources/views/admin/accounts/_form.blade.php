<div class="form-group">
    <input type="number" name="value" id="" class="form-control" value="{{isset($registers->value)?$registers->value:''}}" placeholder="Valor">
</div>
<div class="form-group">
    <label for="exampleFormControlSelect1">Selecione o tipo</label>
    <select class="form-control" id="exampleFormControlSelect1" name="type">
        <option value="in" {{ isset($registers->type) && $registers->type === 'in' ? "selected='selected'" : '' }}>Entrada</option>
        <option value="out" {{ isset($registers->type) && $registers->type === 'out' ? "selected='selected'" : '' }}>Saída</option>
    </select>
</div>
<input type="hidden" name="name" value="{{Auth::user()->name}}">
<input type="hidden" name="id_user" value="{{Auth::user()->id}}">
