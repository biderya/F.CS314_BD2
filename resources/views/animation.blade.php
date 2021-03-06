<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>animation</title>
</head>
<body>
<div id="covid19-animation">
  <div class="back--1"><img src="https://freepik.cdnpk.net/img/campaigns/covid19/1b.svg" alt=""></div>
  <div class="back--2"><img src="https://freepik.cdnpk.net/img/campaigns/covid19/2b.svg" alt=""></div>
  <div class="back--3"><img src="https://freepik.cdnpk.net/img/campaigns/covid19/3b.svg" alt=""></div>
  <div class="back--4"><img src="https://freepik.cdnpk.net/img/campaigns/covid19/4b.svg" alt=""></div>
  <div class="back--5"><img src="https://freepik.cdnpk.net/img/campaigns/covid19/5b.svg" alt=""></div>
  <div class="back--6"><img src="https://freepik.cdnpk.net/img/campaigns/covid19/6b.svg" alt=""></div>
  <div class="back--7"><img src="https://freepik.cdnpk.net/img/campaigns/covid19/7b.svg" alt=""></div>
  <div class="back--8"><img src="https://freepik.cdnpk.net/img/campaigns/covid19/8b.svg" alt=""></div>
  <div class="forg--1"><img src="https://freepik.cdnpk.net/img/campaigns/covid19/1f.svg" alt=""></div>
  <div class="forg--2"><img src="https://freepik.cdnpk.net/img/campaigns/covid19/2f.svg" alt=""></div>
  <div class="forg--3"><img src="https://freepik.cdnpk.net/img/campaigns/covid19/3f.svg" alt=""></div>
  <div class="forg--4"><img src="https://freepik.cdnpk.net/img/campaigns/covid19/4f.svg" alt=""></div>
  <div class="forg--5"><img src="https://freepik.cdnpk.net/img/campaigns/covid19/5f.svg" alt=""></div>
</div>
</body>
<style>

#covid19-animation {
  position: absolute;
  top: 50%;
  right: 0;
  width: 540px;
  height: 200px;
  transform: translateY(-50%);
  pointer-events: none;
}

#covid19-animation .forg--1 {
  position: absolute;
  bottom: 50px;
  left: 115px;
  -webkit-animation: leftRight 6s ease-in-out infinite;
  -moz-animation: leftRight 6s ease-in-out infinite;
  animation: leftRight 6s ease-in-out infinite;
  animation-delay: 200ms;
}

#covid19-animation .forg--1 img {
  -webkit-animation: floating 8s ease-in-out infinite;
  -moz-animation: floating 8s ease-in-out infinite;
  animation: floating 8s ease-in-out infinite;
  animation-delay: 200ms;
}

#covid19-animation .forg--2 {
  position: absolute;
  top: 70px;
  left: 260px;
  -webkit-animation: leftRight 5s ease-in-out infinite;
  -moz-animation: leftRight 5s ease-in-out infinite;
  animation: leftRight 5s ease-in-out infinite;
}

#covid19-animation .forg--2 img {
  -webkit-animation: floating 7s ease-in-out infinite;
  -moz-animation: floating 7s ease-in-out infinite;
  animation: floating 7s ease-in-out infinite;
}

#covid19-animation .forg--3 {
  position: absolute;
  bottom: 80px;
  left: 390px;
  -webkit-animation: leftRight 7s ease-in-out infinite;
  -moz-animation: leftRight 7s ease-in-out infinite;
  animation: leftRight 7s ease-in-out infinite;
  animation-delay: 200ms;
}

#covid19-animation .forg--3 img {
  -webkit-animation: floating 9s ease-in-out infinite;
  -moz-animation: floating 9s ease-in-out infinite;
  animation: floating 9s ease-in-out infinite;
  animation-delay: 200ms;
}

#covid19-animation .forg--4 {
  position: absolute;
  top: 30px;
  left: 390px;
  -webkit-animation: leftRight 5.5s ease-in-out infinite;
  -moz-animation: leftRight 5.5s ease-in-out infinite;
  animation: leftRight 5.5s ease-in-out infinite;
}

#covid19-animation .forg--4 img {
  -webkit-animation: floating 7.5s ease-in-out infinite;
  -moz-animation: floating 7.5s ease-in-out infinite;
  animation: floating 7.5s ease-in-out infinite;
}

#covid19-animation .forg--5 {
  position: absolute;
  bottom: 70px;
  left: 440px;
  -webkit-animation: leftRight 5s ease-in-out infinite;
  -moz-animation: leftRight 5s ease-in-out infinite;
  animation: leftRight 5s ease-in-out infinite;
}

