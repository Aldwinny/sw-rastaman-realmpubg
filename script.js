// Future TODO: Put everything in a SQL database
let debug = false;
var level = {
  normal: "rgb(109, 245, 116)",
  rare: "rgb(240, 176, 57)",
  epic: "rgb(209, 57, 240)",
  legend: "rgb(221, 211, 76)",
};

// TODO: Schema from [title, desc, link] --> [title, level, link]

var item_map = {
  head: {
    1: [null, null, "/assets/items/head_beanie.png"],
    2: [null, null, "/assets/items/head_camocap.png"],
    3: [null, null, "/assets/items/head_captainhat.png"],
    4: [null, null, "/assets/items/head_cowboybr.png"],
    5: [null, null, "/assets/items/head_cowboywh.png"],
    6: [null, null, "/assets/items/head_guardcap.png"],
    7: [null, null, "/assets/items/head_milihead.png"],
    8: [null, null, "/assets/items/head_paddycap.png"],
    9: [null, null, "/assets/items/head_vkbeanie.png"],
    10: [null, null, "/assets/items/head_wackyjacky101.png"],
  },
  set: {
    1: [null, null, "/assets/items/set_aviator.png"],
    2: [null, null, "/assets/items/set_blackschool.png"],
    3: [null, null, "/assets/items/set_blueschool.png"],
    4: [null, null, "/assets/items/set_fireinthehole.png"],
    5: [null, null, "/assets/items/set_goldrush.png"],
    6: [null, null, "/assets/items/set_ivoryfemale.png"],
    7: [null, null, "/assets/items/set_pubgset.png"],
    8: [null, null, "/assets/items/set_twitch.png"],
    9: [null, null, "/assets/items/set_vikendi.png"],
    10: [null, null, "/assets/items/set_whitehatranger.png"],
  },
  outer: {
    1: [null, null, "/assets/items/outer_blackhoodie.png"],
    2: [null, null, "/assets/items/outer_bomberjacketmustard.png"],
    3: [null, null, "/assets/items/outer_doomsday.png"],
    4: [null, null, "/assets/items/outer_militaryjacket.png"],
    5: [null, null, "/assets/items/outer_militaryjacketblue.png"],
    6: [null, null, "/assets/items/outer_paijacket.png"],
    7: [null, null, "/assets/items/outer_pubgpartner.png"],
    8: [null, null, "/assets/items/outer_skyrocketjacket.png"],
    9: [null, null, "/assets/items/outer_trenchcoat.png"],
    10: [null, null, "/assets/items/outer_whitehoodie.png"],
  },
  feet: {
    1: [null, null, "/assets/items/feet_hitopblue.png"],
    2: [null, null, "/assets/items/feet_hitopbrown.png"],
    3: [null, null, "/assets/items/feet_jordan.png"],
    4: [null, null, "/assets/items/feet_miliboots.png"],
    5: [null, null, "/assets/items/feet_punkboots.png"],
    6: [null, null, "/assets/items/feet_schoolshoesb.png"],
    7: [null, null, "/assets/items/feet_schoolshoesbr.png"],
    8: [null, null, "/assets/items/feet_sneakersb.png"],
    9: [null, null, "/assets/items/feet_sneakersbloody.png"],
    10: [null, null, "/assets/items/feet_sneakersw.png"],
  },
  leg: {
    1: [null, null, "/assets/items/legs_baggybl.png"],
    2: [null, null, "/assets/items/legs_baggybr.png"],
    3: [null, null, "/assets/items/legs_cavalierjeans.png"],
    4: [null, null, "/assets/items/legs_distressedjeans.png"],
    5: [null, null, "/assets/items/legs_jeanstan.png"],
    6: [null, null, "/assets/items/legs_pilotpants.png"],
    7: [null, null, "/assets/items/legs_pilotpantsbeige.png"],
    8: [null, null, "/assets/items/legs_reaperpants.png"],
    9: [null, null, "/assets/items/legs_skirt.png"],
    10: [null, null, "/assets/items/legs_tacticalpants.png"],
  },
  torso: {
    1: [null, null, "/assets/items/torso_constable.png"],
    2: [null, null, "/assets/items/torso_cropped.png"],
    3: [null, null, "/assets/items/torso_floralblack.png"],
    4: [null, null, "/assets/items/torso_floralprint.png"],
    5: [null, null, "/assets/items/torso_floralwhite.png"],
    6: [null, null, "/assets/items/torso_floralyellow.png"],
    7: [null, null, "/assets/items/torso_longsleeved.png"],
    8: [null, null, "/assets/items/torso_slevelessbikerbl.png"],
    9: [null, null, "/assets/items/torso_slevelessbikerbr.png"],
    10: [null, null, "/assets/items/torso_telnyashka.png"],
    11: [null, null, "/assets/items/torso_turtleneckbl.png"],
    12: [null, null, "/assets/items/torso_turtleneckwh.png"],
  },
  belt: {
    1: ["Black belt", null, "/assets/items/belt_black.png"],
    2: [
      null,
      "Brown wonderful belt, really wonderful",
      "/assets/items/belt_brown.png",
    ],
    3: [null, null, "/assets/items/belt_battle.png"],
  },
  hand: {
    1: [null, null, "/assets/items/hands_combatgloves.png"],
    2: [null, null, "/assets/items/hands_constable.png"],
    3: [null, null, "/assets/items/hands_fingerlessc.png"],
    4: [null, null, "/assets/items/hands_fingerlessg.png"],
    5: [null, null, "/assets/items/hands_fingerlesst.png"],
    6: [null, null, "/assets/items/hands_pgi.png"],
    7: [null, null, "/assets/items/hands_punk.png"],
    8: [null, null, "/assets/items/hands_punkr.png"],
    9: [null, null, "/assets/items/hands_shroud.png"],
    10: [null, null, "/assets/items/hands_tacticalgloves.png"],
  },
  mask: {
    1: [null, null, "/assets/items/mask_cloth.png"],
    2: [null, null, "/assets/items/mask_fullgas.png"],
    3: [null, null, "/assets/items/mask_gas.png"],
    4: [null, null, "/assets/items/mask_gasv.png"],
    5: [null, null, "/assets/items/mask_halfgas.png"],
    6: [null, null, "/assets/items/mask_leo.png"],
    7: [null, null, "/assets/items/mask_pubgbandana.png"],
    8: [null, null, "/assets/items/mask_reaper.png"],
    9: [null, null, "/assets/items/mask_shroud.png"],
    10: [null, null, "/assets/items/mask_twitch.png"],
  },
  eye: {
    1: [null, null, "/assets/items/eyes_aviatorgoggles.jpg"],
    2: [null, null, "/assets/items/eyes_aviatorsunglasses.png"],
    3: [null, null, "/assets/items/eyes_goldenaviator.png"],
    4: [null, null, "/assets/items/eyes_hornglasses.png"],
    5: [null, null, "/assets/items/eyes_protectiveglasses.png"],
    6: [null, null, "/assets/items/eyes_punkglasses.png"],
    7: [null, null, "/assets/items/eyes_rosetinted.png"],
    8: [null, null, "/assets/items/eyes_tintedbiker.png"],
    9: [null, null, "/assets/items/eyes_traditionalround.png"],
    10: [null, null, "/assets/items/eyes_vintageaviator.png"],
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
      target.innerHTML = generateCardsFrom(item_map.eye, null);
      break;
    case "mask":
      document.title = "Masks | Realm PUBG";
      target.innerHTML = generateCardsFrom(item_map.mask, null);
      break;
    case "hand":
      document.title = "Hand garments | Realm PUBG";
      target.innerHTML = generateCardsFrom(item_map.hand, null);
      break;
    case "belt":
      document.title = "Belts | Realm PUBG";
      target.innerHTML = generateCardsFrom(item_map.belt, null);
      break;
    case "torso":
      document.title = "Torso | Realm PUBG";
      target.innerHTML = generateCardsFrom(item_map.torso, null);
      break;
    case "leg":
      document.title = "Leg | Realm PUBG";
      target.innerHTML = generateCardsFrom(item_map.leg, null);
      break;

    case "feet":
      document.title = "Shoes & Stuff | Realm PUBG";
      target.innerHTML = generateCardsFrom(item_map.feet, null);
      break;
    case "outer":
      document.title = "Outer garments | Realm PUBG";
      target.innerHTML = generateCardsFrom(item_map.outer, null);
      break;
    case "set":
      document.title = "Sets | Realm PUBG";
      target.innerHTML = generateCardsFrom(item_map.set, null);
      break;
    default:
      //head
      document.title = "Caps & Stuff | Realm PUBG";
      target.innerHTML = generateCardsFrom(item_map.head, null);
  }
}

function generateCardsFrom(schema, etc) {
  let constructedString = "";

  for (let i in schema) {
    let str = schema[i];

    constructedString += `<div class="card">
      <img
        src="${
          debug
            ? str[2] ?? "/icon/icon.png"
            : resolveLink(str[2] ?? "/icon/icon.png")
        }"
        alt=""
        class="card-img-top"
      />
      <div class="card-body">
        <h4 class="card-title">${str[0] ?? "Card title"}</h4>
        <h5 class="card-text">${str[1] ?? ""}</h5>
        ${etc ?? '<a href="#" class="btn btn-primary">Go there</a>'}
      </div>
    </div>`;
  }

  return constructedString;
}

function resolveLink(str) {
  return ".." + str;
}

resolveContext();
