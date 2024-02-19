
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<link rel="stylesheet" href="https://bootswatch.com/5/morph/bootstrap.min.css">
<link rel="stylesheet" href="index.css">
<title>Accueil</title>

<head>
    <body>
        <header>
        <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
  <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#"> <img src="img/informatique_ithi (1).png" style="width:60px" alt="logo"></a>
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="#">Home
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Notify me</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Domain search</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Who's been pwned</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Passwords</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">API</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Donate</a>
        </li>
        
      </ul>
      
    </div>
  </div>
</nav>
        </header>
        <br><br>
        <main>
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h1 class="display-4">';--have i been pwned?</h1>
                    <p class="lead">Check if your email address is in a data breach</p>
                </div>
            </div>
        </main>
        <br><br>
        <div class="checker">
            <div class="check">
                <center><button id="btn-password" type="button" class="btn btn-outline-warning">Check your password</button></center>
                <center><button id="btn-email" type="button" class="btn btn-outline-warning" style="display:none;">Check your email</button></center>
                <br>
                <form method="post" action="">
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Check your email address">
                    </div>
                    <div class="form-group">
                    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Check your password" style="display:none;">

                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

                <h6>Using Have I Been Pwned is subject to the terms of use</h6>
            </div>
        </div>
        <div class="verif">
            <?php include "verifMail.php" ?>
            <?php include "verifPassword.php" ?>
        </div>
        <footer>
        <div class="container text-center">
            <div class="row pwnedSummaryRow">
            <div class="col-sm-3"><span class="pwnSummaryCount">744</span><br>pwned websites</div>
            <div class="col-sm-3"><span class="pwnSummaryCount">12,961,127,682</span><br>pwned accounts</div>
            <div class="col-sm-3"><span class="pwnSummaryCount">115,769</span><br>pastes</div>
            <div class="col-sm-3"><span class="pwnSummaryCount">228,884,627</span><br>paste accounts</div>
        </div>
            <hr/>

            <br><br>

            <div class="tableau">

                <table align="center">
                    <tbody>
                        <tr>
                        <td></td>
                        <td>772,904,991</td>
                        <td> Collection #1 accounts</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>763,117,241</td>
                        <td>Verifications.io accounts</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>711,477,622</td>
                        <td>Onliner Spambot accounts</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>622,161,052</td>
                        <td>Data Enrichment Exposure From PDL Customer accounts</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>593,427,119</td>
                        <td>Exploit.In accounts</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>509,458,528	</td>
                        <td>Facebook accounts</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>457,962,538</td>
                        <td>Anti Public Combo List accounts</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>393,430,309	</td>
                        <td>River City Media Spam List accounts</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>359,420,698</td>
                        <td>MySpace accounts</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>268,765,495</td>
                        <td>Wattpad accounts</td>
                    </tr>
                </tbody>
            </table>
            
            
            
            <table align="center">
                <tbody>
                    <tr>
                        <td></td>
                        <td>772,904,991</td>
                        <td>Collection #1 accounts</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>763,117,241</td>
                        <td>Verifications.io accounts</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>711,477,622</td>
                        <td>Onliner Spambot accounts</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>622,161,052</td>
                        <td>Data Enrichment Exposure From PDL Customer accounts</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>593,427,119</td>
                        <td>Exploit.In accounts</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>509,458,528	</td>
                        <td>Facebook accounts</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>457,962,538</td>
                        <td>Anti Public Combo List accounts</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>393,430,309	</td>
                        <td>River City Media Spam List accounts</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>359,420,698</td>
                        <td>MySpace accounts</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>268,765,495</td>
                        <td>Wattpad accounts</td>
                    </tr>
                </tbody>
            </table>
            
            
    </div>
    
    <br><br>
    <hr class="foot">
    <br><br>

    <div class="terms">
        <div class="policy"><p>Privacy policy</p></div>
        <div class="terms"><p>Terms of use</p></div>
    </div>
    <div class="icones">

    </div>

    </footer>
    
    
    
    
        <script src="index.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    </body>
</head>











