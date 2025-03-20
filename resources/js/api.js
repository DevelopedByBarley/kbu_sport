


const checkIdButton = document.getElementById('check-ident-num');

function getTeamSports() {
  axios.get('/api/team-sports')
    .then(res => console.log(res.data)) // res.json helyett res.data
    .catch(error => console.error('API hiba:', error)); // Hiba kezelés
}

function getDuelSports() {
  axios.get('/api/duel-sports')
    .then(res => console.log(res.data)) // res.json helyett res.data
    .catch(error => console.error('API hiba:', error)); // Hiba kezelés
}


checkIdButton.addEventListener('click', (e) => {
  e.preventDefault(); // Megakadályozza az alapértelmezett űrlapküldést
  const id_input = document.getElementById('ident-number');
  const duelSportsContainer = document.getElementById('duel_sport_container')
  const teamSportsContainer = document.getElementById('team_sport_container')

  if (id_input.value.length < 1 || id_input.value.length > 8 || id_input.value.length < 6) {
    Toastify({
      text: "A mező helyes kitöltése kötlező",
      duration: 3000,
      destination: "https://github.com/apvarun/toastify-js",
      newWindow: true,
      close: true,
      gravity: "center", // `top` or `bottom`
      position: "center", // `left`, `center` or `right`
      stopOnFocus: true, // Prevents dismissing of toast on hover
      style: {
        background: "#FF0000",
        padding: "40px"
      },
      onClick: function () { } // Callback after click
    }).showToast();
    duelSportsContainer.classList.add('d-none')
    teamSportsContainer.classList.add('d-none')
    return
  }

  axios.get('/api/user/' + id_input.value)
    .then(res => {
      const status = res.data;
      console.log(status);
      if (parseInt(status) === 0) {
        Toastify({
          text: "Törzsszám elfogadva",
          duration: 3000,
          destination: "https://github.com/apvarun/toastify-js",
          newWindow: true,
          close: true,
          gravity: "top", // `top` or `bottom`
          position: "center", // `left`, `center` or `right`
          stopOnFocus: true, // Prevents dismissing of toast on hover
          style: {
            background: "#097969",
            padding: "40px"

          },
          onClick: function () { } // Callback after click
        }).showToast();

        duelSportsContainer.classList.remove('d-none')
        teamSportsContainer.classList.remove('d-none')

      } else {
        Toastify({
          text: "A törzsszám elutasítva",
          duration: 3000,
          destination: "https://github.com/apvarun/toastify-js",
          newWindow: true,
          close: true,
          gravity: "center", // `top` or `bottom`
          position: "center", // `left`, `center` or `right`
          stopOnFocus: true, // Prevents dismissing of toast on hover
          style: {
            background: "#FF0000",
            padding: "40px"

          },
          onClick: function () { } // Callback after click
        }).showToast();

        duelSportsContainer.classList.add('d-none')
        teamSportsContainer.classList.add('d-none')
      }
    })
    .catch(error => {
      console.error('API hiba:', error); // Hiba kezelés
    });
})

