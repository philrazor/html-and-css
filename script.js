let xp = 0 ;
let health =100 ;
let gold = 50 ;
let monsterHealth ;
let fighting ;
let weapon=0; 

const button1 = document.querySelector("#button-1");
const button2 = document.querySelector("#button-2");
const button3 = document.querySelector("#button-3");
const monsterStats = document.querySelector("#stat")
const monsterHealthText = document.querySelector("#mosnter-health");
const monsterNameText = document.querySelector("#monster-name");
const xpTest = document.querySelector("#xptext");
const healthText = document.querySelector("#healthtext");
const goldText = document.querySelector("#goldtext");
const text = document.querySelector("#text");

// intialize buttons
button1.onclick = goStore;
button2.onclick = goCave;
button3.onclick = fightDragon;

function goStore(){
    button1.innerText = "buy health 10 (10 gold)"
    button2.innerText = "buy weapon 1 (30 gold)"
    button3.innerText = "go to town"
    button1.onclick = buyHealth;
    button2.onclick = buyWeapon;
    button3.onclick = goTown;
}
function goCave(){
    console.log("going to cave")
}
function fightDragon(){
    console.log("fighting dragon")
}
function buyHealth(){
    health+=10;
     xp+=10
     gold-=10;
     console.log(health)
     console.log(gold)
}
function buyWeapon(){
    weapon+=1
    gold-=30
    console.log(weapon)
    console.log(gold)
}
function goTown(){
    button1.innerText = "go to store"
    button2.innerText ="go to cave"
    button3.innerText = "fight dragon"
    button1.onclick =goStore
    button1.onclick =goCave
    button1.onclick =fightDragon
    healthText.innerText = health
    goldText.innerText = gold
    xpTest.innerText = xp
}


