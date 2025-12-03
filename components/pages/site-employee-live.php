<?php
$page_title = "Site Employee Live";
$page = 'Site Employee Live';
$show_breadcrumb = true;


// include "../layouts/master.php";
?>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .camera-container {
            background: white;
            border-radius: 30px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            padding: 30px;
            max-width: 400px;
            width: 100%;
        }

        .header {
            text-align: center;
            margin-bottom: 25px;
        }

        .header h1 {
            color: #333;
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .header p {
            color: #888;
            font-size: 14px;
        }

        .video-wrapper {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            background: #000;
            margin-bottom: 25px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        #video {
            width: 100%;
            height: auto;
            display: block;
            aspect-ratio: 1;
            object-fit: cover;
        }

        .video-overlay {
            position: absolute;
            top: 15px;
            right: 15px;
            display: flex;
            gap: 10px;
        }

        .icon-btn {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .icon-btn:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: scale(1.1);
        }

        .icon-btn:active {
            transform: scale(0.95);
        }

        .icon-btn svg {
            width: 20px;
            height: 20px;
            stroke: white;
            fill: none;
            stroke-width: 2;
        }

        .controls {
            display: flex;
            gap: 15px;
            align-items: center;
            justify-content: center;
        }

        #switchBtn {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            padding: 15px 30px;
            border-radius: 15px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
        }

        #switchBtn:hover {
            transform: translateY(-2px);
            box-shadow: 0 7px 20px rgba(102, 126, 234, 0.5);
        }

        #switchBtn:active {
            transform: translateY(0);
        }

        #captureBtn {
            background: white;
            border: 5px solid #667eea;
            width: 70px;
            height: 70px;
            border-radius: 50%;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        #captureBtn:hover {
            transform: scale(1.1);
            border-color: #764ba2;
        }

        #captureBtn:active {
            transform: scale(0.95);
        }

        #captureBtn::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 50%;
        }

        .status-bar {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid #eee;
        }

        .status-item {
            text-align: center;
        }

        .status-label {
            color: #888;
            font-size: 12px;
            margin-bottom: 5px;
        }

        .status-value {
            color: #333;
            font-size: 14px;
            font-weight: 600;
        }

        .status-icon {
            width: 16px;
            height: 16px;
            display: inline-block;
            vertical-align: middle;
            margin-right: 5px;
        }

        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.5; }
        }

        .loading {
            animation: pulse 1.5s ease-in-out infinite;
        }

        .flash {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: white;
            opacity: 0;
            pointer-events: none;
            z-index: 9999;
        }

        .flash.active {
            animation: flashEffect 0.3s ease-out;
        }

        @keyframes flashEffect {
            0% { opacity: 0; }
            50% { opacity: 0.8; }
            100% { opacity: 0; }
        }

        @media (max-width: 480px) {
            .camera-container {
                padding: 20px;
                border-radius: 20px;
            }

            .header h1 {
                font-size: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="flash" id="flash"></div>
    
    <div class="camera-container">
        <div class="header">
            <h1>📸 Camera</h1>
            <p>Capture your perfect moment</p>
        </div>

        <div class="video-wrapper">
            <video id="video" autoplay playsinline></video>
            <div class="video-overlay">
                <div class="icon-btn" id="switchBtn" title="Switch Camera">
                    <svg viewBox="0 0 24 24">
                        <path d="M20 7h-3l-2-2H9L7 7H4c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V9c0-1.1-.9-2-2-2z"/>
                        <path d="M15 13l-3 3-3-3"/>
                        <path d="M9 11l3-3 3 3"/>
                    </svg>
                </div>
            </div>
        </div>

        <div class="controls">
            <button id="captureBtn" title="Take Photo"></button>
        </div>

        <div class="status-bar">
            <div class="status-item">
                <div class="status-label">📍 Location</div>
                <div class="status-value" id="locationStatus">Detecting...</div>
            </div>
            <div class="status-item">
                <div class="status-label">🕐 Time</div>
                <div class="status-value" id="timeStatus">--:--</div>
            </div>
        </div>
    </div>

    <form id="uploadForm" method="POST" action="?page=upload.php">
        <input type="hidden" name="image" id="imageData">
        <input type="hidden" name="lat" id="lat">
        <input type="hidden" name="lon" id="lon">
        <input type="hidden" name="datetime" id="datetime">
    </form>

    <script>
        let videoElement = document.getElementById("video");
        let currentDeviceId = null;
        let videoDevices = [];
        let stream = null;

        if (!navigator.mediaDevices || !navigator.mediaDevices.getUserMedia) {
            alert("Camera API not supported in browser");
        }

        // Update time every second
        function updateTime() {
            const now = new Date();
            const timeStr = now.toLocaleTimeString("en-US", { 
                timeZone: "Asia/Dhaka",
                hour: '2-digit',
                minute: '2-digit'
            });
            document.getElementById("timeStatus").textContent = timeStr;
        }
        setInterval(updateTime, 1000);
        updateTime();

        // Update location status
        navigator.geolocation.getCurrentPosition(
            (pos) => {
                document.getElementById("locationStatus").textContent = "Active ✓";
            },
            (err) => {
                document.getElementById("locationStatus").textContent = "Disabled";
            }
        );

        // Load Camera List
        async function loadCameras() {
            let devices = await navigator.mediaDevices.enumerateDevices();
            videoDevices = devices.filter(d => d.kind === "videoinput");

            if (videoDevices.length === 0) {
                alert("No camera found!");
                return;
            }

            currentDeviceId = videoDevices[0].deviceId;
            startCamera(currentDeviceId);
        }

        // Start Camera by deviceId
        async function startCamera(deviceId = null) {
            if (stream) {
                stream.getTracks().forEach(t => t.stop());
            }

            let constraints;

            if (deviceId) {
                constraints = { video: { deviceId: { exact: deviceId } } };
            } else {
                constraints = {
                    video: { facingMode: { ideal: "environment" } }
                };
            }

            try {
                stream = await navigator.mediaDevices.getUserMedia(constraints);
                videoElement.srcObject = stream;
            } catch (err) {
                console.log("Camera error:", err);

                try {
                    const fallbackStream = await navigator.mediaDevices.getUserMedia({
                        video: { facingMode: "user" }
                    });
                    videoElement.srcObject = fallbackStream;
                } catch (e) {
                    console.log("Front camera error:", e);
                }
            }
        }

        // Switch Camera
        document.getElementById("switchBtn").addEventListener("click", () => {
            if (videoDevices.length > 1) {
                let currentIndex = videoDevices.findIndex(d => d.deviceId === currentDeviceId);
                let nextIndex = (currentIndex + 1) % videoDevices.length;
                currentDeviceId = videoDevices[nextIndex].deviceId;
                startCamera(currentDeviceId);
            } else {
                alert("Only one camera available");
            }
        });

        // Capture Button
        document.getElementById('captureBtn').addEventListener('click', function () {
            // Flash effect
            const flash = document.getElementById('flash');
            flash.classList.add('active');
            setTimeout(() => flash.classList.remove('active'), 300);

            // Capture image
            let canvas = document.createElement('canvas');
            canvas.width = 640;
            canvas.height = 640;
            let ctx = canvas.getContext('2d');
            ctx.drawImage(videoElement, 0, 0, 640, 640);

            document.getElementById("imageData").value = canvas.toDataURL("image/jpeg");

            // Dhaka Time
            document.getElementById("datetime").value =
                new Date().toLocaleString("en-US", { timeZone: "Asia/Dhaka" });

            // Capture GPS → THEN submit
            navigator.geolocation.getCurrentPosition(function (pos) {
                document.getElementById("lat").value = pos.coords.latitude;
                document.getElementById("lon").value = pos.coords.longitude;
                document.getElementById("uploadForm").submit();
            }, function (err) {
                alert("Location Permission Required!");
                console.log(err);
            });
        });

        // Start everything
        window.addEventListener("load", () => {
            loadCameras();
        });
    </script>

