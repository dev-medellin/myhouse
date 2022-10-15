<div class="property-search-area container">
        <div class="property-search-form ">
            <div class="advanced-search-sec row">
                <form id="searchForm" action="{{url('projects')}}" method="get">
                    <div class="col-xs-12 col-sm-6 col-md-me-15 col-lg-me-17 search-field" style="width: 120px;">
                        <label for="proeprty-type">Bed Room</label>
                        <select id="bed_room" name="bed_room">
                            <option value="">Choose</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">+5</option>
                        </select>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-me-13 col-lg-me-13 search-field" style="width: 120px;">
                        <label for="property-room">Bathroom</label>
                        <select id="bath_room" name="bath_room">
                            <option value="">Choose</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">+5</option>
                        </select>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-me-13 col-lg-me-13 search-field" style="width: 120px;">
                        <label for="property-bathroom">Stories</label>
                        <select id="stories" name="stories">
                            <option value="">Choose</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">+5</option>
                        </select>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-me-15 col-lg-me-17 search-field" style="width: 150px;">
                        <label for="property-bathroom">Square Meter</label>
                        <input type="text" name="sq_area" id="sq_area" class="form-control" style="background-color: white;text-align:center;" placeholder="" autocomplete="off" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-me-29 col-lg-me-25 search-field" style="width: 300px;">
                        <div class="price-range">
                            <div class="property-price">
                                <label>Price Range</label>
                                <div class="price-range">
                                    <div class="price-input-count">
                                        <input type="text" class="price_min" name="price_min" id="price-min" />
                                    </div>
                                    <span class="price-money">-</span>
                                    <div class="price-input-count">
                                        <input type="text" class="price_max" name="price_max" id="price-max" />
                                    </div>
                                </div>
                                <div class="price-range-select">
                                    <div class="priceSlider"></div>
                                </div>
                            </div> <!-- /.property-price -->
                        </div> <!-- /.price-range -->
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-me-15 col-lg-me-15 search-field">
                        <div class="submit">
                            <button type="submit" id="searchBtn" value="Search" class="dream-btn">Search</button>
                        </div>
                    </div>
                </form>
            </div> <!-- /.advanced-search-sec -->
            <!-- Show or Hide Property -->
            <a class="more-options close-element" id="clearSearch"></a>
        </div>
    </div> <!-- /.property-search-area -->