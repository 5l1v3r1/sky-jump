<?php
system('stty cbreak -echo');
function clear(){
system('clear');
}
function anim($id){
$anim0="\n\n
    O   SKY    O
   /|\ JUMPER /|\
    ))  v 0.1 ((\n";
$anim1="\n\n
    O          O
   /|\        /|\
    ))        ((";
$anim2="\n
   \O/   +1   \O/
    |          |
    >>        <<\n";
$anim3="\n\n
    O   Need   O
   /|\ Energy /|\
    ))        ((";
$anim4="\n\n
    O  Energy  O
   /|\   +1   /|\
    ))        ((";
$anim5="\n\n
    O   GAME   O
   /|\  OVER  /|\
    ))        ((\n\nTOLOL LO! :v\n";
$anim6="\n\n
    O   MAU    O
   /|\ CURANG /|\
    ))  LO??  ((";
    clear();
    eval('echo $anim'.$id.';');
}
$x=fopen("php://stdin","r");
anim('0');
echo "\nWelcome To SkyJump v.0.1 [Beta]\nCopyright (c) 2019 FilthyRoot - Sora Cyber Team\n\n
[ Control ]

[ Enter ] to increase energy
[ Space ] to jump!\n
Press Jump To Start!";
while(true){
    $key=ord(fgetc($x));
    static $score='0';
    static $id='0';
    static $energi='10';
    if($key == "32" && $id == '0'){
        anim('1');
        $id++;
    }elseif($key == "32" && $id > 0 && $energi > 0){
        anim('2');
        $id=0;
        $energi--;
        $score++;
    }elseif($key == "10"){
        anim('4');
        $energi++;
    }elseif($key && $score == '0' or $key && $energi == '0'){
        anim('5');
        system('stty echo');
        exit();
    }else{
        anim('3');
        $id=0;
        $score--;
    }
    if($key == "10" && $energi > 10){
        anim('6');
        $score=0;
        $energi--;
    }
echo "\n\nScore : $score\n\nEnergy : $energi";
}
?>
