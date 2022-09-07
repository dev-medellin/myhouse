<div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
        <div class="media">
            <div class="media-body">
                <div class="col-12" style="padding: 0px 40px 38px 0px;">
                 <!-- <button class="btn btn-md btn-outline-danger modify-btn" style="float: right;">Edit</button> -->
                </div>
                <form id="forms-edit">
                @csrf
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group">
                            <label>First Name</label>
                            <input class="form-control" id="fname" name="fname" value="<?php echo (auth()->user() != null ? auth()->user()->fname : '');?>" readonly data-inputmask="'alias': 'text'" />
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group">
                            <label>Last Name</label>
                            <input class="form-control" id="lname" name="lname" value="<?php echo (auth()->user() != null ? auth()->user()->lname : '');?>" readonly data-inputmask="'alias': 'text'" />
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group">
                            <label>Phone:</label>
                            <input class="form-control" id="phone" name="phone" value="<?php echo (auth()->user() != null ? auth()->user()->contact : '');?>" readonly data-inputmask-alias="(+63) 9999-9999-99"/>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group">
                            <label>Email:</label>
                            <input class="form-control" id="email" name="email" value="<?php echo (auth()->user() != null ? auth()->user()->email : '');?>" readonly data-inputmask="'alias': 'email'" />
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group" id="change_btn">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group" id="save_btn">
                        </div>
                    </div>
                </form>
                <button class="btn btn-md modify-btn" id="edit_cancel" data-status="edit" style="outline: none;"><i class="fa fa-edit"></i> Edit</button>
            </div>
        </div>
    </div>
        <div class="tab-pane fade" id="pills-favorite" role="tabpanel" aria-labelledby="pills-favorite-tab">
            <div class="media">
            <img class="mr-3 w-25 rounded" src="../assets/images/samples/300X300/10.html" alt="sample image">
            <div class="media-body">
                <p>I'm thinking two circus clowns dancing. You? Finding a needle in a haystack isn't hard when every straw is computerized. Tell him time is of the essence. 
                Somehow, I doubt that. You have a good heart, Dexter.</p>
            </div>
            </div>
        </div>
    <!-- <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
        <div class="media">
        <img class="mr-3 w-25 rounded" src="../assets/images/samples/300x300/14.jpg" alt="sample image">
        <div class="media-body">
            <p>
                I'm really more an apartment person. This man is a knight in shining armor. Oh I beg to differ, I think we have a lot to discuss. After all, you are a client. You all right, Dexter?
            </p>
            <p>
                I'm generally confused most of the time. Cops, another community I'm not part of. You're a killer. I catch killers. Hello, Dexter Morgan.
            </p>
        </div>
        </div>
    </div> -->
</div>