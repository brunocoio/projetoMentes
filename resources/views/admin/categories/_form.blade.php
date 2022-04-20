<div class="form-group">
    <input type="text" name="name" id="" class="form-control" value="{{isset($register->name)?$register->name:''}}">
</div>
<div class="form-group">
    <label for="exampleFormControlSelect1">Example select</label>
    <select class="form-control" id="exampleFormControlSelect1" name="type">
        <option value="{{isset($register->name)?$register->name:'in'}}">Entrada</option>
        <option value="{{isset($register->name)?$register->name:'out'}}">Saída</option>
    </select>
</div>
