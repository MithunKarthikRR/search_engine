<?php

header("Content-type: text/css");

?>
/* Import Google Font - Poppins */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body{
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction:column;
  min-height: 100vh;
  background: linear-gradient(135deg, #FDC830, #F37335);
}
::selection{
  color: #fff;
  background: #5372F0;
}
.wrapper{
  width: 496px;
  background: #fff;
  border-radius: 10px;
  padding: 18px 25px 20px;
  box-shadow: 0 0 30px rgba(0,0,0,0.06);
}
.wrapper :where(.title, li, li i, .details){
  display: flex;
  align-items: center;
}
.title img{
  max-width: 21px;
}
.title h2{
  font-size: 21px;
  font-weight: 600;
  margin-left: 8px;
}
.wrapper .content{
  margin: 10px 0;
}
.content p{
  font-size: 15px;
}
.content ul{
  display: flex;
  flex-wrap: wrap;
  padding: 7px;
  margin: 12px 0;
  border-radius: 5px;
  border: 1px solid #a6a6a6;
}
.content ul  li{
  color: #333;
  margin: 4px 3px;
  list-style: none;
  border-radius: 5px;
  background: #F2F2F2;
  padding: 5px 8px 5px 10px;
  border: 1px solid #e3e1e1;
}
.content ul li i{
  height: 20px;
  width: 20px;
  color: #808080;
  margin-left: 8px;
  font-size: 12px;
  cursor: pointer;
  border-radius: 50%;
  background: #dfdfdf;
  justify-content: center;
}
.content ul input{
  flex: 1;
  padding: 5px;
  border: none;
  outline: none;
  font-size: 16px;
}
.wrapper .details{
  justify-content: space-between;
}
.details button{
  border: none;
  outline: none;
  color: #fff;
  font-size: 14px;
  cursor: pointer;
  padding: 9px 15px;
  border-radius: 5px;
  background: #5372F0;
  transition: background 0.3s ease;
}
.details button:hover{
  background: #2c52ed;
}
.button{
  height: 45px;
  margin: 35px 0;
  min-width:500px;
}
.button input{
  height: 100%;
  width: 100%;
  border-radius: 5px;
  border: none;
  color: #fff;
  font-size: 18px;
  font-weight: 500;
  letter-spacing: 1px;
  cursor: pointer;
  transition: all 0.3s ease;
  background-color: #181818;
}
.button input:hover{
 /* transform: scale(0.99); */
 background: linear-gradient(-135deg, #fdc830, #f37335);
 }