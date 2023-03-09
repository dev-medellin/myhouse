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


        <p class="MsoNormal">
                <b>
                    <span
                        style="
                            font-size: 13.5pt;
                            line-height: 107%;
                            font-family: Arial, sans-serif;
                            color: rgb(192, 0, 0);
                            background-image: initial;
                            background-position: initial;
                            background-size: initial;
                            background-repeat: initial;
                            background-attachment: initial;
                            background-origin: initial;
                            background-clip: initial;
                        "
                    >
                        THE PRICES MAY VARY!!<o:p></o:p>
                    </span>
                </b>
            </p>
            <p
                class="MsoNormal"
                align="center"
                style="
                    margin: 15pt 0in 7.5pt;
                    text-align: center;
                    line-height: normal;
                    background-image: initial;
                    background-position: initial;
                    background-size: initial;
                    background-repeat: initial;
                    background-attachment: initial;
                    background-origin: initial;
                    background-clip: initial;
                "
            >
                <b><span style="font-size: 27pt; font-family: 'Arial', sans-serif; mso-fareast-font-family: 'Times New Roman'; color: #333333; mso-font-kerning: 18pt;">MATERIALS</span></b>
            </p>
            <?php 
                $groupedData = array();
                foreach($materials_exp as $mat):
                    $category = $mat['material_category'];
                    if (!array_key_exists($category, $groupedData)) {
                        $groupedData[$category] = array();
                    }
                    $groupedData[$category][] = $mat;
                ?>
                <?php endforeach;?>
                @foreach($groupedData as $category => $values)
                <p
                    class="MsoNormal"
                    style="
                        margin: 15pt 0in 7.5pt;
                        line-height: normal;
                        background-image: initial;
                        background-position: initial;
                        background-size: initial;
                        background-repeat: initial;
                        background-attachment: initial;
                        background-origin: initial;
                        background-clip: initial;
                    "
                >
                    <span style="font-size: 22pt; font-family: 'Arial', sans-serif; mso-fareast-font-family: 'Times New Roman'; color: #333333;">{{$category}}<o:p></o:p></span>
                </p>
                <table
                    class="MsoNormalTable"
                    border="1"
                    cellspacing="0"
                    cellpadding="0"
                    width="100%"
                    style="width: 100%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border: none;"
                >
                    <thead>
                        <tr style="text-align: center;">
                            <th style="text-align: center;">Kind</th>
                            <th style="text-align: center;">Quantity</th>
                            <th style="text-align: center;">Price</th>
                            <th style="text-align: center;">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($values as $key_attr)
                        <tr style="mso-yfti-irow: 0; mso-yfti-firstrow: yes; height: 23.35pt;">
                            <td width="25%" valign="top" style="border: solid #dddddd 1pt; mso-border-alt: solid #dddddd 0.75pt; padding: 6pt 6pt 6pt 6pt; height: 23.35pt;">
                                <p class="MsoNormal" style="margin-bottom: 15pt; line-height: normal;">
                                    <span style="font-size: 12pt; font-family: 'Arial', sans-serif; mso-fareast-font-family: 'Times New Roman'; color: #333333;">{{ucwords($key_attr['material_name'])}}<o:p></o:p></span>
                                </p>
                            </td>
                            <td width="25%" valign="top" style="border: solid #dddddd 1pt; border-left: none; mso-border-left-alt: solid #dddddd 0.75pt; mso-border-alt: solid #dddddd 0.75pt; padding: 6pt 6pt 6pt 6pt; height: 23.35pt;">
                                <p class="MsoNormal" align="center" style="margin-bottom: 15pt; text-align: center; line-height: normal;">
                                    <span style="font-size: 12pt; font-family: 'Arial', sans-serif; mso-fareast-font-family: 'Times New Roman'; color: #333333;">{{$key_attr['material_quantity']}} {{ucfirst($key_attr['material_by'])}}<o:p></o:p></span>
                                </p>
                            </td>
                            <td
                                width="25%"
                                valign="top"
                                style="border: solid #dddddd 1pt; border-left: none; mso-border-left-alt: solid #dddddd 0.75pt; mso-border-alt: solid #dddddd 0.75pt; padding: 0.75pt 0.75pt 0.75pt 0.75pt; height: 23.35pt;"
                            >
                                <p class="MsoNormal" align="center" style="margin-bottom: 15pt; text-align: center; line-height: normal;">
                                    <span style="font-size: 12pt; font-family: 'Arial', sans-serif; mso-fareast-font-family: 'Times New Roman'; color: #333333;">PHP {{number_format($key_attr['material_price'], 2, '.',',')}}<o:p></o:p></span>
                                </p>
                            </td>
                            <td
                                width="25%"
                                valign="top"
                                style="border: solid #dddddd 1pt; border-left: none; mso-border-left-alt: solid #dddddd 0.75pt; mso-border-alt: solid #dddddd 0.75pt; padding: 0.75pt 0.75pt 0.75pt 0.75pt; height: 23.35pt;"
                            >
                                <p class="MsoNormal" align="center" style="margin-bottom: 15pt; text-align: center; line-height: normal;">
                                    <span style="font-size: 12pt; font-family: 'Arial', sans-serif; mso-fareast-font-family: 'Times New Roman'; color: #333333;">PHP {{number_format($key_attr['total_price'], 2, '.',',')}}<o:p></o:p></span>
                                </p>
                            </td>
                        </tr>
                    @endforeach 
                    </tbody>
                </table>
                @endforeach

        </main>

    </body>

</html>