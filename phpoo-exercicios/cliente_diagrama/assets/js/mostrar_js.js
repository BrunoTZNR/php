const search_input = document.querySelector('.search_input');

search_input.addEventListener('focus',()=>{
    console.log('oi');
    search_input.setAttribute('placeholder', '');
});

search_input.addEventListener('blur',()=>{
    console.log('oi');
    search_input.setAttribute('placeholder', 'Digite aqui');
});