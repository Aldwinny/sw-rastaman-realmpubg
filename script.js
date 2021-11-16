var level = {
  normal: "rgb(109, 245, 116)",
  rare: "rgb(240, 176, 57)",
  epic: "rgb(209, 57, 240)",
  legend: "rgb(221, 211, 76)",
};

var item_map = {
  head: {
    1: ["Beanie", level.normal, "/assets/items/head_beanie.png"],
    2: ["Wacky Jacky", level.normal, "/assets/items/head_wackyjacky101.png"],
    3: ["Camo cap", level.rare, "/assets/items/head_camocap.png"],
    4: ["Cowboy hat (brown)", level.rare, "/assets/items/head_cowboybr.png"],
    5: ["Cowboy hat (white)", level.rare, "/assets/items/head_cowboywh.png"],
    6: ["Flat cap", level.rare, "/assets/items/head_paddycap.png"],
    7: ["VK Beanie", level.rare, "/assets/items/head_vkbeanie.png"],
    8: ["Guard cap", level.epic, "/assets/items/head_guardcap.png"],
    9: ["Military cap", level.epic, "/assets/items/head_milihead.png"],
    10: ["Captain cap", level.legend, "/assets/items/head_captainhat.png"],
  },
  set: {
    1: ["Aviator set", level.normal, "/assets/items/set_aviator.png"],
    2: ["Black School set", level.normal, "/assets/items/set_blackschool.png"],
    3: ["Blue School set", level.normal, "/assets/items/set_blueschool.png"],
    4: ["Cowboy set", level.rare, "/assets/items/set_whitehatranger.png"],
    5: ["Gold Rush set", level.rare, "/assets/items/set_goldrush.png"],
    6: ["Ivory set", level.rare, "/assets/items/set_ivoryfemale.png"],
    7: ["Vikendi set", level.epic, "/assets/items/set_vikendi.png"],
    8: ["Twitch set", level.epic, "/assets/items/set_twitch.png"],
    9: ["PUBG set", level.legend, "/assets/items/set_pubgset.png"],
    10: [
      "Fire In The Hole set",
      level.legend,
      "/assets/items/set_fireinthehole.png",
    ],
  },
  outer: {
    1: ["Black Hoodie", level.normal, "/assets/items/outer_blackhoodie.png"],
    2: [
      "Bomber Jacket",
      level.normal,
      "/assets/items/outer_bomberjacketmustard.png",
    ],
    3: ["Doomsday hoodie", level.rare, "/assets/items/outer_doomsday.png"],
    4: [
      "Military Jacket",
      level.rare,
      "/assets/items/outer_militaryjacket.png",
    ],
    5: [
      "Military Jacket Blue",
      level.rare,
      "/assets/items/outer_militaryjacketblue.png",
    ],
    6: ["White Hoodie", level.rare, "/assets/items/outer_whitehoodie.png"],
    7: ["Trenchcoat", level.epic, "/assets/items/outer_trenchcoat.png"],
    8: [
      "Skyrocket Jacket",
      level.epic,
      "/assets/items/outer_skyrocketjacket.png",
    ],
    9: ["PAI Jacket", level.legend, "/assets/items/outer_paijacket.png"],
    10: [
      "PUBG Partner Jacket",
      level.legend,
      "/assets/items/outer_pubgpartner.png",
    ],
  },
  feet: {
    1: ["High Top Blue", level.normal, "/assets/items/feet_hitopblue.png"],
    2: ["High Top Brown", level.normal, "/assets/items/feet_hitopbrown.png"],
    3: [
      "School Shoes Black",
      level.normal,
      "/assets/items/feet_schoolshoesb.png",
    ],
    4: [
      "School Shoes Brown",
      level.normal,
      "/assets/items/feet_schoolshoesbr.png",
    ],
    5: ["Jordan Shoes", level.rare, "/assets/items/feet_jordan.png"],
    6: ["Military boots", level.rare, "/assets/items/feet_miliboots.png"],
    7: ["Sneakers Black", level.rare, "/assets/items/feet_sneakersb.png"],
    8: ["Sneakers White", level.rare, "/assets/items/feet_sneakersw.png"],
    9: ["Sneakers Bloody", level.epic, "/assets/items/feet_sneakersbloody.png"],
    10: ["Punk Boots", level.epic, "/assets/items/feet_punkboots.png"],
  },
  leg: {
    1: ["Cavalier Jeans", level.normal, "/assets/items/legs_cavalierjeans.png"],
    2: [
      "Distressed Jeans",
      level.normal,
      "/assets/items/legs_distressedjeans.png",
    ],
    3: ["Tan Jeans", level.normal, "/assets/items/legs_jeanstan.png"],
    4: ["Pilot Pants", level.rare, "/assets/items/legs_pilotpants.png"],
    5: [
      "Beige Pilot Pants",
      level.rare,
      "/assets/items/legs_pilotpantsbeige.png",
    ],
    6: ["Dark Baggy Pants", level.epic, "/assets/items/legs_baggybl.png"],
    7: ["Baggy Pants", level.epic, "/assets/items/legs_baggybr.png"],
    8: ["Skirt", level.epic, "/assets/items/legs_skirt.png"],
    9: ["Reaper Pants", level.legend, "/assets/items/legs_reaperpants.png"],
    10: [
      "Tactical Pants",
      level.legend,
      "/assets/items/legs_tacticalpants.png",
    ],
  },
  torso: {
    1: [
      "Long-sleeved Shirt",
      level.normal,
      "/assets/items/torso_longsleeved.png",
    ],
    2: [
      "Biker Shirt Black",
      level.normal,
      "/assets/items/torso_slevelessbikerbl.png",
    ],
    3: [
      "Biker Shirt Brown",
      level.normal,
      "/assets/items/torso_slevelessbikerbr.png",
    ],

    4: ["Cropped Torso", level.rare, "/assets/items/torso_cropped.png"],
    5: [
      "FLoral Black Shirt",
      level.rare,
      "/assets/items/torso_floralblack.png",
    ],
    6: [
      "Floral Print Shirt",
      level.rare,
      "/assets/items/torso_floralprint.png",
    ],
    7: [
      "Floral White Shirt",
      level.rare,
      "/assets/items/torso_floralwhite.png",
    ],
    8: [
      "Floral Yellow Shirt",
      level.rare,
      "/assets/items/torso_floralyellow.png",
    ],
    9: ["Telnyashka", level.epic, "/assets/items/torso_telnyashka.png"],
    10: [
      "Blk Turtleneck shirt",
      level.epic,
      "/assets/items/torso_turtleneckbl.png",
    ],
    11: [
      "Wht Turtleneck Shirt",
      level.epic,
      "/assets/items/torso_turtleneckwh.png",
    ],
    12: ["Constable Vest", level.legend, "/assets/items/torso_constable.png"],
  },
  belt: {
    1: ["Black Belt", level.epic, "/assets/items/belt_black.png"],
    2: ["Brown Belt", level.epic, "/assets/items/belt_brown.png"],
    3: ["Combat Belt", level.legend, "/assets/items/belt_battle.png"],
  },
  hand: {
    1: ["Boxing Wrap", level.normal, "/assets/items/hands_pgi.png"],
    2: ["Fingerless Camo", level.rare, "/assets/items/hands_fingerlessc.png"],
    3: ["Fingerless Grey", level.rare, "/assets/items/hands_fingerlessg.png"],
    4: ["Fingerless White", level.rare, "/assets/items/hands_fingerlesst.png"],
    5: ["Combat Gloves", level.epic, "/assets/items/hands_combatgloves.png"],
    6: ["Constable Gloves", level.epic, "/assets/items/hands_constable.png"],
    7: ["Punk Gloves", level.epic, "/assets/items/hands_punk.png"],
    8: ["Punk Gloves Red", level.epic, "/assets/items/hands_punkr.png"],
    9: ["Shroud Gloves", level.legend, "/assets/items/hands_shroud.png"],
    10: [
      "Tactical Gloves",
      level.legend,
      "/assets/items/hands_tacticalgloves.png",
    ],
  },
  mask: {
    1: ["Cloth Mask", level.normal, "/assets/items/mask_cloth.png"],
    2: ["Half-face Gas Mask", level.rare, "/assets/items/mask_halfgas.png"],
    3: ["Leo Cloth Mask", level.rare, "/assets/items/mask_leo.png"],
    4: ["Full-face Gas Mask", level.epic, "/assets/items/mask_fullgas.png"],
    5: ["Gas Mask Double", level.epic, "/assets/items/mask_gas.png"],
    6: ["Gas Mask Single", level.epic, "/assets/items/mask_gasv.png"],
    7: ["Twitch Mask", level.epic, "/assets/items/mask_twitch.png"],
    8: ["PUBG Bandana", level.legend, "/assets/items/mask_pubgbandana.png"],
    9: ["Reaper Mask", level.legend, "/assets/items/mask_reaper.png"],
    10: ["Shroud Mask", level.legend, "/assets/items/mask_shroud.png"],
  },
  eye: {
    1: [
      "Aviator Googles",
      level.normal,
      "/assets/items/eyes_aviatorgoggles.png",
    ],
    2: [
      "Aviator Sunglasses",
      level.normal,
      "/assets/items/eyes_aviatorsunglasses.png",
    ],
    3: [
      "Round Glasses",
      level.normal,
      "/assets/items/eyes_traditionalround.png",
    ],
    4: [
      "Golden AV Glasses",
      level.rare,
      "/assets/items/eyes_goldenaviator.png",
    ],
    5: [
      "Protective Glasses",
      level.rare,
      "/assets/items/eyes_protectiveglasses.png",
    ],
    6: [
      "Vintage AV Glasses",
      level.rare,
      "/assets/items/eyes_vintageaviator.png",
    ],
    7: ["Horn Glasses", level.epic, "/assets/items/eyes_hornglasses.png"],
    8: ["Punk Glasses", level.epic, "/assets/items/eyes_punkglasses.png"],
    9: [
      "Rose-tinted Glasses",
      level.legend,
      "/assets/items/eyes_rosetinted.png",
    ],
    10: [
      "Biker Tinted Glasses",
      level.legend,
      "/assets/items/eyes_tintedbiker.png",
    ],
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

    constructedString += `<div class="card" style="${
      "border: 3px solid " + str[1]
    }">
      <img
        src="${str[2] ?? "/icon/icon.png"}"
        alt=""
        class="card-img-top"
      />
      <div class="card-body">
        <h4 class="card-title">${str[0] ?? "Card title"}</h4>
        ${
          etc ??
          '<a class="btn btn-primary"><span class="material-icons">add_shopping_cart</span> Add to Cart</a>'
        } 
      </div>
    </div>`;
  }

  return constructedString;
}

resolveContext();
