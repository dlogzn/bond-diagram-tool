<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bond Diagram</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.css">
    <link rel="stylesheet" href="assets/css/default.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.1.2/tinymce.min.js"></script>


</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 mx-auto">
            <div class="row py-4">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-4 pt-1" id="logo">

                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-8 text-end">

                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid bg-white">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 mx-auto">
            <div class="text-center fw-bold h4 text_color_7 my-5">Bond Diagram</div>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6 mb-4 mb-xl-0">
                    <div class="d-flex justify-content-center justify-content-xl-end">
                        <div class="pe-3">
                            <div class="form-control border-0 pt-2 text_color_default">Package Type</div>
                            <div class="form-control border-0 invisible" style="font-size: 80%;">Error Message</div>
                            <div class="form-control border-0 pt-2 text_color_default">Die Width</div>
                            <div class="form-control border-0 invisible" style="font-size: 80%;">Error Message</div>
                            <div class="form-control border-0 pt-2 text_color_default">Die Height</div>
                            <div class="form-control border-0 invisible" style="font-size: 80%;">Error Message</div>
                            <div class="form-control border-0 pt-2 text_color_default">Upload Netlist</div>
                            <div class="form-control border-0 invisible" style="font-size: 80%;">Error Message</div>
                            <div class="form-control border-0 invisible">Draw Diagram</div>
                        </div>
                        <div class="ps-3">
                            <form id="bond_diagram_form">
                                <select class="form-select" name="package_type" id="package_type">
                                    <option value="">Select Package</option>
                                    <option value="4x4, 16, .65">QFN, 4x4mm, 16L, .65mm</option>
                                    <option value="4x4, 20, .50">QFN, 4x4mm, 20L, .50mm</option>
                                    <option value="4x4, 24, .50">QFN, 4x4mm, 24L, .50mm</option>
                                    <option value="4x4, 28, .45">QFN, 4x4mm, 28L, .45mm</option>
                                    <option value="4x4, 28, .40">QFN, 4x4mm, 28L, .40mm</option>
                                    <option value="4x4, 32, .40">QFN, 4x4mm, 32L, .40mm</option>
                                    <option value="5x5, 16, .80">QFN, 5x5mm, 16L, .80mm</option>
                                    <option value="5x5, 20, .65">QFN, 5x5mm, 20L, .65mm</option>
                                    <option value="5x5, 28, .50">QFN, 5x5mm, 28L, .50mm</option>
                                    <option value="5x5, 32, .50">QFN, 5x5mm, 32L, .50mm</option>
                                    <option value="5x5, 40, .40">QFN, 5x5mm, 40L, .40mm</option>
                                    <option value="6x6, 40, .50">QFN, 6x6mm, 40L, .50mm</option>
                                    <option value="6x6, 48, .40">QFN, 6x6mm, 48L, .40mm</option>
                                    <option value="7x7, 32, .65">QFN, 7x7mm, 32L, .65mm</option>
                                    <option value="7x7, 48, .50">QFN, 7x7mm, 48L, .50mm</option>
                                    <option value="7x7, 56, .40">QFN, 7x7mm, 56L, .40mm</option>
                                    <option value="8x7, 52, .50">QFN, 8x7mm, 52L, .50mm</option>
                                    <option value="8x8, 56, .50">QFN, 8x8mm, 56L, .50mm</option>
                                    <option value="8x8, 64, .40">QFN, 8x8mm, 64L, .40mm</option>
                                    <option value="9x9, 64, .50">QFN, 9x9mm, 64L, .50mm</option>
                                    <option value="9x9, 76, .40">QFN, 9x9mm, 76L, .40mm</option>
                                    <option value="10x10, 68, .50">QFN, 10x10mm, 68L, .50mm</option>
                                    <option value="10x10, 88, .40">QFN, 10x10mm, 88L, .40mm</option>
                                    <option value="12x12, 100, .40">QFN, 12x12mm, 100L, .40mm</option>
                                </select>
                                <div class="form-control border-0 invisible text-danger package_type_error_message" style="font-size: 80%;">Error Message</div>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="die_width" name="die_width">
                                    <span class="input-group-text">μm</span>
                                </div>
                                <div class="form-control border-0 invisible text-danger die_width_error_message" style="font-size: 80%;">Error Message</div>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="die_height" name="die_height">
                                    <span class="input-group-text">μm</span>
                                </div>
                                <div class="form-control border-0 invisible text-danger die_height_error_message" style="font-size: 80%;">Error Message</div>
                                <input type="file" name="netlist" id="netlist" class="form-control">
                                <div class="form-control border-0 invisible text-danger netlist_error_message" style="font-size: 80%;">Error Message</div>
                                <div class="mb-3 text-center" style="margin-top: -10px;"><a href="javascript:void(0)" class="text-decoration-none small" id="download_template">Download the Template</a></div>
                                <div class="text-end">
                                    <button type="submit" class="btn btn_default border-0 rounded-0 py-2 px-3">Draw Diagram</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6">
                    <div id="bond_diagram_container">
                        <div class="d-flex justify-content-center justify-content-xl-start align-items-xl-center" style="min-height: 200px;">Diagram drawing process will be initiated by selecting a package type.</div>
                    </div>
                </div>
            </div>
            <div style="height: 150px;"></div>
        </div>
    </div>
