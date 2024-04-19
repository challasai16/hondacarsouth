document.addEventListener("DOMContentLoaded", function() {
    // Splitting text into characters using SplitType
    const myText = new SplitType("#my_text");

    // GSAP animation using timeline
    const tl = gsap.timeline({ repeat: -1, repeatDelay: 3 });

    tl.to(".char", {
        y: 0,
        stagger: 0.05,
        duration: 0.1,
        yoyo: true,
    });

    // Trigger the animation after a delay
    tl.delay(0.2);

    // Add class 'char' to each character
    myText.chars.forEach((char) => {
        gsap.set(char, { className: "char" });
    });
});

function SineWaveGenerator(options) {
    $.extend(this, options || {});

    if(!this.el) { throw "No Canvas Selected"; }
    this.ctx = this.el.getContext('2d');

    if(!this.waves.length) { throw "No waves specified"; }

    // Internal
    this._resizeWidth();
    window.addEventListener('resize', this._resizeWidth.bind(this));
    // User
    this.resizeEvent();
    window.addEventListener('resize', this.resizeEvent.bind(this));

    if(typeof this.initialize === 'function') {
        this.initialize.call(this);
    }
    // Start the magic
    this.loop();
}

// Defaults
SineWaveGenerator.prototype.speed = 10;
SineWaveGenerator.prototype.amplitude = 50;
SineWaveGenerator.prototype.wavelength = 50;
SineWaveGenerator.prototype.segmentLength = 10;

SineWaveGenerator.prototype.lineWidth = 2;
SineWaveGenerator.prototype.strokeStyle  = 'rgba(255, 255, 255, 0.2)';

SineWaveGenerator.prototype.resizeEvent = function() {};

// fill the screen
SineWaveGenerator.prototype._resizeWidth = function() {
    this.dpr = window.devicePixelRatio || 1;

    this.width = this.el.width = window.innerWidth * this.dpr;
    this.height = this.el.height = window.innerHeight * this.dpr;
    this.el.style.width = window.innerWidth + 'px';
    this.el.style.height = window.innerHeight + 'px';

    this.waveWidth = this.width * 0.95;
    this.waveLeft = this.width * 0.25;
}

SineWaveGenerator.prototype.clear = function () {
    this.ctx.clearRect(0, 0, this.width, this.height);
}

SineWaveGenerator.prototype.time = 0;

SineWaveGenerator.prototype.update = function(time) {  
    this.time = this.time - 0.007;
    if(typeof time === 'undefined') {
        time = this.time;
    }

    var index = -1;
    var length = this.waves.length;

    while(++index < length) {
        var timeModifier = this.waves[index].timeModifier || 1;
        this.drawSine(time * timeModifier, this.waves[index]);
    }
    index = void 0;
    length = void 0;
}

// Constants
var PI2 = Math.PI * 2;
var HALFPI = Math.PI / 2;

SineWaveGenerator.prototype.ease = function(percent, amplitude) {
    return amplitude * (Math.sin(percent * PI2 - HALFPI) + 1) * 0.5;
}

SineWaveGenerator.prototype.drawSine = function(time, options) {
    options = options || {};
    amplitude = options.amplitude || this.amplitude;
    wavelength = options.wavelength || this.wavelength;
    lineWidth = options.lineWidth || this.lineWidth;
    strokeStyle = options.strokeStyle || this.strokeStyle;
    segmentLength = options.segmentLength || this.segmentLength;

    var x = time;
    var y = 0;  
    var amp = this.amplitude;

    // Center the waves
    var yAxis = this.height / 2; 

    // Styles
    this.ctx.lineWidth = lineWidth * this.dpr;
    this.ctx.strokeStyle = strokeStyle;
    this.ctx.lineCap = 'round';
    this.ctx.lineJoin = 'round';
    this.ctx.beginPath();

    // Starting Line
    this.ctx.moveTo(0, yAxis);
    this.ctx.lineTo(this.waveLeft, yAxis);

    for(var i = 0; i < this.waveWidth; i += segmentLength) {
        x = (time * this.speed) + (-yAxis + i) / wavelength; 
        y = Math.sin(x); 

        // Easing
        amp = this.ease(i / this.waveWidth, amplitude); 

        this.ctx.lineTo(i + this.waveLeft, amp * y + yAxis);

        amp = void 0;
    }

    // Ending Line
    this.ctx.lineTo(this.width, yAxis);

    // Stroke it
    this.ctx.stroke();

    // Clean up
    options = void 0;
    amplitude = void 0;
    wavelength = void 0;
    lineWidth = void 0;
    strokeStyle = void 0;
    segmentLength = void 0;
    x = void 0;
    y = void 0;
} 

