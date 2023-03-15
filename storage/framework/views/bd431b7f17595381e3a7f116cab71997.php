<!DOCTYPE html>

<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>vagas</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <!-- Styles -->
        <style>
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            .error {color: #e7f84f;}
            body{
                font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
                font-size: 20px;
                align-content: center;
                margin: 0;
                height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center;
                background: linear-gradient(0, #120c56, #000000);
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center center;
            }
            
        </style>
    </head>
    <body>
        <div>
            <canvas id="myCanvas" style="position: fixed; top: 0; left: 0; z-index: -1;"></canvas>

            <script type="text/javascript">
                var canvas = document.getElementById('myCanvas');
                canvas.width = window.innerWidth;
                canvas.height = window.innerHeight;
                var ctx = canvas.getContext('2d');
                var stars = [];
                var numStars = 200;
                for(var i = 0; i < numStars; i++) {
                    stars.push({
                        x: Math.random() * canvas.width,
                        y: Math.random() * canvas.height,
                        r: Math.random() * 3 + 1,
                        d: Math.random() * numStars
                    })
                }

                function drawStars() {
                    ctx.clearRect(0,0,canvas.width,canvas.height);
                    ctx.fillStyle = 'rgba(255, 255, 255, 0.8)';
                    ctx.beginPath();
                    for(var i = 0; i < numStars; i++) {
                        var star = stars[i];
                        ctx.moveTo(star.x, star.y);
                        ctx.arc(star.x, star.y, star.r, 0, Math.PI * 2, true);
                    }
                    ctx.fill();
                }
                var speed = 10;
                function update() {
                    for(var i = 0; i < numStars; i++) {
                        var star = stars[i];
                        star.y += i % 5 == 0 ? speed * 0.5 : speed;
                        if(star.y > canvas.height) {
                            stars[i] = {
                                x: Math.random() * canvas.width,
                                y: 0,
                                r: star.r,
                                d: star.d
                            };
                        }
                    }
                }
                setInterval(function() {
                    drawStars();
                    update();
                }, 30);
            </script>
        </div>
        <style>
            h1{
                color: #6146da;
                text-align: center
            }
            label{
                color: azure;
            }
        </style>
        <div class='texto'>
            <h1>Cadastrar vaga:</h1>
            <form action="/vagas" method="POST">
                <?php echo csrf_field(); ?>
                    <label for="nome_vaga">Nome:</label>
                    <input type="text" name="nome_vaga" id="nome_vaga">
                    <br>
                    <br>
                    <label for="requisitos">Qualificações:</label>
                    <input type="text" name="requisitos" id="requisitos">
                    <br>
                    <br>
                    <br>
                    <button type="submit">Adicionar vaga</button>
            </form>
        </div>
        <style>
            form{
                font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
                font-size: 16px;
                text-align: center;
            }
            label {
                display: inline-block;
                width: 90px;
                text-align: right;
            }
            input, textarea {
                font: 1em sans-serif;
                width: 300px;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                border: 1px solid #999999;
            }
            .texto{
                background-color: #1c1a20;
                padding: 32px;
                padding-top: 24px;
                border-radius: 8px;
                display: flex;
                flex-direction: column;
                gap: 24px;
            }
            a{
                text-decoration: none;
                color: #cbf0f0;}
            button {
                appearance: button;
                background-color: #1899D6;
                border: solid transparent;
                border-radius: 16px;
                border-width: 0 0 4px;
                box-sizing: border-box;
                color: #FFFFFF;
                cursor: pointer;
                display: inline-block;
                font-size: 15px;
                font-weight: 700;
                letter-spacing: .8px;
                line-height: 20px;
                margin: 0;
                outline: none;
                overflow: visible;
                padding: 13px 19px;
                text-align: center;
                text-transform: uppercase;
                touch-action: manipulation;
                transform: translateZ(0);
                transition: filter .2s;
                user-select: none;
                -webkit-user-select: none;
                vertical-align: middle;
                white-space: nowrap;
            }

            button:after {
                background-clip: padding-box;
                background-color: #1CB0F6;
                border: solid transparent;
                border-radius: 16px;
                border-width: 0 0 4px;
                bottom: -4px;
                content: "";
                left: 0;
                position: absolute;
                right: 0;
                top: 0;
                z-index: -1;
            }

            button:main, button:focus {
                user-select: auto;
            }

            button:hover:not(:disabled) {
                filter: brightness(1.1);
            }

            button:disabled {
                cursor: auto;
            }

            button:active:after {
                border-width: 0 0 0px;
            }

            button:active {
                padding-bottom: 10px;
            }
            
        </style>
    </body>
</html><?php /**PATH C:\teste\resources\views/vagas/index.blade.php ENDPATH**/ ?>