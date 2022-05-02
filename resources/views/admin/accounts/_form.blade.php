<div class="form-group">
    <input type="number" name="value" id="" class="form-control" value="{{isset($registers->value)?$registers->value:''}}" placeholder="Valor">
</div>
<div class="form-group">
    <label for="exampleFormControlSelect1">Selecione o tipo</label>
    <select class="form-control" id="exampleFormControlSelect1" name="category_id">
        @foreach ($categories as $category)
            <option value="{{$category->id}}" {{ isset($registers->category_id) && $registers->category_id == $category->id ? "selected='selected'" : '' }}>{{$category->name}}</option>
        @endforeach
    </select>
</div>
<input type="hidden" name="name" value="{{Auth::user()->name}}">
<input type="hidden" name="user_id" value="{{Auth::user()->id}}">
