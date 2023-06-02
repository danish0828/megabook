// Get the reference to the moving-gradient element
var movingGradient = document.getElementById('moving-gradient');

// Function to update gradient position
function updateGradientPosition() {
  var currentPosition = window.getComputedStyle(movingGradient).getPropertyValue('background-position-x');
  currentPosition = parseInt(currentPosition, 10);
  currentPosition += 1; // Adjust the speed of the movement by changing the increment value
  movingGradient.style.backgroundPositionX = currentPosition + 'px';
  requestAnimationFrame(updateGradientPosition);
}

// Start updating the gradient position
updateGradientPosition();