SineWaveGenerator.prototype.loop = function() {
    this.clear();
    this.update();

    window.requestAnimationFrame(this.loop.bind(this));
}

new SineWaveGenerator({
    el: document.getElementById('waves'),

    speed: 8,

    waves: [
        {
            timeModifier: 1,
            lineWidth: 3,
            amplitude: 150,
            wavelength: 200,
            segmentLength: 20,
            strokeStyle: 'rgba(255, 0, 0, 0.2)' // Set red color
        },
        {
            timeModifier: 1,
            lineWidth: 2,
            amplitude: 250,
            wavelength: 200,
            strokeStyle: 'rgba(255, 0, 0, 0.2)' // Set red color
        },
        {
            timeModifier: 1,
            lineWidth: 3,
            amplitude: -150,
            wavelength: 100,
            segmentLength: 10,
            strokeStyle: 'rgba(255, 0, 0, 0.2)' // Set red color
        },
        {
            timeModifier: 1,
            lineWidth: 1,
            amplitude: -100,
            wavelength: 200,
            segmentLength: 20,
            strokeStyle: 'rgba(255, 0, 0, 0.2)' // Set red color
        }
    ],

    initialize: function (){

    },

    resizeEvent: function() {
        var gradient = this.ctx.createLinearGradient(0, 0, this.width, 0);
        gradient.addColorStop(0,"rgba(254, 255, 255, 0)");
        gradient.addColorStop(0.5,"rgba(255, 0, 0, 1)");
        gradient.addColorStop(1,"rgba(255, 255, 254, 0)");

        var index = -1;
        var length = this.waves.length;
        while(++index < length){
            this.waves[index].strokeStyle = gradient;
        }

        // Clean Up
        index = void 0;
        length = void 0;
        gradient = void 0;
    }
});
let members = $(".team__members");
let isHover = false;

