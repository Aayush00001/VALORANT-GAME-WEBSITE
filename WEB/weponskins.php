<?php include 'header.html';?>
  <style>
    .flip-card {
      width: 200%; /* Take up the available width */
      max-width: 200px; /* Set a maximum width */
      height: 300px;
      border: 10px solid black;
      margin-bottom: 10px; /* Add margin for spacing */
    }

    .flip-card-inner {
      width: 100%;
      height: 100%;
      transform-style: preserve-3d;
      transition: transform 0.5s;
    }
    .flip-card:hover .flip-card-inner {
      transform: rotateY(180deg);
    }
    .flip-card-front,
    .flip-card-back {
      width: 100%;
      height: 100%;
      position: absolute;
      backface-visibility: hidden;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding: 20px;
      text-align: center;
      background-color:darkgrey;
    }
    .flip-card-back {
      transform: rotateY(180deg);    
    }
    .flip-card-back p{
      color:#000000;
    font-family:'Poppins',sans-serif;
    font-size:14px;
    }
    .weaponskin-table tr,th,td{
    border: 3px solid darkgrey;
    text-align:center;
    } 
    .weponskin-header h1,b{
    font-family:'Poppins', sans-serif;
    margin-top:10px;
    margin-bottom:10px;
    }
    .video-card {
      width: calc(33.33% - 20px);
      width: 100%;
      max-width: 500px;
      height: 250px;
      border: 10px solid red;
      margin-bottom: 10px;
      position: relative;
      perspective: 1000px;
    }
    .video-card-inner {
      width: 100%;
      height: 100%;
      transform-style: preserve-3d;
      transition: transform 0.5s;
    }
    .video-card:hover .video-card-inner {
      transform: rotateY(180deg);
    }
    .front-image,
    .back-video {
      width: 100%;
      height: 100%;
      position: absolute;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .back-video {
      transform: rotateY(180deg);
      background-color: black;
      display: none;
    }
    .back-video iframe {
      width: 100%;
      height: 100%;
    }
    .video-card:hover .front-image {
      display: none;
    }
    .video-card:hover .back-video {
      display: block;
    }
  </style>


<!--main contente-->
<div class="container">
    <div class="weponskin-header">
      <h1><b>Weapon Skins</b></h1>
    </div>
    <div class="#">
     <p>Weapon Skins are cosmetics in VALORANT that modify the appearance of weapons. They can be bought from the store 
      with VALORANT Points and can be upgraded using Radianite Points to further modify appearance. They can also be b
      e bought from an active Night.Market or earned from a Battle Pass, and a few can be obtained for free by
      completing Battle Passes or obtaining through Agent Gear.<img src="data\images\Weapon_skins.jpg"style="width:100%;
      height:100%;"></p>
    </div>
    <div class="#">
      <p>Each weapon skin shares a theme with about three to five other weapons, the exception being Agents' skins.<br/>
      There are currently 672 different weapon skins.</p>
    </div>
    <div class="weponskin-header">
      <h1><b>Skin editions</b></h1>
    </div>
    <div class="#">
        <p>Every skin has an edition that shows the skin's quality tier. There are five editions, going from the simplest to the most complex; Select,Deluxe,Premium,Exclusive, and Ultra. Melee skins are the only skins in the game to all be classed as Exclusive, though their prices (for melees that can be bought from the Store) are usually related to the edition of the bundle they are associated with.</p>
        <p>This system was initially used by Store skins only, but is now currently applied to all weapon skins. Skins from Agent <b>Gear</b> and Battle Passes are usually Select and Deluxe edition only, whilst all types of skins can be found in the Store.</p> 
    </div>
    <div class="weponskin-header">
      <h1><b>Obtaining skins</b></h1>
    </div>
    <div class="#">
      <p>Agents' skins can be obtained when a player reaches Tier 10 of an agent's <b>Gear</b>. The skin is always a type of <b>sidearm</b>. Agent Gear sidearms are some of the only skins in the game that can be obtained for free without requiring users to spend VALORANT Points.</p>
    </div>
    <div class="weaponsskin-header">
      <h1><b>Battle Passes</b></h1>
    </div>
    <div class="#">
      <p>Every <b>act</b> contains a new <b>battle pass</b> that has skins for 13 weapons. Each weapon's skin will come from one of three skin collections unique to the act's battle pass. Since <b>IGNITION: Act 3</b>, one of these collections also has variants that players can unlock with any <b>Radianite Points</b> that they have. Players immediately unlock one of the skins upon buying the pass. The rewards upon reaching Tier 50 are always the same; the Free Track, which all players have access to, awards a <b>sidearm</b> skin, but players who have bought access to the Premium Track unlock a <b>melee</b> skin, along with the other skins in previous tiers.</p>
    </div>
    <div class="weponskin-header">
      <h1><b>Store</b></h1>
    </div>
    <div class="#">
      <p>Weapon skins can be bought from the <b>store</b> from the player's daily offers or the featured bundle. The price of the skin depends on the weapon's edition tier, with melee skins costing double the price of a gun skin from the same edition:</p>
    </div>
    <table style="width:25%;background-color:black;color:white;"class="weaponskin-table">
      <tr style="background-color:red;color:white;height:50px">
        <th>Edtion</th>
      </tr>
      <tr>
        <td><img src="data\images\deluxe.jpg">Deluxe</td>
      </tr>
      <tr>
        <td><img src="data\images\exclusive.jpg">Exclusive(Prices vary)</td>
      </tr>
      <tr>
        <td><img src="data\images\premium.jpg">Premium</td> 
      </tr>
      <tr>
        <td><img src="data\images\select.jpg">Select</td>
      </tr>
      <tr>
        <td><img src="data\images\ultra.jpg">Ultra(Prices vary)</td>
      </tr>
    </table><br/>
    <div class="#">
      <ul>
        <li><b>Certain melee skins deviated from the above pricing that are part of their respective skin bundle:</b></li>
        <ol>For<img src="data\images\deluxe.jpg">Deluxe-Edition skins, instead of the standard<img src="data\images\Valorant_Points.jpg"style="background-color:black;">2,550, the <b>Luna's Descent</b> is priced at<img src="data\images\Valorant_Points.jpg"style="background-color:black;">3,550.</ol>
        <ol>For<img src="data\images\premium.jpg">Premium-Edition skins, instead of the standard
        <img src="data\images\Valorant_Points.jpg"style="background-color:black;">3,550</ol>
        <ol>the <b>Reaver Karambit, Ion Karambit</b> and <b>Magepunk Sparkswitch</b> are priced at<img src="data\images\Valorant_Points.jpg"style="background-color:black;">4,350 each.</ol>
        <ol>the <b>Onimaru Kunitsuna</b> is priced at<img src="data\images\Valorant_Points.jpg"style="background-color:black;">5,350.</ol>
      </ul>
    </div> 
    <div class="weponskin-header">
      <h1><b>List Of Skins</b></h1>
    </div>
    <hr style="border: 4px solid black;">
    <div class="row">
      <div class="col-md-4 col-lg-2">  
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="data\images\g1.jpg" alt="Front Image">
            </div>
            <div class="flip-card-back">
              <p><b>Edtion:</b><img src="data\images\select.jpg"></p>
              <p><b>Skin Name:</b>Luxe</p>
              <p><b>Gun Name:</b>Ghost</p>
              <p><b>Price:</b><img src="data\images\Valorant_Points.jpg">875</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Repeat the above column code for a total of 6 cards -->
      <div class="col-md-4 col-lg-2">
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="data\images\g2.jpg" alt="Front Image">
            </div>
            <div class="flip-card-back">
              <p><b>Edtion:</b><img src="data\images\select.jpg"></p>
              <p><b>Skin Name:</b>Luxe</p>
              <p><b>Gun Name:</b>Spectre</p>
              <p><b>Price:</b><img src="data\images\Valorant_Points.jpg">875</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Repeat the above column code for a total of 6 cards -->
      <div class="col-md-4 col-lg-2">
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="data\images\g3.jpg" alt="Front Image">
            </div>
            <div class="flip-card-back">
              <p><b>Edtion:</b><img src="data\images\select.jpg"></p>
              <p><b>Skin Name:</b>Luxe</p>
              <p><b>Gun Name:</b>Judge</p>
              <p><b>Price:</b><img src="data\images\Valorant_Points.jpg">875</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Repeat the above column code for a total of 6 cards -->
      <div class="col-md-4 col-lg-2">
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="data\images\g4.jpg" alt="Front Image">
            </div>
            <div class="flip-card-back">
              <p><b>Edtion:</b><img src="data\images\select.jpg"></p>
              <p><b>Skin Name:</b>Luxe</p>
              <p><b>Gun Name:</b>Vandal</p>
              <p><b>Price:</b><img src="data\images\Valorant_Points.jpg">875</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Repeat the above column code for a total of 6 cards -->
      <div class="col-md-4 col-lg-2">
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="data\images\g5.jpg" alt="Front Image">
            </div>
            <div class="flip-card-back">
              <p><b>Edtion:</b><img src="data\images\select.jpg"></p>
              <p><b>Skin Name:</b>Luxe</p>
              <p><b>Gun Name:</b>Operator</p>
              <p><b>Price:</b><img src="data\images\Valorant_Points.jpg">875</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Repeat the above column code for a total of 6 cards -->
      <div class="col-md-4 col-lg-2">
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="data\images\g6.jpg" alt="Front Image">
            </div>
            <div class="flip-card-back">
              <p><b>Edtion:</b><img src="data\images\select.jpg"></p>
              <p><b>Skin Name:</b>Luxe</p>
              <p><b>Gun Name:</b>Knife</p>
              <p><b>Price:</b><img src="data\images\Valorant_Points.jpg">1,750</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Repeat the above column code for a total of 6 cards -->
      <div class="col-md-4 col-lg-2">
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="data\images\g7.jpg" alt="Front Image">
            </div>
            <div class="flip-card-back">
              <p><b>Edtion:</b><img src="data\images\deluxe.jpg"></p>
              <p><b>Skin Name:</b>Aristocrat</p>
              <p><b>Gun Name:</b>Sheriff</p>
              <p><b>Price:</b><img src="data\images\Valorant_Points.jpg">1,275</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Repeat the above column code for a total of 6 cards -->
      <div class="col-md-4 col-lg-2">
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="data\images\g8.jpg" alt="Front Image">
            </div>
            <div class="flip-card-back">
              <p><b>Edtion:</b><img src="data\images\deluxe.jpg"></p>
              <p><b>Skin Name:</b>Aristocrat</p>
              <p><b>Gun Name:</b>Stinger</p>
              <p><b>Price:</b><img src="data\images\Valorant_Points.jpg">1,275</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Repeat the above column code for a total of 6 cards -->
      <div class="col-md-4 col-lg-2">
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="data\images\g9.jpg" alt="Front Image">
            </div>
            <div class="flip-card-back">
              <p><b>Edtion:</b><img src="data\images\deluxe.jpg"></p>
              <p><b>Skin Name:</b>Aristocrat</p>
              <p><b>Gun Name:</b>Bulldog</p>
              <p><b>Price:</b><img src="data\images\Valorant_Points.jpg">1,275</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Repeat the above column code for a total of 6 cards -->
      <div class="col-md-4 col-lg-2">
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="data\images\g10.jpg" alt="Front Image">
            </div>
            <div class="flip-card-back">
              <p><b>Edtion:</b><img src="data\images\deluxe.jpg"></p>
              <p><b>Skin Name:</b>Aristocrat</p>
              <p><b>Gun Name:</b>Vandal</p>
              <p><b>Price:</b><img src="data\images\Valorant_Points.jpg">1,275</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Repeat the above column code for a total of 6 cards -->
      <div class="col-md-4 col-lg-2">
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="data\images\g11.jpg" alt="Front Image">
            </div>
            <div class="flip-card-back">
              <p><b>Edtion:</b><img src="data\images\deluxe.jpg"></p>
              <p><b>Skin Name:</b>Aristocrat</p>
              <p><b>Gun Name:</b>Ares</p>
              <p><b>Price:</b><img src="data\images\Valorant_Points.jpg">1,275</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Repeat the above column code for a total of 6 cards -->
      <div class="col-md-4 col-lg-2">
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="data\images\g12.jpg" alt="Front Image">
            </div>
            <div class="flip-card-back">
              <p><b>Edtion:</b><img src="data\images\select.jpg"></p>
              <p><b>Skin Name:</b>Galleria</p>
              <p><b>Gun Name:</b>Classic</p>
              <p><b>Price:</b><img src="data\images\Valorant_Points.jpg">875</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Repeat the above column code for a total of 6 cards -->
      <div class="col-md-4 col-lg-2">
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="data\images\g13.jpg" alt="Front Image">
            </div>
            <div class="flip-card-back">
              <p><b>Edtion:</b><img src="data\images\select.jpg"></p>
              <p><b>Skin Name:</b>Galleria</p>
              <p><b>Gun Name:</b>Bucky</p>
              <p><b>Price:</b><img src="data\images\Valorant_Points.jpg">875</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Repeat the above column code for a total of 6 cards -->
      <div class="col-md-4 col-lg-2">
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="data\images\g14.jpg" alt="Front Image">
            </div>
            <div class="flip-card-back">
              <p><b>Edtion:</b><img src="data\images\select.jpg"></p>
              <p><b>Skin Name:</b>Galleria</p>
              <p><b>Gun Name:</b>Guardian</p>
              <p><b>Price:</b><img src="data\images\Valorant_Points.jpg">875</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Repeat the above column code for a total of 6 cards -->
      <div class="col-md-4 col-lg-2">
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="data\images\g15.jpg" alt="Front Image">
            </div>
            <div class="flip-card-back">
              <p><b>Edtion:</b><img src="data\images\select.jpg"></p>
              <p><b>Skin Name:</b>Galleria</p>
              <p><b>Gun Name:</b>Phantom</p>
              <p><b>Price:</b><img src="data\images\Valorant_Points.jpg">875</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Repeat the above column code for a total of 6 cards -->
      <div class="col-md-4 col-lg-2">
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="data\images\g16.jpg" alt="Front Image">
            </div>
            <div class="flip-card-back">
              <p><b>Edtion:</b><img src="data\images\select.jpg"></p>
              <p><b>Skin Name:</b>Galleria</p>
              <p><b>Gun Name:</b>Marshal</p>
              <p><b>Price:</b><img src="data\images\Valorant_Points.jpg">875</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Repeat the above column code for a total of 6 cards -->
      <div class="col-md-4 col-lg-2">
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="data\images\g17.jpg" alt="Front Image">
            </div>
            <div class="flip-card-back">
              <p><b>Edtion:</b><img src="data\images\select.jpg"></p>
              <p><b>Skin Name:</b>Rush</p>
              <p><b>Gun Name:</b>Frenzy</p>
              <p><b>Price:</b><img src="data\images\Valorant_Points.jpg">875</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Repeat the above column code for a total of 6 cards -->
      <div class="col-md-4 col-lg-2">
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="data\images\g18.jpg" alt="Front Image">
            </div>
            <div class="flip-card-back">
              <p><b>Edtion:</b><img src="data\images\select.jpg"></p>
              <p><b>Skin Name:</b>Rush</p>
              <p><b>Gun Name:</b>Judge</p>
              <p><b>Price:</b><img src="data\images\Valorant_Points.jpg">875</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Repeat the above column code for a total of 6 cards -->
      <div class="col-md-4 col-lg-2">
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="data\images\g19.jpg" alt="Front Image">
            </div>
            <div class="flip-card-back">
              <p><b>Edtion:</b><img src="data\images\select.jpg"></p>
              <p><b>Skin Name:</b>Rush</p>
              <p><b>Gun Name:</b>Bulldog</p>
              <p><b>Price:</b><img src="data\images\Valorant_Points.jpg">875</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Repeat the above column code for a total of 6 cards -->
      <div class="col-md-4 col-lg-2">
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="data\images\g20.jpg" alt="Front Image">
            </div>
            <div class="flip-card-back">
              <p><b>Edtion:</b><img src="data\images\select.jpg"></p>
              <p><b>Skin Name:</b>Rush</p>
              <p><b>Gun Name:</b>Phantom</p>
              <p><b>Price:</b><img src="data\images\Valorant_Points.jpg">875</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Repeat the above column code for a total of 6 cards -->
      <div class="col-md-4 col-lg-2">
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="data\images\g21.jpg" alt="Front Image">
            </div>
            <div class="flip-card-back">
              <p><b>Edtion:</b><img src="data\images\select.jpg"></p>
              <p><b>Skin Name:</b>Rush</p>
              <p><b>Gun Name:</b>Ares</p>
              <p><b>Price:</b><img src="data\images\Valorant_Points.jpg">875</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Repeat the above column code for a total of 6 cards -->
      <div class="col-md-4 col-lg-2">
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="data\images\g22.jpg" alt="Front Image">
            </div>
            <div class="flip-card-back">
              <p><b>Edtion:</b><img src="data\images\Deluxe.jpg"></p>
              <p><b>Skin Name:</b>Sakura</p>
              <p><b>Gun Name:</b>Classic</p>
              <p><b>Price:</b><img src="data\images\Valorant_Points.jpg">1,275</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Repeat the above column code for a total of 6 cards -->
      <div class="col-md-4 col-lg-2">
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="data\images\g23.jpg" alt="Front Image">
            </div>
            <div class="flip-card-back">
              <p><b>Edtion:</b><img src="data\images\Deluxe.jpg"></p>
              <p><b>Skin Name:</b>Sakura</p>
              <p><b>Gun Name:</b>Sheriff</p>
              <p><b>Price:</b><img src="data\images\Valorant_Points.jpg">1,275</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Repeat the above column code for a total of 6 cards -->
      <div class="col-md-4 col-lg-2">
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="data\images\g24.jpg" alt="Front Image">
            </div>
            <div class="flip-card-back">
              <p><b>Edtion:</b><img src="data\images\deluxe.jpg"></p>
              <p><b>Skin Name:</b>Sakura</p>
              <p><b>Gun Name:</b>Stinger</p>
              <p><b>Price:</b><img src="data\images\Valorant_Points.jpg">1,275</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Repeat this column code for the remaining cards -->
    </div>
    <div class="weponskin-header">
      <h1><b>Skins Video</b></h1>
    </div>
    <hr style="border: 4px solid black;">
    <div class="row">
      <div class="col-md-4">
        <div class="video-card">
          <div class="video-card-inner">
            <div class="front-image">
              <img src="data\images\g24.jpg" alt="Front Image">
            </div>
            <div class="back-video">
              <iframe id="video1" src="https://www.youtube.com/embed/aWqj5_2x1bQ?si=IvJqcWBIQR34PK8H" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" frameborder="0" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
      <!-- Repeat the above column code for more video cards -->
      <div class="col-md-4">
        <div class="video-card">
          <div class="video-card-inner">
            <div class="front-image">
              <img src="data\images\g24.jpg" alt="Front Image">
            </div>
            <div class="back-video">
              <iframe id="video2" src="https://www.youtube.com/embed/aWqj5_2x1bQ?si=IvJqcWBIQR34PK8H" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" frameborder="0" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
      <!-- Repeat this column code for more video cards -->
      <div class="col-md-4">
        <div class="video-card">
          <div class="video-card-inner">
            <div class="front-image">
              <img src="data\images\g24.jpg" alt="Front Image">
            </div>
            <div class="back-video">
              <iframe id="video3" src="https://www.youtube.com/embed/aWqj5_2x1bQ?si=IvJqcWBIQR34PK8H" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" frameborder="0" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
      <!-- Repeat this column code for more video cards -->
      <div class="col-md-4">
        <div class="video-card">
          <div class="video-card-inner">
            <div class="front-image">
              <img src="data\images\g24.jpg" alt="Front Image">
            </div>
            <div class="back-video">
              <iframe id="video3" src="https://www.youtube.com/embed/aWqj5_2x1bQ?si=IvJqcWBIQR34PK8H" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" frameborder="0" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
      <!-- Repeat this column code for more video cards -->
      <div class="col-md-4">
        <div class="video-card">
          <div class="video-card-inner">
            <div class="front-image">
              <img src="data\images\g24.jpg" alt="Front Image">
            </div>
            <div class="back-video">
              <iframe id="video3" src="https://www.youtube.com/embed/aWqj5_2x1bQ?si=IvJqcWBIQR34PK8H" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" frameborder="0" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
      <!-- Repeat this column code for more video cards -->
      <div class="col-md-4">
        <div class="video-card">
          <div class="video-card-inner">
            <div class="front-image">
              <img src="data\images\g24.jpg" alt="Front Image">
            </div>
            <div class="back-video">
              <iframe id="video3" src="https://www.youtube.com/embed/aWqj5_2x1bQ?si=IvJqcWBIQR34PK8H" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" frameborder="0" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
      <!-- Repeat this column code for more video cards -->
    </div>
</div>



<!-- <script>
    document.addEventListener("DOMContentLoaded", function () {
      var videoCards = document.querySelectorAll('.video-card');

      videoCards.forEach(function(card) {
        var frontImage = card.querySelector('.front-image');
        var backVideo = card.querySelector('.back-video iframe');

        frontImage.addEventListener('mouseenter', function() {
          var videoSrc = backVideo.getAttribute("src");
          backVideo.src = videoSrc;
        });

        card.addEventListener('mouseleave', function() {
          backVideo.pause(); // Pause the video
          backVideo.currentTime = 0; // Reset video to start
          frontImage.style.display = "block"; // Display the front image
          backVideo.style.display = "none"; // Hide the back video
        });
      });
    });
  </script> -->
<!-- <script>
    // Load YouTube iframe API script
    var tag = document.createElement('script');
    tag.src = "https://www.youtube.com/iframe_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    var players = {}; // Store player instances

    function onYouTubeIframeAPIReady() {
      var videoCards = document.querySelectorAll('.video-card');

      videoCards.forEach(function(card) {
        var frontImage = card.querySelector('.front-image');
        var backVideo = card.querySelector('.back-video iframe');

        card.addEventListener('mouseenter', function() {
          var videoSrc = backVideo.getAttribute("src");
          backVideo.src = videoSrc;

          var playerId = backVideo.getAttribute("id");
          players[playerId] = new YT.Player(playerId);
        });

        card.addEventListener('mouseleave', function() {
          backVideo.src = "";

          var playerId = backVideo.getAttribute("id");
          if (players[playerId]) {
            players[playerId].stopVideo();
          }
        });
      });
    }
  </script> -->
  <?php include 'footer.html';?>
