<!DOCTYPE html>
<html>
<head>
   <title>Coming Soon</title>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
   <meta name="keywords" content="Template, download, 3d, under construction, coming soon, webgl, clouds, html, javascript, design, website">
   <meta name="description" content="Journey through the clouds for your guests while page is not yet ready">

   <link rel="stylesheet" href={{ asset('comming_soon/css/reset.css') }}>
   <link rel="stylesheet" href={{ asset('comming_soon/css/style.css') }}>
   <link rel="stylesheet" href={{ asset('comming_soon/css/icons.css') }}>
   <link rel="stylesheet" href={{ asset('comming_soon/css/fallback.css') }}>
   <style>
      .loading{
         position: fixed;
         width: 100%;
         height: 100%;
         background: #fff;
         z-index: 9999999999999999;
      }
   </style>
</head>
<body>
   <div class="loading"></div>
   <div class="logo"></div>
   <div class="fallback-clouds"></div>

   <!-- SOCIAL ICONS WITH LINKS -->
      <div class="socials transit">
         <a href="https://www.facebook.com/dangchison" target="_blank"><div class="social transit"><i class="fa fa-facebook"></i></div></a>
         <a href="#" target="_blank"><div class="social transit"><i class="fa fa-twitter"></i></div></a>
         <a href="mailto:dangchison@gmail.com?subject=Job%20offer" title="Hire me"><div class="social transit"><i class="fa fa-briefcase"></i></div></a>
      </div>
   <!-- END SOCIAL ICONS -->

   <script src={{ asset('js/jquery-1.11.0.min.js') }}></script>
   <script>
      $(document).ready(function(){
         setTimeout(function(){
            $('.loading').hide();
         },300);
      })
   </script>
   <script src={{ asset('comming_soon/js/modernizr.webgl.js') }}></script>
   <script src={{ asset('comming_soon/js/site.js') }}></script>
   <script src={{ asset('comming_soon/js/three.min.js') }}></script>
   <script src={{ asset('comming_soon/js/clouds.js') }}></script>
   <script src={{ asset('comming_soon/js/fallback.js') }}></script>

   <!-- SHADERS -->
   <script id="vs" type="x-shader/x-vertex">
      varying vec2 vUv;

      void main() {
         vUv = uv;
         gl_Position = projectionMatrix * modelViewMatrix * vec4( position, 1.0 );
      }
   </script>
   <script id="fs" type="x-shader/x-fragment">
      uniform sampler2D map;

      uniform vec3 fogColor;
      uniform float fogNear;
      uniform float fogFar;

      varying vec2 vUv;

      void main() {
         float depth = gl_FragCoord.z / gl_FragCoord.w;
         float fogFactor = smoothstep( fogNear, fogFar, depth );
         gl_FragColor = texture2D( map, vUv );
         gl_FragColor.w *= pow( gl_FragCoord.z, 20.0 );
         gl_FragColor = mix( gl_FragColor, vec4( fogColor, gl_FragColor.w ), fogFactor );
      }
   </script>

</body>
</html>