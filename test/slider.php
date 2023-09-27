<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Draggable Slider with Indicators</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .slider-container {
            width: 80%;
            max-width: 400px;
            position: relative;
        }

        .slider {
            width: 100%;
            height: 10px;
            background-color: #ccc;
            position: relative;
            cursor: pointer;
        }

        .indicator {
            width: 20px;
            height: 20px;
            background-color: #007bff;
            border-radius: 50%;
            position: absolute;
            top: -5px;
            left: 0;
            transform: translateX(-50%);
            cursor: grab;
        }

        .indicators {
            display: flex;
            justify-content: center;
            margin-top: 10px;
        }

        .indicator-dot {
            width: 10px;
            height: 10px;
            background-color: #ccc;
            border-radius: 50%;
            margin: 0 5px;
            cursor: pointer;
        }

        .indicator-dot.active {
            background-color: #007bff;
        }
    </style>
</head>

<body>
    <div class="slider-container">
        <div class="slider">
            <div class="indicator"></div>
        </div>
        <div class="indicators"></div>
    </div>
    <script src="script.js"></script>
    <script>
        const slider = document.querySelector('.slider');
        const indicator = document.querySelector('.indicator');
        const indicatorsContainer = document.querySelector('.indicators');
    
        let isDragging = false;
    
        indicator.addEventListener('mousedown', (e) => {
            isDragging = true;
            slider.classList.add('active');
            updateIndicator(e.clientX);
        });
    
        document.addEventListener('mousemove', (e) => {
            if (!isDragging) return;
            updateIndicator(e.clientX);
        });
    
        document.addEventListener('mouseup', () => {
            isDragging = false;
            slider.classList.remove('active');
        });
    
        function updateIndicator(clientX) {
            const rect = slider.getBoundingClientRect();
            const offsetX = clientX - rect.left;
            const percentage = (offsetX / rect.width) * 100;
    
            if (percentage >= 0 && percentage <= 100) {
                indicator.style.left = `${percentage}%`;
            }
        }
    
        // Create indicators dots
        const numIndicators = 5; // Change this to the desired number of indicators
        for (let i = 0; i < numIndicators; i++) {
            const indicatorDot = document.createElement('div');
            indicatorDot.classList.add('indicator-dot');
            indicatorDot.addEventListener('click', () => {
                const percentage = (i / (numIndicators - 1)) * 100;
                indicator.style.left = `${percentage}%`;
            });
            indicatorsContainer.appendChild(indicatorDot);
        }
    
    </script>
</body>

</html>