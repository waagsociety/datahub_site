var s = new Snap('.svg__header');
Snap.load('./assets/images/animation_2.svg', function (response) {
  var heroAnimation = response;
      s.append(heroAnimation);

  var path = s.select('.rocket__line'),
      rocket = s.select('#rocket'),
      animation,
      animateAlongPath
      elementRotation = 0;

  animation = function () {
    rocket.transform('t0,0');
    animateAlongPath(path, rocket, 0, 3000, mina.easeout);
    // To repeat animation:
    // animateAlongPath(path, rocket, 0, 5000, mina.easeinout, animation);
  };

  animateAlongPath = function (path, el, start, duration, easing, callback) {
    var len = Snap.path.getTotalLength(path),
        elBB =  el.getBBox(),
        elCenter = {
          x: elBB.x + (elBB.width / 2),
          y: elBB.y + (elBB.height / 2),
        };

      // TODO Calculate angle
      Snap.animate(start, len, function (value) {
        var movePoint = Snap.path.getPointAtLength(path, value);
        var percentage = parseInt((value/len) * 100);
        var angle = getAngleInDegrees(path.node, percentage);
        el.transform('t'+ (movePoint.x - elCenter.x) + ',' + (movePoint.y - elCenter.y) + 'r' + angle);
      }, duration, easing, function () {
        if (callback) callback(path);
      });
  };
  setTimeout(animation, 1000);
});

function getAngleInDegrees(path, percent){
  var tangent = getTangent(path, percent);
  var angle = Math.atan2(tangent.v.y, tangent.v.x);
  var degrees = angle * 180 / Math.PI;
  return degrees;
}

function getTangent(path, percent) {
  // returns a normalized vector that describes the tangent
  // at the point that is found at *percent* of the path's length
  var fraction = percent/100;
  if(fraction < 0) fraction = 0;
  if(fraction > 0.99) fraction = 1;
  var len = path.getTotalLength();
  var point1 = path.getPointAtLength(fraction * len - 0.1);
  var point2 = path.getPointAtLength(fraction * len + 0.1);
  var vector = { x: point2.x - point1.x, y: point2.y - point1.y }
  var magnitude = Math.sqrt(vector.x*vector.x + vector.y*vector.y);
  vector.x /= magnitude;
  vector.y /= magnitude;
  // console.log("vector", vector)
  return {p: point1, v: vector };
}
