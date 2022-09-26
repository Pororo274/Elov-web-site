const buttonAddHeader = document.querySelector('.btn-add-head');
const buttonAddParagraph = document.querySelector('.btn-add-paragraph');
const buttonAddPhoto = document.querySelector('.btn-add-photo')

const mainContent = document.querySelector('.main-content');

let id = 1;


const renderInputHeader = () => {
  return `
    <div class="mb-4 row input-` + id + ` align-items-end">
      <div class="col-8">
        <label for="exampleFormControlInput1" class="form-label">Заголовок</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Заголовок">
      </div>
      <div class="col">
        <button type="button" class="btn btn-danger">Удалить</button>
      </div>
    </div>
  `
}

const renderInputParagraph = () => {
  return `
    <div class="mb-4 row input-` + id + ` align-items-end">
      <div class="col-8">
        <label for="exampleFormControlTextarea1" class="form-label">Параграф</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
      <div class="col">
        <button type="button" class="btn btn-danger">Удалить</button>
      </div>
    </div>
  `
}

const renderInputPhoto = () => {
  return `
    <div class="mb-4 row input-` + id + ` align-items-end">
      <div class="col-8">
        <label for="formFile" class="form-label">Выберите фото</label>
        <input class="form-control" type="file" id="formFile">
      </div>
      <div class="col">
        <button type="button" class="btn btn-danger">Удалить</button>
      </div>
    </div>
  `
}


const addElement = (render) => {
  mainContent.insertAdjacentHTML('beforeend', render());
  id++;
}

const addInputHeader = () => addElement(renderInputHeader);
const addInputParagraph = () => addElement(renderInputParagraph);
const addInputPhoto = () => addElement(renderInputPhoto);


buttonAddHeader.addEventListener('click', addInputHeader);
buttonAddParagraph.addEventListener('click', addInputParagraph);
buttonAddPhoto.addEventListener('click', addInputPhoto);