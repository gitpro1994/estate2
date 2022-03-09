<section class="main-banner-wrap1" data-bg-image="<?= site_url() ?>assets/img/slider/slider4.jpg">
   <span class="banner-shape1">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
         <path class="banner-shpape-fill" d="M500,97C126.7,96.3,0.8,19.8,0,0v100l1000,0V1C1000,19.4,873.3,97.8,500,97z"></path>
      </svg>
   </span>
   <div class="container">
      <div class="row">
         <div class="col-xl-12">
            <div class="main-banner-box1">
               <h1 class="item-title wow fadeInUp" data-wow-delay=".4s">Find the perfect place to Live
                  with your family
               </h1>
               <form method="GET" id="search-form">
               <div class="listing-category-list wow fadeInUp" data-wow-delay=".6s">
                  <div class="search-radio">
                     <ul class="list-inline">
                        <li class="apartments">
                           <label for="apartments" class="active">
                           <i class="far fa-building active"></i>
                           <span>Apartments</span>
                           <input checked="" type="radio" name="rtcl_category" id="apartments" value="apartments">
                           </label>
                        </li>
                        <li class="home">
                           <label for="home">
                           <i class="fas fa-home"></i>
                           <span>Home</span>
                           <input checked="" type="radio" name="rtcl_category" id="home" value="home">
                           </label>
                        </li>
                        <li class="office">
                           <label for="office">
                           <i class="fas fa-briefcase"></i>
                           <span>Office</span>
                           <input checked="" type="radio" name="rtcl_category" id="office" value="office">
                           </label>
                        </li>
                        <li class="shop">
                           <label for="shop">
                           <i class="fas fa-shopping-basket"></i>
                           <span>Shop</span>
                           <input checked="" type="radio" name="rtcl_category" id="shop" value="shop">
                           </label>
                        </li>
                        <li class="villa">
                           <label for="villa">
                           <i class="fas fa-building"></i>
                           <span>Villa</span>
                           <input checked="" type="radio" name="rtcl_category" id="villa" value="villa">
                           </label>
                        </li>
                        <li class="restaurant">
                           <label for="restaurant">
                           <i class="fas fa-utensils"></i>
                           <span>Restaurant</span>
                           <input checked="" type="radio" name="rtcl_category" id="restaurant" value="restaurant">
                           </label>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="banner-search-wrap">
                  <div class="rld-main-search">
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="box">
                              <div class="box-top">
                                 <div class="rld-single-input item">
                                    <input type="text" name="keyword" id="keyword" placeholder="Enter Kewword here...">
                                 </div>
                                 <div class="rld-single-select ml-22">
                                    <select class="select single-select" id="menzil_type" name="menzil_type">
                                       <option value=""><?= translate("select_estate_type") ?></option>
                                        <?php 
                                        $sel = "SELECT * FROM realty_kinds WHERE status=2";
                                        $run = mysqli_query($conn,$sel);
                                        while ($bax = mysqli_fetch_array($run)) 
                                        {
                                         ?>
                                       <option value="<?= $bax['id'] ?>"><?= $bax['kind_name'] ?></option>
                                       <?php } ?>
                                    </select>
                                 </div>
                                 <div class="rld-single-select item">
                                    <select class="select single-select mr-0" id="city" name="city">
                                       <option value=""><?= translate("select_city") ?></option>
                                        <?php 
                                        $sel1 = "SELECT * FROM cities WHERE status=2";
                                        $run1 = mysqli_query($conn,$sel1);
                                        while ($bax1 = mysqli_fetch_array($run1)) 
                                        {
                                        ?>
                                       <option value="<?= $bax1['id'] ?>"><?= $bax1['city_name'] ?></option>
                                        <?php } ?>
                                    </select>
                                 </div>
                                 <div class="item rt-filter-btn">
                                    <div class="dropdown-filter item">
                                       <span>
                                       <i class="fas fa-sliders-h"></i>
                                       </span>
                                    </div>
                                    <div class="filter-button-area">
                                       <a class="filter-btn" id="search_button"><span>search<i
                                          class="fa fa-search"></i></span></a>
                                    </div>
                                 </div>
                              </div>
                              <div class="explore__form-checkbox-list full-filter">
                                 <div class="row">
                                    <div class="col-lg-4 col-md-6 py-1 pr-30 pl-0">
                                       <div class="form-group bed">
                                          <label class="item-bedrooms">Bedrooms</label>
                                          <select name="bedroom" id="bedroom" class="js-example-basic-single form-control form-control-sm mr-6">
                                             <option value="1">All Cities</option>
                                             <option value="2">Los Angeles</option>
                                             <option value="3">Chicago</option>
                                             <option value="3">Philadelphia</option>
                                          </select>
                                       </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 py-1 pr-30 pl-0 ">
                                       <div class="form-group bath">
                                          <label class="item-bath">Bathrooms</label>
                                          <div class="nice-select form-control wide" tabindex="0">
                                             <span class="current">Any</span>
                                             <ul class="list">
                                                <li data-value="1" class="option selected">1
                                                </li>
                                                <li data-value="2" class="option">2</li>
                                                <li data-value="3" class="option">3</li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 py-1 pl-0 pr-0">
                                       <div class="form-group garage">
                                          <label class="item-garage">Garage</label>
                                          <div class="nice-select form-control wide" tabindex="0">
                                             <span class="current">Any</span>
                                             <ul class="list">
                                                <li data-value="1" class="option selected">1
                                                </li>
                                                <li data-value="2" class="option">2</li>
                                                <li data-value="3" class="option">3</li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="main-search-field-2 col-12">
                                       <div class="row">
                                          <div class="col-md-6 pl-0">
                                             <div class="price-range-wrapper">
                                                <div class="range-box">
                                                   <div class="price-label">Flat Size:</div>
                                                   <div id="price-range-filter-3"
                                                      class="price-range-filter"></div>
                                                   <div
                                                      class="price-filter-wrap d-flex align-items-center">
                                                      <div class="price-range-select">
                                                         <div class="price-range"
                                                            id="price-range-min-3"></div>
                                                         <div class="price-range">-</div>
                                                         <div class="price-range"
                                                            id="price-range-max-3"></div>
                                                         <div
                                                            class="price-range range-title">
                                                            sft
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-md-6 pl-0">
                                             <div class="price-range-wrapper">
                                                <div class="range-box">
                                                   <div class="price-label">Distance:</div>
                                                   <div id="price-range-filter-2"
                                                      class="price-range-filter"></div>
                                                   <div
                                                      class="price-filter-wrap d-flex align-items-center">
                                                      <div class="price-range-select">
                                                         <div class="price-range"
                                                            id="price-range-min-2"></div>
                                                         <div class="price-range">-</div>
                                                         <div class="price-range"
                                                            id="price-range-max-2"></div>
                                                         <div
                                                            class="price-range range-title">
                                                            km
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-lg-12 col-md-12 col-sm-12">
                                          <h4 class="text-dark">Amenities</h4>
                                          <ul class="no-ul-list third-row">
                                             <li>
                                                <input id="a-1" class="checkbox-custom"
                                                   name="a-1" type="checkbox">
                                                <label for="a-1"
                                                   class="checkbox-custom-label">Air
                                                Condition</label>
                                             </li>
                                             <li>
                                                <input id="a-2" class="checkbox-custom"
                                                   name="a-2" type="checkbox">
                                                <label for="a-2"
                                                   class="checkbox-custom-label">Bedding</label>
                                             </li>
                                             <li>
                                                <input id="a-3" class="checkbox-custom"
                                                   name="a-3" type="checkbox">
                                                <label for="a-3"
                                                   class="checkbox-custom-label">Heating</label>
                                             </li>
                                             <li>
                                                <input id="a-4" class="checkbox-custom"
                                                   name="a-4" type="checkbox">
                                                <label for="a-4"
                                                   class="checkbox-custom-label">Internet</label>
                                             </li>
                                             <li>
                                                <input id="a-5" class="checkbox-custom"
                                                   name="a-5" type="checkbox">
                                                <label for="a-5"
                                                   class="checkbox-custom-label">Microwave</label>
                                             </li>
                                             <li>
                                                <input id="a-6" class="checkbox-custom"
                                                   name="a-6" type="checkbox">
                                                <label for="a-6"
                                                   class="checkbox-custom-label">Smoking
                                                Allow</label>
                                             </li>
                                             <li>
                                                <input id="a-7" class="checkbox-custom"
                                                   name="a-7" type="checkbox">
                                                <label for="a-7"
                                                   class="checkbox-custom-label">Terrace</label>
                                             </li>
                                             <li>
                                                <input id="a-8" class="checkbox-custom"
                                                   name="a-8" type="checkbox">
                                                <label for="a-8"
                                                   class="checkbox-custom-label">Balcony</label>
                                             </li>
                                             <li>
                                                <input id="a-9" class="checkbox-custom"
                                                   name="a-9" type="checkbox">
                                                <label for="a-9"
                                                   class="checkbox-custom-label">Balcony</label>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                    <div class="filter-button">
                                       <a href="index.html" class="filter-btn1">Apply Filter</a>
                                       <a href="index.html" class="filter-btn1 reset-btn">Reset Filter<i
                                          class="fas fa-redo-alt"></i></a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <p class="item-para wow fadeInUp" data-wow-delay=".4s">We’ve more than <span
                     class="banner-p">54,000</span> apartments, place & plot.
                  </p>
               </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</section>