</div>



<div class="container-fluid">
    <div class="row py-5">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 mx-auto">
            <div class="row mt-3">
                <div class="col text-center ">
                    <span class=" text-muted">&copy; <?php echo date('Y') ?> Bond Diagram</span>
                </div>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">


    $(document).on('submit', '#bond_diagram_form', function (event) {
        event.preventDefault();

        $('.package_type_error_message').addClass('invisible').text('Error Message');
        $('.die_width_error_message').addClass('invisible').text('Error Message');
        $('.die_height_error_message').addClass('invisible').text('Error Message');
        $('.netlist_error_message').addClass('invisible').text('Error Message');

        let formData = new FormData(this);
        formData.append('netlist', document.getElementById('netlist').files[0]);

        $.ajax({
            method: 'post',
            url: 'read_excel.php',
            data: formData,
            contentType: false,
            processData: false,
            success: function (result) {
                result = JSON.parse(result);
                console.log(result)
                if (result.success === true) {

                    const packageWidth = result.packageWidth;
                    const packageHeight = result.packageHeight;
                    const numberOfEachSidePins = result.numberOfEachSidePins;
                    const pitch = result.pitch;
                    const pinWidth = result.pinWidth;
                    const pinHeight = result.pinHeight;
                    const dieWidth = result.dieWidth;
                    const dieHeight = result.dieHeight;

                    $('#bond_diagram_container').children().eq(0).empty().append(`
                        <div class="d-flex flex-column">
                            <canvas id="bond_diagram" class="img-fluid" width="` + (packageWidth + 50) + `" height="` + (packageHeight + 50) + `" style="background: transparent;"></canvas>
                        </div>
                    `);

                    const canvas = document.getElementById('bond_diagram');
                    if (canvas.getContext) {
                        const context = canvas.getContext('2d');
                        context.beginPath();
                        context.rect(25, 25, packageWidth, packageHeight);
                        context.fillStyle = 'rgba(255, 255, 255, 1)';
                        context.fill();
                        context.stroke();

                        let x1, y1;
                        let pinCoordinates = [];
                        let pin = 1;

                        /////////////////Left////////////////
                        const leftTotalSpaceNeeded = (numberOfEachSidePins * pinWidth) + (pitch  * (numberOfEachSidePins - 1));
                        const leftBlankSpaceRemain = packageHeight - leftTotalSpaceNeeded;
                        x1 = 25;
                        y1 = 25 + (leftBlankSpaceRemain / 2);
                        for (let i=1; i<=numberOfEachSidePins; i++) {
                            context.beginPath();
                            context.fillStyle = '#cdcdcd';
                            context.fillRect(x1, y1, pinHeight, pinWidth);
                            context.rect(x1, y1, pinHeight, pinWidth);
                            context.stroke();
                            context.font = '12px Arial';
                            context.fillText(pin, x1-20, y1+10);
                            pinCoordinates.push({'pin' : pin, 'x1': x1 + pinHeight, 'y1': y1 + (pinWidth/2)});
                            pin++;
                            y1 = y1 + pinWidth + pitch;
                        }

                        /////////////////Bottom////////////////
                        const bottomTotalSpaceNeeded = (numberOfEachSidePins * pinWidth) + (pitch  * (numberOfEachSidePins - 1));
                        const bottomBlankSpaceRemain = packageWidth - bottomTotalSpaceNeeded;
                        x1 = 25 + (bottomBlankSpaceRemain / 2);
                        y1 = 25 + packageHeight - pinHeight;
                        for (let i=1; i<=numberOfEachSidePins; i++) {
                            context.beginPath();
                            context.fillStyle = '#cdcdcd';
                            context.fillRect(x1, y1, pinWidth, pinHeight);
                            context.rect(x1, y1, pinWidth, pinHeight);
                            context.stroke();
                            context.font = '12px Arial';
                            context.fillText(pin, x1, y1+35);
                            pinCoordinates.push({'pin': pin, 'x1': x1 + (pinWidth / 2), 'y1': y1});
                            pin++;
                            x1 = x1 + pinWidth + pitch;
                        }

                        /////////////////Right////////////////
                        pin = numberOfEachSidePins * 3;
                        const rightTotalSpaceNeeded = (numberOfEachSidePins * pinWidth) + (pitch  * (numberOfEachSidePins - 1));
                        const rightBlankSpaceRemain = packageHeight - rightTotalSpaceNeeded;
                        x1 = 25 + packageWidth - pinHeight;
                        y1 = 25 + (rightBlankSpaceRemain / 2);
                        for (let i=1; i<=numberOfEachSidePins; i++) {
                            context.beginPath();
                            context.fillStyle = '#cdcdcd';
                            context.fillRect(x1, y1, pinHeight, pinWidth);
                            context.rect(x1, y1, pinHeight, pinWidth);
                            context.stroke();
                            context.font = '12px Arial';
                            context.fillText(pin, x1+20, y1+10);
                            pinCoordinates.push({'pin' : pin, 'x1': x1, 'y1': y1 + (pinWidth / 2)});
                            pin--;
                            y1 = y1 + pinWidth + pitch;
                        }

                        ///////////////Top///////////////////////////
                        pin = numberOfEachSidePins * 4;
                        const topTotalSpaceNeeded = (numberOfEachSidePins * pinWidth) + (pitch  * (numberOfEachSidePins - 1));
                        const topBlankSpaceRemain = packageWidth - topTotalSpaceNeeded;
                        x1 = 25 + (topBlankSpaceRemain / 2);
                        y1 = 25;
                        for (let i=1; i<=numberOfEachSidePins; i++) {
                            context.beginPath();
                            context.fillStyle = '#cdcdcd';
                            context.fillRect(x1, y1, pinWidth, pinHeight);
                            context.rect(x1, y1, pinWidth, pinHeight);
                            context.stroke();
                            context.font = '12px Arial';
                            context.fillText(pin, x1, y1-10);
                            pinCoordinates.push({'pin' : pin, 'x1': x1 + (pinWidth / 2), 'y1': y1 + pinHeight});
                            pin--;
                            x1 = x1 + pinWidth + pitch;
                        }


                        let chipX1 = 25 + ((packageWidth - dieWidth) / 2);
                        let chipY1 = 25 + ((packageHeight - dieHeight) / 2);

                        context.beginPath();
                        context.rect(chipX1, chipY1, dieWidth, dieHeight);
                        context.strokeStyle = '#636363';
                        context.stroke();

                        chipY1 = chipY1 + dieHeight;

                        const netLists = result.netlist;
                        let x2, y2;
                        let coordinates;
                        context.strokeStyle = '#ff00ff';
                        let prevPinCord, nextPinCord;
                        $.each(netLists, function (key, value) {
                            if (value[2] !== null && value[3] !== null) {
                                if (value[0] !== null) {
                                    coordinates = pinCoordinates.find(obj => obj.pin === value[0]);
                                    x1 = coordinates.x1;
                                    y1 = coordinates.y1;
                                    x2 = (value[2] * 0.001 * result.mmToPx * result.increasedTimes) + chipX1;
                                    y2 = chipY1 - (value[3] * 0.001 * result.mmToPx * result.increasedTimes);
                                    context.beginPath();
                                    context.moveTo(x1, y1);
                                    context.lineTo(x2, y2);
                                    context.stroke();
                                } else {

                                    prevPinCord = pinCoordinates.find(obj => obj.pin === netLists[key - 1][0]);
                                    nextPinCord = pinCoordinates.find(obj => obj.pin === netLists[key + 1][0]);

                                    if (prevPinCord !== undefined && nextPinCord !== undefined) {
                                        x1 = (prevPinCord.x1 + nextPinCord.x1) / 2;
                                        y1 = (prevPinCord.y1 + nextPinCord.y1) / 2;
                                    } else {
                                        if (prevPinCord !== undefined) {
                                            x1 = prevPinCord.x1;
                                            y1 = prevPinCord.y1;
                                        }
                                        if (nextPinCord !== undefined) {
                                            x1 = nextPinCord.x1;
                                            y1 = nextPinCord.y1;
                                        }
                                    }
                                    x2 = (value[2] * 0.001 * result.mmToPx * result.increasedTimes) + chipX1;
                                    y2 = chipY1 - (value[3] * 0.001 * result.mmToPx * result.increasedTimes);
                                    context.beginPath();
                                    context.moveTo((x1+x2)/2, (y1+y2)/2);
                                    context.lineTo(x2, y2);
                                    context.stroke();
                                }
                            }
                        });
                        $('#bond_diagram').after(`<div class="text-center"><a href="javascript:void(0)" class="text-decoration-none small" id="download_diagram">Download the Diagram</a></div>`)

                    }
                } else {
                    if (result.hasOwnProperty('errors')) {
                        $.each(result.errors, function (key, value) {
                            $('.' + key + '_error_message').removeClass('invisible').empty().text(value);
                        });
                    }
                }
            },
            error: function (xhr) {
                console.log(xhr);
            }
        });
    });

    $(document).on('click', '#download_diagram', function () {
        let downloadLink = document.createElement('a');
        downloadLink.setAttribute('download', 'diagram.png');
        let canvas = document.getElementById('bond_diagram');
        canvas.toBlob(function(blob) {
            let url = URL.createObjectURL(blob);
            downloadLink.setAttribute('href', url);
            downloadLink.click();
        });
    });

    $(document).on('click', '#download_template', function () {
        let downloadLink = document.createElement('a');
        downloadLink.setAttribute('download', 'template.xlsx');
        let url = 'assets/template/template.xlsx';
        downloadLink.setAttribute('href', url);
        downloadLink.click();
    });


    $(document).on('change', '#package_type', function () {

        $.ajax({
            method: 'get',
            url: 'package_type.php',
            data: {
                package_type: $(this).val()
            },
            success: function (result) {
                console.log(result);
                result = JSON.parse(result);
                if (result.success === true) {
                    const packageWidth = result.packageWidth;
                    const packageHeight = result.packageHeight;
                    const numberOfEachSidePins = result.numberOfEachSidePins;
                    const pitch = result.pitch;
                    const pinWidth = result.pinWidth;
                    const pinHeight = result.pinHeight;
                    $('#bond_diagram_container').children().eq(0).empty().append(`
                        <canvas id="bond_diagram" class="img-fluid" width="` + (packageWidth + 50) + `" height="` + (packageHeight + 50) + `" style="background-color:#ffffff;"></canvas>
                    `);

                    const canvas = document.getElementById('bond_diagram');
                    if (canvas.getContext) {
                        const context = canvas.getContext('2d');
                        context.beginPath();
                        context.rect(25, 25, packageWidth, packageHeight);
                        context.stroke();

                        let x1, y1, pin = 1;

                        /////////////////Left////////////////
                        const leftTotalSpaceNeeded = (numberOfEachSidePins * pinWidth) + (pitch  * (numberOfEachSidePins - 1));
                        const leftBlankSpaceRemain = packageHeight - leftTotalSpaceNeeded;
                        x1 = 25;
                        y1 = 25 + (leftBlankSpaceRemain / 2);
                        for (let i=1; i<=numberOfEachSidePins; i++) {
                            context.beginPath();
                            context.fillStyle = '#cdcdcd';
                            context.fillRect(x1, y1, pinHeight, pinWidth);
                            context.rect(x1, y1, pinHeight, pinWidth);
                            context.stroke();
                            context.font = '12px Arial';
                            context.fillText(pin, x1-20, y1+10);
                            y1 = y1 + pinWidth + pitch;
                            pin++;
                        }

                        /////////////////Bottom////////////////
                        const bottomTotalSpaceNeeded = (numberOfEachSidePins * pinWidth) + (pitch  * (numberOfEachSidePins - 1));
                        const bottomBlankSpaceRemain = packageWidth - bottomTotalSpaceNeeded;
                        x1 = 25 + (bottomBlankSpaceRemain / 2);
                        y1 = 25 + packageHeight - pinHeight;
                        for (let i=1; i<=numberOfEachSidePins; i++) {
                            context.beginPath();
                            context.fillStyle = '#cdcdcd';
                            context.fillRect(x1, y1, pinWidth, pinHeight);
                            context.rect(x1, y1, pinWidth, pinHeight);
                            context.stroke();
                            context.font = '12px Arial';
                            context.fillText(pin, x1, y1+35);
                            x1 = x1 + pinWidth + pitch;
                            pin++;
                        }


                        /////////////////Right////////////////
                        pin = numberOfEachSidePins * 3;
                        const rightTotalSpaceNeeded = (numberOfEachSidePins * pinWidth) + (pitch  * (numberOfEachSidePins - 1));
                        const rightBlankSpaceRemain = packageHeight - rightTotalSpaceNeeded;
                        x1 = 25 + packageWidth - pinHeight;
                        y1 = 25 + (rightBlankSpaceRemain / 2);
                        for (let i=1; i<=numberOfEachSidePins; i++) {
                            context.beginPath();
                            context.fillStyle = '#cdcdcd';
                            context.fillRect(x1, y1, pinHeight, pinWidth);
                            context.rect(x1, y1, pinHeight, pinWidth);
                            context.stroke();
                            context.font = '12px Arial';
                            context.fillText(pin, x1+20, y1+10);
                            y1 = y1 + pinWidth + pitch;
                            pin--;
                        }

                        ///////////////Top///////////////////////////
                        pin = numberOfEachSidePins * 4;
                        const topTotalSpaceNeeded = (numberOfEachSidePins * pinWidth) + (pitch  * (numberOfEachSidePins - 1));
                        const topBlankSpaceRemain = packageWidth - topTotalSpaceNeeded;
                        x1 = 25 + (topBlankSpaceRemain / 2);
                        y1 = 25;
                        for (let i=1; i<=numberOfEachSidePins; i++) {
                            context.beginPath();
                            context.fillStyle = '#cdcdcd';
                            context.fillRect(x1, y1, pinWidth, pinHeight);
                            context.rect(x1, y1, pinWidth, pinHeight);
                            context.stroke();
                            context.font = '12px Arial';
                            context.fillText(pin, x1, y1-10);
                            x1 = x1 + pinWidth + pitch;
                            pin--;
                        }


                    }
                } else {
                    $('#bond_diagram_container').children().eq(0).empty().text('Diagram drawing process will be initiated by selecting a package type.');
                }
            },
            error: function (xhr) {
                console.log(xhr);
            }
        });
    });
</script>

</body>
</html>