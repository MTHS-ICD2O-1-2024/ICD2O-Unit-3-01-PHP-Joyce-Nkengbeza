<!DOCTYPE html>
<!-- ICS2O-Unit2-04-HTML-MDL -->
<html lang="en-ca">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Area Of Triangle, PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Joyce Nkengbeza" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link
    rel="stylesheet"
    href="https://code.getmdl.io/1.3.0/material.deep_purple-purple.min.css" />
  <link rel="stylesheet" href="./css/style.css" />
  <link
    rel="apple-touch-icon"
    sizes="180x180"
    href="./apple-touch-iconnew.png" />
  <link
    rel="icon"
    type="image/png"
    sizes="32x32"
    href="./favicon-32x32new.png" />
  <link
    rel="icon"
    type="image/png"
    sizes="16x16"
    href="./favicon-16x16new.png" />
  <link rel="manifest" href="./site.webmanifest" />
  <title>Area Of Triangle In PHP</title>
</head>


<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Area Of Triangle, PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/areaoftriangle.png" alt="Area of Triangle Image" />
      </div>
      <br />
      <div class="page-content-php">
        <form action="answer.php" method="GET">
          <p>Base Length</p>
          <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type=" text" pattern="-?[0-9]*(\.[0-9]+)?" name="base-length">
            <label class="mdl-textfield__label" for="base-length">Base Length Here ...</label>
            <span class="mdl-textfield__error">Input is not a number!</span>
          </div>
          <br />
          <p>Height Length</p>
          <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type=" text" pattern="-?[0-9]*(\.[0-9]+)?" name="height-length">
            <label class="mdl-textfield__label" for="height-length">Height Length Here ...</label>
            <span class="mdl-textfield__error">Input is not a number!</span>
          </div>
          <br />
          <!-- Accent-colored raised button with ripple -->
          <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"
            type="submit">
            Calculate
          </button>
        </form>
      </div>
    </main>
  </div>
</body>

</html>