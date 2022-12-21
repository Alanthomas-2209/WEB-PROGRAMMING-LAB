
const binary = document.getElementById("binary");
const decimal = document.getElementById("decimal");
const btn = document.getElementById("btn")


btn.addEventListener("click",()=>{
    if(binary.value ){
        decimal.value = parseInt(binary.value,2);
    }
   
});
const stringInpt = document.getElementById("string");
const para = document.getElementById("para");
const btn1 = document.getElementById("btn1");

btn1.addEventListener("click",()=>{
    if(stringInpt.value == ''){
        para.textContent = " string is empty"
    }
    else {
        para.textContent = " string is not empty"
    }
});
const stringInpt1= document.getElementById("string2");
const numberInpt = document.getElementById("number2");
const btn2= document.getElementById("btn2");
const extracted = document.getElementById("ans2");
let string;
let number;
let sliced;

btn2.addEventListener("click", function () {
  string = stringInpt1.value;
  number = numberInpt.value;

  if (string && number) {
    sliced = string.slice(0, number);
    extracted.textContent = sliced;
    console.log(sliced);
  }
});

const stringInput3 = document.getElementById("string3");
const subStringInput3 = document.getElementById("subStr3");
const btn3 = document.getElementById("btn3");
const countElm = document.getElementById("count3");
let string1 ;
let subString;
let count;

btn3.addEventListener("click",function(){

    string =  stringInput3.value;
    subString = subStringInput3.value;

    console.log(string,subString);
    if(string && subString){

        let regx= new RegExp(subString, "gi");
        count = (string.match(regx) || [] ).length;
        console.log(count);

        countElm.textContent = count;

    }

});