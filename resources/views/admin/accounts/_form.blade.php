<div class="form-group">
    <input type="number" name="value" id="" class="form-control" value="{{isset($registers->value)?$registers->value:''}}" placeholder="Valor">
</div>
<div class="form-group">
    <label for="exampleFormControlSelect1">Selecione o tipo</label>
    <select class="form-control" id="exampleFormControlSelect1" name="category">
        <option value="1" {{ isset($registers->category) && $registers->category == '1' ? "selected='selected'" : '' }}>Entrada</option>
        <option value="2" {{ isset($registers->category) && $registers->category == '2' ? "selected='selected'" : '' }}>Saída</option>
    </select>
</div>
<input type="hidden" name="name" value="{{Auth::user()->name}}">
<input type="hidden" name="id_user" value="{{Auth::user()->id}}">
