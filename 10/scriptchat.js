var apiKey = "y9ZDMNJAqgmCzzSd16N8mcV8C3JQI9LxfJTBz7GJq09yYFFfzZfSqNFk9mck";
var channel = 1;
var url = "wss://connect.websocket.in/v3/"+channel+"?apiKey="+apiKey;
var nickName;
var socket;   //objeto que vai conter a minha conexão
function conectar(){
  nickName = document.getElementById("nick").value;
  document.getElementById("btnConectar").disabled = true;
  socket = new WebSocket(url);
  socket.onopen = conectou;
  socket.onmessage = recebeu;
}
function conectou(){
  document.getElementById("btnEnviar").disabled = false;
}
function recebeu(msg){
  var chat = document.getElementById("chat");
  var obj = JSON.parse(msg.data);
  chat.innerHTML += "<br> -> " + obj.nick + " diz: " + obj.message;
  
}
function enviar(){
  var inMsg = document.getElementById("msg");
  var obj = {
    message : inMsg.value,
    nick : nickName
  }
  socket.send(JSON.stringify(obj));
  inMsg.value = "";
  chat.innerHTML += "<br> -> " + " EU : " + obj.message; //exibir para eu tbm
}