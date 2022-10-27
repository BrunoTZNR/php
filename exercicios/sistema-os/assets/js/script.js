const inputs = [document.querySelector('.nome'), document.querySelector('.sobrenome'), document.querySelector('.email'), document.querySelector('.senha'), document.querySelector('.repetir_senha'), ];
const labels = [document.querySelector('.label_nome'), document.querySelector('.label_sobrenome'), document.querySelector('.label_email'), document.querySelector('.label_senha'), document.querySelector('.label_repetir_senha'), ];

inputs[0].addEventListener('focus', ()=>{labels[0].style.marginLeft = '10px';});
inputs[0].addEventListener('blur', ()=>{labels[0].style.marginLeft = '5px';})

inputs[1].addEventListener('focus', ()=>{labels[1].style.marginLeft = '10px';})
inputs[1].addEventListener('blur', ()=>{labels[1].style.marginLeft = '5px';})

inputs[2].addEventListener('focus', ()=>{labels[2].style.marginLeft = '10px';})
inputs[2].addEventListener('blur', ()=>{labels[2].style.marginLeft = '5px';})

inputs[3].addEventListener('focus', ()=>{labels[3].style.marginLeft = '10px';})
inputs[3].addEventListener('blur', ()=>{labels[3].style.marginLeft = '5px';})

inputs[4].addEventListener('focus', ()=>{labels[4].style.marginLeft = '10px';})
inputs[4].addEventListener('blur', ()=>{labels[4].style.marginLeft = '5px';})