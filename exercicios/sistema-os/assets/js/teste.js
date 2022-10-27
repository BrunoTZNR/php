const inputs = [document.querySelector('.email'), document.querySelector('.senha')];
const labels = [document.querySelector('.label_email'), document.querySelector('.label_senha')];

addEventListener('focus', ()=>{
    document.style.marginLeft = '10px';
});

addEventListener('blur', ()=>{
    document.style.marginLeft = '5px';
});
