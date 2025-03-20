<header>
  <div class="container-fluid px-lg-5  mt-5 mb-10">
    <div class="row d-flex align-items-center justify-content-center position-relative" id="header">
      <div class="col-12 px-5 mt-5 d-flex align-items-center justify-content-center z-2 parallax-wrap min-h-95">
        <div class="mt-5 text-center">
          <h1 class="fw-bolder text-nowrap m-0" style="text-shadow: 1px 1px white;">KNORR-BREMSE</h1>
          <div class="px-2">
            <h2 class="fw-bolder mt-0" style="text-shadow: 2px 2px white;">Sportnap</h2>
            <p class="fw-normal">2024. szeptember 21.</p>
            <a href="#register" class="btn btn-lg shadow gray-50 bg-main-blue dark-bg-gray-50 dark-text-main-blue rounded-0 mt-1 text-white">Regisztráció</a>
          </div>
        </div>
      </div>
      <div class="col-12 text-center z-1 position-absolute top-0 parallax-wrap">
        <div class="row position-relative">
          <div parallax="-.6" class="col-12 col-xl-5">
            <img src="<?= public_file('images/banner_1.png') ?>" class="img-fluid" alt="">
          </div>
          <div parallax="-.6" class="col-12 col-md-3 offset-md-0 col-xl-6">
            <img src="<?= public_file('images/banner_2.png') ?>" class="img-fluid" alt="">
          </div>
          <div parallax="-.6" class="col-12 invisible d-md-none col-md-4 ffset-md-0 col-xl-2 h-150">
          </div>
          <div parallax=".6" class="col-12 col-md-3 offset-md-0 col-xl-5 ">
            <img src="<?= public_file('images/banner_4.png') ?>" class="img-fluid" alt="">
          </div>
          <div parallax=".8" class="col-12 col-md-4 col-xl-7">
            <img src="<?= public_file('images/banner_3.png') ?>" class="img-fluid" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
</header>

<!-- <div class="side-nav d-none d-xl-flex align-items-center justify-content-around">
	<a href="#register" class="text-decoration-none main-blue dark-text-gray-50">Regisztráció</a>
	<a href="#rule-tiles" class="text-decoration-none main-blue dark-text-gray-50">Szabályzat</a>
	<a href="#programs" class="text-decoration-none main-blue dark-text-gray-50">Program</a>
</div>
 -->


