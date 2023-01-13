// verschiedene Variablen deklarieren zum späteren benutzen
var landscape; 
let garnett;
let inputElement;
let userImage;
var canvas;

let inputElem1;
let inputElem2;
let inputElem3;


// Hintergrundbild und Custom Schriftart vorab laden damit es sauber ist
function preload(){ 
  garnett = loadFont('Raleway-Bold.ttf');
  landscape = loadImage ('banner_fiedwald.jpg');
}

// viele Sachen die vorab definiert werden
function setup() {
  canvas = createCanvas(900, 473);
  canvas.position(535,35);
  pixelDensity(3);
  background (landscape); 
  landscape.resize(900, 647330);
  noStroke();
  
  h1 = createElement('h1', 'Hier kann ein Logo hochgeladen werden (nur als PNG)');
  inputElement = createFileInput(handleFile);
  inputElement.size(250, 30);
  
  h1 = createElement('h1', 'Hier kommt ein Eventtyp hin:');
  inputElem1 = createInput('');
  inputElem1.input(draw);
  inputElem1.size(350, 15);
  
  h2 = createElement('h2', 'Hier kommt ein Titel hin:');
  inputElem2 = createInput('');
  inputElem2.input(draw);
  inputElem2.size(350, 15);
  
  h2 = createElement('h3', 'Hier kommt ein Subtitel hin:');
  inputElem3 = createInput('');
  inputElem3.input(draw);
  inputElem3.size(350, 15);
  
  h3 = createElement('h3', 'Hier kann das Bild als PNG runtergeladen werden:');
  button1 = createButton('Bild runterladen');
  button1.position(35, 480);
  button1.mousePressed(saveDrawing1);
  
  h4 = createElement('h4', 'Hier kann das Bild als JPG runtergeladen werden:');
  h4.position(0, 510);
  button2 = createButton('Bild runterladen');
  button2.position(35, 575);
  button2.mousePressed(saveDrawing2);
}

function draw() {
  // Custom Schriftart
  textFont(garnett);
  
  image(landscape, 0, 0);
  noFill();
  rect(0, 0, 900, 473);
  
  // Datum und Event Typ
  fill("white")
  textSize(30);
  textAlign(LEFT, TOP);
  text(inputElem1.value(), 30, 30, 600);
  
  // Event Titel
  fill("white")
  textSize(72);
  textAlign(LEFT, CENTER);
  text(inputElem2.value(), 30, height/2, 1100);
  
  // Sponsoring und andere Sachen
  fill("white")
  textSize(30);
  textAlign(LEFT, BOTTOM);
  text(inputElem3.value(), 30, 645, 600);
  
  if (userImage != null) {
    var scale = 0.2;
    image(userImage, 500, 590, scale*width, scale*userImage.height*width/userImage.width);
  }
}


function handleFile(file) {
  print(file);

  if (file.type === 'image') {
    userImage = createImg(file.data, '');
    userImage.hide();
  } else {
    userImage = null;
  }
}

function saveDrawing1() {
  saveCanvas('friedwald', 'png');
}

function saveDrawing2() {
  saveCanvas('friedwald', 'jpg');
}

// Speicher Methode durch einen Tastendruck
//function keyTyped() {
//  if (key === '-') {
//    saveCanvas('ebcc-veranstaltung', 'jpg');
//  }
//}