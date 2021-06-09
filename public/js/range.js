
var product_value = document.getElementById("myRange");
var output  =document.getElementById("value");


output.innerHTML=product_value.value;

product_value.oninput = function(){
    output.innerHTML = this.value;
}