<div class="container mt-5 mt-lg-0" id="programs">
  <div class="row">
    <div class="col-12">
      <h1 class="fw-bolder light-text-main-blue display-5">Programok</h1>
    </div>
    <div class="col-12 col-lg-6">
      <!-- Section: Timeline -->
      <section class="py-5">
        <ul class="timeline">
          <li class="timeline-item mb-5">
            <h5 class="fw-bold main-blue dark-text-main-orange">07:00 - 08:00</h5>
            <p class="mb-2 fw-bold">Helyszíni regisztráció</p>
          </li>

          <li class="timeline-item mb-5">
            <h5 class="fw-bold main-blue dark-text-main-orange">07:00 - 08:30</h5>
            <p class="mb-2 fw-bold">Reggeli kuponos rendszerben</p>
          </li>

          <li class="timeline-item mb-5">
            <h5 class="fw-bold main-blue dark-text-main-orange">07:45 - 08:15</h5>
            <p class="mb-2 fw-bold">Ügyvezetői tájékoztató, megnyitó</p>
          </li>

          <li class="timeline-item mb-5">
            <h5 class="fw-bold main-blue dark-text-main-orange">08:30 - 12:00</h5>
            <p class="mb-2 fw-bold">Sportbajnokságok és további programok</p>
            <p class="text-muted">
              <b>Bajnokságok</b>: foci, csocsó, ping-pong, kosárlabda, tenisz<br>
              <b>Egyéb programok</b>: Knorr történeti áttekintés - 120 év, Exathlon, jóga, masszázs, tánc, szobakerékpár, logikai játszóház, textilzsák festés, sportszerkölcsönző
            </p>
          </li>

          <li class="timeline-item mb-5">
            <h5 class="fw-bold main-blue dark-text-main-orange">12:00 - 13:30</h5>
            <p class="mb-2 fw-bold">Ebéd kuponos rendszerben</p>
          </li>

          <li class="timeline-item mb-5">
            <h5 class="fw-bold main-blue dark-text-main-orange">13:30 - 14:00</h5>
            <p class="mb-2 fw-bold">Eredményhirdetés és programzárás</p>
          </li>
        </ul>
      </section>
      <!-- Section: Timeline -->
    </div>

    <div class="col-12 col-lg-6  d-flex align-items-center justify-content-center" id="timeline-images">
      <div class="row">
        <div class="col-12 col-md-6 my-4">
          <div class="blur-load">
            <img src="<?= public_file('/images/foci-1.jpg') ?>" loading="lazy" class="img-fluid timeline-img  timeline-img-1 shadow rounded-0" alt="">
          </div>
        </div>
        <div class="col-12 col-md-6 my-4">
          <div class="blur-load">
            <img src="<?= public_file('/images/csocso-3.jpg') ?>" loading="lazy" class="img-fluid timeline-img  timeline-img-2 shadow rounded-0" alt="">
          </div>
        </div>
        <div class="col-12 col-md-6 my-4">
          <div class="blur-load">
            <img src="<?= public_file('/images/joga.jpg') ?>" loading="lazy" class="img-fluid timeline-img  timeline-img-3 shadow rounded-0" alt="">
          </div>
        </div>
        <div class="col-12 col-md-6 my-4">
          <div class="blur-load">
            <img src="<?= public_file('/images/dij.jpg') ?>" loading="lazy" class="img-fluid timeline-img  timeline-img-4 shadow rounded-0" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div id="first-info" class="gray-50 bg-main-blue dark-bg-light-blue min-h-400">
  <div class="container">
    <div class="row">


      <div class="col-12" id="transfer-info">
        <div class="min-h-400 d-flex align-items-center justify-content-center flex-column p-3 py-5">
          <h1 class="fw-bolder  display-5 mb-4 text-slate-50">Transzfer</h1>
          <p class="text-xl fw-bold text-orange-300">
            A Knorr-Bremse telephelyről (1238 Budapest, Helsinki út 105.) és a Kelenföldi pályaudvar Őrmezői oldaláról a Sport11-hez indítunk igény szerint buszjáratot. A buszok 7:00-kor indulnak a telephelyről a Sportnap helyszínére, 07:30-kor a Kelenföldi pályaudvar Őrmezői oldaláról a Sportnap helyszínére, majd 14:45-kor visszafele mindkét irányba. Kérjük, aki a regisztráció során igényelt transzfert, pontosan érkezzen!
          </p>
          <p class="text-xl orange-500 fw-bold text-slate-50">
            Kérjük használjátok a transzfer lehetőséget, a tömegközlekedést, vagy érkezzetek egy autóval többen, mert erősen korlátozott a parkolóhelyek száma. Tömegközlekedési lehetőség a helyszínre: 41-es villamos vagy 187-es busz Kelenföldről (Őrmező felőli oldal).
          </p>
        </div>


        <div class="min-h-200 bg-main-blue dark-bg-light-blue border-0  skew" style="clip-path: polygon(0 0, 0 53%, 100% 0);">
        </div>
      </div>
    </div>
  </div>
</div>

