
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
foreach($data['materials_exp'] as $mat):
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
                    <span style="font-size: 12pt; font-family: 'Arial', sans-serif; mso-fareast-font-family: 'Times New Roman'; color: #333333;">₱ {{number_format($key_attr['material_price'], 2, '.',',')}}<o:p></o:p></span>
                </p>
            </td>
            <td
                width="25%"
                valign="top"
                style="border: solid #dddddd 1pt; border-left: none; mso-border-left-alt: solid #dddddd 0.75pt; mso-border-alt: solid #dddddd 0.75pt; padding: 0.75pt 0.75pt 0.75pt 0.75pt; height: 23.35pt;"
            >
                <p class="MsoNormal" align="center" style="margin-bottom: 15pt; text-align: center; line-height: normal;">
                    <span style="font-size: 12pt; font-family: 'Arial', sans-serif; mso-fareast-font-family: 'Times New Roman'; color: #333333;"> ₱ {{number_format($key_attr['total_price'], 2, '.',',')}}<o:p></o:p></span>
                </p>
            </td>
        </tr>
    @endforeach 
    </tbody>
</table>
@endforeach


