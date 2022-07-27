<div class="container"><?= var_dump($reg) ?>
  <form action="?controller=UserController&<?= isset($reg->id) ? "method=update&id={$reg->id}" : "method=create"; ?>" method="post">
    <div class="form-group"><?= isset($reg->id) ? $reg->id : null; ?>
      <div class="form-group">
        <label class="col-sm-2 col-form-label text-right" for="name">Nome:</label>
        <input type="text" class="form-control col-sm-8" name="name" id="name" value="<?= isset($reg->name) ? $reg->name : null; ?>" required />
      </div>
      <div class="form-group">
        <label class="col-sm-2 col-form-label text-right" for="email">Email:</label>
        <input type="email" class="form-control col-sm-8" name="email" id="email" value="<?= isset($reg->email) ? $reg->email : null; ?>" required />
      </div>
      <div class="form-group">
        <label class="col-sm-2 col-form-label text-right" for="password">Password:</label>
        <input type="text" class="form-control col-sm-8" name="password" id="password" value="<?= isset($reg->password) ? $reg->password : null; ?>" required />
      </div>
      <!--  -->
      <!-- <div class="form-group">
        <label for="form-group">Estado</label>
        <select class="form-control" id="state_id" name="state_id">
          <option value="1" <?= (isset($reg->state_id) && ($reg->state_id === '1')) ? "selected='selected'" : null; ?>> Acre</option>
          <option value="2" <?= (isset($reg->state_id) && ($reg->state_id === '2')) ? "selected='selected'" : null; ?>> Alagoas</option>
          <option value="3" <?= (isset($reg->state_id) && ($reg->state_id === '3')) ? "selected='selected'" : null; ?>> Amapá</option>
          <option value="4" <?= (isset($reg->state_id) && ($reg->state_id === '4')) ? "selected='selected'" : null; ?>> Amazonas</option>
          <option value="5" <?= (isset($reg->state_id) && ($reg->state_id === '5')) ? "selected='selected'" : null; ?>> Bahia</option>
          <option value="6" <?= (isset($reg->state_id) && ($reg->state_id === '6')) ? "selected='selected'" : null; ?>> Ceará</option>
          <option value="7" <?= (isset($reg->state_id) && ($reg->state_id === '7')) ? "selected='selected'" : null; ?>> Distrito Federal</option>
          <option value="8" <?= (isset($reg->state_id) && ($reg->state_id === '8')) ? "selected='selected'" : null; ?>> Espírito Santo</option>
          <option value="9" <?= (isset($reg->state_id) && ($reg->state_id === '9')) ? "selected='selected'" : null; ?>> Goiás</option>
          <option value="10" <?= (isset($reg->state_id) && ($reg->state_id === '10')) ? "selected='selected'" : null; ?>> Maranhão</option>
          <option value="11" <?= (isset($reg->state_id) && ($reg->state_id === '11')) ? "selected='selected'" : null; ?>> Mato Grosso</option>
          <option value="12" <?= (isset($reg->state_id) && ($reg->state_id === '12')) ? "selected='selected'" : null; ?>> Mato Grosso do Sul</option>
          <option value="13" <?= (isset($reg->state_id) && ($reg->state_id === '13')) ? "selected='selected'" : null; ?>> Minas Gerais</option>
          <option value="14" <?= (isset($reg->state_id) && ($reg->state_id === '14')) ? "selected='selected'" : null; ?>> Pará</option>
          <option value="15" <?= (isset($reg->state_id) && ($reg->state_id === '15')) ? "selected='selected'" : null; ?>> Paraíba</option>
          <option value="16" <?= (isset($reg->state_id) && ($reg->state_id === '16')) ? "selected='selected'" : null; ?>> Paraná</option>
          <option value="17" <?= (isset($reg->state_id) && ($reg->state_id === '17')) ? "selected='selected'" : null; ?>> Pernambuco</option>
          <option value="18" <?= (isset($reg->state_id) && ($reg->state_id === '18')) ? "selected='selected'" : null; ?>> Piauí</option>
          <option value="19" <?= (isset($reg->state_id) && ($reg->state_id === '19')) ? "selected='selected'" : null; ?>> Rio de Janeiro</option>
          <option value="20" <?= (isset($reg->state_id) && ($reg->state_id === '20')) ? "selected='selected'" : null; ?>> Rio Grande do Norte</option>
          <option value="21" <?= (isset($reg->state_id) && ($reg->state_id === '21')) ? "selected='selected'" : null; ?>> Rio Grande do Sul</option>
          <option value="22" <?= (isset($reg->state_id) && ($reg->state_id === '22')) ? "selected='selected'" : null; ?>> Rondônia</option>
          <option value="23" <?= (isset($reg->state_id) && ($reg->state_id === '23')) ? "selected='selected'" : null; ?>> Roraima</option>
          <option value="24" <?= (isset($reg->state_id) && ($reg->state_id === '24')) ? "selected='selected'" : null; ?>> Santa Catarina</option>
          <option value="25" <?= (isset($reg->state_id) && ($reg->state_id === '25')) ? "selected='selected'" : null; ?>> São Paulo</option>
          <option value="26" <?= (isset($reg->state_id) && ($reg->state_id === '26')) ? "selected='selected'" : null; ?>> Sergipe</option>
          <option value="27" <?= (isset($reg->state_id) && ($reg->state_id === '27')) ? "selected='selected'" : null; ?>> Tocantins</option>
        </select>
      </div> -->
      <!--  -->

      <!--  -->
      <!-- <div class="form-group">
        <label for="form-group">Cidade</label>
        <select class="form-control" id="city_id" name="city_id">
          <option value="1" <?= (isset($reg->city_id) && ($reg->city_id === '1')) ? "selected='selected'" : null; ?>>Rio Branco</option>
          <option value="2" <?= (isset($reg->city_id) && ($reg->city_id === '2')) ? "selected='selected'" : null; ?>> Maceió</option>
          <option value="3" <?= (isset($reg->city_id) && ($reg->city_id === '3')) ? "selected='selected'" : null; ?>> Macapá</option>
          <option value="4" <?= (isset($reg->city_id) && ($reg->city_id === '4')) ? "selected='selected'" : null; ?>> Manaus</option>
          <option value="5" <?= (isset($reg->city_id) && ($reg->city_id === '5')) ? "selected='selected'" : null; ?>> Salvador</option>
          <option value="6" <?= (isset($reg->city_id) && ($reg->city_id === '6')) ? "selected='selected'" : null; ?>> Fortaleza</option>
          <option value="7" <?= (isset($reg->city_id) && ($reg->city_id === '7')) ? "selected='selected'" : null; ?>> Brasília</option>
          <option value="8" <?= (isset($reg->city_id) && ($reg->city_id === '8')) ? "selected='selected'" : null; ?>> Vitória</option>
          <option value="9" <?= (isset($reg->city_id) && ($reg->city_id === '9')) ? "selected='selected'" : null; ?>> Goiânia</option>
          <option value="10" <?= (isset($reg->city_id) && ($reg->city_id === '10')) ? "selected='selected'" : null; ?>> São Luís</option>
          <option value="11" <?= (isset($reg->city_id) && ($reg->city_id === '11')) ? "selected='selected'" : null; ?>> Cuiabá</option>
          <option value="12" <?= (isset($reg->city_id) && ($reg->city_id === '12')) ? "selected='selected'" : null; ?>> Campo grande</option>
          <option value="13" <?= (isset($reg->city_id) && ($reg->city_id === '13')) ? "selected='selected'" : null; ?>> Belo Horizonte</option>
          <option value="14" <?= (isset($reg->city_id) && ($reg->city_id === '14')) ? "selected='selected'" : null; ?>> Belém</option>
          <option value="15" <?= (isset($reg->city_id) && ($reg->city_id === '15')) ? "selected='selected'" : null; ?>> João Pessoa</option>
          <option value="16" <?= (isset($reg->city_id) && ($reg->city_id === '16')) ? "selected='selected'" : null; ?>> Curitiba</option>
          <option value="17" <?= (isset($reg->city_id) && ($reg->city_id === '17')) ? "selected='selected'" : null; ?>> Recife</option>
          <option value="18" <?= (isset($reg->city_id) && ($reg->city_id === '18')) ? "selected='selected'" : null; ?>> Teresina</option>
          <option value="19" <?= (isset($reg->city_id) && ($reg->city_id === '19')) ? "selected='selected'" : null; ?>> Rio de Janeiro</option>
          <option value="20" <?= (isset($reg->city_id) && ($reg->city_id === '20')) ? "selected='selected'" : null; ?>> Natal</option>
          <option value="21" <?= (isset($reg->city_id) && ($reg->city_id === '21')) ? "selected='selected'" : null; ?>> Porto Alegre</option>
          <option value="22" <?= (isset($reg->city_id) && ($reg->city_id === '22')) ? "selected='selected'" : null; ?>> Porto Velho</option>
          <option value="23" <?= (isset($reg->city_id) && ($reg->city_id === '23')) ? "selected='selected'" : null; ?>> Boa Vista</option>
          <option value="24" <?= (isset($reg->city_id) && ($reg->city_id === '24')) ? "selected='selected'" : null; ?>> Florianópolis</option>
          <option value="25" <?= (isset($reg->city_id) && ($reg->city_id === '25')) ? "selected='selected'" : null; ?>> São Paulo</option>
          <option value="26" <?= (isset($reg->city_id) && ($reg->city_id === '26')) ? "selected='selected'" : null; ?>> Aracajú</option>
          <option value="27" <?= (isset($reg->city_id) && ($reg->city_id === '27')) ? "selected='selected'" : null; ?>> Palmas</option>
        </select>
      </div> -->
      <!--  -->

      <!--  -->
      <!-- <div class="form-group">
        <label class="col-sm-2 col-form-label text-right" for="numeral">Número:</label>
        <input type="text" class="form-control col-sm-8" name="numeral" id="numeral" value="<?= isset($reg->numeral) ? $reg->numeral : null; ?>" required />
      </div>
      <div class="form-group">
        <label class="col-sm-2 col-form-label text-right" for="address">Endereço:</label>
        <input type="text" class="form-control col-sm-8" name="address" id="address" value="<?= isset($reg->address) ? $reg->address : null; ?>" required />
      </div>
      <div class="form-group">
        <label class="col-sm-2 col-form-label text-right" for="zipcode">CEP:</label>
        <input type="text" class="form-control col-sm-8" name="zipcode" id="zipcode" value="<?= isset($reg->zipcode) ? $reg->zipcode : null; ?>" required />
      </div> -->
      <!--  -->
      <div class="form-group my-2">
        <input type="hidden" name="id" id="id" value="<?= isset($reg->id) ? $reg->id : null; ?>" />
        <button class="btn btn-outline-success mx-2" type="submit"><i class='fas fa-check'></i></button>
        <a class="btn btn-outline-danger mx-2" href="?controller=UserController&method=read"><i class='fas fa-times'></i></a>
      </div>
    </div>
  </form>
</div>
<?php
var_dump($reg)
?>