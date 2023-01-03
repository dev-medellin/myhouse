<html>

    <head>
        <style>

            /** Define the margins of your page **/

            @page {

                margin: 100px 25px;

            }
            #watermark {
                position: fixed;
                top: 35%;
                left: 105px;
                transform: rotate(45deg);
                transform-origin: 50% 50%;
                opacity: .3;
                font-size: 120px;
                color: white;
                width: 480px;
                text-align: center;
                background-color: black;
            }


            header {

                position: fixed;

                top: -60px;

                left: 0px;

                right: 0px;

                height: 60px;


                /** Extra personal styles **/

                background-color: #1dbb90;

                color: white;

                text-align: center;

                line-height: 35px;

            }


            header p{

                font-size: 25px;

                margin-top: 8px;

            }


            footer {

                position: fixed; 

                bottom: -60px; 

                left: 0px; 

                right: 0px;

                height: 60px; 

                font-size: 20px !important;

                color: white !important;


                /** Extra personal styles **/

                background-color: #1dbb90;

                text-align: center;

                line-height: 35px;

            }

            #watermark {
                position: fixed;

                /** 
                    Set a position in the page for your image
                    This should center it vertically
                **/
                bottom:   10cm;
                left:     5.5cm;

                /** Change image dimensions**/
                width:    8cm;
                height:   8cm;

                /** Your watermark should be behind every content**/
                z-index:  -1000;
            }
            

        </style>
    </head>

    <body>

        <!-- Define header and footer blocks before your content -->

        <header>

            <p>MyHome.com</p>

        </header>


        <footer>

            <div style="margin-top: 8px !important">Copyright © <?php echo date("Y");?> . All rights reserved.</div>

        </footer>


        <!-- Wrap the content of your PDF inside a main tag -->

        <main>

        {!!$body!!}

        </main>

    </body>

</html>