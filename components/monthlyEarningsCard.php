<?php 
include('./components/api/2024-data.php');

$currentMonth = date('F');

//Get Total Amount
$totalSum = 0;
foreach ($data as $key => $value){
  foreach($value as $dataKey => $dataValue){
    $dateString = $dataValue['Due on'];
    $formatted_month = date('F', strtotime($dateString));
    if($formatted_month == $currentMonth){
        $totalSum += intval($dataValue['Price']);
    }
  }
}
?>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Earnings This <?php echo $currentMonth; ?></div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">$<?php echo $totalSum; ?></div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>