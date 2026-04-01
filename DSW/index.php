<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width,  initial-scale=1.0">
    <meta name="title" content="Dark Souls Wiki | Home">
    <meta name="description" content="Everything you need to know about the game.">
    <title>Dark Souls Wiki | Home</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Marcellus&family=Marcellus+SC&display=swap" rel="stylesheet"> 
    <link rel="icon" type="image/png" href="Images/dark_sign.png" sizes="72x72">
    <script src="https://kit.fontawesome.com/7171ae1460.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <div id="container">
      <nav>
        <ul>
          <li><a href="index.php" id="active">Home</a></li>
          <li><a href="">Guides</a></li>
          <li><a href="">Builds</a></li>
        </ul>
        <ul id="login">
          <li><i class="fas fa-user"></i><?php 
            if (isset($_SESSION['user'])) {
              echo $_SESSION['user'];
            } else {
              echo "Guest";
            }
          ?></li>
          <li><?php
            if (isset($_SESSION['user'])) {
              echo "<a href='logout.php'>Logout</a>";
            } else {
              echo "<a href='login.php'>Login</a>";
            }
          ?></li>
        </ul>
      </nav>   
      <header>
        <img src="Images/artorias.jpg" alt="Artorias">
        <div>
          <h1>Dark Souls</h1>
          <h2>Wiki</h2>
        </div>
      </header>      
      <div id="left">
        <main>
          <h2>Dark Souls</h2>
          <p>Developed by FromSoftware, Dark Souls is the spiritual successor to the Playstation exclusive Demon’s Souls, an action RPG experience that surprised by not only gaining critical acclaim, but obtaining publishing in 3 regions and racking estimated sales of over 1 million units.</p>
          <p>The original game’s appeal lay with its renowned difficulty and trial-and-error approach, one that <strong>Dark Souls</strong> looked to sustain, thus attracting Demon’s Souls’ fanbase. The developer and publisher had both stated that there were no intentions for DLC however, following the release of the Prepare to Die Edition for PC with added content, an expansion DLC was released for both PS3 an Xbox360, titled Artorias of the Abyss.</p>
          <p>Dark Souls Remastered is an updated version of Dark Souls releasing on May 25th 2018 for PC, PS4, and Xbox One. A Nintendo Switch version will be released later in the year. The updated version of the game features graphical enhancements as well as an expanded online mode.</p>
          <p>-- darksouls.wiki: <a href="https://darksouls.wiki.fextralife.com/About+Dark+Souls">1</a>, <a href ="https://darksouls.wiki.fextralife.com/Dark+Souls+Remastered">2</a></p>
          <figure>
            <img src="Images/ornstein_smough.jpg" alt="Ornstein and Smough">
            <figcaption>Two bosses in Dark Souls: Ornstein and Smough</figcaption>
          </figure>
        </main>
        <section>
          <h2>Lore</h2>
          <p>The world of Dark Souls is a world of cycles. Kingdoms rise and fall, ages come and go, and even time can end and restart as the flame fades and is renewed. These cycles are linked to the First Flame, a mysterious manifestation of life that divides and defines separate states such as heat and cold, or life and death. As the first Flame fades, these differences also begin to fade, such as life and death having little distinction, and humans becoming Undead. The onset of an Age of Dark, the time when the First Flame has fully died, is marked by endless nights, rampant undeath, time, space, and reality breaking down, lands collapsing and converging on one another, people mutating into monsters, darkness covering the world, and the Gods losing their power. To avoid this and prolong the Age of Fire, the bearer of a powerful soul must link themselves to the First Flame, becoming the fuel for another age. If this is not done, the First Flame will eventually die, and an Age of Dark will begin.</p>
          <p>The powerful Lord Souls were taken from the First Flame, used to defeat the dragons, and then to establish kingdoms. Souls are inextricably (and inexplicably) linked to fire. Souls are life, and life is fire; it stands to reason that souls are fire, as well. Without the First Flame and without souls, there is no life. The bearer of a strong soul, called a Lord, who links themselves to the First Flame, is thus rekindling the flames with their own soul, returning life to it. In the end, one could expect that all souls will have been returned to the First Flame, and the Age of Fire will have effectively ended anyways.</p>
          <p id="sectionp">-- darksouls.wiki: <a href="https://darksouls.wiki.fextralife.com/Lore">Lore</a></p>
        </section>
        <iframe width="100%" height="440px" src="https://www.youtube.com/embed/A44uvRS_pWU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <p>Video published on Sep 26, 2015</p>
        <details>
          <summary>All boss fights in hd 60fps</summary>
          <ul>
            <li>0:00 - Taurus Demon</li>
            <li>1:09 - Bell Gargoyle</li>
            <li>3:06 - Moonlight Butterfly</li> 
            <li>6:02 - Capra Demon</li> 
            <li>7:50 - Gaping Dragon</li> 
            <li>10:46 - Stray Demon</li> 
            <li>14:11 - Chaos Witch Quelaag</li> 
            <li>16:50 - Ceaseless Discharge</li> 
            <li>20:55 - Great Grey Wolf Sif</li> 
            <li>24:09 - Iron Golem</li> 
            <li>26:16 - Crossbreed Priscilla</li> 
            <li>28:44 - Ornstein and Smough</li> 
            <li>34:52 - Dark Sun Gwyndolin</li> 
            <li>38:03 - Pinwheel</li> 
            <li>40:05 - Gravelord Nito</li> 
            <li>43:16 - Seath the Scaleless</li> 
            <li>46:22 - Four Kings</li> 
            <li>50:19 - Demon Firesage</li> 
            <li>52:21 - Centipede Demon</li> 
            <li>55:31 - Bed of Chaos</li> 
            <li>59:17 - Sanctuary Guardian</li> 
            <li>1:04:31 - Knight Artorias</li> 
            <li>1:10:45 - Black Dragon Kalameet</li> 
            <li>1:19:13 - Manus, Father of the Abyss</li> 
            <li>1:29:31 - Gwyn, Lord of Cinder</li>
          </ul>
        </details>
      </div> 
      <div id="right">
        <aside>
          <table>
            <tr>
              <td colspan="2"><h2>General Information</h2></td>
            </tr>
            <tr>
              <td colspan="2"><img src="Images/darksouls.jpg" alt="Dark Souls"></td>
            </tr>
            <tr>
              <th>Release Date</th>
              <td>4th &amp; 7th October 2011 (EU\NA) <br>22nd September 2011 (JP)<br>24th August 2012 (PC)<br>25th October 2012 (DLC)</td>
            </tr>
            <tr>
              <th>Genre</th>
              <td>Action RPG</td>
            </tr>
            <tr>
              <th>Price</th>
              <td>29.99 USD 4,700 Yen<br>15.00 USD 1,200 Yen (DLC)<br>39.95 USD (Prepare to Die Edition\PC)</td>
            </tr>
            <tr>
              <th>Rating</th>
              <td>M</td>
            </tr>
            <tr>
              <th>Online</th>
              <td>PlayStation Network &amp;<br>XboX LIVE</td>
            </tr>
            <tr>
              <th>Developer</th>
              <td>FromSoftware</td>
            </tr>
            <tr>
              <th>Publisher</th>
              <td>From Software (Japan)<br>Namco Bandai Games (Int’l)</td>
            </tr>
            <tr>
              <th>Director</th>
              <td>Miyazaki Hidetaka</td>
            </tr>
          </table>
        </aside>
        <article>
          <h2>Thief-Class</h2>
          <p>The high critical rate the Thief enjoys is a very nice advantage, especially when combined with the speed of their Dagger attacks. They aren’t built very solidly, however, with low Vitality, Strength and Endurance stats making them a weak target and also reducing their weapon choices. The Dagger is capable of dealing with most enemies perfectly well, and compliments the Thief’s speed and evasive style. They also come with the Master Key by default, which allows them to select a different Gift and access many locked doors much easier than the other Classes could.</p>
          <p>The key part of playing a class-style like the Thief is being able to evade and counter effectively. If you can’t perfect evading, then this isn’t the class-style for you. Don’t be discouraged though, if at first you’re having trouble evading in the beginning of the game--in fact, this is the most important part. I guarantee you will be hit, (and killed), many times wandering around the Undead Burg, but like I said earlier, don’t be discouraged. This is the time you should be figuring out how to effectively evade and counter enemies.</p>
          <p>The strategy I use to defeat the many different types of enemies in Dark Souls can be broken down into steps:</p>
          <ul>
            <li>Step 1: Observe your enemy.</li>
            <li class="hide-list">
              <ul>
                <li>Each enemy in Dark Souls has it’s own unique set of combat moves. In order to successfully evade and counter you must first know how they fight. Generally, each one has about 3-6 different attacks. You’ll notice they usually favor a certain move over others, so once you’ve determined that move, this is the one you’ll want to counter.</li>
              </ul>
            </li>
            <li>Step 2: Countering the enemy.</li>
            <li class="hide-list">
              <ul>
                <li>Counter, or Riposte, is by far the deadliest weapon of the Thief. Counters can only be performed when a shield is equipped. You can perform a Counter by pressing LT/L2 right before an enemy hits you, and following up with an attack using the RB/R1 button to stab the enemy in the chest, dealing heavy critical damage. This is the hardest part about playing as a Thief. It will most likely take many attempts with each enemy until you can figure out the perfect time to execute a counter.</li>
              </ul>
            </li>
            <li>Step 3: Finishing off the enemy.</li>
            <li class="hide-list">
              <ul>
                <li>After a successful counter has been initiated, you’ll kick the enemy down to the ground. This is the perfect time to set yourself up for a Backstab. You can perform a Backstab by positioning yourself behind them and pressing the RB/R1 button. This will thrust/slash your weapon into the back of them, dealing out critical damage. Although the Backstab is a powerful attack, it’s not as powerful as the Counter.</li>
                </li>
              </ul>
            </li>
          </ul>
          <p>Read the entire Thief-Class build at darksouls.wiki: <a href="https://darksouls.wiki.fextralife.com/Shadow+Thief">Shadow Thief</a></p>
        </article>
        <div id="other">
          <h2>Other Information</h2>
          <ul>
            <li><a href="https://youtu.be/0A4X_Kgf4Mk">Canonical Story</a></li>
            <li><a href="https://darksouls.wiki.fextralife.com/Character+Building+for+Dummies">Character Building</a></li>
            <li><a href="https://darksouls.wiki.fextralife.com/Guide+to+Co-operative+Play">Co-op Guide</a></li>
          </ul>
        </div>
      </div>
      <footer>
        <p>Created by Amanda Patschke <i class="far fa-copyright fa-lg"></i> 2018</p>
      </footer>
    </div>
  </body>
</html>