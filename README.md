<!-- <div class="container mt-10">
  <div class="row">
    <div class="col-12">
      <form>
        <div class="row my-3">
          <div class="form-group col-md-6">
            <label for="inputName">Név <small><i>(Teljes név)</i></small></label>
            <input type="text" class="form-control" id="inputName" placeholder="Teljes név" required>
          </div>
          <div class="form-group col-md-6">
            <label for="inputCostCenter">Költséghely <small><i>(Amennyiben nem ismered, kérj segítséget a felettesedtől.)</i></small></label>
            <input type="text" class="form-control" id="inputCostCenter" placeholder="Költséghely" required>
          </div>
        </div>
        <div class="row my-3">
          <div class="form-group col-md-6">
            <label for="inputEmail">E-mail cím</label>
            <input type="email" class="form-control" id="inputEmail" placeholder="E-mail cím" required>
          </div>
          <div class="form-group col-md-6">
            <label for="inputRegistrationNumber">
              Törzsszám <small><i>(Írd be az érvényes törzsszámod és kattints az ellenőrzés gombra)</i></small>
            </label>
            <input type="text" class="form-control" id="inputRegistrationNumber" placeholder="Törzsszám" required>
          </div>
        </div>
        <div class="form-group">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck" required>
            <label class="form-check-label" for="gridCheck">
              Elfogadom a feltételeket
            </label>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Regisztráció</button>
      </form>
    </div>
  </div>
</div>


<div id="test-btn" class="btn btn-danger" onclick="getTeamSports()">Csapat sportok</div>
<div id="test-btn" class="btn btn-danger" onclick="getDuelSports()">Páros sportok</div>
 -->

