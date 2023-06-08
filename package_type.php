<?php


if(!empty($_REQUEST['package_type'])) {
    $packageType = $_REQUEST['package_type'];

    $mmToPx = 3.7795275591;
    $increasedTimes = 10;

    $packageDetails = explode(',', $packageType);
    $packageWidth = explode('x', $packageDetails[0])[0] * $mmToPx * $increasedTimes;
    $packageHeight = explode('x', $packageDetails[0])[1] * $mmToPx * $increasedTimes;
    $numberOfPins = $packageDetails[1];
    $numberOfEachSidePins = $numberOfPins / 4;
    $pitch = ($packageDetails[2] - 0.25) * $mmToPx * $increasedTimes;
    $pinWidth = 0.25 * $mmToPx * $increasedTimes;
    $pinHeight = 0.4 * $mmToPx * $increasedTimes;
    echo json_encode([
        'success' => true,
        'packageWidth' => $packageWidth,
        'packageHeight' => $packageHeight,
        'numberOfEachSidePins' => $numberOfEachSidePins,
        'pitch' => $pitch,
        'pinWidth' => $pinWidth,
        'pinHeight' => $pinHeight,
        'mmToPx' => $mmToPx,
        'increasedTimes' => $increasedTimes,
    ]);
} else {
    echo json_encode(['success' => false, 'message' => 'Empty Package Type!']);
}