#covid19-animation .forg--5 img {
  -webkit-animation: floating 7s ease-in-out infinite;
  -moz-animation: floating 7s ease-in-out infinite;
  animation: floating 7s ease-in-out infinite;
}

#covid19-animation .back--1 {
  position: absolute;
  top: 60px;
  left: 60px;
  -webkit-animation: leftRight 6s ease-in-out infinite;
  -moz-animation: leftRight 6s ease-in-out infinite;
  animation: leftRight 6s ease-in-out infinite;
  animation-delay: 400ms;
}

#covid19-animation .back--1 img {
  -webkit-animation: floating 8s ease-in-out infinite;
  -moz-animation: floating 8s ease-in-out infinite;
  animation: floating 8s ease-in-out infinite;
  animation-delay: 400ms;
}

#covid19-animation .back--2 {
  position: absolute;
  bottom: 80px;
  left: 0px;
  -webkit-animation: leftRight 5s ease-in-out infinite;
  -moz-animation: leftRight 5s ease-in-out infinite;
  animation: leftRight 5s ease-in-out infinite;
}

#covid19-animation .back--2 img {
  -webkit-animation: floating 7s ease-in-out infinite;
  -moz-animation: floating 7s ease-in-out infinite;
  animation: floating 7s ease-in-out infinite;
}

#covid19-animation .back--3 {
  position: absolute;
  bottom: 44px;
  left: 60px;
  -webkit-animation: leftRight 6s ease-in-out infinite;
  -moz-animation: leftRight 6s ease-in-out infinite;
  animation: leftRight 6s ease-in-out infinite;
  animation-delay: 300ms;
}

#covid19-animation .back--3 img {
  -webkit-animation: floating 7s ease-in-out infinite;
  -moz-animation: floating 7s ease-in-out infinite;
  animation: floating 7s ease-in-out infinite;
  animation-delay: 300ms;
}

#covid19-animation .back--4 {
  position: absolute;
  bottom: 90px;
  left: 160px;
  -webkit-animation: leftRight 7s ease-in-out infinite;
  -moz-animation: leftRight 7s ease-in-out infinite;
  animation: leftRight 7s ease-in-out infinite;
}

#covid19-animation .back--4 img {
  -webkit-animation: floating 9s ease-in-out infinite;
  -moz-animation: floating 9s ease-in-out infinite;
  animation: floating 9s ease-in-out infinite;
}

#covid19-animation .back--5 {
  position: absolute;
  top: 10px;
  left: 170px;
  -webkit-animation: leftRight 6s ease-in-out infinite;
  -moz-animation: leftRight 6s ease-in-out infinite;
  animation: leftRight 6s ease-in-out infinite;
  animation-delay: 500ms;
}

#covid19-animation .back--5 img {
  -webkit-animation: floating 7s ease-in-out infinite;
  -moz-animation: floating 7s ease-in-out infinite;
  animation: floating 7s ease-in-out infinite;
  animation-delay: 500ms;
}

#covid19-animation .back--6 {
  position: absolute;
  bottom: 60px;
  left: 260px;
  -webkit-animation: leftRight 5s ease-in-out infinite;
  -moz-animation: leftRight 5s ease-in-out infinite;
  animation: leftRight 5s ease-in-out infinite;
}

#covid19-animation .back--6 img {
  -webkit-animation: floating 7s ease-in-out infinite;
  -moz-animation: floating 7s ease-in-out infinite;
  animation: floating 7s ease-in-out infinite;
}

#covid19-animation .back--7 {
  position: absolute;
  bottom: -24px;
  left: 262px;
  -webkit-animation: leftRight 6s ease-in-out infinite;
  -moz-animation: leftRight 6s ease-in-out infinite;
  animation: leftRight 6s ease-in-out infinite;
}

#covid19-animation .back--7 img {
  -webkit-animation: floating 9s ease-in-out infinite;
  -moz-animation: floating 9s ease-in-out infinite;
  animation: floating 9s ease-in-out infinite;
}

#covid19-animation .back--8 {
  position: absolute;
  top: 16px;
  left: 440px;
  -webkit-animation: leftRight 4s ease-in-out infinite;
  -moz-animation: leftRight 4s ease-in-out infinite;
  animation: leftRight 4s ease-in-out infinite;
}

#covid19-animation .back--8 img {
  -webkit-animation: floating 6s ease-in-out infinite;
  -moz-animation: floating 6s ease-in-out infinite;
  animation: floating 6s ease-in-out infinite;
}

@keyframes floating {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }

  50% {
    -webkit-transform: translateY(20px);
    -moz-transform: translateY(20px);
    -ms-transform: translateY(20px);
    -o-transform: translateY(20px);
    transform: translateY(20px);
  }

  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
}

@keyframes leftRight {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }

  50% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }

  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

</style>
</html>