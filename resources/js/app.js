require('./bootstrap');

//-------------------------------------------------------------

var backdrop;
var modal;
var elem = document.getElementById('inicio');

function createModal(id,action){    
    backdrop = document.createElement('div');
    backdrop.classList.add('backdrop'); 
    document.body.insertBefore(backdrop,elem);
    
    modal = document.createElement('div');
    modal.classList.add('modal','fade','show', 'd-block');
    
    var modalDialog = document.createElement('div');    
    modalDialog.classList.add('modal-dialog','modal-dialog-centered');
    modal.appendChild(modalDialog);

    var modalContent = document.createElement('div');
    modalContent.classList.add('modal-content','mx-auto');
    modalDialog.appendChild(modalContent)    

    var modalForm = document.createElement('form');
    modalForm.setAttribute('action',action);
    modalForm.setAttribute('method','post');
    modalForm.setAttribute('enctype','multipart/form-data');
    modalForm.setAttribute('onsubmit','btnSubmit.disabled = true; return true;');
    modalContent.appendChild(modalForm)

    var inputForm = document.createElement('input');
    inputForm.setAttribute('type','hidden');
    inputForm.setAttribute('name','id');
    inputForm.setAttribute('value',id);
    modalForm.appendChild(inputForm);

    var modalHeader = document.createElement('div');
    modalHeader.classList.add('modal-header','bg-secondary');
    modalForm.appendChild(modalHeader);

    var modalTitle= document.createElement('h5');
    modalTitle.classList.add('modal-title','text-white');
    modalHeader.appendChild(modalTitle);        
    modalTitle.innerHTML = 'Escolher Nova Foto';

    var modalClose = document.createElement('button')
    modalClose.classList.add('btn-close','btn-close-white');
    modalClose.setAttribute('onclick','closeModal();');
    modalHeader.appendChild(modalClose);    

    var modalBody = document.createElement('div');
    modalBody.classList.add('modal-body');
    modalForm.appendChild(modalBody);    

    var formGroup = document.createElement('div');
    formGroup.classList.add('form-group','form-control-sm');
    modalBody.appendChild(formGroup)

    var inputFormGroup = document.createElement('input');
    inputFormGroup.setAttribute('type','file');
    inputFormGroup.setAttribute('name','formFile');
    inputFormGroup.setAttribute('accept','image/png, image/jpeg');
    formGroup.appendChild(inputFormGroup);    

    var modalFooter = document.createElement('div');
    modalFooter.classList.add('modal-footer');
    modalForm.appendChild(modalFooter);

    var btnClose = document.createElement('button');
    btnClose.classList.add('btn','btn-secondary');    
    btnClose.textContent = 'Cancelar';
    btnClose.setAttribute('onclick','closeModal();return false;');
    modalFooter.appendChild(btnClose);    
 
    var btnSubmit = document.createElement('button');
    btnSubmit.setAttribute('type','submit');    
    btnSubmit.classList.add('btn','btn-success');
    btnSubmit.setAttribute('id','btnSubmit;');
    btnSubmit.textContent = 'Guardar';    
    modalFooter.appendChild(btnSubmit);     
    
    document.body.insertBefore(modal,elem);
}
