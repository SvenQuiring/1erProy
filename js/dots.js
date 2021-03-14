"use strict";
var dots = [];
var rad = 10;
var num, red, green, blue;
var w, h;

class Dot {
    constructor(_x, _y, _rad, _red, _green, _blue) {
        this.x = _x;
        this.y = _y;
        this.rad = _rad;
        this.red = _red;
        this.green = _green;
        this.blue = _blue;
        this.speedH = random(-0.5,0.5);
        this.speedV = random(-0.5,0.5);
    }
    show() {
        noStroke();
        fill(this.red, this.green, this.blue);
        ellipse(this.x, this.y, this.rad, this.rad)
    }
    update() {
        this.x += this.speedH;
        this.y += this.speedV;
    }
}

function setup() {
    if(windowWidth > displayWidth) {
        w = displayWidth;
        h = displayHeight*0.8;
    } else {
        w = windowWidth;
        h = windowHeight;
    }
    createCanvas(w, h);
    if (h > w) {
        num = h/5;
    } else {
        num = w/5;
    };
    red = 255;
    green = 0;
    blue = 0;
    for (let i=0;i<num;i++) {
        dots.push(new Dot(random(w), random(h), rad, red, green, blue));
    }
}

function draw() {
    background(0);
    for (let i=0;i<dots.length;i++) {
        bounce(dots[i]);
        for (let j=i+1;j<dots.lenght;j++) {
            connect(dots[i], dots[j]);
        };
        dots[i].show();
        dots[i].update();
    }
    dots.forEach(function(dot, index) {
        escaped(dot, index);
    });
}

function bounce(obj) {
    if (obj.x >= width || obj.x <= 0) {
        obj.speedH *= -1;
    }
    if (obj.y >= height || obj.y <= 0) {
        obj.speedV *= -1;
    }
}

function connect(obj1, obj2) {
    if (dist (obj1.x, obj1.y, obj2.x, obj2.y) < w/7) {
        stroke(green, blue, red);
        strokeWeight(1);
        line(obj1.x, obj1.y, obj2.x, obj2.y);
    }
}

function escaped(obj, index) {
    if (obj.x < -rad || obj.x > width+rad) {
        dots.splice(index,1);
        dots.push(new Dot(random(width), random(height), rad, rad));
    }
    if (obj.y < -rad || obj.y > height+rad) {
        dots.splice(index,1);
        dots.push(new Dot(random(width), random(height), rad, rad));
    }
}

function windowResized() {
    resizeCanvas(windowWidth, windowHeight);
}
