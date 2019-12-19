<html>

<script>
// BOLINHA
let xBolinha = 300;
let yBolinha = 200;
let diametro = 22;
let raio = (diametro/2);

let velocidadeXBolinha = 6;
let velocidadeYBolinha = 6;

// RAQUETE 
let xMinhaRaquete = 5;
let yMinhaRaquete = 150;
let alturaRaquete = 90;
let larguraRaquete = 8;

// RAQUETE OPONENTE
let xOponenteRaquete = 585;
let yOponenteRaquete = 150;
let velocidadeXOponenteBolinha;
let velocidadeYOponenteBolinha;

// PLACAR DO JOGO
let meusPontos = 0;
let pontosDoOponente = 0;

// SONS DO JOGO
let raquetada;
let pontuacao;
let trilhaSonora;


function mostraBolinha(){
  circle(xBolinha, yBolinha, diametro);
}

function movimentaBolinha(){
  xBolinha += velocidadeXBolinha;
  yBolinha += velocidadeYBolinha;
}

function movimentaMinhaRaquete(){
  if (keyIsDown(UP_ARROW)){
    yMinhaRaquete -= 10;
  }
  if (keyIsDown(DOWN_ARROW)){
    yMinhaRaquete+= 10;
  }
}

function movimentaOponenteRaquete(){
    velocidadeYOponenteBolinha = yBolinha - yOponenteRaquete - (yOponenteRaquete/4 - 15);
    yOponenteRaquete += velocidadeYOponenteBolinha;
}

function verificaColisaoBordas(){
   if ((xBolinha + raio) > width || (xBolinha - raio) < 0) {
        velocidadeXBolinha *= -1;
    }
    if ((yBolinha + raio) > (height-raio) || (yBolinha - raio) < 0) {
        velocidadeYBolinha *= -1;
    }
}

function verificaColisaoComMinhaRaquete(){
  if (xBolinha - raio < xMinhaRaquete + larguraRaquete && yBolinha - raio < yMinhaRaquete + alturaRaquete && yBolinha + raio > yMinhaRaquete){
    velocidadeXBolinha *= -1;
    raquetada.play();
  }
}

function mostraMinhaRaquete(x, y){
  rect(x, y, larguraRaquete, alturaRaquete);
}


function verificaColisaoRaqueteBiblioteca(x, y){
  colidiu = collideRectCircle(x, y,larguraRaquete,alturaRaquete,xBolinha,yBolinha,raio);
  
  if (colidiu){
    velocidadeXBolinha *= -1;
    raquetada.play();
  }
  
}

function incluiPlacar(){
  textSize(16);
  textAlign(CENTER);
  fill(color(255, 140, 0));
  rect(150, 10, 40, 20);
  fill(255);
  text(meusPontos, 170, 26);
  stroke(255);
  fill(color(255, 140, 0));
  rect(450, 10, 40, 20);
  fill(255);
  text(pontosDoOponente, 470, 26);
  
}

function marcaPonto(){
  if (xBolinha > 590){
    meusPontos += 1;
    pontuacao.play();
  }
  if (xBolinha < 10){
    pontosDoOponente += 1;
    pontuacao.play();
  }
}

function preload(){
  trilhaSonora = loadSound('trilha.mp3');
  pontuacao = loadSound('ponto.mp3');
  raquetada = loadSound('raquetada.mp3');
}

function setup() {
  createCanvas(600, 400);
  trilhaSonora.loop();
}

function draw() {
    background(0);
    mostraBolinha();
    movimentaBolinha();
    verificaColisaoBordas();
    mostraMinhaRaquete(xMinhaRaquete, yMinhaRaquete);
    mostraMinhaRaquete(xOponenteRaquete, yOponenteRaquete);
    movimentaMinhaRaquete();
    movimentaOponenteRaquete();
    // verificaColisaoComMinhaRaquete();
    verificaColisaoRaqueteBiblioteca(xMinhaRaquete,yMinhaRaquete);
    verificaColisaoRaqueteBiblioteca(xOponenteRaquete,yOponenteRaquete);
    incluiPlacar();
    marcaPonto();
}

</script>
</html>