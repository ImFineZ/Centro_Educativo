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
});

function fn_abrir_edicion(id_usuario){
  
}
