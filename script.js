// Future TODO: Put everything in a SQL database
var item_map = {
  head: {
    1: [null, null, "/assets/items/set_aviator.png"],
    2: [null, null, "/assets/items/set_blackschool.png"],
    3: [null, null, "/assets/items/set_blueschool.png"],
    4: [null, null, "/assets/items/set_aviator.png"],
    5: [null, null, "/assets/items/set_aviator.png"],
    6: [null, null, "/assets/items/set_aviator.png"],
  },
};

function setContext(context) {
  localStorage.setItem("args", context);
}

function resolveContext() {
  let context = localStorage.getItem("args");
  let target = document.querySelector("#dynamic-parent");

  if (target == null) {
    return;
  }

  switch (context) {
    case "eye":
      document.title = "Eye Accessories | Realm PUBG";
      target.innerHTML = `
      <div class="card">
      <img
        src="/assets/items/eyes_aviatorgoggles.jpg"
        alt=""
        class="card-img-top"
      />
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h5 class="card-text">some quick example text..</h5>
        <a href="#" class="btn btn-primary">Go there</a>
      </div>
    </div>
    <div class="card">
      <img
        src="/assets/items/eyes_aviatorsunglasses.png"
        alt=""
        class="card-img-top"
      />
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h5 class="card-text">some quick example text..</h5>
        <a href="#" class="btn btn-primary">Go there</a>
      </div>
    </div>
    <div class="card">
      <img
        src="/assets/items/eyes_goldenaviator.png"
        alt=""
        class="card-img-top"
      />
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h5 class="card-text">lorem ipsum dolor sit amet</h5>
        <a href="#" class="btn btn-primary">Go there</a>
      </div>
    </div>
    <div class="card">
      <img
        src="/assets/items/eyes_hornglasses.png"
        alt=""
        class="card-img-top"
      />
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h5 class="card-text">some quick example text..</h5>
        <a href="#" class="btn btn-primary">Go there</a>
      </div>
    </div>
    <div class="card">
      <img
        src="/assets/items/eyes_protectiveglasses.png"
        alt=""
        class="card-img-top"
      />
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h5 class="card-text">some quick example text..</h5>
        <a href="#" class="btn btn-primary">Go there</a>
      </div>
    </div>

    <div class="card">
      <img
        src="/assets/items/eyes_punkglasses.png"
        alt=""
        class="card-img-top"
      />
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h5 class="card-text">some quick example text..</h5>
        <a href="#" class="btn btn-primary">Go there</a>
      </div>
    </div>

    <div class="card">
      <img
        src="/assets/items/eyes_rosetinted.png"
        alt=""
        class="card-img-top"
      />
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h5 class="card-text">some quick example text..</h5>
        <a href="#" class="btn btn-primary">Go there</a>
      </div>
    </div>

    <div class="card">
      <img
        src="/assets/items/eyes_tintedbiker.png"
        alt=""
        class="card-img-top"
      />
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h5 class="card-text">some quick example text..</h5>
        <a href="#" class="btn btn-primary">Go there</a>
      </div>
    </div>

    <div class="card">
      <img
        src="/assets/items/eyes_traditionalround.png"
        alt=""
        class="card-img-top"
      />
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h5 class="card-text">some quick example text..</h5>
        <a href="#" class="btn btn-primary">Go there</a>
      </div>
    </div>

    <div class="card">
      <img
        src="/assets/items/eyes_vintageaviator.png"
        alt=""
        class="card-img-top"
      />
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h5 class="card-text">some quick example text..</h5>
        <a href="#" class="btn btn-primary">Go there</a>
      </div>
    </div>`;
      break;
    case "mask":
      document.title = "Masks | Realm PUBG";
      target.innerHTML = `
      <div class="card">
        <img src="/assets/items/mask_cloth.png" alt="" class="card-img-top" />
        <div class="card-body">
          <h4 class="card-title">Card title</h4>
          <h5 class="card-text">some quick example text..</h5>
          <a href="#" class="btn btn-primary">Go there</a>
        </div>
      </div>
      <div class="card">
        <img
          src="/assets/items/mask_fullgas.png"
          alt=""
          class="card-img-top"
        />
        <div class="card-body">
          <h4 class="card-title">Card title</h4>
          <h5 class="card-text">some quick example text..</h5>
          <a href="#" class="btn btn-primary">Go there</a>
        </div>
      </div>
      <div class="card">
        <img src="/assets/items/mask_gas.png" alt="" class="card-img-top" />
        <div class="card-body">
          <h4 class="card-title">Card title</h4>
          <h5 class="card-text">lorem ipsum dolor sit amet</h5>
          <a href="#" class="btn btn-primary">Go there</a>
        </div>
      </div>
      <div class="card">
        <img src="/assets/items/mask_gasv.png" alt="" class="card-img-top" />
        <div class="card-body">
          <h4 class="card-title">Card title</h4>
          <h5 class="card-text">some quick example text..</h5>
          <a href="#" class="btn btn-primary">Go there</a>
        </div>
      </div>
      <div class="card">
        <img
          src="/assets/items/mask_halfgas.png"
          alt=""
          class="card-img-top"
        />
        <div class="card-body">
          <h4 class="card-title">Card title</h4>
          <h5 class="card-text">some quick example text..</h5>
          <a href="#" class="btn btn-primary">Go there</a>
        </div>
      </div>

      <div class="card">
        <img src="/assets/items/mask_leo.png" alt="" class="card-img-top" />
        <div class="card-body">
          <h4 class="card-title">Card title</h4>
          <h5 class="card-text">some quick example text..</h5>
          <a href="#" class="btn btn-primary">Go there</a>
        </div>
      </div>

      <div class="card">
        <img
          src="/assets/items/mask_pubgbandana.png"
          alt=""
          class="card-img-top"
        />
        <div class="card-body">
          <h4 class="card-title">Card title</h4>
          <h5 class="card-text">some quick example text..</h5>
          <a href="#" class="btn btn-primary">Go there</a>
        </div>
      </div>

      <div class="card">
        <img
          src="/assets/items/mask_reaper.png"
          alt=""
          class="card-img-top"
        />
        <div class="card-body">
          <h4 class="card-title">Card title</h4>
          <h5 class="card-text">some quick example text..</h5>
          <a href="#" class="btn btn-primary">Go there</a>
        </div>
      </div>

      <div class="card">
        <img
          src="/assets/items/mask_shroud.png"
          alt=""
          class="card-img-top"
        />
        <div class="card-body">
          <h4 class="card-title">Card title</h4>
          <h5 class="card-text">some quick example text..</h5>
          <a href="#" class="btn btn-primary">Go there</a>
        </div>
      </div>

      <div class="card">
        <img
          src="/assets/items/mask_twitch.png"
          alt=""
          class="card-img-top"
        />
        <div class="card-body">
          <h4 class="card-title">Card title</h4>
          <h5 class="card-text">some quick example text..</h5>
          <a href="#" class="btn btn-primary">Go there</a>
        </div>
      </div>`;
      break;
    case "hand":
      document.title = "Hand garments | Realm PUBG";
      target.innerHTML = `<div class="card">
      <img
        src="/assets/items/hands_combatgloves.png"
        alt=""
        class="card-img-top"
      />
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h5 class="card-text">some quick example text..</h5>
        <a href="#" class="btn btn-primary">Go there</a>
      </div>
    </div>
    <div class="card">
      <img
        src="/assets/items/hands_constable.png"
        alt=""
        class="card-img-top"
      />
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h5 class="card-text">some quick example text..</h5>
        <a href="#" class="btn btn-primary">Go there</a>
      </div>
    </div>
    <div class="card">
      <img
        src="/assets/items/hands_fingerlessc.png"
        alt=""
        class="card-img-top"
      />
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h5 class="card-text">lorem ipsum dolor sit amet</h5>
        <a href="#" class="btn btn-primary">Go there</a>
      </div>
    </div>
    <div class="card">
      <img
        src="/assets/items/hands_fingerlessg.png"
        alt=""
        class="card-img-top"
      />
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h5 class="card-text">some quick example text..</h5>
        <a href="#" class="btn btn-primary">Go there</a>
      </div>
    </div>
    <div class="card">
      <img
        src="/assets/items/hands_fingerlesst.png"
        alt=""
        class="card-img-top"
      />
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h5 class="card-text">some quick example text..</h5>
        <a href="#" class="btn btn-primary">Go there</a>
      </div>
    </div>

    <div class="card">
      <img
        src="/assets/items/hands_pgi.png"
        alt=""
        class="card-img-top"
      />
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h5 class="card-text">some quick example text..</h5>
        <a href="#" class="btn btn-primary">Go there</a>
      </div>
    </div>

    <div class="card">
      <img
        src="/assets/items/hands_punk.png"
        alt=""
        class="card-img-top"
      />
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h5 class="card-text">some quick example text..</h5>
        <a href="#" class="btn btn-primary">Go there</a>
      </div>
    </div>

    <div class="card">
      <img
        src="/assets/items/hands_punkr.png"
        alt=""
        class="card-img-top"
      />
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h5 class="card-text">some quick example text..</h5>
        <a href="#" class="btn btn-primary">Go there</a>
      </div>
    </div>

    <div class="card">
      <img
        src="/assets/items/hands_shroud.png"
        alt=""
        class="card-img-top"
      />
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h5 class="card-text">some quick example text..</h5>
        <a href="#" class="btn btn-primary">Go there</a>
      </div>
    </div>

    <div class="card">
      <img
        src="/assets/items/hands_tacticalgloves.png"
        alt=""
        class="card-img-top"
      />
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h5 class="card-text">some quick example text..</h5>
        <a href="#" class="btn btn-primary">Go there</a>
      </div>
    </div>`;
      break;
    case "belt":
      document.title = "Belts | Realm PUBG";
      target.innerHTML = `
      <div class="card">
      <img
        src="/assets/items/belt_battle.png"
        alt=""
        class="card-img-top"
      />
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h5 class="card-text">some quick example text..</h5>
        <a href="#" class="btn btn-primary">Go there</a>
      </div>
    </div>
    <div class="card">
      <img
        src="/assets/items/belt_black.png"
        alt=""
        class="card-img-top"
      />
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h5 class="card-text">some quick example text..</h5>
        <a href="#" class="btn btn-primary">Go there</a>
      </div>
    </div>
    <div class="card">
      <img
        src="/assets/items/belt_brown.png"
        alt=""
        class="card-img-top"
      />
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h5 class="card-text">lorem ipsum dolor sit amet</h5>
        <a href="#" class="btn btn-primary">Go there</a>
      </div>
    </div>`;
      break;
    case "torso":
      document.title = "Torso | Realm PUBG";
      target.innerHTML = `        <div class="card">
      <img
        src="/assets/items/torso_constable.png"
        alt=""
        class="card-img-top"
      />
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h5 class="card-text">some quick example text..</h5>
        <a href="#" class="btn btn-primary">Go there</a>
      </div>
    </div>
    <div class="card">
      <img
        src="/assets/items/torso_cropped.png"
        alt=""
        class="card-img-top"
      />
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h5 class="card-text">some quick example text..</h5>
        <a href="#" class="btn btn-primary">Go there</a>
      </div>
    </div>
    <div class="card">
      <img
        src="/assets/items/torso_floralblack.png"
        alt=""
        class="card-img-top"
      />
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h5 class="card-text">lorem ipsum dolor sit amet</h5>
        <a href="#" class="btn btn-primary">Go there</a>
      </div>
    </div>
    <div class="card">
      <img
        src="/assets/items/torso_floralprint.png"
        alt=""
        class="card-img-top"
      />
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h5 class="card-text">some quick example text..</h5>
        <a href="#" class="btn btn-primary">Go there</a>
      </div>
    </div>
    <div class="card">
      <img
        src="/assets/items/torso_floralwhite.png"
        alt=""
        class="card-img-top"
      />
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h5 class="card-text">some quick example text..</h5>
        <a href="#" class="btn btn-primary">Go there</a>
      </div>
    </div>

    <div class="card">
      <img
        src="/assets/items/torso_floralyellow.png"
        alt=""
        class="card-img-top"
      />
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h5 class="card-text">some quick example text..</h5>
        <a href="#" class="btn btn-primary">Go there</a>
      </div>
    </div>

    <div class="card">
      <img
        src="/assets/items/torso_longsleeved.png"
        alt=""
        class="card-img-top"
      />
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h5 class="card-text">some quick example text..</h5>
        <a href="#" class="btn btn-primary">Go there</a>
      </div>
    </div>

    <div class="card">
      <img
        src="/assets/items/torso_slevelessbikerbl.png"
        alt=""
        class="card-img-top"
      />
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h5 class="card-text">some quick example text..</h5>
        <a href="#" class="btn btn-primary">Go there</a>
      </div>
    </div>

    <div class="card">
      <img
        src="/assets/items/torso_slevelessbikerbr.png"
        alt=""
        class="card-img-top"
      />
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h5 class="card-text">some quick example text..</h5>
        <a href="#" class="btn btn-primary">Go there</a>
      </div>
    </div>

    <div class="card">
      <img
        src="/assets/items/torso_telnyashka.png"
        alt=""
        class="card-img-top"
      />
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h5 class="card-text">some quick example text..</h5>
        <a href="#" class="btn btn-primary">Go there</a>
      </div>
    </div>

    <div class="card">
      <img
        src="/assets/items/torso_turtleneckbl.png"
        alt=""
        class="card-img-top"
      />
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h5 class="card-text">some quick example text..</h5>
        <a href="#" class="btn btn-primary">Go there</a>
      </div>
    </div>

    <div class="card">
      <img
        src="/assets/items/torso_turtleneckwh.png"
        alt=""
        class="card-img-top"
      />
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h5 class="card-text">some quick example text..</h5>
        <a href="#" class="btn btn-primary">Go there</a>
      </div>
    </div>`;
      break;
    case "leg":
      document.title = "Leg | Realm PUBG";
      target.innerHTML = `        <div class="card">
      <img
        src="/assets/items/legs_baggybl.png"
        alt=""
        class="card-img-top"
      />
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h5 class="card-text">some quick example text..</h5>
        <a href="#" class="btn btn-primary">Go there</a>
      </div>
    </div>
    <div class="card">
      <img
        src="/assets/items/legs_baggybr.png"
        alt=""
        class="card-img-top"
      />
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h5 class="card-text">some quick example text..</h5>
        <a href="#" class="btn btn-primary">Go there</a>
      </div>
    </div>
    <div class="card">
      <img
        src="/assets/items/legs_cavalierjeans.png"
        alt=""
        class="card-img-top"
      />
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h5 class="card-text">lorem ipsum dolor sit amet</h5>
        <a href="#" class="btn btn-primary">Go there</a>
      </div>
    </div>
    <div class="card">
      <img
        src="/assets/items/legs_distressedjeans.png"
        alt=""
        class="card-img-top"
      />
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h5 class="card-text">some quick example text..</h5>
        <a href="#" class="btn btn-primary">Go there</a>
      </div>
    </div>
    <div class="card">
      <img
        src="/assets/items/legs_jeanstan.png"
        alt=""
        class="card-img-top"
      />
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h5 class="card-text">some quick example text..</h5>
        <a href="#" class="btn btn-primary">Go there</a>
      </div>
    </div>

    <div class="card">
      <img
        src="/assets/items/legs_pilotpants.png"
        alt=""
        class="card-img-top"
      />
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h5 class="card-text">some quick example text..</h5>
        <a href="#" class="btn btn-primary">Go there</a>
      </div>
    </div>

    <div class="card">
      <img
        src="/assets/items/legs_pilotpantsbeige.png"
        alt=""
        class="card-img-top"
      />
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h5 class="card-text">some quick example text..</h5>
        <a href="#" class="btn btn-primary">Go there</a>
      </div>
    </div>

    <div class="card">
      <img
        src="/assets/items/legs_reaperpants.png"
        alt=""
        class="card-img-top"
      />
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h5 class="card-text">some quick example text..</h5>
        <a href="#" class="btn btn-primary">Go there</a>
      </div>
    </div>

    <div class="card">
      <img
        src="/assets/items/legs_skirt.png"
        alt=""
        class="card-img-top"
      />
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h5 class="card-text">some quick example text..</h5>
        <a href="#" class="btn btn-primary">Go there</a>
      </div>
    </div>

    <div class="card">
      <img
        src="/assets/items/legs_tacticalpants.png"
        alt=""
        class="card-img-top"
      />
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h5 class="card-text">some quick example text..</h5>
        <a href="#" class="btn btn-primary">Go there</a>
      </div>
    </div>`;
      break;
    case "feet":
      document.title = "Shoes & Stuff | Realm PUBG";
      target.innerHTML = `        <div class="card">
      <img
        src="/assets/items/feet_hitopblue.png"
        alt=""
        class="card-img-top"
      />
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h5 class="card-text">some quick example text..</h5>
        <a href="#" class="btn btn-primary">Go there</a>
      </div>
    </div>
    <div class="card">
      <img
        src="/assets/items/feet_hitopbrown.png"
        alt=""
        class="card-img-top"
      />
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h5 class="card-text">some quick example text..</h5>
        <a href="#" class="btn btn-primary">Go there</a>
      </div>
    </div>
    <div class="card">
      <img
        src="/assets/items/feet_jordan.png"
        alt=""
        class="card-img-top"
      />
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h5 class="card-text">lorem ipsum dolor sit amet</h5>
        <a href="#" class="btn btn-primary">Go there</a>
      </div>
    </div>
    <div class="card">
      <img
        src="/assets/items/feet_miliboots.png"
        alt=""
        class="card-img-top"
      />
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h5 class="card-text">some quick example text..</h5>
        <a href="#" class="btn btn-primary">Go there</a>
      </div>
    </div>
    <div class="card">
      <img
        src="/assets/items/feet_punkboots.png"
        alt=""
        class="card-img-top"
      />
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h5 class="card-text">some quick example text..</h5>
        <a href="#" class="btn btn-primary">Go there</a>
      </div>
    </div>

    <div class="card">
      <img
        src="/assets/items/feet_schoolshoesb.png"
        alt=""
        class="card-img-top"
      />
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h5 class="card-text">some quick example text..</h5>
        <a href="#" class="btn btn-primary">Go there</a>
      </div>
    </div>

    <div class="card">
      <img
        src="/assets/items/feet_schoolshoesbr.png"
        alt=""
        class="card-img-top"
      />
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h5 class="card-text">some quick example text..</h5>
        <a href="#" class="btn btn-primary">Go there</a>
      </div>
    </div>

    <div class="card">
      <img
        src="/assets/items/feet_sneakersb.png"
        alt=""
        class="card-img-top"
      />
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h5 class="card-text">some quick example text..</h5>
        <a href="#" class="btn btn-primary">Go there</a>
      </div>
    </div>

    <div class="card">
      <img
        src="/assets/items/feet_sneakersbloody.png"
        alt=""
        class="card-img-top"
      />
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h5 class="card-text">some quick example text..</h5>
        <a href="#" class="btn btn-primary">Go there</a>
      </div>
    </div>

    <div class="card">
      <img
        src="/assets/items/feet_sneakersw.png"
        alt=""
        class="card-img-top"
      />
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h5 class="card-text">some quick example text..</h5>
        <a href="#" class="btn btn-primary">Go there</a>
      </div>
    </div>`;
      break;
    case "outer":
      document.title = "Outer garments | Realm PUBG";
      target.innerHTML = `        <div class="card">
      <img
        src="/assets/items/outer_blackhoodie.png"
        alt=""
        class="card-img-top"
      />
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h5 class="card-text">some quick example text..</h5>
        <a href="#" class="btn btn-primary">Go there</a>
      </div>
    </div>
    <div class="card">
      <img
        src="/assets/items/outer_bomberjacketmustard.png"
        alt=""
        class="card-img-top"
      />
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h5 class="card-text">some quick example text..</h5>
        <a href="#" class="btn btn-primary">Go there</a>
      </div>
    </div>
    <div class="card">
      <img
        src="/assets/items/outer_doomsday.png"
        alt=""
        class="card-img-top"
      />
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h5 class="card-text">lorem ipsum dolor sit amet</h5>
        <a href="#" class="btn btn-primary">Go there</a>
      </div>
    </div>
    <div class="card">
      <img
        src="/assets/items/outer_militaryjacket.png"
        alt=""
        class="card-img-top"
      />
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h5 class="card-text">some quick example text..</h5>
        <a href="#" class="btn btn-primary">Go there</a>
      </div>
    </div>
    <div class="card">
      <img
        src="/assets/items/outer_militaryjacketblue.png"
        alt=""
        class="card-img-top"
      />
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h5 class="card-text">some quick example text..</h5>
        <a href="#" class="btn btn-primary">Go there</a>
      </div>
    </div>

    <div class="card">
      <img
        src="/assets/items/outer_paijacket.png"
        alt=""
        class="card-img-top"
      />
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h5 class="card-text">some quick example text..</h5>
        <a href="#" class="btn btn-primary">Go there</a>
      </div>
    </div>

    <div class="card">
      <img
        src="/assets/items/outer_pubgpartner.png"
        alt=""
        class="card-img-top"
      />
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h5 class="card-text">some quick example text..</h5>
        <a href="#" class="btn btn-primary">Go there</a>
      </div>
    </div>

    <div class="card">
      <img
        src="/assets/items/outer_skyrocketjacket.png"
        alt=""
        class="card-img-top"
      />
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h5 class="card-text">some quick example text..</h5>
        <a href="#" class="btn btn-primary">Go there</a>
      </div>
    </div>

    <div class="card">
      <img
        src="/assets/items/outer_trenchcoat.png"
        alt=""
        class="card-img-top"
      />
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h5 class="card-text">some quick example text..</h5>
        <a href="#" class="btn btn-primary">Go there</a>
      </div>
    </div>

    <div class="card">
      <img
        src="/assets/items/outer_whitehoodie.png"
        alt=""
        class="card-img-top"
      />
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h5 class="card-text">some quick example text..</h5>
        <a href="#" class="btn btn-primary">Go there</a>
      </div>
    </div>`;
      break;
    case "set":
      document.title = "Sets | Realm PUBG";
      target.innerHTML = ``;
      break;
    default:
      //head
      document.title = "Caps & Stuff | Realm PUBG";
  }
}

