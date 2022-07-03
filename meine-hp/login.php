<?php
include("header.php");
?>


    <div class="container">
      <div id="window">

        <div id="windowtop">
          <div id="windownavs">
            <div id="cross">
              <div id="line1"></div>
              <div id="line2"></div>
            </div>
            <div id="minimize"></div>
            <div id="maximize"></div>
          </div>

          <div id="windowtitle">
            <span><p>login</p></span>
            <span><div id="bigcursor"></div></span>
          </div>
        </div>

        <div id="windowcontent">
        <h1>Security-Dashboard:$</h1>
        <div id="wrapper">
          <div id="errorMessage"></div>
          <div id="succesMessage">Login erfolgreicht!</div>

          <div class="form-element">
              <label for="mail">Email</label>
              <input type="mail" name="mail" id="mail" placeholder="z.B. mail@gmx.de">
          </div>
          
          <div class="form-element">
              <label for="pw">Passwort</label>
              <input type="password" name="pw" id="pw" placeholder="*********">
          </div>
          
          <div class="form-element" id="loginKnopf">
              <input type="submit" id="submitButton" onclick="info()" value="login">
          </div>
        </div>

        </div>
      </div>
    </div>



    <script src="winbox.bundle.js"></script>
    <script src="script.js"></script>
    <script src="login.js"></script>
  </body>
</html>