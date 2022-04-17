<?php snippet('header') ?>
<?php snippet('nav') ?>
<?php snippet('cta') ?>

<main class="bg-brown flex flex-wrap h-100 flex-sa va-c" style="overflow: hidden;">
    <article class="w-full w-66 m-c flex-end mb-4 s-mb-2" style="z-index: 999;">
        <h3 class="subheadline mb-15 m-heading s-body">404.</h3>
    <h2 class="heading m-body s-small">Du er landet på en side, der ikke findes. Leder du efter <a href="../individuelle-samtaler" title="Individuelle samtaler" class="underline">individuel terapi</a>, <a href="../grupper" title="Gruppeforløb" class="underline">gruppeterapi</a> eller <a href="../kaeresteterapi" title="Kæresteterapi" class="underline">kæresteterapi</a>?<br><br>Du kan også <span class="book-button underline">skrive til os</span>.</h2>
    
</article>
<div id="cursor"></div>
</main>


<style>
    body {
        overflow: hidden;
    }
#cursor {
  display: block;
  position: absolute;
  height: 2px;
  width: 2px;
  border-radius: 1px;
  background-color: transparent;
  top: -100px;
  left: -100px;
  z-index: ;
}
.text {
  width: 100%;
  color: white;
  text-align: center;
  margin-top: 20%;
  font-family: 'Product Sans';
  letter-spacing: .03em;
  font-size: 48pt;
  line-height: 1em;
  z-index: 100;
  position: absolute;
}
</style>

<script type="text/javascript">
    'use strict';

function setUpSettings(s) {
  var settingsBox = document.createElement('div');
  settingsBox.id = 'settings';
  document.body.appendChild(settingsBox);

  Object.keys(s).forEach(function (k) {
    var type = getInputType(s[k]);
    if (type === null) return;

    var el = document.createElement('p');

    var l = document.createElement('label');
    l.textContent = k;
    el.appendChild(l);

    var i = document.createElement('input');
    i.setAttribute('type', type);
    if (type === 'checkbox') {
      i.checked = s[k];
    } else {
      i.setAttribute('value', s[k]);
    }
    if (type === 'number') {
      var stringVal = s[k] + '';
      var precision = -(stringVal.split(".")[1] || []).length;
      if (precision === 0) {
        var precision = (stringVal.split(/[1-9]/).reverse()[0] || []).length;
      }
      i.setAttribute('step', Math.pow(10, precision));
    }
    el.appendChild(i);
    i.addEventListener('input', valueChange);
    i.addEventListener('change', valueChange);

    function valueChange(e) {
      console.log(e);
      if (type === 'checkbox') {
        s[k] = e.target.checked;
      } else if (type === 'number') {
        s[k] = parseFloat(e.target.value);
      } else {
        s[k] = e.target.value;
      }
    }

    settingsBox.appendChild(el);
  });

  function getInputType(val) {
    // http://stackoverflow.com/a/6449623/2178159
    if (!isNaN(parseFloat(val)) && isFinite(val)) {
      return 'number';
    } else if (typeof val === 'string') {
      return 'text';
    } else if (typeof val === 'boolean') {
      return 'checkbox';
    } else {
      return null;
    }
  }
};

window.setTimeout(function () {
  if (typeof settings !== 'undefined' && (typeof __meta_settings__ === 'undefined' || !__meta_settings__.disabled)) {
    setUpSettings(settings);
  }
});;
/**
 * fun javascript doodle that lets you doodle
 * 💦🎨 (spray paint?)
 */

// play with these
var settings = {
  trailLength: 8000, // how long is the trail?
  diameter: 20, // how wide is the spray mark?
  fadeStart: 1 // where does the trail start fading out? percentage along itself
};
var __meta_settings__ = {
  disabled: true
};

var cursor = document.getElementById('cursor');

