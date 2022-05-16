<head>
    <style>
body{margin: 0!important}
@import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap');
*,*::before,*::after{box-sizing:border-box}
html,body{font-size:12px;font-family:'Quicksand',sans-serif;overflow:hidden;text-align:center;line-height:1.4;overflow:hidden;width:100%}
.arlinacode,html,body{height:100vh}
@keyframes charge{from{transform:translateY(2rem);opacity:0}to{transform:translateY(0);opacity:1}}
@keyframes wave{from{transform:rotate(0deg)}to{transform:rotate(360deg)}}
.arlinacode__content{color:#fff;font-weight:300;padding:0 2rem}
.arlinacode__content,.arlinacode__footer{width:100%;position:relative;z-index:100}
.arlinacode,.arlinacode__content,.arlinacode__footer{display:flex;align-items:center;justify-content:center}
.arlinacode,.arlinacode__content{flex-direction:column}
.arlinacode__footer{flex-wrap:wrap;max-width:600px;opacity:0;animation:charge .5s .5s forwards}
.arlinacode__subtitle,.arlinacode__title{margin:0}
.arlinacode__footer a{text-decoration:none;width:40%;padding:12px 18px;font-size:16px;margin:20px auto 0 auto;cursor:pointer;color:#fff;border:2px solid;border-radius:99em;outline:none;transition:all .3s}
.arlinacode__footer a:active,.arlinacode__footer a:focus,{outline:none}
.arlinacode__footer a:hover{background-color:#fff;color:#222;border-color:#fff}
.arlinacode__subtitle,.arlinacode__text,.arlinacode__title{backface-visibility:hidden}
.arlinacode__title{font-size:2.4rem;font-weight:700;opacity:0;animation:charge .5s forwards}
.arlinacode__text{max-width:50rem;font-weight:normal;padding:2rem 0;font-size:1.3rem;color:rgba(255,255,255,.9);opacity:0;animation:charge .5s .3s forwards}
.wave{opacity:.6;position:absolute;bottom:40%;left:50%;width:6000px;height:6000px;background:#000;margin-left:-3000px;transform-origin:50% 48%;border-radius:46%;animation:wave 12s infinite linear;pointer-events:none}
.wave2{animation:wave 28s infinite linear;opacity:.3}
.wave3{animation:wave 20s infinite linear;opacity:.1}
.wave{background:#000}
.arlinacode{position:relative;background-color:#484d78;z-index:999}
.ripple{background-position:center;transition:background 0.8s}
.ripple:hover{background:#37474F radial-gradient(circle,transparent 1%,#263238 1%) center/15000%}
.ripple:active{background-color:#37474F;background-size:100%;transition:background 0s}
@media (min-width:768px){.arlinacode__title{font-size:3.4rem;margin:0 auto 20px auto}.arlinacode__text{font-size:1.5rem}}

    </style>
</head>

<body>
    <div class='arlinacode'>
        <header class='arlinacode__content'>
          <h1 class='arlinacode__title'>ERROR 404</h1>
          <div class='arlinacode__text'>No pudimos encontrar la página que está buscando. Intente con otra página y verifique la URL que ingresó.</div>
        </header>
        <footer class='arlinacode__footer'>
            <a href='{{ route('home')}}' class='ripple tombol'>Volver al inicio</a>
        </footer>
        <div class='wave'></div>
        <div class='wave wave2'></div>
        <div class='wave wave3'></div>
      </div>
</body>