            <footer class="footer">
                <div class="container-fluid clearfix">
                    <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © <?php echo date("Y"); ?> <a href="https://www.bootstrapdash.com/" target="_blank">Princess</a>. All rights reserved.</span>
                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i>
                    </span>
                </div>
            </footer> 
            <input type="hidden" value="{{url('/')}}" id="url" name="url">
        </div>
    </div>
</div>

@isset($data['js'])
  @foreach ($data['js'] as $item)
   <script type="text/javascript" src="{{url('admin/assets/strict/'.$item)}}"></script>   
  @endforeach
@endisset
</body>

<!-- Mirrored from www.bootstrapdash.com/demo/justdo-laravel-pro/template/vertical-default-light/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Aug 2022 01:58:37 GMT -->
</html>