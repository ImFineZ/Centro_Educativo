<<<<<<< HEAD
const openModal = document.querySelector(".btnModReg");
const modalReg = document.querySelector(".modalReg");
const modalCerrar = document.querySelector(".btnCanReg");

openModal.addEventListener("click", (e) => {
    e.preventDefault();
    modalReg.classList.add("modalReg--show");
});

modalCerrar.addEventListener("click", (e) => {
    e.preventDefault();
    modalReg.classList.remove("modalReg--show");
=======
const openModal = document.querySelector('.btnModReg');
const modalReg = document.querySelector('.modalReg');
const modalCerrar = document.querySelector('.btnCanReg');

openModal.addEventListener('click', (e)=>{
  e.preventDefault();
  modalReg.classList.add('modalReg--show')
});

modalCerrar.addEventListener('click', (e)=>{
  e.preventDefault();
  modalReg.classList.remove('modalReg--show')
>>>>>>> cd8edbf4ad6943fd0d7283554584e68f057898b9
});