<div class="container mt-10">
  <div class="row">
    <div class="col-12">
      <p>
        A csoportos órákra a helyszínen lehet majd jelentkezni, érkezési sorrendben.
        Előfordulhat, hogy a céges levelezési rendszerünk a regisztráció visszaigazolását automatikusan karanténba helyezi, ezért azokat néhány órás késéssel kapjátok meg a karanténoldalon keresztül.
      </p>

    </div>
  </div>





  <hr class="mt-5">
  <form action="/user/register" method="POST" enctype="multipart/form-data">
    <?php if (!REGISTRATION_OPENED): ?>
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
            <button type="button" class="btn p-1 m-0" data-bs-toggle="popover" title="Segítség" data-bs-content="Kérjük, hogy a teljes nevedet írd be, elöl legyen a vezetéknév, mögötte a keresztnév.">
              <i class="fa-solid fa-circle-info text-2xl"></i>
            </button>
          </label>
          <input name="name" type="text" id="form6Example1" class="form-control" validators='{"name": "name", "required": true, "minLength": 6, "maxLength": 50, "split": true}' required />
        </div>
      </div>

      <div class="col-12 col-lg-6 my-2">
        <div class="form-outline">
          <label class="form-label" for="form6Example2">
            Költséghely <small><i>(Amennyiben nem ismered, kérj segítséget a felettesedtől.)</i></small>
            <button type="button" class="btn p-1  m-0" data-bs-toggle="popover" title="Segítség" data-bs-content="Amennyiben nem ismered, kérj segítséget a felettesedtől.">
              <i class="fa-solid fa-circle-info text-2xl"></i>
            </button>
          </label>
          <input type="text" name="class" id="form6Example2" class="form-control" validators='{"name": "class", "required": true, "minLength": 3}' required />
        </div>
      </div>

      <div class="col-12 col-lg-6 my-2">
        <div class="form-outline mb-4">
          <label class="form-label" for="form6Example3">
            E-mail cím
            <button type="button" class="btn p-1  m-0" data-bs-toggle="popover" title="Segítség" data-bs-content="A céges és a magán e-mail címet egyaránt elfogadjuk.">
              <i class="fa-solid fa-circle-info text-2xl"></i>
            </button>
          </label>
          <input type="email" name="email" id="form6Example3" class="form-control" validators='{"name": "email", "required": true, "email": true, "minLength": 7}' required />
        </div>
      </div>

      <div class="col-12 col-lg-6 my-2">
        <div class="form-outline mb-4">
          <label class="form-label" for="form6Example5">
            <span class="red-500"></span>Törzsszám <small> </small>
            <button type="button" class="btn p-1  m-0" data-bs-toggle="popover" title="Segítség" data-bs-content="A belépőkártyádon található 6 vagy 8 jegyű szám. Figyelem! A jelentkezés folytatásához az ellenőrzése kötelező">
              <i class="fa-solid fa-circle-info text-2xl"></i>
            </button>
          </label>
          <input type="number" name="ident-number" id="ident-number" class="form-control" validators='{"name": "ident-number", "required": true, "minLength": 6, "maxLength": 8}' required />

          <button id="check-ident-num" class="btn bg-violet-500 hover-bg-violet-600 text-white d-flex align-items-center justify-content-center" style="min-width: 100px;">
            Ellenőrzés
            <i class="red-500 fa-solid fa-triangle-exclamation text-xl mx-1"></i>
          </button>
        </div>
      </div>

      <div class="col-12 col-lg-7" id="team-sports-container">

        <div class="form-outline mb-4">
          <label class="form-label" for="form6Example6">
            Csapat sport kiválasztása <small></small>
            <button type="button" class="btn p-1  m-0" data-bs-toggle="popover" title="Segítség" data-bs-content="Kérjük, figyelmesen olvasd el az összes választható sport nevét.">
              <i class="fa-solid fa-circle-info text-2xl"></i>
            </button>
          </label>
          <select class="form-select lg-w-75" aria-label="Select team sport" id="team-sport" name="team-sport" required>
            <?php foreach ($team_sports as $team_sport): ?>
              <option value="<?= $team_sport->id ?>"><?= $team_sport->name ?></option>
            <?php endforeach ?>
          </select>
        </div>
      </div>
      <div class="col-12 col-lg-7" id="duel-sports-container">
        <div class="form-outline mb-4">
          <label class="form-label" for="form6Example6">
            Páros sport kiválasztása <small><i>(Főcsapat kiválasztása után válaszd ki a páros sportot)</i> </small>
            <button type="button" class="btn p-1  m-0" data-bs-toggle="popover" title="Segítség" data-bs-content="Kérjük, figyelmesen olvasd el az összes választható sport nevét.">
              <i class="fa-solid fa-circle-info text-2xl"></i>
            </button>
          </label>
          <select class="form-select" aria-label="Select main team" id="duel-spors" name="duel-sport" required>
            <?php foreach ($duel_sports as $duel_sport): ?>
              <?php if ((int)$duel_sport->max - count($duel_sport->users) > 0): ?>
                <option value="<?= $duel_sport->id ?>"><?= $duel_sport->name ?> - (<?= (int)$duel_sport->max - count($duel_sport->users) ?> szabad hely)</option>
              <?php endif ?>
            <?php endforeach ?>
          </select>
        </div>
      </div>



      <div class="col-12">

        <div class="form-outline mb-4">
          <label class="form-label" for="form6Example4">
            Igényelsz transzfert?
            <button type="button" class="btn p-1  m-0" data-bs-toggle="popover" title="Segítség" data-bs-content="A Knorr-Bremse telephelyről (1238 Budapest, Helsinki út 105.) a Sport11-hez indítunk igény szerint buszjáratot. A buszok 7.00-kor indulnak a telephelyről a Sportnap helyszínére, majd 14.15-kor visszafele. Kérjük, aki igényel transzfert, pontosan érkezzen.">
              <i class="fa-solid fa-circle-info text-2xl"></i>
            </button>
          </label>
          <select class="form-select" aria-label="Default select example" name="transfer" required>
            <option value="" selected disabled>Transzferigény kiválasztása!</option>
            <!-- 			<?php foreach ([] as $index => $transfer) : ?>
										<option value="<?= $index ?>">
											<?= $transfer ?>
										</option>
									<?php endforeach; ?> -->
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

      <div class="modal-footer mt-5 d-flex align-items-center flex-column">
        <div class="d-flex align-items-center justify-content-center gap-3">
          <button type="button" class="btn  btn-lg  btn-secondary" data-bs-dismiss="modal">Bezár</button>
          <button type="submit" class="btn btn-lg bg-green-400 hover-bg-green-500 text-white">Regisztráció</button>
        </div>
        <div class="dark-bg-gray-50 mt-5 w-100 text-center">
          <img class="my-4 mx-2" style="width: 300px;" src="/public/assets/images/logo.png" alt="">
        </div>
      </div>



    </div>
  </form>
</div>
</div>
</div># kbu_sport
# kbu_sport