setInterval(() => {
  if (!isHover) {
    let min = 1;
    let max = $(members).length;
    let random = Math.floor(Math.random() * (max - min + 1) + min);
    $(".team__members:nth-child(" + random + ")")
      .addClass("team__members--show")
      .siblings()
      .removeClass("team__members--show");
  }
}, 3000);
function mediaSize() { 
  	
$(members).hover(

  () => {
    if (window.matchMedia('(min-width: 480px)').matches) {
    $(members).removeClass("team__members--show");
    isHover = true;
      console.log('hover');
    }
  },
  () => {
     if (window.matchMedia('(min-width: 480px)').matches) {
    isHover = false;
     }
  }
);
    
}

	/* Call the function */
  mediaSize();
  /* Attach the function to the resize event listener */
	window.addEventListener('resize', mediaSize, false);  



    (function($) {
 
        var SliceSlider = {
          
          /**
           * Settings Object
           */
          settings: {
            delta:              0,
            currentSlideIndex:  0,
            scrollThreshold:    40,
            slides:             $('.slide'),
            numSlides:          $('.slide').length,
            navPrev:            $('.js-prev'),
            navNext:            $('.js-next'),
          },
          
          /**
           * Init
           */
          init: function() {
            s = this.settings;
            this.bindEvents();
          },
          
          /**
           * Bind our click, scroll, key events
           */
          bindEvents: function(){
            
            // Scrollwheel & trackpad
            s.slides.on({
              'DOMMouseScroll mousewheel' : SliceSlider.handleScroll
            });
            // On click prev
            s.navPrev.on({
              'click' : SliceSlider.prevSlide
            });
            // On click next
            s.navNext.on({
              'click' : SliceSlider.nextSlide
            });
            // On Arrow keys
            $(document).keyup(function(e) {
              // Left or back arrows
              if ((e.which === 37) ||  (e.which === 38)){
                SliceSlider.prevSlide();
              }
              // Down or right
              if ((e.which === 39) ||  (e.which === 40)) {
                SliceSlider.nextSlide();
              }
            });
          },
          
          /** 
           * Interept scroll direction
           */
          handleScroll: function(e){
      
            // Scrolling up
            if (e.originalEvent.detail < 0 || e.originalEvent.wheelDelta > 0) { 
      
              s.delta--;
           
              if ( Math.abs(s.delta) >= s.scrollThreshold) {
                SliceSlider.prevSlide();
              }
            }
       
            // Scrolling Down
            else {
       
              s.delta++;
       
              if (s.delta >= s.scrollThreshold) {
                SliceSlider.nextSlide();
              }
            }
       
            // Prevent page from scrolling
            return false;
          },
      
          /**
           * Show Slide
           */
          showSlide: function(){ 
            // reset
            s.delta = 0;
            // Bail if we're already sliding
            if ($('body').hasClass('is-sliding')){
              return;
            }
            // Loop through our slides
            s.slides.each(function(i, slide) {
      
              // Toggle the is-active class to show slide
              $(slide).toggleClass('is-active', (i === s.currentSlideIndex)); 
              $(slide).toggleClass('is-prev', (i === s.currentSlideIndex - 1)); 
              $(slide).toggleClass('is-next', (i === s.currentSlideIndex + 1)); 
              
              // Add and remove is-sliding class
              $('body').addClass('is-sliding');
      
              setTimeout(function(){
                  $('body').removeClass('is-sliding');
              }, 1000);
            });
          },
      
          /**
           * Previous Slide
           */
          prevSlide: function(){
            
            // If on first slide, loop to last
            if (s.currentSlideIndex <= 0) {
              s.currentSlideIndex = s.numSlides;
            }
            s.currentSlideIndex--;
            
            SliceSlider.showSlide();
          },
      
          /**
           * Next Slide
           */
          nextSlide: function(){
            
            s.currentSlideIndex++;
         
            // If on last slide, loop to first
            if (s.currentSlideIndex >= s.numSlides) { 
              s.currentSlideIndex = 0;
            }
       
            SliceSlider.showSlide();
          },
        };
        SliceSlider.init();
      })(jQuery);
      
      
      /*--------------------for KEYBORD KEYS, DRAGGING and scrolling -------------------*/
      
      
      $(document).ready(function() {
      
          var timeStart = 0;
          $('.slide, ifcls').bind('mousewheel DOMMouseScroll', function(e) {
          var scrollTo = 0;
          
          if (e.type == 'mousewheel') {
              scrollTo = (e.originalEvent.wheelDelta * -1);
              var timeStop = new Date().getTime();
              var timeDiff = timeStop - timeStart;
              if (timeDiff > 500) {
                  if (scrollTo > 0) {
                      nextSlide();
                  }
                  if (scrollTo < 0) {
                      prevSlide();
                  }
              }
              timeStart = timeStop;
          }  
          });
          
          
          function prevSlide() {
                  if ($('.is-active').is(':first-child')) {
                      
                  } else {
                      $('.is-active').removeClass('is-active').prev().addClass('is-active');
                  }
              }
      
              function nextSlide() {
                  if ($('.is-active').is(':last-child')) {
                      
                  } else {
                      $('.is-active').removeClass('is-active').next().addClass('is-active');
                  }
              }
              
          
      
          function hotkeys(e) {
              if (e.keyCode == 38) {
                  prevSlide();
              }
      
              if (e.keyCode == 40) {
                  e.preventDefault();
                  nextSlide();
              }
          }
      
          function dragStart(e) {
              e.preventDefault();
              if (e.type == 'touchstart') {
                  $(document).off('mousedown', dragStart);
                  startPoint = e.originalEvent.touches[0].pageY;
              } else {
                  startPoint = e.pageY;
              }
              dragDist = 0;
              $(document).on('touchmove mousemove', dragMove);
          }
      
          function dragMove(e) {
              if (e.type == 'touchmove') {
                  var movePoint = e.originalEvent.touches[0].pageY;
              } else {
                  var movePoint = e.pageY;
              }
              dragDist = (movePoint - startPoint) / $('.slider').height() * 100;
      
              $('.slider').addClass('dragging');
      
              $('.slide').css({
                  transition: '0ms'
              });
      
              if (dragDist < 0) {
                  $('.is-active').css({
                      transform: 'translate3d(0,' + (dragDist / 2) + '%,0)'
                  }).next().css({
                      transform: 'translate3d(0,' + (100 + dragDist) + '%,0)'
                  });
              }
      
              if (dragDist > 0) {
                  $('.is-active').css({
                      transform: 'translate3d(0,' + dragDist + '%,0)'
                  }).prev().css({
                      animation: 'none',
                      transform: 'translate3d(0,' + (-50 + dragDist / 2) + '%,0)'
                  });
              }
          }
      
          function dragEnd() {
              $(document).off('touchmove mousemove', dragMove);
              $('.slide').removeAttr('style');
              if (dragDist > 20) {
                  prevSlide();
              }
              if (dragDist < -20) {
                  nextSlide();
              }
      
              setTimeout(function() {
                  $('.slider').removeClass('dragging');
              }, 800);
          }
      
          $(document).on('wheel', wheely);
          $(document).on('keydown', hotkeys);
          $(document).on('touchstart mousedown', dragStart);
          $(document).on('touchend mouseup', dragEnd);
      
      });