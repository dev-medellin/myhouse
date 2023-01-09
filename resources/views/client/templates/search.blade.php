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
                    <div class="col-xs-12 col-sm-6 col-md-me-13 col-lg-me-13 search-field" style="width: 220px;">
                        <label for="property-bathroom">Fence</label>
                        <select id="fence" name="fence">
                            <option value="">Choose</option>
                            <option value="wood_fence">Wood Fence</option>
                            <option value="steel_fence">Steel Fence</option>
                            <option value="concrete_wall_fence">Concrete Wall Fence</option>
                            <option value="show_all_fence">Show all fence</option>
                        </select>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-me-13 col-lg-me-13 search-field" style="width: 220px;">
                        <label for="property-bathroom">Roof</label>
                        <select id="roof" name="roof">
                            <option value="">Choose</option>
                            <option value="gable_roof">Gable Roof</option>
                            <option value="hip_roof">Hip Roof</option>
                            <option value="pyramid_roof">Pyramid Roof</option>
                            <option value="skillion_roof">Skillion Roof</option>
                            <option value="flat_roof">Flat Roof</option>
                            <option value="show_all_roof">Show all roof</option>
                        </select>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-me-15 col-lg-me-17 search-field" style="width: 150px;">
                        <label for="property-bathroom">Square Meter</label>
                        <input type="text" name="sq_area" id="sq_area" class="form-control" style="background-color: white;text-align:center;" placeholder="" autocomplete="off" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-me-20 col-lg-me-20 search-field" style="width: 300px;">
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
            <a class="more-options close-element"></a>
        </div>
    </div> <!-- /.property-search-area -->