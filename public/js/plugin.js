var feild = document.querySelector('#comment_area');
var backUp = feild.getAttribute('placeholder');
var bt = document.querySelector('.bt');
var clear = document.getElementById('clear')

feild.onfocus = function(){
    this.setAttribute('placeholder', '');
    this.style.borderColor = '#333';
    bt.style.display = 'block'
}

feild.onblur = function(){
    this.setAttribute('placeholder',backUp);
    this.style.borderColor = '#aaa'
}

clear.onclick = function(){
    bt.style.display = 'none';
    feild.value = '';
}

