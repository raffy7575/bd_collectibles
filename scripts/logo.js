var myp5=new p5(d1, 'conteudoDesenho1');

var d1= function (desenho2){

    desenho2.setup=function(){
        desenho2.createCanvas(400,400);
    };

    desenho2.draw=function(){
        desenho2.fill(0,200,0);
     //ellipse
    desenho2.fill(120);
    desenho2.ellipse(200,200,10,150);
    //fill(123,24,560); 
    desenho2.fill(142,0,28);
    //triangulos roxos
    desenho2.triangle(200,200,300,170,250,100);
    desenho2.triangle(200,200,300,240,250,310);
    desenho2.triangle(100,240,200,200,150,310);
    desenho2.triangle(100,170,200,200,150,100);
    };
};