function generateCardFrom(src, title, description, etc) {
  return `<div class="card">
  <img
    src="${src ?? "/icon/icon.png"}"
    alt=""
    class="card-img-top"
  />
  <div class="card-body">
    <h4 class="card-title">${title ?? "Card title"}</h4>
    <h5 class="card-text">${
      description ??
      "Card description is written here is a long, understandable manner."
    }</h5>
    ${etc ?? '<a href="#" class="btn btn-primary">Go there</a>'}
  </div>
</div>`;
}

resolveContext();

/* <div class="card">
      <img
        src=""
        alt=""
        class="card-img-top"
      />
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h5 class="card-text">some quick example text..</h5>
        <a href="#" class="btn btn-primary">Go there</a>
      </div>
    </div>
    <div class="card">
      <img
        src="/assets/items/set_blackschool.png"
        alt=""
        class="card-img-top"
      />
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h5 class="card-text">some quick example text..</h5>
        <a href="#" class="btn btn-primary">Go there</a>
      </div>
    </div>
    <div class="card">
      <img
        src="/assets/items/set_blueschool.png"
        alt=""
        class="card-img-top"
      />
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h5 class="card-text">lorem ipsum dolor sit amet</h5>
        <a href="#" class="btn btn-primary">Go there</a>
      </div>
    </div>
    <div class="card">
      <img
        src="/assets/items/set_fireinthehole.png"
        alt=""
        class="card-img-top"
      />
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h5 class="card-text">some quick example text..</h5>
        <a href="#" class="btn btn-primary">Go there</a>
      </div>
    </div>
    <div class="card">
      <img
        src="/assets/items/set_goldrush.png"
        alt=""
        class="card-img-top"
      />
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h5 class="card-text">some quick example text..</h5>
        <a href="#" class="btn btn-primary">Go there</a>
      </div>
    </div>

    <div class="card">
      <img
        src="/assets/items/set_ivoryfemale.png"
        alt=""
        class="card-img-top"
      />
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h5 class="card-text">some quick example text..</h5>
        <a href="#" class="btn btn-primary">Go there</a>
      </div>
    </div>

    <div class="card">
      <img
        src="/assets/items/set_pubgset.png"
        alt=""
        class="card-img-top"
      />
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h5 class="card-text">some quick example text..</h5>
        <a href="#" class="btn btn-primary">Go there</a>
      </div>
    </div>

    <div class="card">
      <img
        src="/assets/items/set_twitch.png"
        alt=""
        class="card-img-top"
      />
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h5 class="card-text">some quick example text..</h5>
        <a href="#" class="btn btn-primary">Go there</a>
      </div>
    </div>

    <div class="card">
      <img
        src="/assets/items/set_vikendi.png"
        alt=""
        class="card-img-top"
      />
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h5 class="card-text">some quick example text..</h5>
        <a href="#" class="btn btn-primary">Go there</a>
      </div>
    </div>

    <div class="card">
      <img
        src="/assets/items/set_whitehatranger.png"
        alt=""
        class="card-img-top"
      />
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <h5 class="card-text">some quick example text..</h5>
        <a href="#" class="btn btn-primary">Go there</a>
      </div>
    </div> */
