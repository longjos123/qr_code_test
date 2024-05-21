<!-- resources/views/scanner.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code Scanner</title>
</head>
<body>
<h1>QR Code Scanner</h1>
<input type="text" id="qr-input" placeholder="QR Code Data">
<div id="reader" style="width: 500px;"></div>

<!-- Include the HTML5 QR Code library -->
<script src="https://cdn.jsdelivr.net/npm/html5-qrcode/minified/html5-qrcode.min.js"></script>
<script>
    function onScanSuccess(qrCodeMessage) {
        // Handle the scanned code as you like, for example:
        document.getElementById('qr-input').value = qrCodeMessage;
    }

    function onScanError(errorMessage) {
        // Handle scan error
        console.error(errorMessage);
    }

    // Create an instance of the scanner
    let html5QrcodeScanner = new Html5QrcodeScanner(
        "reader", { fps: 10, qrbox: 250 });

    // Start scanning
    html5QrcodeScanner.render(onScanSuccess, onScanError);
</script>
</body>
</html>
