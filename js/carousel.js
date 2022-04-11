// fetch('https://api.unsplash.com/photos/random/?count=5&client_id=52d8369eb3e2576a5f5b6423865e074e9c7045761bff1ac5664ff3e0bdb57a1d') 
//   .then(response => response.json())
//   .then(data => {
//     data.forEaach(function(image, i) {
//       document.querySelector("#slide-" + (i+1)).innerHTML = `
//         <img src="${image.urls.regular}" alt="">
//         <p class="author-info">
//           <a href="${image.links.html}?utm_source=slider-thing&utm_medium=referral&utm_campaign=api-credit">Photo by ${image.user.name}</a> on <a href="https://unsplash.com/">Unsplash</a>
//         </p>
//       `;
//     });
//   });

myAudio = document.getElementById("myAudio");
    playAudio = document.getElementById("play");
    stopAudio = document.getElementById("stop");
    pausarAudio = document.getElementById("pause");

    //Añadiendo controles
    playAudio.addEventListener('click', playAudio, true);
    pausarAudio.addEventListener('click', pausar, true);
    stopAudio.addEventListener("click", stopAudio, true);


    function playAudio(){
        myAudio.load();
        myAudio.play();
    }
    function stopAudio(){
        myAudio.pause();
        myAudio.currentTime = 0; 
    }
    function pausar(){
        myAudio.pause();
    }