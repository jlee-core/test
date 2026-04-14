const modal = document.getElementById('myModal')
const btn = document.getElementById('openBtn')

btn.addEventListener('click', function () {
  modal.style.display = 'block'
)

const closeBtn = document.getElementById('closeModalBtn')

closeBtn.addEventListener('click', function () {
  modal.style.display = none
})
