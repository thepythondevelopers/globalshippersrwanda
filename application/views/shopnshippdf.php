<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="qeHwhgpRK1jfV6CApJT5f7Wrdyc9HOI3fHBlzQqO">
    <title> <?php (!empty($title )) ? $title : ('Global Shipperswanda');?></title>
</head>

<body>
    <div style="
             width: 100%;
             font-family: sans-serif;
             max-width: 800px;
             margin: auto;
             ">
        <table style="
                   width: 100%;
                   margin-bottom: 15px;
                   color: #000;
                   " cellspacing="0">
            <tbody>
                <tr>
                    <td style="border-bottom: 1px solid #000;padding: 10px;"><img
                            src="<?php echo base_url()?>/assets/cms/img/logo-black.png" style="
    height: 45px;
"></td>
                    <td style="
                            border-bottom: 1px solid #000;
                            padding: 10px;
                            ">
                        <h1 style="
                                color: #000;
                                text-align: right;
                                font-size: 26px;
                                line-height: 24px;
                                margin: 0px;
                                ">Payment Invoice</h1>
                    </td>
                </tr>
                <tr>
                    <td style="
                            text-align: left;
                            padding: 10px;
                            vertical-align: top;
                            ">
                        <p style="
                               margin: 0px;
                               color: #000;
                               font-size: 16px;
                               line-height: 19px;
                               margin-bottom: 3px;
                               "><b>Bill To :- </b></p>
                        <p style="
                               margin: 0px;
                               color: #000;
                               font-size: 14px;
                               line-height: 19px;
                               "><?php echo $users->fname.' '.$users->lname;?><br><?php echo $users->email;?></p>
                        <br>
                    </td>
                    <td style="text-align: right;padding: 10px;vertical-align: top;">
                        <p style="
                               margin: 0px;
                               color: #000;
                               font-size: 16px;
                               line-height: 19px;
                               margin-bottom: 3px;
                               "><b>Deliver To :- </b></p>
                        <p style="
                               margin: 0px;
                               color: #000;
                               font-size: 14px;
                               line-height: 19px;
                               "><?php echo $address->fname.' '.$address->lname?>
                            <br><?php echo $address->phone_number;?><br>
                            <?php echo $address->street_address;?><br>
                            <?php echo $address->gate_code;?>,
                            <?php echo $address->city;?>,
                            <?php echo $address->state;?>,
                            <?php echo $address->country;?>,
                            <?php echo $address->pin_code;?>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td style="
                            text-align: left;
                            padding: 10px;
                            vertical-align: top;
                            border-top: 1px solid #000;
                            ">
                        <p style="
                               margin: 0px;
                               color: #000;
                               font-size: 16px;
                               line-height: 19px;
                               margin-bottom: 3px;
                               "><b>Order Id :- </b></p>
                        <p style="
                               margin: 0px;
                               color: #000;
                               font-size: 14px;
                               line-height: 19px;
                               "><?php echo $record[0]->shopnship_id;?>
                        </p>
                        <!-- <p style="
                               margin: 0px;
                               color: #000;
                               font-size: 16px;
                               line-height: 19px;
                               margin-bottom: 3px;
                               "><b>Invoice Number :- </b></p>
                        <p style="
                               margin: 0px;
                               color: #000;
                               font-size: 14px;
                               line-height: 19px;
                               "> INVMXB202380459
                        </p> -->
                    </td>
                    <td style="text-align: right;padding: 10px;vertical-align: top;border-top: 1px solid #000;">
                        <p style="
                               margin: 0px;
                               color: #000;
                               font-size: 16px;
                               line-height: 19px;
                               margin-bottom: 3px;
                               "><b>Date :- </b></p>
                        <p style="
                               margin: 0px;
                               color: #000;
                               font-size: 14px;
                               line-height: 19px;
                               "><?php 
                                $datetime = strtotime($record[0]->created_date);
                                $convertdate = date("d-m-Y",$datetime);
                                print_r($convertdate);
                               ?>
                        </p>
                    </td>
                </tr>
            </tbody>
        </table>
        <table border="0" style="
                   width: 100%;
                   font-size: 14px;
                   margin-bottom: 15px;
                   border-bottom: 1px solid #ddd;
                   border-left: 1px solid #ddd;
                   border-right: 1px solid #ddd;
                   " cellspacing="0" cellpadding="5">
            <thead style="
                       ">
                <tr style="
                        background-color: #000000;
                        color: #fff;
                        ">
                    <th style="
                            text-align: left;
                            padding-left: 15px;
                            " colspan="2"> Description</th>
                    <th style="
                            text-align: left;

                            " colspan="2"> </th>
                    <th style="
                            text-align:right;
                           
                            " colspan="2"></th>
                </tr>
            </thead>

            <tbody style="
                       border-bottom: 1px solid #ddd;
                       ">
                
<tr>
                    <td colspan="2">Item Type</td>
                    <td colspan="2"> - </td>
                    <td style=" font-weight: bold;"><?php echo $record[0]->item_type_name;?>
                    </tr>


                <tr>
                    <td colspan="2">Item Name</td>
                    <td colspan="2"> - </td>
                    <td style=" font-weight: bold;"><?php echo $record[0]->product_name;?>
                </tr>
                <tr>
                    <td colspan="2">Size</td>
                    <td colspan="2"> - </td>
                    <td style=" font-weight: bold;"><?php echo $record[0]->store;?>
                </tr>
                <tr>
                    <td colspan="2">Weight</td>
                    <td colspan="2"> - </td>
                    <td style=" font-weight: bold;"><?php echo $record[0]->size;?>
                </tr>
                <!-- <tr>
                    <td colspan="2">Color</td>
                    <td colspan="2"> - </td>
                    <td style=" font-weight: bold;"><?php echo $record[0]->color;?>
                </tr> -->
                <tr>
                    <td colspan="2">Quantity</td>
                    <td colspan="2"> - </td>
                    <td style=" font-weight: bold;"><?php echo $record[0]->quantity;?>
                </tr>

                <tr style="background-color: #dddddd">
                    <td colspan="2">Total Price:</td>
                    <td colspan="2"> </td>

                    <td style="font-weight: bold;"><?php echo $invoiceAmt->invoiceamt;?>
                        <span style="text-transform: uppercase;"> usd</span>
                    </td>
                    <td></td>
                </tr>


            </tbody>
        </table>
        <table style="
                   background: #f5f5f5;
                   width: 100%;
                   ">
            <tfoot style="
                       ">
                <tr>
                    <td colspan="5" style="text-align: center;">
                        <p style="
                               color: #000;
                               font-size: 12px;
                               margin-top: 10px;
                               max-width: 460px;
                               margin: auto;
                               padding-top: 10px;
                               line-height: 16px;
                               padding-bottom: 10px;
                               font-style: italic;
                               font-weight: 500;
                               ">This is computer generated invoice</p>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
</body>

</html>