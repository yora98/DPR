<!DOCTYPE html>
<html>
<head>
	<title>OCR</title>
	<script src="https://cdn.rawgit.com/naptha/tesseract.js/0.2.0/dist/tesseract.js">
	</script>
</head>
<body>
	<input type="text" id="url" placeholder="Image URL" value="{{ URL::asset('img/pmay1.jpg') }}" />
	<input type="button" id="go_button" value="Run" />
	<div id="ocr_results"> </div>
	<div id="ocr_status"> </div>

	<script type="text/javascript">
		function runOCR(url) {
		    Tesseract.recognize(url)
		         .then(function(result) {
		            document.getElementById("ocr_results")
		                    .innerText = result.text;
		         }).progress(function(result) {
		            document.getElementById("ocr_status")
		                    .innerText = result["status"] + " (" +
		                        (result["progress"] * 100) + "%)";
		        });
		}

		document.getElementById("go_button").addEventListener("click", function(e) {
            var url = document.getElementById("url").value;
            runOCR(url);
        });
	</script>
</body>
</html>