// just some dummy data to make a not blank initial page
var cursorTrail = JSON.parse('[{"hue":988.454999995279,"speed":7.0780678888654755,"x":857,"y":898},{"hue":59.895999999289254,"speed":4,"x":56,"y":88},{"hue":68.502800000598654,"speed":9,"x":56,"y":98},{"hue":69.87089999609329,"speed":5.385864807834504,"x":68,"y":93},{"hue":64.83759999740869,"speed":9.486832980505838,"x":70,"y":96},{"hue":66.50499999872409,"speed":8,"x":78,"y":96},{"hue":68.17240000003949,"speed":13,"x":91,"y":96},{"hue":69.83979999553412,"speed":14,"x":105,"y":96},{"hue":71.50719999684952,"speed":11,"x":116,"y":96},{"hue":73.17459999816492,"speed":0,"x":116,"y":96},{"hue":74.84199999948032,"speed":10,"x":126,"y":96},{"hue":76.50939999497496,"speed":7,"x":133,"y":96},{"hue":78.17679999629036,"speed":7.0710678118654755,"x":140,"y":97},{"hue":79.84419999760576,"speed":2.23606797749979,"x":142,"y":98},{"hue":81.51159999892116,"speed":2.8284271247461903,"x":144,"y":100},{"hue":83.17900000023656,"speed":3.605551275463989,"x":146,"y":103},{"hue":84.84639999573119,"speed":5.0990195135927845,"x":147,"y":108},{"hue":86.51379999704659,"speed":7.280109889280518,"x":149,"y":115},{"hue":89.84859999967739,"speed":24.515301344262525,"x":144,"y":139},{"hue":91.51599999517202,"speed":15.231546211727817,"x":138,"y":153},{"hue":93.18339999648742,"speed":11.661903789690601,"x":132,"y":163},{"hue":94.85079999780282,"speed":8.54400374531753,"x":129,"y":171},{"hue":96.51819999911822,"speed":4.47213595499958,"x":127,"y":175},{"hue":98.18560000043362,"speed":2,"x":127,"y":177},{"hue":101.52039999724366,"speed":1,"x":127,"y":178},{"hue":103.18779999855906,"speed":1,"x":127,"y":179},{"hue":104.85519999987446,"speed":25.179356624028344,"x":152,"y":182},{"hue":106.52259999536909,"speed":23.194827009486403,"x":175,"y":185},{"hue":109.85739999799989,"speed":16.0312195418814,"x":191,"y":186},{"hue":113.19220000063069,"speed":24.331050121192877,"x":215,"y":190},{"hue":119.86180000007153,"speed":12.36931687685298,"x":227,"y":193},{"hue":123.19659999688156,"speed":4.47213595499958,"x":231,"y":195},{"hue":126.53139999951236,"speed":1,"x":232,"y":195},{"hue":129.8661999963224,"speed":1,"x":233,"y":195},{"hue":131.5335999976378,"speed":0,"x":233,"y":195},{"hue":133.2009999989532,"speed":0,"x":233,"y":195},{"hue":134.8684000002686,"speed":0,"x":233,"y":195}]');

// keep track of where the cursor is
var cursorPos = {
  x: -100, // start outside the screen
  y: -100
};

function getPos(event) {
  return {
    x: event.pageX,
    y: event.pageY
  };
}
// can't get the mouse position outside of events, so cache it in the cursorPos object
document.addEventListener('mousemove', function (e) {
  cursorPos = getPos(e);
});
document.addEventListener('touchmove', function (e) {
  cursorPos = getPos(e.changedTouches[0]); // no multitouch support (yet? 😜)
  e.preventDefault(); // prevent touch scrolling
});

document.addEventListener('click', function (e) {
  console.log(JSON.stringify(cursorTrail));
});

function frame(time) {
  var hue = time * settings.colorChangeSpeedFactor % 360;

  cursorTrail.push(Object.assign({
    hue: hue,
    speed: cursorTrail.length <= 1 ? 0 : function (pos, lastPos) {
      // distance between points ~ speed. Might be nice to smooth this by averaging over the last few points
      return Math.sqrt(Math.pow(lastPos.x - pos.x, 2) + Math.pow(lastPos.y - pos.y, 2));
    }(cursorPos, cursorTrail[cursorTrail.length - 1])
  }, cursorPos));

  // keep popping off the first one
  // nice little following effect, plus your browser would probably die if everything was kept
  if (cursorTrail.length > settings.trailLength) {
    cursorTrail.shift();
  }

  // follow the mouse!
  cursor.style.top = cursorPos.y + 'px';
  cursor.style.left = cursorPos.x + 'px';

  // make it look like the circle is solid 
  cursor.style.backgroundColor = '#DDD1ED';;

  // generate a trail of shadows
  cursor.style.boxShadow = cursorTrail.map(function (pos, i) {
    var offsetX = pos.x - cursorPos.x;
    var offsetY = pos.y - cursorPos.y;
    var color = '#DDD1ED';
    // return `${offsetX}px ${offsetY}px ${pos.speed + 1}px ${age * settings.diameter + settings.diameter}px ${color}`;
    return offsetX + 'px ' + offsetY + 'px ' + (pos.speed + 1) + 'px ' + settings.diameter + 'px ' + color;
  }).reverse().join(', ');

  window.requestAnimationFrame(frame);
}

window.requestAnimationFrame(frame);

console.log('initialized');
</script>

<?php snippet('newform') ?>
<?php snippet('footer') ?>