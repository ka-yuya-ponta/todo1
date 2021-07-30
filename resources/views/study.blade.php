<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
  div {
    height: 16px;
    position: relative;
    width: 20px;
    transition: 0.3s;
  }
span {
  background-color: black;
  width: 100%;
  height: 2px;
  display: block;
  position: absolute;
  transition: 0.5s;
}
.top {
  top: 0;
}
.center {
  top: 7px;
}
.under {
  bottom: 0%;
}
div.open span:nth-of-type(1) {
  top: 7px;
  transform: rotate(45deg);
}
div.open span:nth-of-type(2) {
opacity: 0;}
div.open span:nth-of-type(3) {
  top: 7px;
  transform: rotate(-45deg);
}






  


  </style>
</head>
<body>
  <div class="content">
    <span class="top"></span>
    <span class="center"></span>
    <span class="under"></span>

  </div>
  <script >
    'use strict'
const btns =document.querySelector('div');
btns.addEventListener('click',()=>{
btns.classList.toggle('open');
})
 

  </script>
  
  
</body>
</html>