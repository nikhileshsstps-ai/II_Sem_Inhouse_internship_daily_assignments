let apple=0;
let banana=0;

const appleBtn=document.getElementById("appleBtn");
const bananaBtn=document.getElementById("bananaBtn");

const appleImg=document.getElementById("appleImg");
const bananaImg=document.getElementById("bananaImg");

const appleScore=document.getElementById("appleScore");
const bananaScore=document.getElementById("bananaScore");
const totalScore=document.getElementById("totalScore");

appleBtn.onclick=()=>{

apple++;

update();

animate(appleBtn,appleImg);

checkWinner();

}

bananaBtn.onclick=()=>{

banana++;

update();

animate(bananaBtn,bananaImg);

checkWinner();

}

function update(){

appleScore.innerHTML=apple;
bananaScore.innerHTML=banana;
totalScore.innerHTML=apple+banana;

}

function animate(btn,img){

btn.classList.add("bounce");

img.style.transform="scale(1.2)";

setTimeout(()=>{

btn.classList.remove("bounce");

img.style.transform="scale(1)";

},200);

}

function checkWinner(){

if(apple>=20){

winner("🍎 Apple Wins!");

}

if(banana>=20){

winner("🍌 Banana Wins!");

}

}

function winner(text){

document.getElementById("winnerText").innerHTML=text;

document.getElementById("winnerScreen").style.display="flex";

appleBtn.disabled=true;
bananaBtn.disabled=true;

confetti();

}

function resetGame(){

apple=0;
banana=0;

update();

appleBtn.disabled=false;
bananaBtn.disabled=false;

document.getElementById("winnerScreen").style.display="none";

document.getElementById("confetti").innerHTML="";

}

document.getElementById("resetBtn").onclick=resetGame;

function confetti(){

let container=document.getElementById("confetti");

for(let i=0;i<200;i++){

let piece=document.createElement("div");

piece.className="confetti";

piece.style.left=Math.random()*100+"vw";

piece.style.background=`hsl(${Math.random()*360},100%,50%)`;

piece.style.animationDuration=2+Math.random()*3+"s";

container.appendChild(piece);

}

}