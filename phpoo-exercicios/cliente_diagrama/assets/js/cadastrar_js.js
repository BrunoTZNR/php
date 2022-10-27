let inputs = [document.querySelector('.cpf'),document.querySelector('.cnpj')];
let displays = [document.querySelector('.pf'),document.querySelector('.pj')];

inputs[0].addEventListener('change',()=>{
    displays[0].style.display='block';
    displays[1].style.display='none';
    console.log('cpf');
});

inputs[1].addEventListener('change',()=>{
    displays[1].style.display='flex';
    displays[0].style.display='none';
    console.log('cnpj');
});