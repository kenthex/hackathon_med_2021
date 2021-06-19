<template>
    <div>
    <div class="page-title">
      <h3>Профиль</h3>
      <i class="large material-icons" >account_circle</i>
    </div>
    <form class="form">
      <div class="input-field">
        <input
            id="description"
            type="text"
        >
        <label for="description">Имя</label>
        <span
              class="helper-text invalid">Заполните имя</span>

      </div>

      <div class="input-field">
        <input
            id="description"
            type="text"
        >
        <label for="description">Фамилия</label>
        <span
              class="helper-text invalid">Заполните фамилию</span>

      </div>

      <div class="input-field">
        <input
            id="description"
            type="text"
        >
        <label for="description">Отчество</label>
        <span
              class="helper-text invalid">Заполните отчество</span>
      </div>

      <div>
        <div class="input-field">
          <input type="text" class="datepicker">
        <span
              class="helper-text invalid">Введите возраст (от 20 до 30)</span>
      </div>
      <button class="btn waves-effect waves-light" type="submit">
        Обновить
        <i class="material-icons right">send</i>
      </button>
      </div>

    

    </form>
  </div>
</template>

<script>
import M from 'materialize-css';

export default {
  name: 'datapicker',
  mounted(){
    M.AutoInit()
  }   
}
</script>
