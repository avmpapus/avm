const translate = document.querySelector('#tags')
const id = document.querySelector('#id')

const rusLower = 'абвгдеёжзийклмнопрстуфхцчшщъыьэюя'
const rusUpper = rusLower.toUpperCase()
const enLower = 'abcdefghijklmnopqrstuvwxyz'
const enUpper = enLower.toUpperCase()
const rus = rusLower + rusUpper
const en = enLower + enUpper

const getChar = (event) => String.fromCharCode(event.keyCode || event.charCode)

translate.addEventListener('keypress', function (e) {
	const char = getChar(e)
  if (rus.includes(char)) {
  	id.innerHTML = '<br><br>Вы вводите текст русскими буквами'
  } else if (en.includes(char)) {
  	id.innerHTML = '<br><br>Вы вводите текст английскими буквами'
  } else {
  	id.innerHTML = '<br><br>Вы вводите текст украинскими буквами'
  }
})