<section class="container min-h-500" id="rule-tiles">
  <div class="row mt-10 mb-5">
    <div class="col-12">
      <h1 class="text-center display-5 fw-bolder main-blue dark-text-gray-50">
        Sportbajnokságok szabályzata
      </h1>
    </div>
  </div>
  <div class="row gap-4 d-flex justify-content-center" id="tiles">
    <div class="col-12 col-lg-5 tile p-0 rounded-4 shadow min-h-300">
      <div class="blur-load">
        <img class="img" loading="lazy" src="<?= public_file('images/foc-2.jpg') ?>" alt="..." />
      </div>
      <div class="wrapper h-100 bg-main-blue opacity-50"></div>
      <div class="content w-75">
        <h1 class="text-white text-center py-3">Foci</h1>
        <p class="text-white">
          Foci – 5+1 fő/csapat + maximum 4 csere, 2*12 perces meccsekkel (a jelentkező csapatok egyenes ági kieséses rendszerben játszanak.
        </p>
        <a href="<?= public_file('documents/foci.pdf') ?>" class="btn btn-outline-warning rounded-0 btn-xl-lg mb-2">
          Játékszabály
        </a>
      </div>
    </div>
    <div class="col-12 col-lg-5 tile p-0  rounded-4 shadow">
      <div class="blur-load">
        <img class="img" loading="lazy" src="<?= public_file('images/csocso-2.jpg') ?>" alt="..." />
      </div>
      <div class="wrapper h-100 bg-main-blue opacity-50"></div>
      <div class="content w-75">
        <h1 class="text-white text-center py-3">Csocsó</h1>
        <p class="text-white">
          Csocsó – 2 fő/csapat, 10 gól vagy 10 perc/meccs , amelyik előbb bekövetkezik, egyenes kieséssel.
        </p>
        <a href="<?= public_file('documents/csocso.pdf') ?>" class="btn btn-outline-warning rounded-0 btn-xl-lg mb-2">
          Játékszabály
        </a>
      </div>
    </div>
    <!--  <div class="col-12 col-lg-5 tile p-0  rounded-4 shadow">
      <div class="blur-load">
        <img class="img" loading="lazy" src="<?= public_file('images/sport.jpg') ?>" alt="..." />
      </div>
      <div class="wrapper  h-100 bg-main-blue opacity-50"></div>
      <div class="content w-75">
        <h1 class="text-white text-center py-3">Sorverseny</h1>
        <p class="text-white">
          Minden csapatból 10 fő küzd meg egymással a pontokért. Igazi retro sorverseny, izgalmas, ügyességi feladatokkal.
        </p>
        <a href="/public/assets/docs/sorverseny-szabalyzat.pdf" class="btn btn-outline-warning rounded-0 btn-xl-lg mb-2">
          Játékszabály
        </a>
      </div>
    </div> -->
    <div class="col-12 col-lg-5 tile p-0 rounded-4 shadow max-h-400">
      <div class="blur-load">
        <img class="img" loading="lazy" src="<?= public_file('images/ping-pong-2.jpg') ?>" alt="..." />
      </div>
      <div class="wrapper  h-100 bg-main-blue opacity-50"></div>
      <div class="content w-75">
        <h1 class="text-white text-center py-3">Ping-Pong</h1>
        <p class="text-white">
          Ping-pong – 2 fő/csapat, egyenes kieséses rendszerben, 1 nyert szettig (21 pont) vagy 15 percig, amelyik előbb bekövetkezik, az elődöntők, a bronzmeccs és a döntő két nyert szettig tartanak. Egyenes kieséssel.
        </p>
        <a href="<?= public_file('documents/ping-pong.pdf') ?>" class="btn btn-outline-warning rounded-0 btn-xl-lg mb-2">
          Játékszabály
        </a>
      </div>
    </div>
  </div>


</section>


<div id="second-info" class="gray-50 bg-main-blue dark-bg-light-blue min-h-400 mt-8">
  <div class="container text-slate-50">
    <div class="row">
      <div class="col-12">
        <div class="min-h-400 d-flex justify-content-center flex-column p-xl-5">
          <p class="text-xl fw-bold">
            A sportbajnokságok meccseinek időbeosztása a regisztráció lezárulását
            követően lesz elérhető Actimón, Intraneten és a csapatkapitányoknál.

          </p>
          <p class="text-xl fw-bold">
            Azok a csapatok, akik nem jelennek meg a kiírt meccsük kezdési időpontjáig,
            automatikusan elveszítik az adott mérkőzést.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="container mt-10">
  <div class="row">
    <div class="col-12">
      <h2 class="my-5">Regisztráció kitöltése</h2>
    </div>
    <div class="col-12">
      <div class="accordion">
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Fontos tudnivalók a regisztráció kitöltéséhez
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <p class="text-danger">
                Az idei Sportnap más, mint az eddigiek. A megszokott bajnokságok és sportos aktivitások mellett megünnepeljük a KnorrBremse 120. születésnapját is, egy jó hangulatú, kötetlen sportos nap keretein belül. A sportnap idén nem a pontszerzésről fog szólni, hanem a sportolás és a kikapcsolódás öröméről, a bajnokságokról, a kötetlen sport és kreatív programokról, az ünnepléről.
              </p>
              <h5>
                Regisztráció és bajnokságok
              </h5>

              <p class="text-danger">
                A regisztráció során a neved, e-mail címed, törzsszámod és költséghelyed megadását követően lehetőséged van 1 bajnokságra jelentkezni. Ne aggódj, ha már része vagy egy jól összeszokott csapatnak, akkor beszéljétek meg, hogy melyik számozású csapatban szeretnétek indulni az adott sportágban és jelentkezéskor jelöljétek be ugyanazt a csapatot. (Ne feledd!/ Felhívjuk a figyelmedet, hogy: Egy fő, csak 1 bajnokságon vehet részt. Pontokat ebben az esetben sem gyűjtenek a csapatok, egyenesági kieséssel zajlanak a meccsek és az első három helyezettet díjjazzuk).
              </p>

              <h5>120 éve a pályán </h5>

              <p class="text-danger">

                120 éves születésnap jegyében bepillantást nyerhetsz az elmúlt évek történéseibe 12 állomáson keresztül. Ha valamelyik állomásra ellátogatsz, a regisztrációkor kapott menetlevélben/füzetben pecséteket gyűjthetsz. Ha mind a 12 pecsétet összegyűjtötted ajándékban részesülsz.



                A sportbajnokságokon és születésnapi aktivitásokon felül további szabadidős tevékenységekkel várunk benneteket. Az ezeken való részvételért nem jár sem pont, sem pecsét.
              </p>

              <div class="alert alert-info">
                <ul>
                  <li>Regisztráció után lehetőségetek van választani 1 csapat vagy páros sportot.</li>
                  <li>Páros sport kiválasztásakor beszéljétek meg, hogy hányas számú csapatba szeretnétek játszani és mindketten azt válasszátok.</li>
                  <li>Szeretnénk felhívni figyelmeteket, hogy a sportnapon való részvételnél az egészségi állapototoknak megfelelő aktivitást válasszatok.</li>
                  <li>A sportnapon való részvétel regisztrációjával egyben kinyilvánításra kerül, hogy nincs olyan ismert betegséged, amely az általad választott sportágban, az intenzívebb mozgás által, annak következményeként az egészségi állapotodban rosszabbodást okozna.</li>
                  <li>A sportbajnokságokra és minden regisztrációhoz kötött programra a jelentkezéseket érkezési sorrendben fogadjuk.</li>
                  <li>A rendezvényre csak egy alkalommal van lehetőség regisztrálni, módosításra nincs lehetőség.</li>
                  <li>Minden munkavállaló 1 bajnokságon vehet részt (vagy foci, vagy csocsó, vagy ping-pong).</li>
                  <li>A csoportos órákra a helyszínen lehet majd jelentkezni, érkezési sorrendben.</li>
                  <li>Előfordulhat, hogy a céges levelezési rendszerünk a regisztráció visszaigazolását automatikusan karanténba helyezi, ezért azokat néhány órás késéssel kapjátok meg a karanténoldalon keresztül.</li>
                </ul>

              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>





  <hr class="mt-5">
  <form action="/user/register" method="POST" enctype="multipart/form-data">
    <?php


    if (!REGISTRATION_OPENED): ?>
      <div class="text-center">

        <h3>A regisztráció lezárult! </h3>
      </div>

      <?php return; ?>
    <?php endif ?>
    <div class=" row mb-4 mt-4">
      <div class="col-12 col-lg-6 my-2">

        <div class="form-outline">

          <label class="form-label" for="form6Example1">
            Név <small><i>(Teljes név)</i></small>
          </label>
          <input name="name" type="text" id="form6Example1" class="form-control" validators='{"name": "name", "required": true, "minLength": 6, "maxLength": 50, "split": true}' value="<?= old('name') ?>" required />
          <?php errors('name', $errors) ?>
        </div>
      </div>

      <div class="col-12 col-lg-6 my-2">
        <div class="form-outline">
          <label class="form-label" for="form6Example2">
            Költséghely <small><i>(Amennyiben nem ismered, kérj segítséget a felettesedtől.)</i></small>
          </label>
          <input type="text" name="class" id="form6Example2" class="form-control" validators='{"name": "class", "required": true, "minLength": 3}' value="<?= old('class') ?>" required />
          <?php errors('class', $errors) ?>

        </div>
      </div>

      <div class="col-12 col-lg-6 my-2">
        <div class="form-outline mb-4">
          <label class="form-label" for="form6Example3">
            E-mail cím
          </label>
          <input type="email" name="email" id="form6Example3" class="form-control" validators='{"name": "email", "required": true, "email": true, "minLength": 7, "maxLength": 100}' value="<?= old('email') ?>" required />
          <?php errors('email', $errors) ?>

        </div>
      </div>

      <div class="col-12 col-lg-6 my-2">
        <div class="form-outline mb-4">
          <label class="form-label" for="form6Example5">
            <span class="red-500"></span>Törzsszám <small>(Csapatok kiválasztásához és regisztráció kitöltéséhez megadása kötelező.) </small>
          </label>
          <input type="number" name="ident_number" id="ident-number" class="form-control" validators='{"name": "ident_number", "required": true, "minLength": 6, "maxLength": 8}' value="<?= old('ident_number') ?>" required />

          <button id="check-ident-num" class="btn bg-violet-500 hover-bg-violet-600 text-white d-flex align-items-center justify-content-center" style="min-width: 100px;">
            Ellenőrzés
            <i class="red-500 fa-solid fa-triangle-exclamation text-xl mx-1"></i>
          </button>
          <?php errors('ident_number', $errors) ?>

        </div>
      </div>




      <div class="col-12 mt-5 d-none" id="team_sport_container">
        <label class="form-label" for="form6Example6">
          <h5>Csapat sport kiválasztása</h5>
        </label>
        <div class="h-300 overflow-y-scroll">

          <table class="table table-striped shadow">
            <thead>
              <tr>
                <th scope="col">Sport</th>
                <th scope="col">Csapat</th>
                <th scope="col">Férőhelyek</th>
                <th scope="col">Jelentkezés</th>
                <th scope="col">Tagok</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($team_sports as $team_sport): ?>
                <?php $count_of_users = (int)$team_sport->max - count($team_sport->users); ?>
                <?php if ((int)$count_of_users <= (int)$team_sport->max && (int)$count_of_users !== 0): ?>
                  <tr>
                    <th scope="row" class="text-nowrap"><?= explode('-', $team_sport->name)[0] ?></th>
                    <td class="text-nowrap"><?= explode('-', $team_sport->name)[1] ?></td>
                    <td>(<?= $count_of_users ?> szabad hely)</td>
                    <td>
                      <input type="radio" name="team_sportRef_id" class="scale-radio" id="team_sport<?= htmlspecialchars($team_sport->id) ?>" value="<?= $team_sport->id ?>" autocomplete="off">
                    </td>
                    <td>
                      <button type="button" class="btn btn-info btn-sm text-white" data-bs-toggle="modal" data-bs-target="#team_sport_sport_modal_<?= $team_sport->id ?>">
                        Tagok megtekintése
                      </button>

                      <div class="modal fade" id="team_sport_sport_modal_<?= $team_sport->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1 class="modal-title fs-5" id="exampleModalLabel">Csapattagok</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <?php $team_sport->users ?>
                              <?php if (!empty($team_sport->users)): ?>
                                <?php foreach ($team_sport->users as $user): ?>
                                  <ul>
                                    <li>
                                      <?= $user->name ?>
                                    </li>
                                  </ul>
                                <?php endforeach ?>
                              <?php else: ?>
                                <h6>Ebbe a csapatba még nem jelentkezett egy sportoló sem.</h6>
                              <?php endif ?>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Bezár</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </td>


                  </tr>
                <?php endif ?>
              <?php endforeach ?>
            </tbody>
          </table>
        </div>
      </div>
      <div class="col-12 my-6 d-none" id="duel_sport_container">
        <label class="form-label" for="form6Example6">
          <h5> Páros sport kiválasztása</h5>
        </label>
        <div class="h-300 overflow-y-scroll">
          <table class="table table-striped shadow  ">
            <thead>
              <tr>
                <th scope="col">Sport</th>
                <th scope="col">Csapat</th>
                <th scope="col">Férőhelyek</th>
                <th scope="col">Jelentkezés</th>
                <th scope="col">Tagok</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($duel_sports as $duel_sport): ?>
                <?php $count_of_users = (int)$duel_sport->max - count($duel_sport->users); ?>
                <?php if ((int)$count_of_users  <= (int)$duel_sport->max && (int)$count_of_users !== 0): ?>
                  <tr>
                    <th scope="row" class="text-nowrap"><?= explode('-', $duel_sport->name)[0] ?></th>
                    <td class="text-nowrap"><?= explode('-', $duel_sport->name)[1] ?></td>
                    <td>
                      (<?= (int)$duel_sport->max - count($duel_sport->users) ?> szabad hely)
                    </td>
                    <td>
                      <input type="radio" class="scale-radio" name="duel_sportRef_id" id="duel_sport_<?= htmlspecialchars($duel_sport->id) ?>" value="<?= $duel_sport->id ?>" autocomplete="off">
                    </td>
                    <td>
                      <button type="button" class="btn btn-info btn-sm text-white" data-bs-toggle="modal" data-bs-target="#duel_sport_modal_<?= $duel_sport->id ?>">
                        Tagok megtekintése
                      </button>
                      <div class="modal fade" id="duel_sport_modal_<?= $duel_sport->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1 class="modal-title fs-5" id="exampleModalLabel">Csapattagok</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <?php $duel_sport->users ?>
                              <?php if (!empty($duel_sport->users)): ?>
                                <?php foreach ($duel_sport->users as $user): ?>
                                  <ul>
                                    <li>
                                      <?= $user->name ?>
                                    </li>
                                  </ul>
                                <?php endforeach ?>
                              <?php else: ?>
                                <h6>Ebbe a csapatba még nem jelentkezett egy sportoló sem.</h6>
                              <?php endif ?>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Bezár</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </td>


                  </tr>
                <?php endif ?>
              <?php endforeach ?>
            </tbody>
          </table>
        </div>

      </div>



      <div class="col-12">

        <div class="form-outline mb-4">
          <label class="form-label" for="form6Example4">
            Igényelsz transzfert?
          </label>
          <select class="form-select" aria-label="Default select example" name="transfer" required>
            <option value="" selected disabled>Transzferigény kiválasztása!</option>
            < <?php foreach (TRANSFERS as $index => $transfer) : ?>
              <option value="<?= $index ?>">
              <?= $transfer ?>
              </option>
            <?php endforeach; ?>
          </select>
          <small class="d-block mt-2 orange-500 px-3">
            Kérünk mindenkit, használjátok a transzfer lehetőséget, a tömegközlekedést, vagy érkezzetek egy autóval többen, mert erősen korlátozott a parkolóhelyek száma. Tömegközlekedési lehetőség a helyszínre: 41-es villamos, vagy 187-es busz Kelenföldről (Őrmező felőli oldal)
            Reggel: indulás 7.00-kor a Knorr-Bremse H105 telephely elől (érkezés: Sport 11 elé)
            Délután: indulás 14.45-kor a Sport 11 elől (érkezés: Knorr-Bremse H105 telephely elé)</small>
        </div>
      </div>

      <div class="col-12">
        <select class="form-select mb-5" aria-label="Default select example" name="actimo" required>
          <option value="" selected disabled>Rendelkezel actimo profillal?</option>
          <option value="1">Igen</option>
          <option value="0">Nem</option>
        </select>
        <div class="form-check d-flex mb-4">
          <input class="form-check-input me-2" type="checkbox" value="" id="vegetarian" name="vegetarian" />
          <label class="form-check-label" for="vegetarian"> Vegetáriánus ebéd igénylése</label>
        </div>

        <div class="form-check d-flex mb-4">
          <input class="form-check-input me-2" type="checkbox" value="" id="guide" required />
          <label class="form-check-label" for="guide"> Elolvastam a jelentkezési útmutatót.</label>
        </div>
        <div class="form-check d-flex mb-4">
          <input class="form-check-input me-2" type="checkbox" value="" id="privacy" required />
          <label class="form-check-label" for="privacy"> A jelen Adatkezelési Tájékoztató tartalmát megismertem, megértettem és elfogadom.</label>
        </div>
        <div class="form-check d-flex mb-4">
          <input class="form-check-input me-2" type="checkbox" value="" id="privacy-perm" required />
          <label class="form-check-label" for="privacy-perm">

            A jelen <a href="#"> Adatkezelési Tájékoztató</a> ismeretében hozzájárulok ahhoz, hogy a Felvételeket,
            a nevemet, a tartózkodási helyemet, valamint beosztásomat, mint személyes adataimat az Adatkezelő,
            a Felvételek felhasználása során, saját marketing és promóciós céljai elérése érdekében
            az Általános Adatvédelmi Rendelet (General Data Protection Regulation, továbbiakban GDPR),
            valamint az információs önrendelkezési jogról és az információszabadságról 2011. évi CXII.
            törvény rendelkezéseinek megfelelően kezelje és megbízottjaihoz, mint adatfeldolgozókhoz továbbítsa

          </label>
        </div>
      </div>

      <div class="d-flex align-items-center justify-content-center">
        <button type="submit" id="register-btn" class="btn btn-lg bg-green-400 hover-bg-green-500 text-white mt-5">Regisztráció</button>
      </div>
      <div class="dark-bg-gray-50 mt-5 w-100 text-center">
        <img class="my-4 mx-2" style="width: 300px;" src="<?= public_file('images/logo.png') ?>" alt="">
      </div>

    </div>
  </form>
</div>


<div class="container-fluid">
  <div class="row">
    <div class="col-12 d-flex flex-column flex-md-row align-items-center justify-content-between  my-3">
      <img class="my-4 dark-bg-gray-50 p-3" style="width: 300px;" src="/public/assets/images/logo.png" alt="">
      <div>
        <p class="m-0 text-center" style="font-style: italic;">Szervező cég:</p>
        <a href="https://max.hu/" target="_blank">
          <img src="<?= public_file('images/Max_Logo_White.png') ?>" class="bg-dark p-3 max-h-200 max-w-200" alt="">
        </a>
      </div>
    </div>
  </div>
</div>
<style>
  .scale-radio {
    transform: scale(1.5);
    margin-right: 5px;
    /* Ha kell, igazítsd a margókat */
  }
</style>