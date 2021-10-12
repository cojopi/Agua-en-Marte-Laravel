<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <title>Gatech: Marte</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.min.css'); }}" media="screen">
        <link type="text/css" rel="stylesheet" charset="UTF-8" href="{{ URL::asset('css/translateelement.css'); }}">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body id="mars" class="io-true isDesktop isChrome" cz-shortcut-listen="true">
        <div id="wrapper" class="visible">
            <div id="scroller">
                <div id="why" class="section collapse">
                    <div class="background" style="background-image: url(&quot;https://www.spacex.com/static/images/backgrounds/mars_why.webp&quot;);"></div>
                    <div class="section-inner resize" style="height: 880px;">
                        <div class="inner-right-middle">
                            <h2 class="animate" style="visibility: inherit; opacity: 1; transform: translate3d(0px, 0px, 0px);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">¿Agua en Marte?</font></font></h2>
                            <p class="animate" style="visibility: inherit; opacity: 1; transform: translate3d(0px, 0px, 0px);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">A una distancia promedio de 140 millones de millas, Marte es uno de los vecinos habitables más cercanos de la Tierra. </font><font style="vertical-align: inherit;">Marte está de nuevo aproximadamente a la mitad de la distancia del Sol que la Tierra, por lo que todavía tiene una luz solar decente. </font><font style="vertical-align: inherit;">Hace un poco de frío, pero podemos calentarlo. </font><font style="vertical-align: inherit;">Su atmósfera es principalmente CO2 con algo de nitrógeno y argón y algunos otros oligoelementos, lo que significa que podemos cultivar plantas en Marte simplemente comprimiendo la atmósfera. </font><font style="vertical-align: inherit;">La gravedad en Marte es aproximadamente el 38% de la de la Tierra, por lo que podría levantar cosas pesadas y brincar. </font><font style="vertical-align: inherit;">Además, el día se acerca notablemente al de la Tierra.</font></font></p>
                            <table class="data animate" style="visibility: inherit; opacity: 1; transform: translate3d(0px, 0px, 0px);">
                                <tbody>
                                    <tr>
                                        <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Coordenadas x:</font></font></td>
                                        <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><input id="coordinateX" class="form-control" type="text" value="{{ $expedition->coordinateX }}"></font></font></td>
                                    </tr>
                                    <tr>
                                        <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Coordenadas y:</font></font></td>
                                        <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><input id="coordinateY" class="form-control" type="text" value="{{ $expedition->coordinateY }}"></font></font></td>
                                    </tr>
                                    <tr>
                                        <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tamaño:</font></font></td>
                                        <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $expedition->size }}</font></font></td>
                                    </tr>
                                    <tr>
                                        <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">¿Existe agua?: </font></font></td>
                                        <td><font style="vertical-align: inherit;"><font id="hasWater" style="vertical-align: inherit;">{{ $expedition->hasWater }}</font></font></td>
                                    </tr>
                                    <tr>
                                        <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">¿Es potable?: </font></font></td>
                                        <td><font style="vertical-align: inherit;"><font id="isDrinkable" style="vertical-align: inherit;">{{ $expedition->isDrinkable }}</font></font></td>
                                    </tr>
                                    <tr>
                                        <td><button id="sendExpedition" class="btn btn-primary">ENVIAR EXPEDICION</button></td>
                                        <td><button id="analyzeWater" class="btn btn-secondary">ANALIZAR MUESTRAS</button></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><button id="corregirDatos" class="btn btn-info">CORREGIR</button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

                <script>
                    $('#sendExpedition').click(function() {
                        $.ajax({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            type: "POST",
                            url: '/expedition/explore',
                            data: { uuid: {!! json_encode($expedition->uuid) !!} }
                        }).done(function( expeditionResults ) {
                            if (expeditionResults.hasWater) $('#hasWater').text('SÍ');
                            else  $('#hasWater').text('NO');
                        });
                    });

                    $('#analyzeWater').click(function() {
                        $.ajax({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            type: "POST",
                            url: '/expedition/analyze',
                            data: { uuid: {!! json_encode($expedition->uuid) !!} }
                        }).done(function( analyzedResults ) {
                            if (analyzedResults.isDrinkable) $('#isDrinkable').text('SÍ');
                            else  $('#isDrinkable').text('NO');
                        });
                    });

                    $('#corregirDatos').click(function() {
                        $.ajax({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            type: "PUT",
                            url: '/expedition/fix',
                            data: { uuid: {!! json_encode($expedition->uuid) !!}, coordinateX: $('#coordinateX').val(), coordinateY: $('#coordinateY').val() }
                        }).done(function( analyzedResults ) {
                            if (analyzedResults.isDrinkable) $('#isDrinkable').text('SÍ');
                            else  $('#isDrinkable').text('NO');
                        });
                    });
                </script>
        </div>
    </body>
</html>
