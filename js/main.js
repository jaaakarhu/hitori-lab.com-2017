(function(){
  document.body.classList.add('loaded');
})();

(function() {
  var canvas = document.getElementById('fullcanvas');
  var container = document.getElementById('canvas-wrapper');
  sizing();

  function sizing() {
    canvas.height = container.offsetHeight;
    canvas.width = container.offsetWidth;
  }

  window.addEventListener('resize', function() {
    (!window.requestAnimationFrame) ? setTimeout(sizing, 300): window.requestAnimationFrame(sizing);
  });

})();
