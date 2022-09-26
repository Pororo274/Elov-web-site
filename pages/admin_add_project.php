<body>
  <?php
  require 'components/admin_header.php'

  ?>
  <main class="main" style="padding-top: 56px">
      <form>
        <div class="container">
          <div class="mb-4">
            <label for="exampleInputEmail1" class="form-label">Название проекта</label>
            <input type="text" class="form-control" id="exampleInputEmail1">
          </div>
          <div class="mb-4">
            <label for="select-category" class="form-label">Категория</label>
            <select class="form-select" id="select-category">
              <option selected>Выберите категорию проекта</option>
              <option value="1">Сайт</option>
              <option value="2">Приложение</option>
              <option value="3">Айдентика</option>
            </select>
          </div>
          <div class="mb-4">
            <label for="formFile" class="form-label">Выберите баннер</label>
            <input class="form-control" type="file" id="formFile">
          </div>
          <hr class="mb-5">
          <div class="main-content"></div>
          <div class="row mb-4">
            <div class="col-2">
              <button type="button" class="btn btn-outline-success btn-add-head">Добавить заголовок</button>
            </div>
            <div class="col-2">
              <button type="button" class="btn btn-outline-success btn-add-paragraph">Добавить параграф</button>
            </div>
            <div class="col-2">
              <button type="button" class="btn btn-outline-success btn-add-photo">Добавить фото</button>
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Сохранить</button>
        </div>
      </form>
  </main>

</body>