!function(a){var b="object"==typeof self&&self.self===self&&self||"object"==typeof global&&global.global===global&&global;"function"==typeof define&&define.amd?define(["exports"],function(c){b.ParticleNetwork=a(b,c)}):"object"==typeof module&&module.exports?module.exports=a(b,{}):b.ParticleNetwork=a(b,{})}(function(a,b){var c=function(a){this.canvas=a.canvas,this.g=a.g,this.particleColor=a.options.particleColor,this.x=Math.random()*this.canvas.width,this.y=Math.random()*this.canvas.height,this.velocity={x:(Math.random()-.5)*a.options.velocity,y:(Math.random()-.5)*a.options.velocity}};return c.prototype.update=function(){(this.x>this.canvas.width+20||this.x<-20)&&(this.velocity.x=-this.velocity.x),(this.y>this.canvas.height+20||this.y<-20)&&(this.velocity.y=-this.velocity.y),this.x+=this.velocity.x,this.y+=this.velocity.y},c.prototype.h=function(){this.g.beginPath(),this.g.fillStyle=this.particleColor,this.g.globalAlpha=.7,this.g.arc(this.x,this.y,1.5,0,2*Math.PI),this.g.fill()},b=function(a,b){this.i=a,this.i.size={width:this.i.offsetWidth,height:this.i.offsetHeight},b=void 0!==b?b:{},this.options={particleColor:void 0!==b.particleColor?b.particleColor:"#fff",background:void 0!==b.background?b.background:"#1a252f",interactive:void 0!==b.interactive?b.interactive:!0,velocity:this.setVelocity(b.speed),density:this.j(b.density)},this.init()},b.prototype.init=function(){if(this.k=document.createElement("div"),this.i.appendChild(this.k),this.l(this.k,{position:"absolute",top:0,left:0,bottom:0,right:0,"z-index":1}),/(^#[0-9A-F]{6}$)|(^#[0-9A-F]{3}$)/i.test(this.options.background))this.l(this.k,{background:this.options.background});else{if(!/\.(gif|jpg|jpeg|tiff|png)$/i.test(this.options.background))return console.error("Please specify a valid background image or hexadecimal color"),!1;this.l(this.k,{background:'url("'+this.options.background+'") no-repeat center',"background-size":"cover"})}if(!/(^#[0-9A-F]{6}$)|(^#[0-9A-F]{3}$)/i.test(this.options.particleColor))return console.error("Please specify a valid particleColor hexadecimal color"),!1;this.canvas=document.createElement("canvas"),this.i.appendChild(this.canvas),this.g=this.canvas.getContext("2d"),this.canvas.width=this.i.size.width,this.canvas.height=this.i.size.height,this.l(this.i,{position:"relative"}),this.l(this.canvas,{"z-index":"20",position:"relative"}),window.addEventListener("resize",function(){return this.i.offsetWidth===this.i.size.width&&this.i.offsetHeight===this.i.size.height?!1:(this.canvas.width=this.i.size.width=this.i.offsetWidth,this.canvas.height=this.i.size.height=this.i.offsetHeight,clearTimeout(this.m),void(this.m=setTimeout(function(){this.o=[];for(var a=0;a<this.canvas.width*this.canvas.height/this.options.density;a++)this.o.push(new c(this));this.options.interactive&&this.o.push(this.p),requestAnimationFrame(this.update.bind(this))}.bind(this),500)))}.bind(this)),this.o=[];for(var a=0;a<this.canvas.width*this.canvas.height/this.options.density;a++)this.o.push(new c(this));this.options.interactive&&(this.p=new c(this),this.p.velocity={x:0,y:0},this.o.push(this.p),this.canvas.addEventListener("mousemove",function(a){this.p.x=a.clientX-this.canvas.offsetLeft,this.p.y=a.clientY-this.canvas.offsetTop}.bind(this)),this.canvas.addEventListener("mouseup",function(a){this.p.velocity={x:(Math.random()-.5)*this.options.velocity,y:(Math.random()-.5)*this.options.velocity},this.p=new c(this),this.p.velocity={x:0,y:0},this.o.push(this.p)}.bind(this))),requestAnimationFrame(this.update.bind(this))},b.prototype.update=function(){this.g.clearRect(0,0,this.canvas.width,this.canvas.height),this.g.globalAlpha=1;for(var a=0;a<this.o.length;a++){this.o[a].update(),this.o[a].h();for(var b=this.o.length-1;b>a;b--){var c=Math.sqrt(Math.pow(this.o[a].x-this.o[b].x,2)+Math.pow(this.o[a].y-this.o[b].y,2));c>120||(this.g.beginPath(),this.g.strokeStyle=this.options.particleColor,this.g.globalAlpha=(120-c)/120,this.g.lineWidth=.7,this.g.moveTo(this.o[a].x,this.o[a].y),this.g.lineTo(this.o[b].x,this.o[b].y),this.g.stroke())}}0!==this.options.velocity&&requestAnimationFrame(this.update.bind(this))},b.prototype.setVelocity=function(a){return"fast"===a?1:"slow"===a?.33:"none"===a?0:.66},b.prototype.j=function(a){return"high"===a?5e3:"low"===a?2e4:isNaN(parseInt(a,10))?1e4:a},b.prototype.l=function(a,b){for(var c in b)a.style[c]=b[c]},b});

// Set up ParticleNetwork appropriately for the environment.
(function (factory) {

    // Establish the root object, `window` in the browser, or `global` on the server.
    var root = (typeof self === 'object' && self.self === self && self) || (typeof global === 'object' && global.global === global && global);
  
    // AMD.
    if (typeof define === 'function' && define.amd) {
      define(['exports'], function (exports) {
        root.ParticleNetwork = factory(root, exports);
      });
    }
  
    // Node.js or CommonJS.
    else if (typeof module === 'object' && module.exports) {
      module.exports = factory(root, {});
    }
  
    // Browser global.
    else {
      root.ParticleNetwork = factory(root, {});
    }
  
  }(function (root, ParticleNetwork) {
  
    // Create Particle class
    var Particle = function (parent) {
  
      this.canvas = parent.canvas;
      this.ctx = parent.ctx;
      this.particleColor = parent.options.particleColor;
  
      this.x = Math.random() * this.canvas.width;
      this.y = Math.random() * this.canvas.height;
      this.velocity = {
        x: (Math.random() - 0.5) * parent.options.velocity,
        y: (Math.random() - 0.5) * parent.options.velocity
      };
    };
    Particle.prototype.update = function () {
  
      // Change dir if outside map
      if (this.x > this.canvas.width + 20 || this.x < -20) {
        this.velocity.x = -this.velocity.x;
      }
      if (this.y > this.canvas.height + 20 || this.y < -20) {
        this.velocity.y = -this.velocity.y;
      }
  
      // Update position
      this.x += this.velocity.x;
      this.y += this.velocity.y;
    };
    Particle.prototype.draw = function () {
  
      // Draw particle
      this.ctx.beginPath();
      this.ctx.fillStyle = this.particleColor;
      this.ctx.globalAlpha = 0.7;
      this.ctx.arc(this.x, this.y, 1.5, 0, 2 * Math.PI);
      this.ctx.fill();
    };
  
    // Create ParticleNetwork class
    ParticleNetwork = function (canvas, options) {
  
      this.canvasDiv = canvas;
      this.canvasDiv.size = {
        'width': this.canvasDiv.offsetWidth,
        'height': this.canvasDiv.offsetHeight
      };
  
      // Set options
      options = options !== undefined ? options : {};
      this.options = {
        particleColor: (options.particleColor !== undefined) ? options.particleColor : '#fff',
        background: (options.background !== undefined) ? options.background : '#000',
        interactive: (options.interactive !== undefined) ? options.interactive : true,
        velocity: this.setVelocity(options.speed),
        density: this.setDensity(options.density)
      };
  
      this.init();
    };
    ParticleNetwork.prototype.init = function () {
  
      // Create background div
      // this.bgDiv = document.createElement('div');
      // this.canvasDiv.appendChild(this.bgDiv);
      // this.setStyles(this.bgDiv, {
      //   'position': 'absolute',
      //   'top': 0,
      //   'left': 0,
      //   'bottom': 0,
      //   'right': 0,
      //   'z-index': 1
      // });
  
      // // Check if valid background hex color
      // if ((/(^#[0-9A-F]{6}$)|(^#[0-9A-F]{3}$)/i).test(this.options.background)) {
      //   this.setStyles(this.bgDiv, {
      //     'background': this.options.background
      //   });
      // }
      // // Else check if valid image
      // else if ((/\.(gif|jpg|jpeg|tiff|png)$/i).test(this.options.background)) {
      //   this.setStyles(this.bgDiv, {
      //     'background': 'url("' + this.options.background + '") no-repeat center',
      //     'background-size': 'cover'
      //   });
      // }
      // // Else throw error
      // else {
      //   console.error('Please specify a valid background image or hexadecimal color');
      //   return false;
      // }
  
      // // Check if valid particleColor
      // if (!(/(^#[0-9A-F]{6}$)|(^#[0-9A-F]{3}$)/i).test(this.options.particleColor)) {
      //   console.error('Please specify a valid particleColor hexadecimal color');
      //   return false;
      // }
  
      // Create canvas & context
      this.canvas = document.createElement('canvas');
      this.canvasDiv.appendChild(this.canvas);
      this.ctx = this.canvas.getContext('2d');
      this.canvas.width = this.canvasDiv.size.width;
      this.canvas.height = this.canvasDiv.size.height;
      this.setStyles(this.canvasDiv, { 'position': 'relative' });
      this.setStyles(this.canvas, {
        'z-index': '20',
        'position': 'absolute',
        'top':'0',
        'bottom':'0'
      });
  
      // Add resize listener to canvas
      window.addEventListener('resize', function () {
  
        // Check if div has changed size
        if (this.canvasDiv.offsetWidth === this.canvasDiv.size.width && this.canvasDiv.offsetHeight === this.canvasDiv.size.height) {
          return false;
        }
  
        // Scale canvas
        this.canvas.width = this.canvasDiv.size.width = this.canvasDiv.offsetWidth;
        this.canvas.height = this.canvasDiv.size.height = this.canvasDiv.offsetHeight;
  
        // Set timeout to wait until end of resize event
        clearTimeout(this.resetTimer);
        this.resetTimer = setTimeout(function () {
  
          // Reset particles
          this.particles = [];
          for (var i = 0; i < this.canvas.width * this.canvas.height / this.options.density; i++) {
            this.particles.push(new Particle(this));
          }
          if (this.options.interactive) {
            this.particles.push(this.mouseParticle);
          }
  
          // Update canvas
          requestAnimationFrame(this.update.bind(this));
  
        }.bind(this), 500);
  
      }.bind(this));
  
      // Initialise particles
      this.particles = [];
      for (var i = 0; i < this.canvas.width * this.canvas.height / this.options.density; i++) {
        this.particles.push(new Particle(this));
      }
  
      if (this.options.interactive) {
  
        // Add mouse particle if interactive
        this.mouseParticle = new Particle(this);
        this.mouseParticle.velocity = {
          x: 0,
          y: 0
        };
        this.particles.push(this.mouseParticle);
  
        // Mouse event listeners
        this.canvas.addEventListener('mousemove', function (e) {
          this.mouseParticle.x = e.clientX - this.canvas.offsetLeft;
          this.mouseParticle.y = e.clientY - this.canvas.offsetTop;
        }.bind(this));
  
        this.canvas.addEventListener('mouseup', function (e) {
          this.mouseParticle.velocity = {
            x: (Math.random() - 0.5) * this.options.velocity,
            y: (Math.random() - 0.5) * this.options.velocity
          };
          this.mouseParticle = new Particle(this);
          this.mouseParticle.velocity = {
            x: 0,
            y: 0
          };
          this.particles.push(this.mouseParticle);
        }.bind(this));
      }
  
      // Update canvas
      requestAnimationFrame(this.update.bind(this));
    }
    ParticleNetwork.prototype.update = function () {
      this.ctx.clearRect(0, 0, this.canvas.width, this.canvas.height);
      this.ctx.globalAlpha = 1;
  
      // Draw particles
      for (var i = 0; i < this.particles.length; i++) {
        this.particles[i].update();
        this.particles[i].draw();
  
        // Draw connections
        for (var j = this.particles.length - 1; j > i; j--) {
          var distance = Math.sqrt(
            Math.pow(this.particles[i].x - this.particles[j].x, 2)
            + Math.pow(this.particles[i].y - this.particles[j].y, 2)
          );
          if (distance > 120) {
            continue;
          }
  
          this.ctx.beginPath();
          this.ctx.strokeStyle = this.options.particleColor;
          this.ctx.globalAlpha = (120 - distance) / 120;
          this.ctx.lineWidth = 0.7;
          this.ctx.moveTo(this.particles[i].x, this.particles[i].y);
          this.ctx.lineTo(this.particles[j].x, this.particles[j].y);
          this.ctx.stroke();
        }
      }
  
      if (this.options.velocity !== 0) {
        requestAnimationFrame(this.update.bind(this));
      }
    };
  
    // Helper method to set velocity multiplier
    ParticleNetwork.prototype.setVelocity = function (speed) {
      if (speed === 'fast') {
        return 1;
      }
      else if (speed === 'slow') {
        return 0.33;
      }
      else if (speed === 'none') {
        return 0;
      }
      return 0.66;
    }
    // Helper method to set density multiplier
    ParticleNetwork.prototype.setDensity = function (density) {
      if (density === 'high') {
        return 5000;
      }
      else if (density === 'low') {
        return 20000;
      }
      return !isNaN(parseInt(density, 10)) ? density : 10000;
    }
    // Helper method to set multiple styles
    ParticleNetwork.prototype.setStyles = function (div, styles) {
      for (var property in styles) {
        div.style[property] = styles[property];
      }
    }
  
    return ParticleNetwork;
  
  }));
  