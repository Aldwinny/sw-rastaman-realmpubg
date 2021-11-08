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
      target.innerHTML = "EYE";
      break;
    case "mask":
      document.title = "Masks | Realm PUBG";
      target.innerHTML = "MASK";
      break;
    case "hand":
      document.title = "Hand garments | Realm PUBG";
      target.innerHTML = "S L A P P";
      break;
    case "belt":
      document.title = "Belts | Realm PUBG";
      target.innerHTML = "BELT";
      break;
    case "torso":
      document.title = "Torso | Realm PUBG";
      target.innerHTML = "TORSO";
      break;
    case "leg":
      document.title = "Leg | Realm PUBG";
      target.innerHTML = "LEG";
      break;
    case "feet":
      document.title = "Shoes & Stuff | Realm PUBG";
      target.innerHTML = "FEET";
      break;
    case "outer":
      document.title = "Outer garments | Realm PUBG";
      target.innerHTML = "OUTER";
      break;
    case "set":
      document.title = "Sets | Realm PUBG";
      target.innerHTML = "SET";
      break;
    default:
      document.title = "Caps & Stuff | Realm PUBG";
      target.innerHTML = "HEAD";
    //head
  }
}

resolveContext();
