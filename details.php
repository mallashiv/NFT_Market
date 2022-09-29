<?php
include('navbar.php')
?>

  <div class="page-heading normal-space">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h6>Liberty NFT Market</h6>
          <h2>View Item Details</h2>
          <span>Home > <a href="#">Item Details</a></span>
          <div class="buttons">
            <div class="main-button">
              <a href="explore.html">Explore Our Items</a>
            </div>
            <div class="border-button">
              <a href="create.html">Create Your NFT</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="item-details-page">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <div class="line-dec"></div>
            <h2>View Details <em>For Item</em> Here.</h2>
          </div>
        </div>
        <div class="col-lg-7">
          <div class="left-image">
            <img src="assets/images/item-details-01.jpg" alt="" style="border-radius: 20px;">
          </div>
        </div>
        <div class="col-lg-5 align-self-center">
          <h4>Dolores Haze Westworld Eye</h4>
          <span class="author">
            <img src="assets/images/author-02.jpg" alt="" style="max-width: 50px; border-radius: 50%;">
            <h6>Liberty Artist<br><a href="#">@libertyart</a></h6>
          </span>
          <p>Lorem ipsum dolor sit amet, consectetu dipiscingei elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <div class="row">
            <div class="col-3">
              <span class="bid">
                Current Bid<br><strong>6.06 ETH</strong><br><em>($8,025.50)</em>
              </span>
            </div>
            <div class="col-4">
              <span class="owner">
                Owner<br><strong>David Walker</strong><br><em>(@davidwalker)</em>
              </span>
            </div>
            <div class="col-5">
              <span class="ends">
                Ends In<br><strong>3D 05H 20M 58S</strong><br><em>(January 22nd, 2021)</em>
              </span>
            </div>
          </div>
          <form action="submit">
            <label for="quantity-text">Place Bid:</label>
            <input placeholder="1 ETH" class="quantity-text">
            <button type="submit" id="form-submit" class="main-button">Submit Now</button>
          </form>
        </div>
        <div class="col-lg-12">
          <div class="current-bid">
            <div class="row">
              <div class="col-lg-6">
                <div class="mini-heading"><h4>Current Biddings Prices ( ETH )</h4></div>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <select name="Category" class="form-select" aria-label="Default select example" id="chooseCategory" onchange="this.form.click()">
                      <option selected>Sort By: Latest</option>
                      <option type="checkbox" name="option1" value="old">Sort By: Oldest</option>
                      <option value="low">Sort By: Lowest</option>
                      <option value="high">Sort By: Highest</option>
                  </select>
              </fieldset>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="item">
                  <div class="left-img">
                    <img src="assets/images/current-01.jpg" alt="">
                  </div>
                  <div class="right-content">
                    <h4>David Walker</h4>
                    <a href="#">@davidwalker</a>
                    <div class="line-dec"></div>
                    <h6>Bid: <em>0.06 ETH</em></h6>
                    <span class="date">24/07/2022, 22:00</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="item">
                  <div class="left-img">
                    <img src="assets/images/current-02.jpg" alt="">
                  </div>
                  <div class="right-content">
                    <h4>David Walker</h4>
                    <a href="#">@davidwalker</a>
                    <div class="line-dec"></div>
                    <h6>Bid: <em>0.06 ETH</em></h6>
                    <span class="date">24/07/2022, 22:00</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="item">
                  <div class="left-img">
                    <img src="assets/images/current-03.jpg" alt="">
                  </div>
                  <div class="right-content">
                    <h4>David Walker</h4>
                    <a href="#">@davidwalker</a>
                    <div class="line-dec"></div>
                    <h6>Bid: <em>0.06 ETH</em></h6>
                    <span class="date">24/07/2022, 22:00</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="item">
                  <div class="left-img">
                    <img src="assets/images/current-02.jpg" alt="">
                  </div>
                  <div class="right-content">
                    <h4>David Walker</h4>
                    <a href="#">@davidwalker</a>
                    <div class="line-dec"></div>
                    <h6>Bid: <em>0.06 ETH</em></h6>
                    <span class="date">24/07/2022, 22:00</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="item">
                  <div class="left-img">
                    <img src="assets/images/current-04.jpg" alt="">
                  </div>
                  <div class="right-content">
                    <h4>David Walker</h4>
                    <a href="#">@davidwalker</a>
                    <div class="line-dec"></div>
                    <h6>Bid: <em>0.06 ETH</em></h6>
                    <span class="date">24/07/2022, 22:00</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="item">
                  <div class="left-img">
                    <img src="assets/images/current-01.jpg" alt="">
                  </div>
                  <div class="right-content">
                    <h4>David Walker</h4>
                    <a href="#">@davidwalker</a>
                    <div class="line-dec"></div>
                    <h6>Bid: <em>0.06 ETH</em></h6>
                    <span class="date">24/07/2022, 22:00</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="create-nft">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="section-heading">
            <div class="line-dec"></div>
            <h2>Create Your NFT & Put It On The Market.</h2>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="main-button">
            <a href="create.html">Create Your NFT Now</a>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="item first-item">
            <div class="number">
              <h6>1</h6>
            </div>
            <div class="icon">
              <img src="assets/images/icon-02.png" alt="">
            </div>
            <h4>Set Up Your Wallet</h4>
            <p>There are 5 different HTML pages included in this NFT <a href="https://templatemo.com/page/1" target="_blank" rel="nofollow">website template</a>. You can edit or modify any section on any page as you required.</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="item second-item">
            <div class="number">
              <h6>2</h6>
            </div>
            <div class="icon">
              <img src="assets/images/icon-04.png" alt="">
            </div>
            <h4>Add Your Digital NFT</h4>
            <p>If you would like to support our TemplateMo website, please visit <a rel="nofollow" href="https://templatemo.com/contact" target="_parent">our contact page</a> to make a PayPal contribution. Thank you.</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="item">
            <div class="icon">
              <img src="assets/images/icon-06.png" alt="">
            </div>
            <h4>Sell Your NFT &amp; Make Profit</h4>
            <p>NFT means Non-Fungible Token that are used in digital cryptocurrency markets. There are many different kinds of NFTs in the industry.</p>
          </div>
        </div>
      </div>
    </div>
  </div>


  <?php
  include('footer.php')
  ?>