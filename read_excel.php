<?php
require __DIR__.'/vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\IOFactory;
class Read_Excel {
    public function readExcel($targetFile) {
        try {
            $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader('Xlsx');
            $reader->setReadDataOnly(TRUE);
            $spreadsheet = $reader->load($targetFile);
            $worksheet = $spreadsheet->getActiveSheet();
            $netlists = [];
            $i = 0;
            foreach ($worksheet->getRowIterator() as $row) {
                $cellIterator = $row->getCellIterator();
                $cellIterator->setIterateOnlyExistingCells(FALSE);
                $j = 0;
                foreach ($cellIterator as $cell) {
                    $netlists[$i][$j] = $cell->getValue();
                    $j++;
                }
                $i++;
            }
            return $netlists;
        } catch(Exception $e) {
            return $e->getMessage();
        }
    }
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $packageType = $_POST['package_type'];
    $dieWidth = $_POST['die_width'];
    $dieHeight = $_POST['die_height'];
    $validationErrors = [];
    if(empty($packageType)) {
        $validationErrors['package_type'] = 'Package Type field is required.';
    }
    if(empty($dieWidth)) {
        $validationErrors['die_width'] = 'Die Width field is required.';
    }
    if(!is_numeric($dieWidth)) {
        $validationErrors['die_width'] = 'Die Width field must contain numeric value.';
    }
    if(empty($dieHeight)) {
        $validationErrors['die_height'] = 'Die Height field is required.';
    }
    if(!is_numeric($dieHeight)) {
        $validationErrors['die_height'] = 'Die Height field must contain numeric value.';
    }
    if ($_FILES['netlist']['size'] === 0 || $_FILES['netlist']['error'] > 0) {
        $validationErrors['netlist'] = 'Netlist File is required.';
    }
    $allowedExtensions = ['xls', 'xlsx'];
    $fileName = $_FILES['netlist']['name'];
    $fileExtension = pathinfo($fileName, PATHINFO_EXTENSION);
    if (!in_array($fileExtension, $allowedExtensions)) {
        $validationErrors['netlist'] = 'Netlist File Type must be xls or xlsx.';
    }

    if (count($validationErrors) === 0) {
        $targetDir = 'uploads/';
        $targetFile = $targetDir . basename($_FILES['netlist']['name']);
        move_uploaded_file($_FILES['netlist']['tmp_name'], $targetFile);
        $readExcel = new Read_Excel();

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
        $dieWidth = $dieWidth * 0.001 * $mmToPx * $increasedTimes;
        $dieHeight = $dieHeight * 0.001 * $mmToPx * $increasedTimes;

        echo json_encode([
            'success' => true,
            'netlist' => $readExcel->readExcel($targetFile),
            'packageWidth' => $packageWidth,
            'packageHeight' => $packageHeight,
            'numberOfEachSidePins' => $numberOfEachSidePins,
            'pitch' => $pitch,
            'pinWidth' => $pinWidth,
            'pinHeight' => $pinHeight,
            'dieWidth' => $dieWidth,
            'dieHeight' => $dieHeight,
            'mmToPx' => $mmToPx,
            'increasedTimes' => $increasedTimes,


        ]);
    } else {
        echo json_encode(['success' => false, 'errors' => $validationErrors]);
    }

} else {
    echo json_encode(['success' => false, 'message' => 'Invalid Form Submission!']);
}



