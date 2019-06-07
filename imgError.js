document.getElementById("liveFeed").addEventListener("error", imgError);

function imgError(image) {
	image.src = "CameraUnavailableError.png";
	return true;
}