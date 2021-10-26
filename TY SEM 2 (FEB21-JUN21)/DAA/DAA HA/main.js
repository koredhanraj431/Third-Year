var cols = 50;
var rows = 50;
var grid = new Array();
var w,h;
var openSet = [];
var closedSet = [];
var start,end;
var path ;
var noSolution = false;

function removeFromArray(openSet,current){
    for(var i=openSet.length-1;i>=0;i--){
        if(openSet[i]===current){
            openSet.splice(i,1);
        }
    }
}

function heuristic(a,b){
    var d = abs(a.i-b.i) + abs(a.j-b.j);
    return d;
}

function Spot(i,j){
    this.i = i;
    this.j = j;
    this.f = 0;
    this.g = 0;
    this.h = 0;
    this.neighbors = [];
    this.previous = undefined;
    this.wall = false;

    if(random(1)<0.4){
        this.wall = true;
    }


    this.show = function(col){
        fill(col);
        if(this.wall){
            fill(63,0,15);
        }
        noStroke();
        rect(this.i * w,this.j * h,w-1,h-1);
    }

    this.addNeighbors = function(grid){
        var i = this.i;
        var j = this.j;
        if(i+1<rows){
            this.neighbors.push(grid[i+1][j]);
        }
        if(j+1<cols){
            this.neighbors.push(grid[i][j+1]);
        }
        if(i-1>=0){
            this.neighbors.push(grid[i-1][j]);
        }
        if(j-1>=0){
            this.neighbors.push(grid[i][j-1]);
        }
        if(i+1<rows && j+1<cols){
            this.neighbors.push(grid[i+1][j+1]);
        }
        if(i+1<rows && j-1>=0){
            this.neighbors.push(grid[i+1][j-1]);
        }
        if(i-1>=0 && j-1>=0){
            this.neighbors.push(grid[i-1][j-1]);
        }
        if(i-1>=0 && j+1<cols){
            this.neighbors.push(grid[i-1][j+1]);
        }
    }
}

function setup(){
    var hei = window.screen.height;
    var wid = window.screen.width;
    createCanvas(1250,550);
    w = width/cols;
    h = height/rows;

    for(var i=0;i<rows;i++){
        grid[i] = new Array(cols);
    }

    for(var i=0;i<rows;i++){
        for(var j=0;j<cols;j++){
            grid[i][j] = new Spot(i,j);
        }
    }

    for(var i=0;i<rows;i++){
        for(var j=0;j<cols;j++){
            grid[i][j].addNeighbors(grid);
        }
    }

    start = grid[0][0];
    end = grid[rows-1][cols-1];
    start.wall = false;
    end.wall = false;
    openSet.push(start);
       
}

function draw(){
    background(255);
     
    if(openSet.length>0){
        var winner = 0;
        for(var i=0;i<openSet.length;i++){
            if(openSet[i].f<openSet[winner].f){
                winner = i;
            }
        }

        var current = openSet[winner];
        if(current===end){
            console.log("Done!");
            noLoop();
        }
        else{
            removeFromArray(openSet,current);
            closedSet.push(current);

            var neighbors = current.neighbors;
            for(var i=0;i<neighbors.length;i++){
                var neighbor = neighbors[i];
                if(!closedSet.includes(neighbor) && !neighbor.wall){
                    var tempG = current.g+1;
                    var newPath = false;
                    if(openSet.includes(neighbor)){
                        if(tempG<neighbor.g){
                            neighbor.g = tempG;
                            newPath = true;
                        }
                    }
                    else{
                        neighbor.g = tempG;
                        openSet.push(neighbor);
                        newPath = true;
                    }
                    if(newPath){
                        neighbor.h = heuristic(neighbor,end);
                        neighbor.f = neighbor.g + neighbor.h;
                        neighbor.previous = current;
                    }
                }

            }
        }
    }
    else{
        console.log("No Solution");
        noSolution = true;
        noLoop();
    }

    for( var i=0;i<rows;i++){
        for(var j=0;j<cols;j++){
            grid[i][j].show(color(255));
        }
    }

   /*  for(var i=0;i<openSet.length;i++){
        openSet[i].show(color(255,0,255));
    }

    for(var i=0;i<closedSet.length;i++){
        closedSet[i].show(color(0,255,0));
    } */

    if(!noSolution){
        path = [];
        var  temp = current;
        path.push(temp);
        while(temp.previous){
            path.push(temp.previous);
            temp = temp.previous;
        }
    }
    for(var i=0;i<path.length;i++){
        path[i].show(color(255,0,0));
    }
}